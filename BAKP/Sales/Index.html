<?php
// =========================================================
// MONITORING SALES - REKAP MULTI SERVER IGR / SPI / ICM
// Versi revisi: interface konsisten dengan Index.php
// =========================================================
set_time_limit(0);
ini_set('memory_limit', '512M');

// ---------------------------------------------------------
// 1. DAFTAR SERVER / IP POSTGRESQL & MAPPING CABANG
// ---------------------------------------------------------
$default_db_user = "edp";
$default_db_pass = "3dp1grVIEW";

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

    // SPI
    ["id" => "SPI_BDG",   "type" => "SPI", "name" => "SPI BDG",   "host" => "172.31.146.154", "port" => "5432", "dbname" => "spibdg1g", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG10", "type" => "SPI", "name" => "SPI BDG10", "host" => "172.31.172.91",  "port" => "5432", "dbname" => "spibdg3e", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG2",  "type" => "SPI", "name" => "SPI BDG2",  "host" => "172.31.146.139", "port" => "5432", "dbname" => "spibdg1u", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG3",  "type" => "SPI", "name" => "SPI BDG3",  "host" => "172.31.146.245", "port" => "5432", "dbname" => "spibdg1v", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG4",  "type" => "SPI", "name" => "SPI BDG4",  "host" => "172.31.147.246", "port" => "5432", "dbname" => "spibdg1w", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG5",  "type" => "SPI", "name" => "SPI BDG5",  "host" => "172.31.146.205", "port" => "5432", "dbname" => "spibdg1y", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG6",  "type" => "SPI", "name" => "SPI BDG6",  "host" => "172.31.147.209", "port" => "5432", "dbname" => "spibdg2h", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG7",  "type" => "SPI", "name" => "SPI BDG7",  "host" => "172.31.147.183", "port" => "5432", "dbname" => "spibdg2k", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG8",  "type" => "SPI", "name" => "SPI BDG8",  "host" => "172.31.147.216", "port" => "5432", "dbname" => "spibdg2p", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDG9",  "type" => "SPI", "name" => "SPI BDG9",  "host" => "172.31.147.186", "port" => "5432", "dbname" => "spibdg2t", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDL",   "type" => "SPI", "name" => "SPI BDL",   "host" => "172.31.146.253", "port" => "5432", "dbname" => "spibdl1r", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BDL2",  "type" => "SPI", "name" => "SPI BDL2",  "host" => "172.31.147.194", "port" => "5432", "dbname" => "spibdl2u", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BGR",   "type" => "SPI", "name" => "SPI BGR",   "host" => "172.31.146.223", "port" => "5432", "dbname" => "spibgr1q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BGR2",  "type" => "SPI", "name" => "SPI BGR2",  "host" => "172.31.172.78",  "port" => "5432", "dbname" => "spibgr3b", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BGR4",  "type" => "SPI", "name" => "SPI BGR4",  "host" => "172.31.172.125", "port" => "5432", "dbname" => "spibgr3u", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BKS",   "type" => "SPI", "name" => "SPI BKS",   "host" => "172.31.146.145", "port" => "5432", "dbname" => "spibks1k", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BKS2",  "type" => "SPI", "name" => "SPI BKS2",  "host" => "172.31.172.115", "port" => "5432", "dbname" => "spibks3l", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BKS3",  "type" => "SPI", "name" => "SPI BKS3",  "host" => "172.31.172.109", "port" => "5432", "dbname" => "spibks3o", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BLJ",   "type" => "SPI", "name" => "SPI BLJ",   "host" => "172.31.146.178", "port" => "5432", "dbname" => "spitgr1a", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BMS",   "type" => "SPI", "name" => "SPI BMS",   "host" => "172.31.147.147", "port" => "5432", "dbname" => "spibms1m", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BMS2",  "type" => "SPI", "name" => "SPI BMS2",  "host" => "172.31.172.88",  "port" => "5432", "dbname" => "spibms4c", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BMS3",  "type" => "SPI", "name" => "SPI BMS3",  "host" => "172.31.172.249", "port" => "5432", "dbname" => "spibms4e", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BMS4",  "type" => "SPI", "name" => "SPI BMS4",  "host" => "172.31.172.239", "port" => "5432", "dbname" => "spibms4x", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CKL",   "type" => "SPI", "name" => "SPI CKL",   "host" => "172.31.146.142", "port" => "5432", "dbname" => "spickl1s", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CKL2",  "type" => "SPI", "name" => "SPI CKL2",  "host" => "172.31.146.201", "port" => "5432", "dbname" => "spickl2b", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CKL3",  "type" => "SPI", "name" => "SPI CKL3",  "host" => "172.31.147.251", "port" => "5432", "dbname" => "spickl2l", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CKL4",  "type" => "SPI", "name" => "SPI CKL4",  "host" => "172.31.147.196", "port" => "5432", "dbname" => "spickl2r", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CKL5",  "type" => "SPI", "name" => "SPI CKL5",  "host" => "172.31.172.90",  "port" => "5432", "dbname" => "spickl3m", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CPG",   "type" => "SPI", "name" => "SPI CPG",   "host" => "172.31.146.162", "port" => "5432", "dbname" => "spicpg1i", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CPT",   "type" => "SPI", "name" => "SPI CPT",   "host" => "172.31.147.175", "port" => "5432", "dbname" => "spicpt2a", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KMY",   "type" => "SPI", "name" => "SPI KMY",   "host" => "172.31.146.172", "port" => "5432", "dbname" => "spikmy1z", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRW",   "type" => "SPI", "name" => "SPI KRW",   "host" => "172.31.146.141", "port" => "5432", "dbname" => "spikrw1c", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MDN",   "type" => "SPI", "name" => "SPI MDN",   "host" => "172.31.146.166", "port" => "5432", "dbname" => "spimdn1e", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MDN2",  "type" => "SPI", "name" => "SPI MDN2",  "host" => "172.31.172.43",  "port" => "5432", "dbname" => "spimdn2s", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MKS",   "type" => "SPI", "name" => "SPI MKS",   "host" => "172.31.146.240", "port" => "5432", "dbname" => "spimks1b", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MKS2",  "type" => "SPI", "name" => "SPI MKS2",  "host" => "172.31.172.133", "port" => "5432", "dbname" => "spimks3v", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG",   "type" => "SPI", "name" => "SPI MLG",   "host" => "172.31.146.244", "port" => "5432", "dbname" => "spimlg1h", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG2",  "type" => "SPI", "name" => "SPI MLG2",  "host" => "172.31.147.213", "port" => "5432", "dbname" => "spimlg2c", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG3",  "type" => "SPI", "name" => "SPI MLG3",  "host" => "172.31.147.170", "port" => "5432", "dbname" => "spimlg2m", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG4",  "type" => "SPI", "name" => "SPI MLG4",  "host" => "172.31.147.151", "port" => "5432", "dbname" => "spimlg2q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG5",  "type" => "SPI", "name" => "SPI MLG5",  "host" => "172.31.172.47",  "port" => "5432", "dbname" => "spimlg3c", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG7",  "type" => "SPI", "name" => "SPI MLG7",  "host" => "172.31.172.173", "port" => "5432", "dbname" => "spimlg4b", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PKU",   "type" => "SPI", "name" => "SPI PKU",   "host" => "172.31.147.215", "port" => "5432", "dbname" => "spipku2v", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PWT",   "type" => "SPI", "name" => "SPI PWT",   "host" => "172.31.172.51",  "port" => "5432", "dbname" => "spipwt3d", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBI",   "type" => "SPI", "name" => "SPI SBI",   "host" => "172.31.146.165", "port" => "5432", "dbname" => "spisbi1t", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBI2",  "type" => "SPI", "name" => "SPI SBI2",  "host" => "172.31.172.99",  "port" => "5432", "dbname" => "spisbi2w", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBI3",  "type" => "SPI", "name" => "SPI SBI3",  "host" => "172.31.172.94",  "port" => "5432", "dbname" => "spisbi3i", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY",   "type" => "SPI", "name" => "SPI SBY",   "host" => "172.31.146.147", "port" => "5432", "dbname" => "spisby1d", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY2",  "type" => "SPI", "name" => "SPI SBY2",  "host" => "172.31.146.137", "port" => "5432", "dbname" => "spisby2d", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY3",  "type" => "SPI", "name" => "SPI SBY3",  "host" => "172.31.147.254", "port" => "5432", "dbname" => "spisby2e", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY4",  "type" => "SPI", "name" => "SPI SBY4",  "host" => "172.31.147.166", "port" => "5432", "dbname" => "spisby2o", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY5",  "type" => "SPI", "name" => "SPI SBY5",  "host" => "172.31.147.226", "port" => "5432", "dbname" => "spisby2x", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY6",  "type" => "SPI", "name" => "SPI SBY6",  "host" => "172.31.172.52",  "port" => "5432", "dbname" => "spisby3n", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SLO",   "type" => "SPI", "name" => "SPI SLO",   "host" => "172.31.146.220", "port" => "5432", "dbname" => "spislo1j", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SLO2",  "type" => "SPI", "name" => "SPI SLO2",  "host" => "172.31.146.218", "port" => "5432", "dbname" => "spislo2g", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SLO3",  "type" => "SPI", "name" => "SPI SLO3",  "host" => "172.31.147.171", "port" => "5432", "dbname" => "spislo2n", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SLO4",  "type" => "SPI", "name" => "SPI SLO4",  "host" => "172.31.172.70",  "port" => "5432", "dbname" => "spislo3f", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMD",   "type" => "SPI", "name" => "SPI SMD",   "host" => "172.31.146.208", "port" => "5432", "dbname" => "spismd1l", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMD2",  "type" => "SPI", "name" => "SPI SMD2",  "host" => "172.31.172.114", "port" => "5432", "dbname" => "spismd3j", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMD3",  "type" => "SPI", "name" => "SPI SMD3",  "host" => "172.31.172.248", "port" => "5432", "dbname" => "spismd4q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG",   "type" => "SPI", "name" => "SPI SMG",   "host" => "172.31.146.175", "port" => "5432", "dbname" => "spismg1n", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG3",  "type" => "SPI", "name" => "SPI SMG3",  "host" => "172.31.147.163", "port" => "5432", "dbname" => "spismg2f", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG4",  "type" => "SPI", "name" => "SPI SMG4",  "host" => "172.31.147.237", "port" => "5432", "dbname" => "spismg2i", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG5",  "type" => "SPI", "name" => "SPI SMG5",  "host" => "172.31.147.199", "port" => "5432", "dbname" => "spismg2j", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG6",  "type" => "SPI", "name" => "SPI SMG6",  "host" => "172.31.147.247", "port" => "5432", "dbname" => "spismg2y", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMG7",  "type" => "SPI", "name" => "SPI SMG7",  "host" => "172.31.172.118", "port" => "5432", "dbname" => "spismg3k", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_TGR2",  "type" => "SPI", "name" => "SPI TGR2",  "host" => "172.31.146.211", "port" => "5432", "dbname" => "spitgr1p", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_TGR3",  "type" => "SPI", "name" => "SPI TGR3",  "host" => "172.31.172.57",  "port" => "5432", "dbname" => "spitgr3a", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_YOG",   "type" => "SPI", "name" => "SPI YOG",   "host" => "172.31.146.236", "port" => "5432", "dbname" => "spiyog1o", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_YOG2",  "type" => "SPI", "name" => "SPI YOG2",  "host" => "172.31.172.40",  "port" => "5432", "dbname" => "spiyog2z", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPIX_BGR",  "type" => "SPI", "name" => "SPI-X BGR", "host" => "172.31.139.192", "port" => "5432", "dbname" => "spixbgrab","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPIX_BKS",  "type" => "SPI", "name" => "SPI-X BKS", "host" => "172.31.139.229", "port" => "5432", "dbname" => "spixbksaa","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPIX_SMG",  "type" => "SPI", "name" => "SPI-X SMG", "host" => "172.31.139.152", "port" => "5432", "dbname" => "spixsmgac","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BKS4",  "type" => "SPI", "name" => "SPI BKS4",  "host" => "172.31.172.143", "port" => "5432", "dbname" => "spibks3x", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PLG",   "type" => "SPI", "name" => "SPI PLG",   "host" => "172.31.172.106", "port" => "5432", "dbname" => "spiplg3h", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_TGR4",  "type" => "SPI", "name" => "SPI TGR4",  "host" => "172.31.172.160", "port" => "5432", "dbname" => "spitgr3s", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG6",  "type" => "SPI", "name" => "SPI MLG6",  "host" => "172.31.172.179", "port" => "5432", "dbname" => "spimlg3y", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRI",   "type" => "SPI", "name" => "SPI KRI",   "host" => "172.31.172.233", "port" => "5432", "dbname" => "spikri3q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_JBI",   "type" => "SPI", "name" => "SPI JBI",   "host" => "172.31.172.184", "port" => "5432", "dbname" => "spijbi3r", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_AMB",   "type" => "SPI", "name" => "SPI AMB",   "host" => "172.31.172.235", "port" => "5432", "dbname" => "spiamb3t", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY8",  "type" => "SPI", "name" => "SPI SBY8",  "host" => "172.31.172.141", "port" => "5432", "dbname" => "spisby4a", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRI2",  "type" => "SPI", "name" => "SPI KRI2",  "host" => "172.31.172.69",  "port" => "5432", "dbname" => "spikri4d", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CPG2",  "type" => "SPI", "name" => "SPI CPG2",  "host" => "172.31.172.153", "port" => "5432", "dbname" => "spicpg4l", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PTK",   "type" => "SPI", "name" => "SPI PTK",   "host" => "172.31.172.164", "port" => "5432", "dbname" => "spiptk4m", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BLI",   "type" => "SPI", "name" => "SPI BLI",   "host" => "172.31.172.212", "port" => "5432", "dbname" => "spibli4f", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BLI2",  "type" => "SPI", "name" => "SPI BLI2",  "host" => "172.31.172.206", "port" => "5432", "dbname" => "spibli4g", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MDO",   "type" => "SPI", "name" => "SPI MDO",   "host" => "172.31.172.137", "port" => "5432", "dbname" => "spimdo4k", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY9",  "type" => "SPI", "name" => "SPI SBY9",  "host" => "172.31.172.148", "port" => "5432", "dbname" => "spisby4h", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG8",  "type" => "SPI", "name" => "SPI MLG8",  "host" => "172.31.172.187", "port" => "5432", "dbname" => "spimlg4i", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BGR3",  "type" => "SPI", "name" => "SPI BGR3",  "host" => "172.31.172.162", "port" => "5432", "dbname" => "spibgr3g", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PLG2",  "type" => "SPI", "name" => "SPI PLG2",  "host" => "172.31.172.151", "port" => "5432", "dbname" => "spiplg3w", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRW2",  "type" => "SPI", "name" => "SPI KRW2",  "host" => "172.31.172.217", "port" => "5432", "dbname" => "spikrw4j", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRW3",  "type" => "SPI", "name" => "SPI KRW3",  "host" => "172.31.172.177", "port" => "5432", "dbname" => "spikrw4n", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KMY2",  "type" => "SPI", "name" => "SPI KMY2",  "host" => "172.31.172.201", "port" => "5432", "dbname" => "spikmy4p", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CPT2",  "type" => "SPI", "name" => "SPI CPT2",  "host" => "172.31.172.191", "port" => "5432", "dbname" => "spicpt3p", "user" => "edp", "password" => "3dp1grVIEW"],

    // ICM
    ["id" => "ICM_AMB",   "type" => "ICM", "name" => "ICM AMB",   "host" => "192.168.230.191", "port" => "5432", "dbname" => "icmamb", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BDG",   "type" => "ICM", "name" => "ICM BDG",   "host" => "192.168.222.191", "port" => "5432", "dbname" => "icmbdg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BDL",   "type" => "ICM", "name" => "ICM BDL",   "host" => "192.168.247.191", "port" => "5432", "dbname" => "icmbdl", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BGR",   "type" => "ICM", "name" => "ICM BGR",   "host" => "192.168.240.191", "port" => "5432", "dbname" => "icmbgr", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BLI",   "type" => "ICM", "name" => "ICM BLI",   "host" => "192.168.148.191", "port" => "5432", "dbname" => "icmbli", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BMS",   "type" => "ICM", "name" => "ICM BMS",   "host" => "192.168.239.191", "port" => "5432", "dbname" => "icmbms", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_BTM",   "type" => "ICM", "name" => "ICM BTM",   "host" => "192.168.255.191", "port" => "5432", "dbname" => "icmbtm", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_CKL",   "type" => "ICM", "name" => "ICM CKL",   "host" => "192.168.249.191", "port" => "5432", "dbname" => "icmckl", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_CPG",   "type" => "ICM", "name" => "ICM CPG",   "host" => "192.168.226.191", "port" => "5432", "dbname" => "icmcpg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_GTO",   "type" => "ICM", "name" => "ICM GTO",   "host" => "192.168.150.191", "port" => "5432", "dbname" => "icmgto", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_KMY",   "type" => "ICM", "name" => "ICM KMY",   "host" => "192.168.234.191", "port" => "5432", "dbname" => "icmkmy", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_KRI",   "type" => "ICM", "name" => "ICM KRI",   "host" => "192.168.244.191", "port" => "5432", "dbname" => "icmkri", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_KRW",   "type" => "ICM", "name" => "ICM KRW",   "host" => "192.168.231.191", "port" => "5432", "dbname" => "icmkrw", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_MDO",   "type" => "ICM", "name" => "ICM MDO",   "host" => "192.168.241.191", "port" => "5432", "dbname" => "icmmdo", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_MLG",   "type" => "ICM", "name" => "ICM MLG",   "host" => "192.168.246.191", "port" => "5432", "dbname" => "icmmlg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_PKU",   "type" => "ICM", "name" => "ICM PKU",   "host" => "192.168.235.191", "port" => "5432", "dbname" => "icmpku", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_PLG",   "type" => "ICM", "name" => "ICM PLG",   "host" => "192.168.232.191", "port" => "5432", "dbname" => "icmplg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_PTK",   "type" => "ICM", "name" => "ICM PTK",   "host" => "192.168.238.191", "port" => "5432", "dbname" => "icmptk", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_PWT",   "type" => "ICM", "name" => "ICM PWT",   "host" => "192.168.83.191",  "port" => "5432", "dbname" => "icmpwt", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_SBI",   "type" => "ICM", "name" => "ICM SBI",   "host" => "192.168.251.191", "port" => "5432", "dbname" => "icmsbi", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_SBY",   "type" => "ICM", "name" => "ICM SBY",   "host" => "192.168.227.191", "port" => "5432", "dbname" => "icmsby", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_SLO",   "type" => "ICM", "name" => "ICM SLO",   "host" => "192.168.248.191", "port" => "5432", "dbname" => "icmslo", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_SMD",   "type" => "ICM", "name" => "ICM SMD",   "host" => "192.168.236.191", "port" => "5432", "dbname" => "icmsmd", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_SMG",   "type" => "ICM", "name" => "ICM SMG",   "host" => "192.168.237.191", "port" => "5432", "dbname" => "icmsmg", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_TGR",   "type" => "ICM", "name" => "ICM TGR",   "host" => "192.168.228.191", "port" => "5432", "dbname" => "icmtgr", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_YOG",   "type" => "ICM", "name" => "ICM YOG",   "host" => "192.168.224.191", "port" => "5432", "dbname" => "icmyog", "user" => $default_db_user, "password" => $default_db_pass],
    ["id" => "ICM_CPT",   "type" => "ICM", "name" => "ICM CPT",   "host" => "192.168.245.191", "port" => "5432", "dbname" => "icmcpt", "user" => $default_db_user, "password" => $default_db_pass]
];

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
    '4G'=>'SPI BLI2', '4H'=>'SPI SBY9', '4I'=>'SPI MLG8', '4J'=>'SPI KRW2', '4K'=>'SPI MDO', '4N'=>'SPI KRW3', '4L'=>'SPI CPG2', '4M'=>'SPI PTK', '4P'=>'SPI KMY2', '7A'=>'ICM CKL', '7B'=>'ICM SBI',
    '7C'=>'ICM BTM', '7D'=>'ICM TGR', '7E'=>'ICM BDL', '7F'=>'ICM MLG', '7G'=>'ICM YOG', '7H'=>'ICM BGR', '7I'=>'ICM SMD', '7J'=>'ICM BMS',
    '7K'=>'ICM PLG', '7L'=>'ICM KRW', '7M'=>'ICM PKU', '7N'=>'ICM KRI', '7O'=>'ICM KMY', '7P'=>'ICM AMB', '7Q'=>'ICM BDG', '7R'=>'ICM SMG',
    '7S'=>'ICM PWT', '7T'=>'ICM CPT', '7U'=>'ICM PTK', '7V'=>'ICM SLO', '7W'=>'ICM MDO', '7X'=>'ICM GTO', '7Y'=>'ICM CPG', '7Z'=>'ICM SBY',
    '8B'=>'ICM BLI', 'AA'=>'SPI-X BKS', 'AB'=>'SPI-X BGR', 'AC'=>'SPI-X SMG', '3P'=>'SPI CPT2'
];

// Helper SQL CASE WHEN untuk Kode Cabang
$case_cabang_sql = "CASE prd_kodeigr ";
foreach ($kode_cabang_map as $code => $name) {
    $case_cabang_sql .= "WHEN '{$code}' THEN '{$name}' ";
}
$case_cabang_sql .= "ELSE prd_kodeigr END";

// ---------------------------------------------------------
// 2. FILTER
// ---------------------------------------------------------
$is_searched = isset($_GET['search']) && $_GET['search'] === '1';
$sel_type = isset($_GET['server_type']) ? strtoupper(trim($_GET['server_type'])) : 'ALL';
if (!in_array($sel_type, ['ALL', 'IGR', 'SPI', 'ICM'], true)) $sel_type = 'ALL';

$sel_cabang = isset($_GET['cabang']) ? $_GET['cabang'] : ['ALL'];
if (!is_array($sel_cabang)) $sel_cabang = [$sel_cabang];
$sel_cabang = array_values(array_filter(array_map('trim', $sel_cabang), 'strlen'));
if (!$sel_cabang) $sel_cabang = ['ALL'];

$sel_tgl = isset($_GET['tgl']) && $_GET['tgl'] !== 'ALL' ? sprintf("%02d", $_GET['tgl']) : 'ALL';
$sel_bulan = $_GET['bulan'] ?? date('m');
$sel_tahun = $_GET['tahun'] ?? date('Y');
$per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 50;
if (!in_array($per_page, [25, 50, 100, 250], true)) $per_page = 50;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;

$nama_bulan = [
    'ALL' => '-- Semua Bulan --', '01' => 'Januari', '02' => 'Februari', '03' => 'Maret',
    '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli',
    '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
];

// ---------------------------------------------------------
// 3. TARGET SERVER - FILTER TIPE + CABANG
// ---------------------------------------------------------
$target_servers = [];
foreach ($servers as $server) {
    if ($sel_type !== 'ALL' && strtoupper($server['type']) !== $sel_type) continue;
    if (!in_array('ALL', $sel_cabang, true) && !in_array($server['id'], $sel_cabang, true)) continue;
    $target_servers[] = $server;
}

// ---------------------------------------------------------
// 4. BUILD QUERY SALES
// ---------------------------------------------------------
$conditions_sales = [];
if ($sel_tgl !== 'ALL') {
    $conditions_sales[] = "EXTRACT(DAY FROM TRJD_TRANSACTIONDATE) = " . (int)$sel_tgl;
}
if ($sel_bulan !== 'ALL') {
    $conditions_sales[] = "EXTRACT(MONTH FROM TRJD_TRANSACTIONDATE) = " . (int)$sel_bulan;
}
if ($sel_tahun !== 'ALL') {
    $conditions_sales[] = "EXTRACT(YEAR FROM TRJD_TRANSACTIONDATE) = " . (int)$sel_tahun;
}
$where_sales = count($conditions_sales) > 0 ? implode(' AND ', $conditions_sales) : "1=1";

$active_query = "SELECT
    {$case_cabang_sql} AS kode_cabang,
    COUNT(DISTINCT PRD_PRDCD) AS total_item,
    SUM(type.QTY) AS total_qty,
    SUM(type.SALES) AS total_rupiah
FROM TBMASTER_PRODMAST
INNER JOIN (
    SELECT 
        SUBSTR(TRJD_PRDCD,1,6)||'0' AS PLU_SLS,
        SUM(CASE                
            WHEN PRD_UNIT='KG' AND TRJD_TRANSACTIONTYPE='S' THEN ((TRJD_QUANTITY*PRD_FRAC)/1000)               
            WHEN PRD_UNIT='KG' AND TRJD_TRANSACTIONTYPE='R' THEN ((TRJD_QUANTITY*PRD_FRAC)/1000)*-1               
            WHEN TRJD_TRANSACTIONTYPE='S' THEN TRJD_QUANTITY*PRD_FRAC               
            WHEN TRJD_TRANSACTIONTYPE='R' THEN (TRJD_QUANTITY*PRD_FRAC)*-1               
            ELSE 0 END) AS QTY,               
        SUM(ROUND(CASE                
            WHEN TRJD_CREATE_BY IN ('BKL','OMI') AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt/1.11                
            WHEN COALESCE(trjd_flagtax2,'N')<>'Y' AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='R' THEN (trjd_nominalamt/1.11)*-1                
            ELSE TRJD_NOMINALAMT*-1 END, 2)) AS SALES
    FROM TBTR_JUALDETAIL              
    LEFT JOIN TBMASTER_PRODMAST ON trjd_prdcd = PRD_PRDCD            
    WHERE TRJD_RECORDID IS NULL
        AND {$where_sales}
    GROUP BY SUBSTR(TRJD_PRDCD,1,6)||'0'
) type ON PRD_PRDCD = type.PLU_SLS
GROUP BY 1
ORDER BY kode_cabang";

// ---------------------------------------------------------
// 5b. QUERY DETAIL SALES (untuk Download Detail)
// ---------------------------------------------------------
$detail_sql = "SELECT 
    {$case_cabang_sql} AS CAB,  
    PRD_PRDCD AS PLU,          
    PRD_KODEDIVISI AS DIV,       
    PRD_KODEDEPARTEMENT AS DEP,  
    PRD_KODEKATEGORIBARANG AS KAT,
    prd_deskripsipanjang AS deskripsi,     
    SUM(QTY) AS QTY_SALES, 
    SUM(SALES) AS RPH_SALES, 
    SUM(MARGIN) AS RPH_MARGIN 
FROM TBMASTER_PRODMAST            
LEFT JOIN (
    SELECT HGB_PRDCD AS PLU_HGB, HGB_KODESUPPLIER AS KODE_SUPPLIER, KODE_SUPPLIER_MCG, KD_SUPIGR, NAMA_SUPPLIER                  
    FROM TBMASTER_HARGABELI                  
    LEFT JOIN (
        SELECT SUP_KODESUPPLIER AS KD_SUPIGR, SUP_KODESUPPLIERMCG AS KODE_SUPPLIER_MCG, SUP_NAMASUPPLIER AS NAMA_SUPPLIER                  
        FROM TBMASTER_SUPPLIER
    ) hgb ON HGB_KODESUPPLIER = KD_SUPIGR                  
    WHERE HGB_TIPE = '2'                        
) prd ON PRD_PRDCD = PLU_HGB                         
LEFT JOIN (
    SELECT 
        SUBSTR(TRJD_PRDCD,1,6)||0 AS PLU_SLS, 
        TRJD_CUS_KODEMEMBER, 
        TRJD_TRANSACTIONDATE,                
        SUM(CASE                
            WHEN PRD_UNIT='KG' AND TRJD_TRANSACTIONTYPE='S' THEN ((TRJD_QUANTITY*PRD_FRAC)/1000)               
            WHEN PRD_UNIT='KG' AND TRJD_TRANSACTIONTYPE='R' THEN ((TRJD_QUANTITY*PRD_FRAC)/1000)*-1               
            WHEN TRJD_TRANSACTIONTYPE='S' THEN TRJD_QUANTITY*PRD_FRAC               
            WHEN TRJD_TRANSACTIONTYPE='R' THEN (TRJD_QUANTITY*PRD_FRAC)*-1               
            ELSE 0 END) AS QTY,               
        SUM(ROUND(CASE                
            WHEN TRJD_CREATE_BY IN ('BKL','OMI') AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN TRJD_TRANSACTIONTYPE='R' THEN (trjd_nominalamt)*-1                
            ELSE 0 END, 2)) AS SALES_GROSS,                
        SUM(ROUND(CASE                
            WHEN TRJD_CREATE_BY IN ('BKL','OMI') AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt/1.11                
            WHEN COALESCE(trjd_flagtax2,'N')<>'Y' AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt                
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='R' THEN (trjd_nominalamt/1.11)*-1                
            ELSE TRJD_NOMINALAMT*-1 END, 2)) AS SALES,                
        SUM(ROUND(CASE                
            WHEN TRJD_CREATE_BY IN ('BKL','OMI') AND TRJD_TRANSACTIONTYPE='S' THEN (trjd_nominalamt)-((trjd_baseprice*trjd_quantity))                
            WHEN PRD_UNIT='KG' AND COALESCE(trjd_flagtax2,'T')='Y' THEN (trjd_nominalamt/1.11)-((trjd_baseprice*trjd_quantity)/1000)                 
            WHEN PRD_UNIT='KG' THEN (trjd_nominalamt)-((trjd_baseprice*trjd_quantity)/1000)                 
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='S' THEN (trjd_nominalamt/1.11)-(trjd_baseprice*trjd_quantity)                
            WHEN COALESCE(trjd_flagtax2,'N')<>'Y' AND TRJD_TRANSACTIONTYPE='S' THEN trjd_nominalamt-(trjd_baseprice*trjd_quantity)                
            WHEN COALESCE(trjd_flagtax2,'N')='Y' AND TRJD_TRANSACTIONTYPE='R' THEN ((trjd_nominalamt/1.11)-(trjd_baseprice*trjd_quantity))*-1                
            ELSE (trjd_nominalamt-(trjd_baseprice*trjd_quantity))*-1 END, 2)) AS MARGIN                
    FROM TBTR_JUALDETAIL              
    LEFT JOIN tbmaster_prodmast ON trjd_prdcd = PRD_PRDCD            
    WHERE TRJD_RECORDID IS NULL
        AND {$where_sales}
    GROUP BY SUBSTR(TRJD_PRDCD,1,6)||0, TRJD_CUS_KODEMEMBER, TRJD_TRANSACTIONDATE 
) type ON PRD_PRDCD = PLU_SLS              
WHERE SALES IS NOT NULL      
GROUP BY PRD_KODEIGR, PRD_PRDCD, PRD_KODEDIVISI, PRD_KODEDEPARTEMENT, PRD_KODEKATEGORIBARANG, prd_deskripsipanjang    
ORDER BY DIV, DEP";

// ---------------------------------------------------------
// 5. EXPORT EXCEL
// ---------------------------------------------------------
$action = isset($_GET['action']) ? $_GET['action'] : '';
// ---------------------------------------------------------
// 5a. EXPORT DETAIL EXCEL
// ---------------------------------------------------------
if ($action === 'export_detail' && $is_searched) {
    set_time_limit(0);
    $filename = 'Detail_Sales_' . date('Ymd_His') . '.xls';
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Pragma: no-cache');
    header('Expires: 0');

    $detail_headers = ['CAB', 'PLU', 'DIV', 'DEP', 'KAT', 'DESKRIPSI', 'QTY_SALES', 'RPH_SALES', 'RPH_MARGIN'];

    echo "<html><head><meta charset='utf-8'></head><body><table border='1' cellpadding='4' cellspacing='0'>";
    echo "<tr style='font-weight:bold;background:#1E293B;color:white'>";
    foreach ($detail_headers as $h) echo '<th>' . htmlspecialchars($h, ENT_QUOTES, 'UTF-8') . '</th>';
    echo '</tr>';

    foreach ($target_servers as $server) {
        $conn_string = sprintf(
            'host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4',
            $server['host'], $server['port'], $server['dbname'], $server['user'], $server['password']
        );
        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            echo '<tr><td colspan="' . count($detail_headers) . '">ERROR KONEKSI: ' . htmlspecialchars($server['name'], ENT_QUOTES, 'UTF-8') . '</td></tr>';
            continue;
        }
        $result = pg_query($dbconn, $detail_sql);
        if (!$result) {
            echo '<tr><td colspan="' . count($detail_headers) . '">ERROR SQL ' . htmlspecialchars($server['name'], ENT_QUOTES, 'UTF-8') . ': ' . htmlspecialchars(pg_last_error($dbconn), ENT_QUOTES, 'UTF-8') . '</td></tr>';
            pg_close($dbconn);
            continue;
        }
        while ($row = pg_fetch_assoc($result)) {
            echo '<tr>';
            foreach ($detail_headers as $h) {
                $v = $row[strtolower($h)] ?? $row[$h] ?? '';
                $safe = htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
                $text_fields = ['cab', 'plu', 'div', 'dep', 'kat', 'deskripsi'];
                if (in_array(strtolower($h), $text_fields, true)) {
                    echo '<td style="mso-number-format:\'@\';">' . $safe . '</td>';
                } elseif (is_numeric($v)) {
                    echo '<td style="text-align:right">' . number_format((float)$v, 2, '.', '') . '</td>';
                } else {
                    echo '<td>' . $safe . '</td>';
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
if ($action === 'export_excel' && $is_searched) {
    $filename = 'Rekap_Sales_' . date('Ymd_His') . '.xls';
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Pragma: no-cache');
    header('Expires: 0');

    echo "<html><head><meta charset='utf-8'></head><body><table border='1' cellpadding='4' cellspacing='0'>";
    echo "<tr style='font-weight:bold;background:#1E293B;color:white'>";
    echo '<th>KODE_CABANG</th><th>TIPE</th><th>TOTAL_ITEM</th><th>TOTAL_QTY</th><th>TOTAL_RUPIAH</th>';
    echo '</tr>';

    $grand_item = 0;
    $grand_qty = 0.0;
    $grand_rp = 0.0;

    foreach ($target_servers as $server) {
        $conn_string = sprintf('host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4', $server['host'], $server['port'], $server['dbname'], $server['user'], $server['password']);
        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            echo '<tr><td colspan="5">ERROR KONEKSI: ' . htmlspecialchars($server['name'], ENT_QUOTES, 'UTF-8') . '</td></tr>';
            continue;
        }
        $result = pg_query($dbconn, $active_query);
        if (!$result) {
            echo '<tr><td colspan="5">ERROR SQL ' . htmlspecialchars($server['name'], ENT_QUOTES, 'UTF-8') . ': ' . htmlspecialchars(pg_last_error($dbconn), ENT_QUOTES, 'UTF-8') . '</td></tr>';
            pg_close($dbconn);
            continue;
        }
        while ($row = pg_fetch_assoc($result)) {
            $ti = (float)($row['total_item'] ?? 0);
            $tq = (float)($row['total_qty'] ?? 0);
            $tr = (float)($row['total_rupiah'] ?? 0);
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['kode_cabang'] ?? $server['name'], ENT_QUOTES, 'UTF-8') . '</td>';
            echo '<td>' . htmlspecialchars($server['type'], ENT_QUOTES, 'UTF-8') . '</td>';
            echo '<td style="text-align:right">' . number_format($ti, 0, '.', '') . '</td>';
            echo '<td style="text-align:right">' . number_format($tq, 2, '.', '') . '</td>';
            echo '<td style="text-align:right">' . number_format($tr, 2, '.', '') . '</td>';
            echo '</tr>';
            $grand_item += $ti;
            $grand_qty += $tq;
            $grand_rp += $tr;
        }
        pg_free_result($result);
        pg_close($dbconn);
    }

    echo '<tr style="font-weight:bold;background:#E2E8F0">';
    echo '<td colspan="2" style="text-align:right">GRAND TOTAL</td>';
    echo '<td style="text-align:right">' . number_format($grand_item, 0, '.', '') . '</td>';
    echo '<td style="text-align:right">' . number_format($grand_qty, 2, '.', '') . '</td>';
    echo '<td style="text-align:right">' . number_format($grand_rp, 2, '.', '') . '</td>';
    echo '</tr></table></body></html>';
    exit;
}

// ---------------------------------------------------------
// 6. AMBIL REKAP DARI SERVER
// ---------------------------------------------------------
$rekap_rows = [];
$errors = [];
$grand_item = 0;
$grand_qty = 0.0;
$grand_rp = 0.0;

if ($is_searched) {
    foreach ($target_servers as $server) {
        $conn_string = sprintf(
            'host=%s port=%s dbname=%s user=%s password=%s connect_timeout=4',
            $server['host'], $server['port'], $server['dbname'], $server['user'], $server['password']
        );

        $dbconn = @pg_connect($conn_string);
        if (!$dbconn) {
            $errors[] = [
                'server' => $server['name'],
                'type' => 'KONEKSI',
                'message' => 'Gagal koneksi ke PostgreSQL.'
            ];
            continue;
        }

        $result = pg_query($dbconn, $active_query);

        if (!$result) {
            $errors[] = [
                'server' => $server['name'],
                'type' => 'SQL',
                'message' => pg_last_error($dbconn),
                'sql' => $active_query
            ];
            pg_close($dbconn);
            continue;
        }

        $has_row = false;
        while ($row = pg_fetch_assoc($result)) {
            $has_row = true;
            $total_item = isset($row['total_item']) ? (int)$row['total_item'] : 0;
            $total_qty = isset($row['total_qty']) ? (float)$row['total_qty'] : 0.0;
            $total_rupiah = isset($row['total_rupiah']) ? (float)$row['total_rupiah'] : 0.0;

            $rekap_rows[] = [
                'KODE_CABANG' => !empty($row['kode_cabang']) ? $row['kode_cabang'] : $server['name'],
                'TIPE' => $server['type'],
                'TOTAL_ITEM' => $total_item,
                'TOTAL_QTY' => $total_qty,
                'TOTAL_RUPIAH' => $total_rupiah
            ];

            $grand_item += $total_item;
            $grand_qty += $total_qty;
            $grand_rp += $total_rupiah;
        }

        // Jika tidak ada baris hasil, tetap tampilkan cabang dengan nilai 0
        if (!$has_row) {
            $rekap_rows[] = [
                'KODE_CABANG' => $server['name'],
                'TIPE' => $server['type'],
                'TOTAL_ITEM' => 0,
                'TOTAL_QTY' => 0,
                'TOTAL_RUPIAH' => 0
            ];
        }

        pg_free_result($result);
        pg_close($dbconn);
    }
}

usort($rekap_rows, function ($a, $b) {
    return strnatcasecmp($a['KODE_CABANG'], $b['KODE_CABANG']);
});

$total_all_records = count($rekap_rows);
$total_pages = $total_all_records > 0 ? (int)ceil($total_all_records / $per_page) : 1;
if ($page > $total_pages) $page = $total_pages;
$offset = ($page - 1) * $per_page;
$display_rows = array_slice($rekap_rows, $offset, $per_page);

$query_params = $_GET;
unset($query_params['action']);
$query_string_base = http_build_query($query_params);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rekap Sales - IGR SPI ICM</title>
<style>
body{font-family:'Segoe UI',Tahoma,Arial,sans-serif;background:#f4f6f9;margin:20px;color:#333}
.header-container{background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,.1);margin-bottom:20px}
.top-row{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:15px}
h2{margin:0;color:#1E293B;font-size:20px}
.filter-form{display:flex;align-items:flex-start;gap:12px;margin-top:15px;background:#F8FAFC;padding:12px;border-radius:6px;border:1px solid #E2E8F0;flex-wrap:wrap}
.form-group{display:flex;flex-direction:column;gap:4px}
label{font-weight:bold;font-size:12px;color:#475569}
select,input[type=text]{padding:8px 12px;font-size:13px;border-radius:6px;border:1px solid #CBD5E1;background:#fff;font-weight:500}
select[multiple]{height:120px;min-width:230px;padding:4px}
.btn-group{display:flex;gap:10px;flex-wrap:wrap}
.btn{padding:9px 16px;font-weight:bold;border-radius:6px;text-decoration:none;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:6px;font-size:13px}
.btn-submit{background:#0F172A;color:#fff;margin-top:18px}
.btn-excel{background:#107C41;color:#fff}
.btn-detail{background:#2563EB;color:#fff}
.table-responsive{background:#fff;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,.1);overflow-x:auto}
table{width:100%;border-collapse:collapse;font-size:13px}
th{background:#1E293B;color:#fff;padding:11px;text-align:left;white-space:nowrap}
td{padding:10px;border-bottom:1px solid #E2E8F0;white-space:nowrap}
tr:nth-child(even){background:#F8FAFC}
tr:hover{background:#F1F5F9}
tfoot tr{background:#E2E8F0;font-weight:bold}
.text-right{text-align:right}
.help-text{font-size:11px;color:#64748B;margin-top:2px}
.summary{display:flex;gap:10px;flex-wrap:wrap;margin:15px 0}
.card{background:#fff;padding:12px 16px;border-radius:7px;box-shadow:0 1px 3px rgba(0,0,0,.08);min-width:150px}
.card b{display:block;font-size:18px;color:#0F172A}
.card span{font-size:11px;color:#64748B}
.alert{background:#FEF2F2;border:1px solid #FECACA;color:#991B1B;padding:12px;border-radius:7px;margin:15px 0}
.error-item{background:#fff;border:1px solid #FCA5A5;padding:10px;margin-top:8px;border-radius:5px}
.error-server{font-weight:bold}
.sql-box{margin-top:6px;background:#111827;color:#E5E7EB;padding:8px;border-radius:4px;overflow:auto;font:11px Consolas,monospace;white-space:pre-wrap}
.pagination-container{display:flex;justify-content:space-between;align-items:center;gap:15px;flex-wrap:wrap;margin-top:15px;background:#fff;padding:12px;border-radius:6px;box-shadow:0 1px 3px rgba(0,0,0,.1)}
.pagination{display:flex;gap:5px;list-style:none;padding:0;margin:0;flex-wrap:wrap}
.pagination a,.pagination span{padding:6px 12px;border:1px solid #CBD5E1;border-radius:4px;text-decoration:none;color:#0F172A;font-size:12px;font-weight:600}
.pagination .active{background:#0F172A;color:#fff;border-color:#0F172A}
.pagination .disabled{color:#94A3B8;pointer-events:none}
.note{font-size:12px;color:#475569;margin-top:10px}
.brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.brand img {
    height: 40px;        /* Atur tinggi logo agar sejajar dengan judul */
    width: auto;         /* Lebar mengikuti rasio asli */
    max-width: 180px;    /* Batas maksimal lebar */
    object-fit: contain;
    display: block;
}
.btn{padding:9px 16px;font-weight:bold;border-radius:6px;text-decoration:none;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:6px;font-size:13px;transition:all .2s}
.btn-submit{background:#0F172A;color:#fff;margin-top:18px}
.btn-submit:hover{background:#1E293B}
.btn-excel{background:#107C41;color:#fff}
.btn-excel:hover{background:#0B5C30}
.btn-detail{background:#2563EB;color:#fff}
.btn-detail:hover{background:#1D4ED8}
.btn-exit{background:#DC2626;color:#fff}
.btn-exit:hover{background:#B91C1C}
</style>
</head>
<body>
<div class="header-container">
    <div class="top-row">
        <div class="brand">
            <img src="logo.png" alt="INDogrosir Logo">
            <h2>Rekap Sales IGR / SPI / ICM</h2>
        </div>
        <?php if ($is_searched): ?>
	<div class="btn-group">
    <a href="http://172.20.133.59/" class="btn btn-exit" onclick="return confirm('Yakin ingin keluar dari menu Rekap Sales?')">🚪 Keluar</a>
    <?php if ($is_searched): ?>
        <a href="?<?= htmlspecialchars($query_string_base) ?>&action=export_excel" class="btn btn-excel">📥 Export Rekap XLS</a>
        <a href="?<?= htmlspecialchars($query_string_base) ?>&action=export_detail" class="btn btn-detail">📥 Download DETAIL XLS</a>
    <?php endif; ?>
</div>

    <form method="GET" action="" class="filter-form">
        <input type="hidden" name="search" value="1">
        <div class="form-group">
            <label for="server_type">Tipe Server:</label>
            <select name="server_type" id="server_type">
                <option value="ALL" <?= $sel_type === 'ALL' ? 'selected' : '' ?>>-- SEMUA TIPE (IGR/SPI/ICM) --</option>
                <option value="IGR" <?= $sel_type === 'IGR' ? 'selected' : '' ?>>IGR ONLY</option>
                <option value="SPI" <?= $sel_type === 'SPI' ? 'selected' : '' ?>>SPI ONLY</option>
                <option value="ICM" <?= $sel_type === 'ICM' ? 'selected' : '' ?>>ICM ONLY</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cabang">Pilih Cabang (Multi):</label>
            <select name="cabang[]" id="cabang" multiple>
                <option value="ALL" <?= in_array('ALL', $sel_cabang, true) ? 'selected' : '' ?>>-- SEMUA CABANG --</option>
                <?php foreach ($servers as $srv): ?>
                    <?php if ($sel_type !== 'ALL' && $srv['type'] !== $sel_type) continue; ?>
                    <option value="<?= htmlspecialchars($srv['id']) ?>" <?= in_array($srv['id'], $sel_cabang, true) ? 'selected' : '' ?>><?= htmlspecialchars($srv['name']) ?> (<?= htmlspecialchars($srv['host']) ?>)</option>
                <?php endforeach; ?>
            </select>
            <span class="help-text">Tahan <b>Ctrl</b>/<b>Cmd</b> untuk memilih beberapa.</span>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal:</label>
            <select name="tgl" id="tgl">
                <option value="ALL" <?= $sel_tgl === 'ALL' ? 'selected' : '' ?>>-- Semua Tanggal --</option>
                <?php for ($i = 1; $i <= 31; $i++): $t = sprintf("%02d", $i); ?>
                    <option value="<?= $t ?>" <?= $sel_tgl === $t ? 'selected' : '' ?>><?= $t ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="bulan">Bulan:</label>
            <select name="bulan" id="bulan">
                <?php foreach ($nama_bulan as $num => $nama): ?>
                    <option value="<?= $num ?>" <?= $sel_bulan == $num ? 'selected' : '' ?>><?= $nama ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <select name="tahun" id="tahun">
                <option value="ALL" <?= $sel_tahun === 'ALL' ? 'selected' : '' ?>>-- Semua Tahun --</option>
                <?php
                $tahun_sekarang = (int)date('Y');
                for ($y = $tahun_sekarang - 3; $y <= $tahun_sekarang + 2; $y++): ?>
                    <option value="<?= $y ?>" <?= $sel_tahun == $y ? 'selected' : '' ?>><?= $y ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="per_page">Per Halaman:</label>
            <select name="per_page" id="per_page">
                <?php foreach ([25, 50, 100, 250] as $n): ?>
                    <option value="<?= $n ?>" <?= $per_page === $n ? 'selected' : '' ?>><?= $n ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-submit">🔍 Tampilkan Rekap</button>
    </form>
    <div class="note">
        Filter cabang kosong = semua cabang. Jika ada error, error PostgreSQL akan ditampilkan per cabang/server di bawah.
    </div>
</div>

<?php if ($is_searched): ?>
<div class="summary">
    <div class="card"><span>SERVER BERHASIL</span><b><?= number_format(count($rekap_rows), 0, ',', '.') ?></b></div>
    <div class="card"><span>SERVER ERROR</span><b><?= number_format(count($errors), 0, ',', '.') ?></b></div>
    <div class="card"><span>TOTAL ITEM</span><b><?= number_format($grand_item, 0, ',', '.') ?></b></div>
    <div class="card"><span>TOTAL QTY</span><b><?= number_format($grand_qty, 2, ',', '.') ?></b></div>
    <div class="card"><span>TOTAL RUPIAH</span><b>Rp <?= number_format($grand_rp, 2, ',', '.') ?></b></div>
</div>

<?php if (!empty($errors)): ?>
<div class="alert">
    <b>⚠ Ada <?= count($errors) ?> server yang gagal diproses.</b>
    <?php foreach ($errors as $err): ?>
    <div class="error-item">
        <div class="error-server">❌ <?= htmlspecialchars($err['server']) ?> — <?= htmlspecialchars($err['type']) ?></div>
        <div><?= nl2br(htmlspecialchars($err['message'])) ?></div>
        <?php if (isset($err['sql'])): ?>
            <details><summary style="cursor:pointer;margin-top:5px">Lihat SQL yang gagal</summary><div class="sql-box"><?= htmlspecialchars($err['sql']) ?></div></details>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<div class="pagination-container">
    <div>Menampilkan <b><?= count($display_rows) ?></b> dari <b><?= number_format($total_all_records, 0, ',', '.') ?></b> server.</div>
    <?php if ($total_pages > 1): ?>
    <ul class="pagination">
        <?php
        $query_nav = $_GET;
        if ($page > 1) { $query_nav['page'] = $page - 1; echo '<li><a href="?' . htmlspecialchars(http_build_query($query_nav)) . '">&laquo; Prev</a></li>'; }
        else echo '<li><span class="disabled">&laquo; Prev</span></li>';
        $start_p = max(1, $page - 2);
        $end_p = min($total_pages, $page + 2);
        for ($p = $start_p; $p <= $end_p; $p++) {
            $query_nav['page'] = $p;
            if ($p === $page) echo '<li><span class="active">' . $p . '</span></li>';
            else echo '<li><a href="?' . htmlspecialchars(http_build_query($query_nav)) . '">' . $p . '</a></li>';
        }
        if ($page < $total_pages) { $query_nav['page'] = $page + 1; echo '<li><a href="?' . htmlspecialchars(http_build_query($query_nav)) . '">Next &raquo;</a></li>'; }
        else echo '<li><span class="disabled">Next &raquo;</span></li>';
        ?>
    </ul>
    <?php endif; ?>
</div>

<div class="table-responsive" style="margin-top:15px">
<table>
<thead><tr>
    <th>KODE_CABANG</th><th>TIPE</th><th class="text-right">TOTAL_ITEM</th><th class="text-right">TOTAL_QTY</th><th class="text-right">TOTAL_RUPIAH</th>
</tr></thead>
<tbody>
<?php if (!empty($display_rows)): ?>
    <?php foreach ($display_rows as $r): ?>
    <tr>
        <td><b><?= htmlspecialchars($r['KODE_CABANG']) ?></b></td>
        <td><?= htmlspecialchars($r['TIPE']) ?></td>
        <td class="text-right"><?= number_format($r['TOTAL_ITEM'], 0, ',', '.') ?></td>
        <td class="text-right"><?= number_format($r['TOTAL_QTY'], 2, ',', '.') ?></td>
        <td class="text-right"><?= number_format($r['TOTAL_RUPIAH'], 2, ',', '.') ?></td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="5" style="text-align:center;padding:25px;color:#64748B">Tidak ada data rekap untuk filter yang dipilih.</td></tr>
<?php endif; ?>
</tbody>
<tfoot>
<tr>
    <td colspan="2" class="text-right">GRAND TOTAL (SEMUA SERVER)</td>
    <td class="text-right"><?= number_format($grand_item, 0, ',', '.') ?></td>
    <td class="text-right"><?= number_format($grand_qty, 2, ',', '.') ?></td>
    <td class="text-right">Rp <?= number_format($grand_rp, 2, ',', '.') ?></td>
</tr>
</tfoot>
</table>
</div>
<?php else: ?>
<div class="table-responsive" style="padding:30px;text-align:center;color:#64748B">📌 Atur filter lalu klik <b>Tampilkan Rekap</b>.</div>
<?php endif; ?>
<div style="text-align:center;padding:12px;font-size:12px;color:#777;margin-top:15px">
    &copy; <?= date('Y') ?> Inventory Control Indogrosir — Laporan Sales Harian
</div>
</body>
</html>