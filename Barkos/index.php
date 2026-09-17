<?php
// =========================================================
// LAPORAN STOCK HARIAN - MULTI SERVER (IGR / SPI / ICM)
// Interface mengikuti gaya index.php
// =========================================================
ini_set('memory_limit', '512M');
set_time_limit(0);

$default_db_user = "edp";
$default_db_pass = "3dp1grVIEW";

// =========================================================
// 1. DAFTAR SERVER
// =========================================================
$servers = [
    // IGR
    ["id" => "IGR_AMB", "type" => "IGR", "name" => "IGR AMB", "host" => "192.168.230.191", "port" => "5432", "dbname" => "igramb", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BDG", "type" => "IGR", "name" => "IGR BDG", "host" => "192.168.222.191", "port" => "5432", "dbname" => "igrbdg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BDL", "type" => "IGR", "name" => "IGR BDL", "host" => "192.168.247.191", "port" => "5432", "dbname" => "igrbdl", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BGR", "type" => "IGR", "name" => "IGR BGR", "host" => "192.168.240.191", "port" => "5432", "dbname" => "igrbgr", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BKS", "type" => "IGR", "name" => "IGR BKS", "host" => "192.168.225.191", "port" => "5432", "dbname" => "igrbks", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BMS", "type" => "IGR", "name" => "IGR BMS", "host" => "192.168.239.191", "port" => "5432", "dbname" => "igrbms", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BTM", "type" => "IGR", "name" => "IGR BTM", "host" => "192.168.255.191", "port" => "5432", "dbname" => "igrbtm", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_CKL", "type" => "IGR", "name" => "IGR CKL", "host" => "192.168.249.191", "port" => "5432", "dbname" => "igrckl", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_CPG", "type" => "IGR", "name" => "IGR CPG", "host" => "192.168.226.191", "port" => "5432", "dbname" => "igrcpg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_CPT", "type" => "IGR", "name" => "IGR CPT", "host" => "192.168.245.191", "port" => "5432", "dbname" => "igrcpt", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_GTO", "type" => "IGR", "name" => "IGR GTO", "host" => "192.168.150.191", "port" => "5432", "dbname" => "igrgto", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_JBI", "type" => "IGR", "name" => "IGR JBI", "host" => "192.168.242.191", "port" => "5432", "dbname" => "igrjbi", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_KMY", "type" => "IGR", "name" => "IGR KMY", "host" => "192.168.234.191", "port" => "5432", "dbname" => "igrkmy", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_KRI", "type" => "IGR", "name" => "IGR KRI", "host" => "192.168.244.191", "port" => "5432", "dbname" => "igrkri", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_KRW", "type" => "IGR", "name" => "IGR KRW", "host" => "192.168.231.191", "port" => "5432", "dbname" => "igrkrw", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_MDN", "type" => "IGR", "name" => "IGR MDN", "host" => "192.168.229.191", "port" => "5432", "dbname" => "igrmdn", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_MDO", "type" => "IGR", "name" => "IGR MDO", "host" => "192.168.241.191", "port" => "5432", "dbname" => "igrmdo", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_MKS", "type" => "IGR", "name" => "IGR MKS", "host" => "192.168.243.191", "port" => "5432", "dbname" => "igrmks", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_MLG", "type" => "IGR", "name" => "IGR MLG", "host" => "192.168.246.191", "port" => "5432", "dbname" => "igrmlg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_PKU", "type" => "IGR", "name" => "IGR PKU", "host" => "192.168.235.191", "port" => "5432", "dbname" => "igrpku", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_PLG", "type" => "IGR", "name" => "IGR PLG", "host" => "192.168.232.191", "port" => "5432", "dbname" => "igrplg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_PTK", "type" => "IGR", "name" => "IGR PTK", "host" => "192.168.238.191", "port" => "5432", "dbname" => "igrptk", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_PWT", "type" => "IGR", "name" => "IGR PWT", "host" => "192.168.83.191",  "port" => "5432", "dbname" => "igrpwt", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_SBI", "type" => "IGR", "name" => "IGR SBI", "host" => "192.168.251.191", "port" => "5432", "dbname" => "igrsbi", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_SBY", "type" => "IGR", "name" => "IGR SBY", "host" => "192.168.227.191", "port" => "5432", "dbname" => "igrsby", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_SLO", "type" => "IGR", "name" => "IGR SLO", "host" => "192.168.248.191", "port" => "5432", "dbname" => "igrslo", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_SMD", "type" => "IGR", "name" => "IGR SMD", "host" => "192.168.236.191", "port" => "5432", "dbname" => "igrsmd", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_SMG", "type" => "IGR", "name" => "IGR SMG", "host" => "192.168.237.191", "port" => "5432", "dbname" => "igrsmg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_TGR", "type" => "IGR", "name" => "IGR TGR", "host" => "192.168.228.191", "port" => "5432", "dbname" => "igrtgr", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_YOG", "type" => "IGR", "name" => "IGR YOG", "host" => "192.168.224.191", "port" => "5432", "dbname" => "igrygy", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_BLI", "type" => "IGR", "name" => "IGR BLI", "host" => "192.168.148.191", "port" => "5432", "dbname" => "igrbli", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "IGR_PDG", "type" => "IGR", "name" => "IGR PDG", "host" => "192.168.142.191", "port" => "5432", "dbname" => "igrpdg", "user" => $default_db_user, "password" => $default_db_pass],

    // SPI (contoh, silakan lengkapi seperti file Anda)
    ["id" => "SPI_BDG", "type" => "SPI", "name" => "SPI BDG", "host" => "172.31.146.154", "port" => "5432", "dbname" => "spibdg1g", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "SPI_SBY", "type" => "SPI", "name" => "SPI SBY", "host" => "172.31.146.147", "port" => "5432", "dbname" => "spisby1d", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "SPI_SMG", "type" => "SPI", "name" => "SPI SMG", "host" => "172.31.146.175", "port" => "5432", "dbname" => "spismg1n", "user" => $default_db_user, "password" => $default_db_pass],
    // ... lengkapi sesuai daftar Anda

    // ICM (contoh)
    ["id" => "ICM_AMB", "type" => "ICM", "name" => "ICM AMB", "host" => "192.168.230.191", "port" => "5432", "dbname" => "icmamb", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_CPG", "type" => "ICM", "name" => "ICM CPG", "host" => "192.168.226.191", "port" => "5432", "dbname" => "icmcpg", "user" => $default_db_user, "password" => $default_db_pass],
    // ... lengkapi sesuai daftar Anda
];

// =========================================================
// 2. MAP KODE CABANG
// =========================================================
$kode_cabang_map = [
    '01'=>'CPG', '03'=>'SBY', '04'=>'BDG', '05'=>'TGR', '06'=>'YOG', '15'=>'MDN', '16'=>'BKS', '17'=>'PLG', '18'=>'KMY', '20'=>'PKU',
    '21'=>'SMD', '22'=>'SMG', '25'=>'BGR', '26'=>'PTK', '27'=>'BMS', '28'=>'MDO', '31'=>'MKS', '32'=>'JBI', '33'=>'KRI', '34'=>'AMB',
    '35'=>'CPT', '36'=>'KRW', '37'=>'MLG', '38'=>'BDL', '39'=>'SLO', '43'=>'SBI', '44'=>'CKL', '46'=>'BTM', '47'=>'PWT', '48'=>'BLI',
    '50'=>'GTO', '51'=>'PDG', '1A'=>'SPI BLJ', '1B'=>'SPI MKS', '1C'=>'SPI KRW', '1D'=>'SPI SBY', '1E'=>'SPI MDN', '1F'=>'SPI MDO',
    '1G'=>'SPI BDG', '1H'=>'SPI MLG', '1I'=>'SPI CPG', '1J'=>'SPI SLO', '1K'=>'SPI BKS', '1L'=>'SPI SMD', '1M'=>'SPI BMS', '1N'=>'SPI SMG',
    '1O'=>'SPI YOG', '1P'=>'SPI TGR2', '1Q'=>'SPI BGR', '1R'=>'SPI BDL', '1S'=>'SPI CKL', '1T'=>'SPI SBI', '1U'=>'SPI BDG2', '1V'=>'SPI BDG3',
    '1W'=>'SPI BDG4', '1Y'=>'SPI BDG5', '1Z'=>'SPI KMY', '2A'=>'SPI CPT', '2B'=>'SPI CKL2', '2C'=>'SPI MLG2', '2D'=>'SPI SBY2', '2E'=>'SPI SBY3',
    '2F'=>'SPI SMG3', '2G'=>'SPI SLO2', '2H'=>'SPI BDG6', '2I'=>'SPI SMG4', '2J'=>'SPI SMG5', '2K'=>'SPI BDG7', '2L'=>'SPI CKL3', '2M'=>'SPI MLG3',
    '2N'=>'SPI SLO3', '2O'=>'SPI SBY4', '2P'=>'SPI BDG8', '2Q'=>'SPI MLG4', '2R'=>'SPI CKL4', '2S'=>'SPI MDN2', '2T'=>'SPI BDG9', '2U'=>'SPI BDL2',
    '2V'=>'SPI PKU', '2W'=>'SPI SBI2', '2X'=>'SPI SBY5', '2Y'=>'SPI SMG6', '2Z'=>'SPI YOG2', '3A'=>'SPI TGR3', '3B'=>'SPI BGR2', '3C'=>'SPI MLG5',
    '3D'=>'SPI PWT', '3E'=>'SPI BDG10', '3F'=>'SPI SLO4', '3G'=>'SPI BGR3', '3H'=>'SPI PLG', '3I'=>'SPI SBI3', '3J'=>'SPI SMD2', '3K'=>'SPI SMG7',
    '3L'=>'SPI BKS2', '3M'=>'SPI CKL5', '3N'=>'SPI SBY6', '3O'=>'SPI BKS3', '3Q'=>'SPI KRI', '3R'=>'SPI JBI', '3S'=>'SPI TGR4', '3T'=>'SPI AMB', '3U'=>'SPI BGR4',
    '3W'=>'SPI PLG2', '3X'=>'SPI BKS4', '3Y'=>'SPI MLG6', '4A'=>'SPI SBY8', '4B'=>'SPI MLG7', '4C'=>'SPI BMS2', '4D'=>'SPI KRI2', '4E'=>'SPI BMS3',
    '4G'=>'SPI BLI2', '4H'=>'SPI SBY9', '4I'=>'SPI MLG8', '4J'=>'SPI KRW2', '4K'=>'SPI MDO', '4N'=>'SPI KRW3', '4L'=>'SPI CPG2', '4M'=>'SPI PTK', '4P'=>'SPI KMY2',
    '7A'=>'ICM CKL', '7B'=>'ICM SBI', '7C'=>'ICM BTM', '7D'=>'ICM TGR', '7E'=>'ICM BDL', '7F'=>'ICM MLG', '7G'=>'ICM YOG', '7H'=>'ICM BGR', '7I'=>'ICM SMD', '7J'=>'ICM BMS',
    '7K'=>'ICM PLG', '7L'=>'ICM KRW', '7M'=>'ICM PKU', '7N'=>'ICM KRI', '7O'=>'ICM KMY', '7P'=>'ICM AMB', '7Q'=>'ICM BDG', '7R'=>'ICM SMG',
    '7S'=>'ICM PWT', '7T'=>'ICM CPT', '7U'=>'ICM PTK', '7V'=>'ICM SLO', '7W'=>'ICM MDO', '7X'=>'ICM GTO', '7Y'=>'ICM CPG', '7Z'=>'ICM SBY',
    '8B'=>'ICM BLI', 'AA'=>'SPI-X BKS', 'AB'=>'SPI-X BGR', 'AC'=>'SPI-X SMG', '3P'=>'SPI CPT2'
];

// =========================================================
// 3. FILTER INPUT
// =========================================================
$is_searched = isset($_GET['search']) && $_GET['search'] === '1';
$sel_type = isset($_GET['server_type']) ? strtoupper(trim($_GET['server_type'])) : 'ALL';
if (!in_array($sel_type, ['ALL','IGR','SPI','ICM'], true)) $sel_type = 'ALL';

$sel_cabang = isset($_GET['cabang']) ? $_GET['cabang'] : ['ALL'];
if (!is_array($sel_cabang)) $sel_cabang = [$sel_cabang];
$sel_cabang = array_values(array_filter(array_map('trim', $sel_cabang), 'strlen'));
if (!$sel_cabang) $sel_cabang = ['ALL'];

$sel_plu  = isset($_GET['plu']) ? trim($_GET['plu']) : '';
$periode  = isset($_GET['periode']) ? trim($_GET['periode']) : date('Ym');
if (!preg_match('/^\d{6}$/', $periode)) $periode = date('Ym');

$per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 50;
if (!in_array($per_page, [25,50,100,250], true)) $per_page = 50;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;

// =========================================================
// 4. TARGET SERVER
// =========================================================
$target_servers = [];
foreach ($servers as $server) {
    if ($sel_type !== 'ALL' && strtoupper($server['type']) !== $sel_type) continue;
    if (!in_array('ALL', $sel_cabang, true) && !in_array($server['id'], $sel_cabang, true)) continue;
    $target_servers[] = $server;
}

// Filter PLU
$plu_array = [];
if ($sel_plu !== '') {
    foreach (preg_split('/[,\s;]+/', $sel_plu) as $plu) {
        $plu = trim($plu);
        if ($plu === '') continue;
        if (preg_match('/^[A-Za-z0-9]+$/', $plu)) $plu_array[] = $plu;
    }
    $plu_array = array_values(array_unique($plu_array));
}
function sql_quote($value) { return "'" . str_replace("'", "''", $value) . "'"; }
$where_plu = '1=1';
if (!empty($plu_array)) {
    $where_plu = 'prd_prdcd::text IN (' . implode(',', array_map('sql_quote', $plu_array)) . ')';
}

// =========================================================
// 5. BUILDER QUERY DETAIL STOCK HARIAN
// =========================================================
function build_stock_sql($where_plu, $periode) {
    $case_cabang = "CASE prd_kodeigr
        WHEN '01' THEN 'CPG' WHEN '03' THEN 'SBY' WHEN '04' THEN 'BDG' WHEN '05' THEN 'TGR'
        WHEN '06' THEN 'YOG' WHEN '15' THEN 'MDN' WHEN '16' THEN 'BKS' WHEN '17' THEN 'PLG'
        WHEN '18' THEN 'KMY' WHEN '20' THEN 'PKU' WHEN '21' THEN 'SMD' WHEN '22' THEN 'SMG'
        WHEN '25' THEN 'BGR' WHEN '26' THEN 'PTK' WHEN '27' THEN 'BMS' WHEN '28' THEN 'MDO'
        WHEN '31' THEN 'MKS' WHEN '32' THEN 'JBI' WHEN '33' THEN 'KRI' WHEN '34' THEN 'AMB'
        WHEN '35' THEN 'CPT' WHEN '36' THEN 'KRW' WHEN '37' THEN 'MLG' WHEN '38' THEN 'BDL'
        WHEN '39' THEN 'SLO' WHEN '43' THEN 'SBI' WHEN '44' THEN 'CKL' WHEN '46' THEN 'BTM'
        WHEN '47' THEN 'PWT' WHEN '50' THEN 'GTO' WHEN '48' THEN 'BLI' WHEN '1A' THEN 'SPI BLJ'
        WHEN '1B' THEN 'SPI MKS' WHEN '1C' THEN 'SPI KRW' WHEN '1D' THEN 'SPI SBY' WHEN '1E' THEN 'SPI MDN'
        WHEN '1F' THEN 'SPI MDO' WHEN '1G' THEN 'SPI BDG' WHEN '1H' THEN 'SPI MLG' WHEN '1I' THEN 'SPI CPG'
        WHEN '1K' THEN 'SPI BKS' WHEN '1L' THEN 'SPI SMD' WHEN '1M' THEN 'SPI BMS' WHEN '1N' THEN 'SPI SMG'
        WHEN '1Q' THEN 'SPI BGR' WHEN '1J' THEN 'SPI SLO' WHEN '1P' THEN 'SPI TGR2' WHEN '1S' THEN 'SPI CKL'
        WHEN '1R' THEN 'SPI BDL' WHEN '1T' THEN 'SPI SBI' WHEN '1O' THEN 'SPI YOG' WHEN '1U' THEN 'SPI BDG2'
        WHEN '1V' THEN 'SPI BDG3' WHEN '1W' THEN 'SPI BDG4' WHEN '1Y' THEN 'SPI BDG5' WHEN '2B' THEN 'SPI CKL2'
        WHEN '2G' THEN 'SPI SLO2' WHEN '2H' THEN 'SPI BDG6' WHEN '2A' THEN 'SPI CPT' WHEN '2D' THEN 'SPI SBY2'
        WHEN '2E' THEN 'SPI SBY3' WHEN '2F' THEN 'SPI SMG3' WHEN '1Z' THEN 'SPI KMY' WHEN '2L' THEN 'SPI CKL3'
        WHEN '2N' THEN 'SPI SLO3' WHEN '2I' THEN 'SPI SMG4' WHEN '2J' THEN 'SPI SMG5' WHEN '2O' THEN 'SPI SBY4'
        WHEN '2K' THEN 'SPI BDG7' WHEN '2C' THEN 'SPI MLG2' WHEN 'AA' THEN 'SPI-X BKS' WHEN 'AB' THEN 'SPI-X BGR'
        WHEN 'AC' THEN 'SPI-X SMG' WHEN '2P' THEN 'SPI BDG8' WHEN '2Q' THEN 'SPI MLG4' WHEN '2R' THEN 'SPI CKL4'
        WHEN '7A' THEN 'ICM CKL' WHEN '7B' THEN 'ICM SBI' WHEN '7D' THEN 'ICM TGR' WHEN '7G' THEN 'ICM YOG'
        WHEN '7K' THEN 'ICM PLG' WHEN '7H' THEN 'ICM BGR' WHEN '7F' THEN 'ICM MLG' WHEN '7P' THEN 'ICM AMB'
        WHEN '7L' THEN 'ICM KRW' WHEN '7E' THEN 'ICM BDL' WHEN '7S' THEN 'ICM PWT' WHEN '7R' THEN 'ICM SMG'
        WHEN '7N' THEN 'ICM KRI' WHEN '7M' THEN 'ICM PKU' WHEN '7C' THEN 'ICM BTM' WHEN '7I' THEN 'ICM SMD'
        WHEN '7O' THEN 'ICM KMY' WHEN '7J' THEN 'ICM BMS' WHEN '7U' THEN 'ICM PTK' WHEN '7V' THEN 'ICM SLO'
        WHEN '7X' THEN 'ICM GTO' WHEN '7Q' THEN 'ICM BDG' WHEN '7W' THEN 'ICM MDO' WHEN '8B' THEN 'ICM BLI'
        WHEN '7Z' THEN 'ICM SBY' WHEN '7T' THEN 'ICM CPT' WHEN '2M' THEN 'SPI MLG3' WHEN '2V' THEN 'SPI PKU'
        WHEN '2X' THEN 'SPI SBY5' WHEN '2U' THEN 'SPI BDL2' WHEN '2T' THEN 'SPI BDG9' WHEN '2Y' THEN 'SPI SMG6'
        WHEN '2Z' THEN 'SPI YOG2' WHEN '2W' THEN 'SPI SBI2' WHEN '2S' THEN 'SPI MDN2' WHEN '3A' THEN 'SPI TGR3'
        WHEN '3B' THEN 'SPI BGR2' WHEN '3C' THEN 'SPI MLG5' WHEN '3D' THEN 'SPI PWT' WHEN '3E' THEN 'SPI BDG10'
        WHEN '3F' THEN 'SPI SLO4' WHEN '3O' THEN 'SPI BKS3' WHEN '7Y' THEN 'ICM CPG' WHEN '51' THEN 'PDG'
        WHEN '3L' THEN 'SPI BKS2' WHEN '4C' THEN 'SPI BMS2' WHEN '3U' THEN 'SPI BGR4' WHEN '3M' THEN 'SPI CKL5'
        WHEN '3K' THEN 'SPI SMG7' WHEN '3J' THEN 'SPI SMD2' WHEN '3I' THEN 'SPI SBI3' WHEN '3N' THEN 'SPI SBY6'
        WHEN '4B' THEN 'SPI MLG7' WHEN '3X' THEN 'SPI BKS4' WHEN '4G' THEN 'SPI BLI2' WHEN '4D' THEN 'SPI KRI2'
        WHEN '4E' THEN 'SPI BMS3' WHEN '4L' THEN 'SPI CPG2' WHEN '3R' THEN 'SPI JBI' WHEN '3Y' THEN 'SPI MLG6'
        WHEN '4M' THEN 'SPI PTK' WHEN '4A' THEN 'SPI SBY8' WHEN '3S' THEN 'SPI TGR4' WHEN '4I' THEN 'SPI MLG8'
        WHEN '4H' THEN 'SPI SBY9' WHEN '3T' THEN 'SPI AMB' WHEN '3G' THEN 'SPI BGR3' WHEN '3H' THEN 'SPI PLG'
        WHEN '3W' THEN 'SPI PLG2' WHEN '4P' THEN 'SPI KMY2' WHEN '3Q' THEN 'SPI KRI' WHEN '4J' THEN 'SPI KRW2'
        WHEN '4N' THEN 'SPI KRW3' WHEN '4K' THEN 'SPI MDO'
        ELSE COALESCE(prd_kodeigr,'UNKNOWN') END";

    $tgl_cols = [];
    for ($d = 1; $d <= 31; $d++) {
        $dd = str_pad($d, 2, '0', STR_PAD_LEFT);
        $tgl_cols[] = "SUM(CASE WHEN to_char(sth_periode,'dd')='$dd' THEN sth_saldoakhir ELSE 0 END) AS tgl$dd";
    }
    $tgl_sql = implode(",\n        ", $tgl_cols);

    $sql = "
    SELECT
        {$case_cabang} AS cab,
        prd_prdcd AS plu,
        prd_deskripsipanjang AS desk,
        div, dep, kat, unit, tag,
        acost,
        tgl01,tgl02,tgl03,tgl04,tgl05,tgl06,tgl07,tgl08,tgl09,tgl10,
        tgl11,tgl12,tgl13,tgl14,tgl15,tgl16,tgl17,tgl18,tgl19,tgl20,
        tgl21,tgl22,tgl23,tgl24,tgl25,tgl26,tgl27,tgl28,tgl29,tgl30,tgl31,
        spd
    FROM (
        SELECT
            prd_kodeigr, prd_prdcd, prd_deskripsipanjang,
            prd_kodedivisi AS div, prd_kodedepartement AS dep,
            prd_kodekategoribarang AS kat,
            prd_frac || '/' || prd_unit AS unit,
            prd_kodetag AS tag,
            st_avgcost AS acost
        FROM tbmaster_prodmast
        JOIN tbmaster_stock ON prd_prdcd = st_prdcd
        WHERE st_lokasi = '01' AND {$where_plu}
    ) AS base
    LEFT JOIN (
        SELECT sth_prdcd,
            {$tgl_sql}
        FROM tbtr_stockharian
        WHERE to_char(sth_periode,'yyyymm')='{$periode}'
          AND sth_lokasi = '01'
        GROUP BY sth_prdcd
    ) AS stock_harian ON base.prd_prdcd = stock_harian.sth_prdcd
    LEFT JOIN (
        SELECT plu_average, ROUND(((satu+dua+tiga)/92.0),2) AS spd
        FROM (
            SELECT rsl_prdcd AS plu_average,
                   SUM(rsl_qty_06) AS satu,
                   SUM(rsl_qty_07) AS dua,
                   SUM(rsl_qty_08) AS tiga
            FROM tbtr_rekapsalesbulanan
            GROUP BY rsl_prdcd
        ) sd
    ) AS sales_speed ON base.prd_prdcd = sales_speed.plu_average
    ORDER BY cab, plu
    ";
    return $sql;
}

// =========================================================
// 6. EXPORT XLS
// =========================================================
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'export_excel' && $is_searched) {
    set_time_limit(0);
    $filename = 'StockHarian_' . $periode . '_' . date('Ymd_His') . '.xls';
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Pragma: no-cache');
    header('Expires: 0');

    $headers = array_merge(
        ['cab','plu','desk','div','dep','kat','unit','tag','acost'],
        array_map(function($d){ return 'tgl'.str_pad($d,2,'0',STR_PAD_LEFT); }, range(1,31)),
        ['spd']
    );

    echo "<html><head><meta charset='utf-8'></head><body><table border='1' cellpadding='4' cellspacing='0'>";
    echo "<tr style='font-weight:bold;background:#1E293B;color:white'>";
    foreach ($headers as $h) echo '<th>'.htmlspecialchars($h,ENT_QUOTES,'UTF-8').'</th>';
    echo '</tr>';

    $sql = build_stock_sql($where_plu, $periode);

    foreach ($target_servers as $server) {
        $conn_string = sprintf('host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4',
            $server['host'],$server['port'],$server['dbname'],$server['user'],$server['password']);
        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            echo '<tr><td colspan="'.count($headers).'">ERROR KONEKSI: '.htmlspecialchars($server['name'],ENT_QUOTES,'UTF-8').'</td></tr>';
            continue;
        }
        $result = pg_query($dbconn, $sql);
        if (!$result) {
            echo '<tr><td colspan="'.count($headers).'">ERROR SQL '.htmlspecialchars($server['name'],ENT_QUOTES,'UTF-8').': '.htmlspecialchars(pg_last_error($dbconn),ENT_QUOTES,'UTF-8').'</td></tr>';
            pg_close($dbconn);
            continue;
        }
        while ($row = pg_fetch_assoc($result)) {
            echo '<tr>';
            foreach ($headers as $h) {
                $v = $row[$h] ?? '';
                $safe = htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
                $text_fields = ['plu','div','dep','kat','cab','tag','unit'];
                if (in_array($h, $text_fields, true)) {
                    echo '<td style="mso-number-format:\'@\';">'.$safe.'</td>';
                } elseif (is_numeric($v)) {
                    echo '<td style="text-align:right">'.number_format((float)$v,2,'.','').'</td>';
                } else {
                    echo '<td>'.$safe.'</td>';
                }
            }
            echo '</tr>';
        }
        pg_free_result($result);
        pg_close($dbconn);
    }
    echo '</table></body></html>';
    exit;
}

// =========================================================
// 7. AMBIL DATA - PAGINATION DI SISI SQL (HEMAT MEMORY)
// =========================================================
$data_rows = [];
$errors = [];
$grand_item = 0;
$grand_qty = 0.0;
$total_all_records = 0;

if ($is_searched) {
    // -------------------------
    // 7a. Hitung TOTAL baris per server (COUNT saja, ringan)
    // -------------------------
    $per_server_total = [];
    foreach ($target_servers as $idx => $server) {
        $conn_string = sprintf(
            'host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4',
            $server['host'], $server['port'], $server['dbname'],
            $server['user'], $server['password']
        );
        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            $errors[] = ['server'=>$server['name'],'type'=>'KONEKSI','message'=>'Gagal koneksi.'];
            $per_server_total[$idx] = 0;
            continue;
        }

        $count_sql = "
            SELECT COUNT(*) AS c
            FROM tbmaster_prodmast
            JOIN tbmaster_stock ON prd_prdcd = st_prdcd
            WHERE st_lokasi = '01' AND {$where_plu}
        ";
        $res = @pg_query($dbconn, $count_sql);
        if ($res) {
            $r = pg_fetch_assoc($res);
            $per_server_total[$idx] = (int)($r['c'] ?? 0);
            pg_free_result($res);
        } else {
            $per_server_total[$idx] = 0;
        }
        pg_close($dbconn);
    }

    $total_all_records = array_sum($per_server_total);
    $total_pages = $total_all_records > 0 ? (int)ceil($total_all_records / $per_page) : 1;
    if ($page > $total_pages) $page = $total_pages;
    $offset = ($page - 1) * $per_page;

    // -------------------------
    // 7b. Alokasi LIMIT per server (round-robin sederhana)
    //     Server yang lebih awal diambil dulu sampai kuota penuh.
    // -------------------------
    $remaining = $per_page;
    $server_limits = [];
    foreach ($per_server_total as $idx => $tot) {
        if ($remaining <= 0) { $server_limits[$idx] = 0; continue; }
        $take = min($tot, $remaining);
        $server_limits[$idx] = $take;
        $remaining -= $take;
    }

    // -------------------------
    // 7c. Ambil hanya sebagian data (LIMIT/OFFSET)
    //     Catatan: OFFSET di sini 0 karena kita slicing per server sendiri
    // -------------------------
    $sql_base = build_stock_sql($where_plu, $periode);
    // Hapus ORDER BY dari SQL dasar agar bisa kita tambah LIMIT setelahnya
    $sql_base = preg_replace('/\s+ORDER BY.*$/is', '', $sql_base);

    foreach ($target_servers as $idx => $server) {
        $limit = $server_limits[$idx] ?? 0;
        if ($limit <= 0) continue;

        $conn_string = sprintf(
            'host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4',
            $server['host'], $server['port'], $server['dbname'],
            $server['user'], $server['password']
        );
        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            $errors[] = ['server'=>$server['name'],'type'=>'KONEKSI','message'=>'Gagal koneksi.'];
            continue;
        }

        $sql = $sql_base . " ORDER BY cab, plu LIMIT {$limit} OFFSET 0";
        $result = @pg_query($dbconn, $sql);
        if (!$result) {
            $errors[] = [
                'server'=>$server['name'],'type'=>'SQL',
                'message'=>pg_last_error($dbconn),'sql'=>$sql
            ];
            pg_close($dbconn);
            continue;
        }

        while ($row = pg_fetch_assoc($result)) {
            $row['_server'] = $server['name'];
            $row['_type']   = $server['type'];
            $data_rows[] = $row;
            $grand_item++;
            $grand_qty += (float)($row['acost'] ?? 0);
        }
        pg_free_result($result);
        pg_close($dbconn);
    }

    $display_rows = $data_rows;
} else {
    $total_pages = 1;
    $display_rows = [];
}

usort($data_rows, function($a, $b) {
    return strnatcasecmp(($a['cab'] ?? '').($a['plu'] ?? ''), ($b['cab'] ?? '').($b['plu'] ?? ''));
});

$total_all_records = count($data_rows);
$total_pages = $total_all_records > 0 ? (int)ceil($total_all_records / $per_page) : 1;
if ($page > $total_pages) $page = $total_pages;
$offset = ($page - 1) * $per_page;
$display_rows = array_slice($data_rows, $offset, $per_page);

$query_params = $_GET;
unset($query_params['action']);
$query_string_base = http_build_query($query_params);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laporan Barkos - Indogrosir</title>
<style>
body{font-family:'Segoe UI',Tahoma,Arial,sans-serif;background:#f4f6f9;margin:20px;color:#333}
.header-container{background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,.1);margin-bottom:20px}
.top-row{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:15px}
h2{margin:0;color:#1E293B;font-size:20px}
.brand{display:flex;align-items:center;gap:15px}
.brand img{height:55px;background:#fff;padding:4px 10px;border-radius:6px;border:1px solid #E2E8F0}
.filter-form{display:flex;align-items:flex-start;gap:12px;margin-top:15px;background:#F8FAFC;padding:12px;border-radius:6px;border:1px solid #E2E8F0;flex-wrap:wrap}
.form-group{display:flex;flex-direction:column;gap:4px}
label{font-weight:bold;font-size:12px;color:#475569}
select,input[type=text]{padding:8px 12px;font-size:13px;border-radius:6px;border:1px solid #CBD5E1;background:#fff;font-weight:500}
select[multiple]{height:120px;min-width:230px;padding:4px}
.btn-group{display:flex;gap:10px;flex-wrap:wrap}
.btn{padding:9px 16px;font-weight:bold;border-radius:6px;text-decoration:none;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:6px;font-size:13px}
.btn-submit{background:#0F172A;color:#fff;margin-top:18px}
.btn-excel{background:#107C41;color:#fff}
.table-responsive{background:#fff;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,.1);overflow-x:auto;padding:0}
table{width:100%;border-collapse:collapse;font-size:12px;white-space:nowrap}
th{background:#1E293B;color:#fff;padding:9px 8px;text-align:center;position:sticky;top:0;z-index:2}
td{padding:7px 8px;border-bottom:1px solid #E2E8F0;text-align:right}
td.text-left{text-align:left}
td.text-center{text-align:center}
tr:nth-child(even){background:#F8FAFC}
tr:hover{background:#F1F5F9}
.summary{display:flex;gap:10px;flex-wrap:wrap;margin:15px 0}
.card{background:#fff;padding:12px 16px;border-radius:7px;box-shadow:0 1px 3px rgba(0,0,0,.08);min-width:150px}
.card b{display:block;font-size:18px;color:#0F172A}
.card span{font-size:11px;color:#64748B}
.alert{background:#FEF2F2;border:1px solid #FECACA;color:#991B1B;padding:12px;border-radius:7px;margin:15px 0}
.error-item{background:#fff;border:1px solid #FCA5A5;padding:10px;margin-top:8px;border-radius:5px}
.sql-box{margin-top:6px;background:#111827;color:#E5E7EB;padding:8px;border-radius:4px;overflow:auto;font:11px Consolas,monospace;white-space:pre-wrap}
.pagination-container{display:flex;justify-content:space-between;align-items:center;gap:15px;flex-wrap:wrap;margin-top:15px;background:#fff;padding:12px;border-radius:6px;box-shadow:0 1px 3px rgba(0,0,0,.1)}
.pagination{display:flex;gap:5px;list-style:none;padding:0;margin:0;flex-wrap:wrap}
.pagination a,.pagination span{padding:6px 12px;border:1px solid #CBD5E1;border-radius:4px;text-decoration:none;color:#0F172A;font-size:12px;font-weight:600}
.pagination .active{background:#0F172A;color:#fff;border-color:#0F172A}
.pagination .disabled{color:#94A3B8;pointer-events:none}
.note{font-size:12px;color:#475569;margin-top:10px}
.help-text{font-size:11px;color:#64748B;margin-top:2px}
.btn{padding:9px 16px;font-weight:bold;border-radius:6px;text-decoration:none;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:6px;font-size:13px;transition:all .2s}
.btn-exit{background:#DC2626;color:#fff}
.btn-exit:hover{background:#B91C1C}
</style>
</head>
<body>
<div class="header-container">
    <div class="top-row">
        <div class="brand">
            <img src="logo.png" alt="INDogrosir Logo">
            <div>
                <h2>Laporan Barkos</h2>
                <small style="color:#64748B">Query detail stock harian per tanggal (tgl01 – tgl31) + SPD.</small>
            </div>
        </div>
        <?php if ($is_searched): ?>
        <div class="btn-group">
			<a href="http://172.20.133.59/" class="btn btn-exit" onclick="return confirm('Yakin ingin keluar dari menu Barkos?')">🚪 Keluar</a>
		<?p	hp if ($is_searched): ?>
            <a href="?<?= htmlspecialchars($query_string_base) ?>&action=export_excel" class="btn btn-excel">📥 Export XLS</a>
        </div>
        <?php endif; ?>
    </div>

    <form method="GET" action="" class="filter-form">
        <input type="hidden" name="search" value="1">
        <div class="form-group">
            <label for="server_type">Tipe Server:</label>
            <select name="server_type" id="server_type">
                <option value="ALL" <?= $sel_type==='ALL'?'selected':'' ?>>-- SEMUA TIPE --</option>
                <option value="IGR" <?= $sel_type==='IGR'?'selected':'' ?>>IGR ONLY</option>
                <option value="SPI" <?= $sel_type==='SPI'?'selected':'' ?>>SPI ONLY</option>
                <option value="ICM" <?= $sel_type==='ICM'?'selected':'' ?>>ICM ONLY</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cabang">Pilih Cabang (Multi):</label>
            <select name="cabang[]" id="cabang" multiple>
                <option value="ALL" <?= in_array('ALL',$sel_cabang,true)?'selected':'' ?>>-- SEMUA CABANG --</option>
                <?php foreach ($servers as $srv): ?>
                    <?php if ($sel_type !== 'ALL' && $srv['type'] !== $sel_type) continue; ?>
                    <option value="<?= htmlspecialchars($srv['id']) ?>" <?= in_array($srv['id'],$sel_cabang,true)?'selected':'' ?>>
                        <?= htmlspecialchars($srv['name']) ?> (<?= htmlspecialchars($srv['host']) ?>)
                    </option>
                <?php endforeach; ?>
            </select>
            <span class="help-text">Tahan <b>Ctrl</b>/<b>Cmd</b> untuk memilih beberapa.</span>
        </div>
        <div class="form-group">
            <label for="plu">Filter PLU:</label>
            <input type="text" name="plu" id="plu" value="<?= htmlspecialchars($sel_plu) ?>" placeholder="Contoh: 0431090, 0431091">
            <span class="help-text">Bisa dipisah koma / spasi / titik koma.</span>
        </div>
        <div class="form-group">
            <label for="periode">Periode (YYYYMM):</label>
            <input type="text" name="periode" id="periode" value="<?= htmlspecialchars($periode) ?>" placeholder="202608" maxlength="6">
        </div>
        <div class="form-group">
            <label for="per_page">Per Halaman:</label>
            <select name="per_page" id="per_page">
                <?php foreach ([25,50,100,250] as $n): ?>
                    <option value="<?= $n ?>" <?= $per_page===$n?'selected':'' ?>><?= $n ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-submit">🔍 Tampilkan Data</button>
    </form>
    <div class="note">
        PLU kosong = semua PLU. Periode default = bulan berjalan.
    </div>
</div>

<?php if ($is_searched): ?>
<div class="summary">
    <div class="card"><span>TOTAL BARIS</span><b><?= number_format($grand_item,0,',','.') ?></b></div>
    <div class="card"><span>TOTAL AVG COST</span><b><?= number_format($grand_qty,2,',','.') ?></b></div>
    <div class="card"><span>SERVER DIPILIH</span><b><?= number_format(count($target_servers),0,',','.') ?></b></div>
    <div class="card"><span>SERVER ERROR</span><b><?= number_format(count($errors),0,',','.') ?></b></div>
</div>

<?php if (!empty($errors)): ?>
<div class="alert">
    <b>⚠ Ada <?= count($errors) ?> server yang gagal diproses.</b>
    <?php foreach ($errors as $err): ?>
    <div class="error-item">
        <div><b>❌ <?= htmlspecialchars($err['server']) ?> — <?= htmlspecialchars($err['type']) ?></b></div>
        <div><?= nl2br(htmlspecialchars($err['message'])) ?></div>
        <?php if (isset($err['sql'])): ?>
            <details><summary style="cursor:pointer;margin-top:5px">Lihat SQL</summary>
                <div class="sql-box"><?= htmlspecialchars($err['sql']) ?></div>
            </details>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<div class="pagination-container">
    <div>Menampilkan <b><?= count($display_rows) ?></b> dari <b><?= number_format($total_all_records,0,',','.') ?></b> baris.</div>
    <?php if ($total_pages > 1): ?>
    <ul class="pagination">
        <?php
        $query_nav = $_GET;
        if ($page > 1) { $query_nav['page']=$page-1; echo '<li><a href="?' . htmlspecialchars(http_build_query($query_nav)) . '">&laquo; Prev</a></li>'; }
        else echo '<li><span class="disabled">&laquo; Prev</span></li>';
        $start_p=max(1,$page-2); $end_p=min($total_pages,$page+2);
        for($p=$start_p;$p<=$end_p;$p++) {
            $query_nav['page']=$p;
            if($p===$page) echo '<li><span class="active">'.$p.'</span></li>';
            else echo '<li><a href="?'.htmlspecialchars(http_build_query($query_nav)).'">'.$p.'</a></li>';
        }
        if($page<$total_pages) { $query_nav['page']=$page+1; echo '<li><a href="?'.htmlspecialchars(http_build_query($query_nav)).'">Next &raquo;</a></li>'; }
        else echo '<li><span class="disabled">Next &raquo;</span></li>';
        ?>
    </ul>
    <?php endif; ?>
</div>

<div class="table-responsive" style="margin-top:15px">
<table>
<thead>
<tr>
    <th>CAB</th><th>PLU</th><th>DESK</th>
    <th>DIV</th><th>DEP</th><th>KAT</th>
    <th>UNIT</th><th>TAG</th><th>ACOST</th>
    <?php for ($i=1;$i<=31;$i++): ?>
        <th>TGL<?= str_pad($i,2,'0',STR_PAD_LEFT) ?></th>
    <?php endfor; ?>
    <th>SPD</th>
</tr>
</thead>
<tbody>
<?php if (!empty($display_rows)): ?>
    <?php foreach ($display_rows as $r): ?>
    <tr>
        <td class="text-center"><?= htmlspecialchars($r['cab'] ?? '') ?></td>
        <td class="text-left"><?= htmlspecialchars($r['plu'] ?? '') ?></td>
        <td class="text-left"><?= htmlspecialchars($r['desk'] ?? '') ?></td>
        <td class="text-center"><?= htmlspecialchars($r['div'] ?? '') ?></td>
        <td class="text-center"><?= htmlspecialchars($r['dep'] ?? '') ?></td>
        <td class="text-center"><?= htmlspecialchars($r['kat'] ?? '') ?></td>
        <td class="text-center"><?= htmlspecialchars($r['unit'] ?? '') ?></td>
        <td class="text-center"><?= htmlspecialchars($r['tag'] ?? '') ?></td>
        <td><?= number_format((float)($r['acost'] ?? 0), 2, ',', '.') ?></td>
        <?php for ($i=1;$i<=31;$i++):
            $col = 'tgl' . str_pad($i,2,'0',STR_PAD_LEFT);
            $val = $r[$col] ?? 0;
        ?>
            <td><?= number_format((float)$val, 0, ',', '.') ?></td>
        <?php endfor; ?>
        <td><?= number_format((float)($r['spd'] ?? 0), 2, ',', '.') ?></td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="41" style="text-align:center;padding:25px;color:#64748B">Tidak ada data untuk filter yang dipilih.</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
<?php else: ?>
<div class="table-responsive" style="padding:30px;text-align:center;color:#64748B">
    📌 Atur filter lalu klik <b>Tampilkan Data</b>.
</div>
<?php endif; ?>

<div style="text-align:center;padding:12px;font-size:12px;color:#777;margin-top:15px">
    &copy; <?= date('Y') ?> Inventory Control Indogrosir — Laporan Stock Out
</div>
</body>
</html>