<?php
$host = '192.168.230.191';  // IGR AMB
$port = '5432';
$dbname = 'igramb';
$user = 'edp';
$pass = '3dp1grVIEW';

$conn = @pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass connect_timeout=5");
if (!$conn) {
    die("❌ GAGAL KONEKSI");
}
echo "<h3>✅ Koneksi ke IGR AMB berhasil</h3>";

// Test 1: Total semua baris di tbtr_mstran_d
$res = pg_query($conn, "SELECT COUNT(*) AS c FROM tbtr_mstran_d");
$r = pg_fetch_assoc($res);
echo "Total semua baris tbtr_mstran_d: <b>" . $r['c'] . "</b><br>";

// Test 2: Tahun berapa saja yang ada?
$res = pg_query($conn, "
    SELECT EXTRACT(YEAR FROM mstd_tgldoc) AS thn, COUNT(*) AS c
    FROM tbtr_mstran_d
    GROUP BY EXTRACT(YEAR FROM mstd_tgldoc)
    ORDER BY thn DESC
    LIMIT 10
");
echo "<br><b>Tahun yang ada datanya:</b><br>";
while ($r = pg_fetch_assoc($res)) {
    echo "&nbsp;&nbsp;Tahun " . $r['thn'] . " = " . $r['c'] . " baris<br>";
}

// Test 3: Filter dengan mstd_typetrn = 'B'
$res = pg_query($conn, "
    SELECT EXTRACT(YEAR FROM mstd_tgldoc) AS thn, mstd_typetrn, COUNT(*) AS c
    FROM tbtr_mstran_d
    GROUP BY EXTRACT(YEAR FROM mstd_tgldoc), mstd_typetrn
    ORDER BY thn DESC, mstd_typetrn
    LIMIT 20
");
echo "<br><b>Breakdown per tahun + typetrn:</b><br>";
while ($r = pg_fetch_assoc($res)) {
    echo "&nbsp;&nbsp;Tahun " . $r['thn'] . " - Typetrn '" . $r['mstd_typetrn'] . "' = " . $r['c'] . " baris<br>";
}

// Test 4: Cek mstd_recordid
$res = pg_query($conn, "
    SELECT 
        COUNT(*) FILTER (WHERE mstd_recordid IS NULL) AS null_count,
        COUNT(*) FILTER (WHERE mstd_recordid IS NOT NULL) AS notnull_count
    FROM tbtr_mstran_d
    WHERE EXTRACT(YEAR FROM mstd_tgldoc) = 2026
");
$r = pg_fetch_assoc($res);
echo "<br><b>2026 - recordid NULL: </b>" . $r['null_count'] . " | NOT NULL: " . $r['notnull_count'] . "<br>";

// Test 5: Cek sampel kolom yang dipakai
$res = pg_query($conn, "
    SELECT mstd_tgldoc, mstd_typetrn, mstd_prdcd, mstd_gross, mstd_discrph, 
           mstd_dis4rr, mstd_dis4cr, mstd_dis4jr, mstd_recordid
    FROM tbtr_mstran_d
    WHERE mstd_typetrn = 'B'
    ORDER BY mstd_tgldoc DESC
    LIMIT 5
");
echo "<br><b>Sampel 5 baris mstd_typetrn='B':</b><br>";
echo "<table border='1' cellpadding='4' style='font-size:11px'>";
echo "<tr><th>tgldoc</th><th>typetrn</th><th>prdcd</th><th>gross</th><th>discrph</th><th>dis4rr</th><th>dis4cr</th><th>dis4jr</th><th>recordid</th></tr>";
while ($r = pg_fetch_assoc($res)) {
    echo "<tr>";
    foreach ($r as $v) echo "<td>" . htmlspecialchars($v ?? 'NULL') . "</td>";
    echo "</tr>";
}
echo "</table>";
$res = pg_query($conn, "
    SELECT prd_prdcd, COUNT(*) AS jumlah
    FROM tbmaster_prodmast
    WHERE prd_prdcd IN ('0000230')
    GROUP BY prd_prdcd
    HAVING COUNT(*) > 1
");
echo "<b>PLU duplikat di tbmaster_prodmast:</b><br>";
while ($r = pg_fetch_assoc($res)) {
    echo "PLU " . $r['prd_prdcd'] . " muncul " . $r['jumlah'] . " kali<br>";
}

// Cek juga: apakah ada PLU sama dengan deskripsi beda?
$res = pg_query($conn, "
    SELECT mstd_prdcd, COUNT(DISTINCT prd_deskripsipanjang) AS jml_desk
    FROM tbtr_mstran_d
    LEFT JOIN tbmaster_prodmast ON prd_prdcd = mstd_prdcd
    WHERE EXTRACT(YEAR FROM mstd_tgldoc) = 2026
      AND mstd_typetrn = 'B'
      AND mstd_recordid IS NULL
    GROUP BY mstd_prdcd
    HAVING COUNT(DISTINCT prd_deskripsipanjang) > 1
    LIMIT 10
");
echo "<br><b>PLU dengan deskripsi berbeda:</b><br>";
while ($r = pg_fetch_assoc($res)) {
    echo "PLU " . $r['mstd_prdcd'] . " punya " . $r['jml_desk'] . " deskripsi berbeda<br>";
}

pg_close($conn);