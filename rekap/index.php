<?php
// Set limit waktu eksekusi & memori
ini_set('memory_limit', '1024M');
set_time_limit(0);

// ---------------------------------------------------------
// 1. DAFTAR SERVER / IP POSTGRESQL
// ---------------------------------------------------------
$servers = [
    // IGR
    ["id" => "IGR_AMB", "type" => "IGR", "name" => "IGR AMB", "host" => "192.168.230.191", "port" => "5432", "dbname" => "igramb", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BDG", "type" => "IGR", "name" => "IGR BDG", "host" => "192.168.222.191", "port" => "5432", "dbname" => "igrbdg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BDL", "type" => "IGR", "name" => "IGR BDL", "host" => "192.168.247.191", "port" => "5432", "dbname" => "igrbdl", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BGR", "type" => "IGR", "name" => "IGR BGR", "host" => "192.168.240.191", "port" => "5432", "dbname" => "igrbgr", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BKS", "type" => "IGR", "name" => "IGR BKS", "host" => "192.168.225.191", "port" => "5432", "dbname" => "igrbks", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BMS", "type" => "IGR", "name" => "IGR BMS", "host" => "192.168.239.191", "port" => "5432", "dbname" => "igrbms", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BTM", "type" => "IGR", "name" => "IGR BTM", "host" => "192.168.255.191", "port" => "5432", "dbname" => "igrbtm", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_CKL", "type" => "IGR", "name" => "IGR CKL", "host" => "192.168.249.191", "port" => "5432", "dbname" => "igrckl", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_CPG", "type" => "IGR", "name" => "IGR CPG", "host" => "192.168.226.191", "port" => "5432", "dbname" => "igrcpg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_CPT", "type" => "IGR", "name" => "IGR CPT", "host" => "192.168.245.191", "port" => "5432", "dbname" => "igrcpt", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_GTO", "type" => "IGR", "name" => "IGR GTO", "host" => "192.168.150.191", "port" => "5432", "dbname" => "igrgto", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_JBI", "type" => "IGR", "name" => "IGR JBI", "host" => "192.168.242.191", "port" => "5432", "dbname" => "igrjbi", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_KMY", "type" => "IGR", "name" => "IGR KMY", "host" => "192.168.234.191", "port" => "5432", "dbname" => "igrkmy", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_KRI", "type" => "IGR", "name" => "IGR KRI", "host" => "192.168.244.191", "port" => "5432", "dbname" => "igrkri", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_KRW", "type" => "IGR", "name" => "IGR KRW", "host" => "192.168.231.191", "port" => "5432", "dbname" => "igrkrw", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_MDN", "type" => "IGR", "name" => "IGR MDN", "host" => "192.168.229.191", "port" => "5432", "dbname" => "igrmdn", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_MDO", "type" => "IGR", "name" => "IGR MDO", "host" => "192.168.241.191", "port" => "5432", "dbname" => "igrmdo", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_MKS", "type" => "IGR", "name" => "IGR MKS", "host" => "192.168.243.191", "port" => "5432", "dbname" => "igrmks", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_MLG", "type" => "IGR", "name" => "IGR MLG", "host" => "192.168.246.191", "port" => "5432", "dbname" => "igrmlg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_PKU", "type" => "IGR", "name" => "IGR PKU", "host" => "192.168.235.191", "port" => "5432", "dbname" => "igrpku", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_PLG", "type" => "IGR", "name" => "IGR PLG", "host" => "192.168.232.191", "port" => "5432", "dbname" => "igrplg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_PTK", "type" => "IGR", "name" => "IGR PTK", "host" => "192.168.238.191", "port" => "5432", "dbname" => "igrptk", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_PWT", "type" => "IGR", "name" => "IGR PWT", "host" => "192.168.83.191",  "port" => "5432", "dbname" => "igrpwt", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_SBI", "type" => "IGR", "name" => "IGR SBI", "host" => "192.168.251.191", "port" => "5432", "dbname" => "igrsbi", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_SBY", "type" => "IGR", "name" => "IGR SBY", "host" => "192.168.227.191", "port" => "5432", "dbname" => "igrsby", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_SLO", "type" => "IGR", "name" => "IGR SLO", "host" => "192.168.248.191", "port" => "5432", "dbname" => "igrslo", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_SMD", "type" => "IGR", "name" => "IGR SMD", "host" => "192.168.236.191", "port" => "5432", "dbname" => "igrsmd", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_SMG", "type" => "IGR", "name" => "IGR SMG", "host" => "192.168.237.191", "port" => "5432", "dbname" => "igrsmg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_TGR", "type" => "IGR", "name" => "IGR TGR", "host" => "192.168.228.191", "port" => "5432", "dbname" => "igrtgr", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_YOG", "type" => "IGR", "name" => "IGR YOG", "host" => "192.168.224.191", "port" => "5432", "dbname" => "igrygy", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_BLI", "type" => "IGR", "name" => "IGR BLI", "host" => "192.168.148.191", "port" => "5432", "dbname" => "igrbli", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "IGR_PDG", "type" => "IGR", "name" => "IGR PDG", "host" => "192.168.142.191", "port" => "5432", "dbname" => "igrpdg", "user" => "edp", "password" => "3dp1grVIEW"],

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
    ["id" => "SPIX_BGR",  "type" => "SPI", "name" => "SPIX BGR",  "host" => "172.31.139.192", "port" => "5432", "dbname" => "spixbgrab","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPIX_BKS",  "type" => "SPI", "name" => "SPIX BKS",  "host" => "172.31.139.229", "port" => "5432", "dbname" => "spixbksaa","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPIX_SMG",  "type" => "SPI", "name" => "SPIX SMG",  "host" => "172.31.139.152", "port" => "5432", "dbname" => "spixsmgac","user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BKS4",  "type" => "SPI", "name" => "SPI BKS4",  "host" => "172.31.172.143", "port" => "5432", "dbname" => "spibks3x", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PLG",   "type" => "SPI", "name" => "SPI PLG",   "host" => "172.31.172.106", "port" => "5432", "dbname" => "spiplg3h", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_TGR4",  "type" => "SPI", "name" => "SPI TGR4",  "host" => "172.31.172.160", "port" => "5432", "dbname" => "spitgr3s", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MLG6",  "type" => "SPI", "name" => "SPI MLG6",  "host" => "172.31.172.179", "port" => "5432", "dbname" => "spimlg3y", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRI",   "type" => "SPI", "name" => "SPI KRI",   "host" => "172.31.172.233", "port" => "5432", "dbname" => "spikri3q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_JBI",   "type" => "SPI", "name" => "SPI JBI",   "host" => "172.31.172.184", "port" => "5432", "dbname" => "spijbi3r", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_AMB",   "type" => "SPI", "name" => "SPI AMB",   "host" => "172.31.172.235", "port" => "5432", "dbname" => "spiamb3t", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SBY8",  "type" => "SPI", "name" => "SPI SBY8",  "host" => "172.31.172.141", "port" => "5432", "dbname" => "spisby4a", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_KRI2",  "type" => "SPI", "name" => "SPI KRI2",  "host" => "172.31.172.69",  "port" => "5432", "dbname" => "spikri4d", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BMS3",  "type" => "SPI", "name" => "SPI BMS3",  "host" => "172.31.172.249", "port" => "5432", "dbname" => "spibms4e", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_CPG2",  "type" => "SPI", "name" => "SPI CPG2",  "host" => "172.31.172.153", "port" => "5432", "dbname" => "spicpg4l", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_PTK",   "type" => "SPI", "name" => "SPI PTK",   "host" => "172.31.172.164", "port" => "5432", "dbname" => "spiptk4m", "user" => "edp", "password" => "3dp1grVIEW"],
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
    ["id" => "ICM_AMB",   "type" => "ICM", "name" => "ICM AMB",   "host" => "192.168.230.191", "port" => "5432", "dbname" => "icmamb", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BDG",   "type" => "ICM", "name" => "ICM BDG",   "host" => "192.168.222.191", "port" => "5432", "dbname" => "icmbdg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BDL",   "type" => "ICM", "name" => "ICM BDL",   "host" => "192.168.247.191", "port" => "5432", "dbname" => "icmbdl", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BGR",   "type" => "ICM", "name" => "ICM BGR",   "host" => "192.168.240.191", "port" => "5432", "dbname" => "icmbgr", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BLI",   "type" => "ICM", "name" => "ICM BLI",   "host" => "192.168.148.191", "port" => "5432", "dbname" => "icmbli", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BMS",   "type" => "ICM", "name" => "ICM BMS",   "host" => "192.168.239.191", "port" => "5432", "dbname" => "icmbms", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BTM",   "type" => "ICM", "name" => "ICM BTM",   "host" => "192.168.255.191", "port" => "5432", "dbname" => "icmbtm", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_CKL",   "type" => "ICM", "name" => "ICM CKL",   "host" => "192.168.249.191", "port" => "5432", "dbname" => "icmckl", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_CPG",   "type" => "ICM", "name" => "ICM CPG",   "host" => "192.168.226.191", "port" => "5432", "dbname" => "icmcpg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_GTO",   "type" => "ICM", "name" => "ICM GTO",   "host" => "192.168.150.191", "port" => "5432", "dbname" => "icmgto", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_KMY",   "type" => "ICM", "name" => "ICM KMY",   "host" => "192.168.234.191", "port" => "5432", "dbname" => "icmkmy", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_KRI",   "type" => "ICM", "name" => "ICM KRI",   "host" => "192.168.244.191", "port" => "5432", "dbname" => "icmkri", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_KRW",   "type" => "ICM", "name" => "ICM KRW",   "host" => "192.168.231.191", "port" => "5432", "dbname" => "icmkrw", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_MDO",   "type" => "ICM", "name" => "ICM MDO",   "host" => "192.168.241.191", "port" => "5432", "dbname" => "icmmdo", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_MLG",   "type" => "ICM", "name" => "ICM MLG",   "host" => "192.168.246.191", "port" => "5432", "dbname" => "icmmlg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_PKU",   "type" => "ICM", "name" => "ICM PKU",   "host" => "192.168.235.191", "port" => "5432", "dbname" => "icmpku", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_PLG",   "type" => "ICM", "name" => "ICM PLG",   "host" => "192.168.232.191", "port" => "5432", "dbname" => "icmplg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_PTK",   "type" => "ICM", "name" => "ICM PTK",   "host" => "192.168.238.191", "port" => "5432", "dbname" => "icmptk", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_PWT",   "type" => "ICM", "name" => "ICM PWT",   "host" => "192.168.83.191",  "port" => "5432", "dbname" => "icmpwt", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_SBI",   "type" => "ICM", "name" => "ICM SBI",   "host" => "192.168.251.191", "port" => "5432", "dbname" => "icmsbi", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_SBY",   "type" => "ICM", "name" => "ICM SBY",   "host" => "192.168.227.191", "port" => "5432", "dbname" => "icmsby", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_SLO",   "type" => "ICM", "name" => "ICM SLO",   "host" => "192.168.248.191", "port" => "5432", "dbname" => "icmslo", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_SMD",   "type" => "ICM", "name" => "ICM SMD",   "host" => "192.168.236.191", "port" => "5432", "dbname" => "icmsmd", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_SMG",   "type" => "ICM", "name" => "ICM SMG",   "host" => "192.168.237.191", "port" => "5432", "dbname" => "icmsmg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_TGR",   "type" => "ICM", "name" => "ICM TGR",   "host" => "192.168.228.191", "port" => "5432", "dbname" => "icmtgr", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_YOG",   "type" => "ICM", "name" => "ICM YOG",   "host" => "192.168.224.191", "port" => "5432", "dbname" => "icmyog", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_CPT",   "type" => "ICM", "name" => "ICM CPT",   "host" => "192.168.245.191", "port" => "5432", "dbname" => "icmcpt", "user" => "edp", "password" => "3dp1grVIEW"]
];

// Parameter Dynamic Filter PLU & Dates
$sel_plu   = isset($_GET['plu']) ? trim($_GET['plu']) : '';
$plu_array = array_filter(array_map('trim', explode(',', $sel_plu)));
if (!empty($plu_array)) {
    $escaped_plu = array_map(function($p) { return "'" . addslashes($p) . "'"; }, $plu_array);
    $where_plu   = "ST_PRDCD IN (" . implode(',', $escaped_plu) . ")";
    $where_soic_plu = "rso_prdcd IN (" . implode(',', $escaped_plu) . ")";
    $where_mstran_plu = "mstd_prdcd IN (" . implode(',', $escaped_plu) . ")";
} else {
    $where_plu   = "1=1";
    $where_soic_plu = "1=1";
    $where_mstran_plu = "1=1";
}

$tgl_mulai   = $_GET['tgl_mulai'] ?? '';
$tgl_selesai = $_GET['tgl_selesai'] ?? '';

// Dynamic Filter Tanggal SO IC
$where_soic = $where_soic_plu;
if (!empty($tgl_mulai) && !empty($tgl_selesai)) {
    $where_soic .= " AND rso_tglso BETWEEN '" . addslashes($tgl_mulai) . "' AND '" . addslashes($tgl_selesai) . "'";
}

// Dynamic Filter Tanggal MSTRAN (MPP & NBH)
$where_mstran = $where_mstran_plu;
if (!empty($tgl_mulai) && !empty($tgl_selesai)) {
    $where_mstran .= " AND mstd_tgldoc BETWEEN '" . addslashes($tgl_mulai) . "' AND '" . addslashes($tgl_selesai) . "'";
}

// Dynamic Filter Tanggal Document (Retur Supplier)
$where_doc_tgl = $where_mstran_plu;
if (!empty($tgl_mulai) && !empty($tgl_selesai)) {
    $where_doc_tgl .= " AND mstd_tgldoc BETWEEN '" . addslashes($tgl_mulai) . "' AND '" . addslashes($tgl_selesai) . "'";
}

// ---------------------------------------------------------
// 2. DAFTAR QUERY LAPORAN
// ---------------------------------------------------------
$queries = [
    'lpp_retur' => [
        'title'   => 'LPP RETUR',
        'qty_col' => 'lpp',
        'rp_col'  => 'lpp_rph',
        'sql'     => "SELECT * FROM (
            SELECT * FROM (
                SELECT  
                    lks_koderak AS RAK, 
                    lks_kodesubrak AS SUB, 
                    lks_tiperak AS TIPE, 
                    LKS_SHELVINGRAK as SHLV, 
                    lks_nourut as NO_urut, 
                    lks_jenisrak as JENIS,
                    PRD_prdcd as PLU, 
                    PRD_KODEDIVISI AS DIV, 
                    PRD_KODEDEPARTEMENT AS DEP, 
                    PRD_KODEKATEGORIBARANG AS KAT,
                    PRD_DESKRIPSIPANJANG AS DESKRIPSI,
                    PRD_KODETAG AS TAG,
                    prc_kodetag as TAG_OMI,
                    PKM_PKMT AS PKMT,
                    PKM_QTYMPLUS AS MPLUS,
                    PRD_UNIT AS SAT, 
                    PRD_FRAC AS FRC, 
                    PRD_PERLAKUANBARANG STT,
                    CASE 
                        WHEN prd_flagnas='Y' AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NASIONAL'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'IGR'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'OMI'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'K.IGR'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagidm='Y' THEN 'IDM ONLY'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+IGR'
                        WHEN prd_flagnas='Y' AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+OMI'
                        WHEN prd_flagnas='Y' AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+K.IGR'
                        WHEN prd_flagnas='Y' AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND prd_flagidm='Y' THEN 'NAS+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'IGR+OMI'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'IGR+K.IGR'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagidm='Y' THEN 'IGR+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND prd_flagomi='Y' AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'OMI+K.IGR'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND prd_flagidm='Y' THEN 'OMI+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagobi='Y' AND prd_flagidm='Y' THEN 'K.IGR+IDM'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+IGR+OMI'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+IGR+K.IGR'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND prd_flagidm='Y' THEN 'NAS+IGR+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND prd_flagomi='Y' AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'IGR+OMI+K.IGR'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND prd_flagidm='Y' THEN 'IGR+OMI+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND prd_flagomi='Y' AND prd_flagobi='Y' AND prd_flagidm='Y' THEN 'OMI+K.IGR+IDM'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND prd_flagomi='Y' AND prd_flagobi='Y' AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'NAS+IGR+OMI+K.IGR'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND prd_flagomi='Y' AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND prd_flagidm='Y' THEN 'NAS+IGR+OMI+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND prd_flagigr='Y' AND prd_flagomi='Y' AND prd_flagobi='Y' AND prd_flagidm='Y' THEN 'IGR+OMI+K.IGR+IDM'
                        WHEN prd_flagnas='Y' AND prd_flagigr='Y' AND prd_flagomi='Y' AND prd_flagobi='Y' AND prd_flagidm='Y' THEN 'NAS+IGR+OMI+K.IGR+IDM'
                        WHEN (prd_flagnas='N' OR prd_flagnas IS NULL) AND (prd_flagigr='N' OR prd_flagigr IS NULL) AND (prd_flagomi='N' OR prd_flagomi IS NULL) AND (prd_flagobi='N' OR prd_flagobi IS NULL) AND (prd_flagidm='N' OR prd_flagidm IS NULL) THEN 'TIDAK ADA FLAG'
                        ELSE ' ' END AS FLAG,
                    ROUND(ST_AVGCOST) AS ACOST,
                    ROUND(ST_LASTCOST) AS LCOST,
                    ST_SALDOAKHIR AS LPP,
                    CASE WHEN PRD_UNIT='KG' THEN (ST_AVGCOST/1000)*ST_SALDOAKHIR ELSE ST_AVGCOST*ST_SALDOAKHIR END AS LPP_RPH,
                    PRD_CREATE_DT AS TGL_AKTIF,
                    TO_CHAR(BPBAKHIR.BPBTERAKHIR,'DD/MM/YYYY') AS TGLBPB,
                    lks_expdate AS TGL_ED,
                    prd_tgldiscontinue AS TGL_TAG,
                    SUP_NAMASUPPLIER AS NAMASUPPLIER
                FROM TBMASTER_STOCK
                LEFT JOIN (SELECT * FROM TBMASTER_LOKASI WHERE LKS_TIPERAK NOT IN ('Z','S')) TYPE ON ST_PRDCD=LKS_PRDCD
                LEFT JOIN TBMASTER_PRODMAST ON ST_PRDCD=prd_prdcd
                LEFT JOIN tbtr_salesbulanan ON sls_prdcd=prd_prdcd
                LEFT JOIN TBMASTER_KKPKM ON PRD_PRDCD = PKM_PRDCD    
                LEFT JOIN (SELECT DISTINCT (mstd_prdcd) AS PLPB, MAX(mstd_tgldoc) AS BPBTERAKHIR  
                           FROM tbtr_mstran_d WHERE mstd_typetrn='B' GROUP BY mstd_prdcd) BPBAKHIR ON (ST_PRDCD=BPBAKHIR.PLPB)
                LEFT JOIN tbmaster_prodcrm ON prc_pluigr=prd_prdcd 
                LEFT JOIN TBMASTER_HARGABELI ON HGB_PRDCD = PRD_PRDCD
                LEFT JOIN TBMASTER_SUPPLIER ON SUP_KODESUPPLIER = HGB_KODESUPPLIER
                WHERE ST_LOKASI='02' AND {$where_plu}
                ORDER BY LKS_KODERAK, LKS_KODESUBRAK, LKS_TIPERAK, LKS_SHELVINGRAK, LKS_NOURUT
            ) sub1 ORDER BY 9 ASC
        ) sub1 ORDER BY 14 DESC"
    ],
    'so_ic' => [
        'title'   => 'SO IC',
        'qty_col' => 'qtyso',
        'rp_col'  => 'rpso',
        'sql'     => "SELECT 
            to_char(rso_tglso,'DD-MM-YYYY') AS TGL,   
            prd_kodedivisi AS DIV, prd_kodedepartement AS DEP, prd_kodekategoribarang AS KAT,   
            rso_prdcd AS PRDCD, prd_deskripsipanjang AS DESKRIPSI, prd_unit AS UNT, prd_frac AS FRC, prd_kodetag AS TAG,   
            CASE WHEN PRD_FLAGNAS='Y' AND PRD_FLAGOMI='Y' THEN 'IGR+OMI'        
                 WHEN PRD_FLAGNAS IS NULL AND PRD_FLAGOMI='Y' THEN 'OMI ONLY'        
                 WHEN PRD_FLAGNAS ='Y' AND PRD_FLAGOMI IS NULL THEN 'IGR ONLY'        
                 ELSE 'TIDAK TAU'        
            END flag,   
            rso_qtyreset AS QTYSO,   
            rso_qtyreset*rso_avgcostreset AS RPSO,
            rso_kodeso AS NO_REFF, 
            case when rso_kodeso like 'P%' then 'UJIPETIK' else 'REGULER' END AS KETERANGAN
        FROM TBTR_RESET_SOIC 
        left join tbmaster_prodmast on (rso_prdcd=prd_prdcd) 
        left join tbmaster_prodcrm on rso_prdcd=prc_pluigr
        where {$where_soic}
        order by rso_tglso desc"
    ],
    'master_mpp' => [
        'title'   => 'Laporan MPP',
        'qty_col' => 'QTY',
        'rp_col'  => 'GROSS',
        'sql'     => "SELECT
            to_char(MSTD_TGLDOC, 'DD-MM-YYYY') AS TGL,
            MSTD_KODEDIVISI AS DIV, MSTD_KODEDEPARTEMENT AS DEP, MSTD_KODEKATEGORIBRG AS KAT,
            MSTD_PRDCD AS PLU, PRD_DESKRIPSIPANJANG AS DESKRIPSI, MSTD_UNIT AS UNIT, MSTD_FRAC AS FRAC, MSTD_KODETAG AS TAG,
            case when prd_flagomi='Y' and prc_pluigr is not null then 'IGR+OMI' else 'IGR ONLY' end as FLAG, 
            MSTD_QTY AS QTY, MSTD_GROSS AS GROSS, MSTD_KETERANGAN
        FROM TBTR_MSTRAN_D
        left join tbmaster_prodmast on prd_prdcd=mstd_prdcd      
        left join tbmaster_prodcrm on prc_pluigr=prd_prdcd 
        WHERE MSTD_TYPETRN='X' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        ORDER BY MSTD_TGLDOC DESC"
    ],
    'master_nbh' => [
        'title'   => 'Laporan NBH',
        'qty_col' => 'QTY',
        'rp_col'  => 'GROSS',
        'sql'     => "SELECT     
            to_char(MSTD_TGLDOC, 'DD-MM-YYYY') AS TGL,
            MSTD_KODEDIVISI AS DIV, MSTD_KODEDEPARTEMENT AS DEP, MSTD_KODEKATEGORIBRG AS KAT,
            MSTD_PRDCD AS PLU, PRD_DESKRIPSIPANJANG AS DESKRIPSI, MSTD_UNIT AS UNIT, MSTD_FRAC AS FRAC, MSTD_KODETAG AS TAG,
            case when prd_flagomi='Y' and prc_pluigr is not null then 'IGR+OMI' else 'IGR ONLY' end as FLAG, 
            MSTD_QTY AS QTY, MSTD_GROSS AS GROSS, MSTD_DISCRPH AS DISCOUNT, MSTD_KETERANGAN AS KETERANGAN  
        FROM TBTR_MSTRAN_D
        left join tbmaster_prodmast on prd_prdcd=mstd_prdcd      
        left join tbmaster_prodcrm on prc_pluigr=prd_prdcd 
        WHERE MSTD_TYPETRN='H' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        ORDER BY MSTD_TGLDOC DESC"
    ],
    'retur_supplier' => [
        'title'   => 'RETUR KE SUPPLIER',
        'qty_col' => 'qty',
        'rp_col'  => 'gross',
        'sql'     => "SELECT
            TO_CHAR(mstd_tgldoc, 'YYYY-MM-DD') AS blndoc,
            MSTD_NODOC AS NODOC,
            mstd_prdcd AS plu,
            MSTD_KODEDIVISI AS DIV,
            MSTD_KODEDEPARTEMENT AS DEP,
            MSTD_KODEKATEGORIBRG AS KAT,
            prd_deskripsipanjang AS deskripsi,     
            prd_kodetag,
            mstd_unit AS unit,             
            mstd_frac AS frac,             
            mstd_qty AS qty,             
            mstd_gross AS gross,             
            mstd_discrph AS disc,             
            mstd_ppnrph AS ppn,
            MSTD_KODESUPPLIER AS KODE_SUPPLIER,
            SUP_NAMASUPPLIER AS NAMA_SUPPLIER
        FROM tbmaster_supplier,             
            tbtr_mstran_d,             
            tbmaster_prodmast             
        WHERE mstd_typetrn IN ('K')             
        AND {$where_doc_tgl}         
        AND mstd_kodesupplier = sup_kodesupplier             
        AND mstd_prdcd = prd_prdcd             
        AND mstd_recordid IS NULL
        ORDER BY mstd_tgldoc DESC, MSTD_NODOC"
    ],
    'tidak_ada_sales' => [
        'title'   => 'TIDAK ADA SALES',
        'qty_col' => 'lpp_pcs',
        'rp_col'  => 'lpp_rupiah',
        'sql'     => "SELECT      
            PRD_KODEDIVISI DIV, 
            PRD_KODEDEPARTEMENT DEPT, 
            PRD_KODEKATEGORIBARANG KATB, 
            ST_PRDCD PLU, 
            PRD_DESKRIPSIPANJANG DESKRIPSI, 
            PRD_UNIT UNT, 
            PRD_FRAC FRC, 
            PRD_KODETAG TAG,
            prc_kodetag as TAG_OMI,
            CASE 
                WHEN PRC_PLUigr IS NOT NULL AND PRD_FLAGIDM='N' THEN 'IGR+IDM' 
                WHEN PRC_PLUigr IS NOT NULL AND PRD_FLAGIDM='Y' THEN 'IDM ONLY' 
                WHEN PRC_PLUigr IS NULL THEN 'IGR ONLY' 
                ELSE 'TIDAK TAU' 
            END flag, 
            PRD_PERLAKUANBARANG STATUS,
            PRD_TGLDISCONTINUE TGL_AKTIF,
            ST_AVGCOST ACOST, 
            ST_SALDOAKHIR LPP_PCS, 
            CASE 
                WHEN PRD_unit='KG' THEN (ST_AVGCOST/1000)*ST_SALDOAKHIR 
                ELSE ST_AVGCOST*ST_SALDOAKHIR 
            END LPP_RUPIAH, 
            COALESCE(SLS_RPH_01,0) AS SLS_RPH_JAN,
            COALESCE(SLS_RPH_02,0) AS SLS_RPH_FEB,  
            COALESCE(SLS_RPH_03,0) AS SLS_RPH_MAR,            
            COALESCE(SLS_RPH_04,0) AS SLS_RPH_APR,
            COALESCE(SLS_RPH_05,0) AS SLS_RPH_MEI,
            COALESCE(SLS_RPH_06,0) AS SLS_RPH_JUN, 
            COALESCE(SLS_RPH_07,0) AS SLS_RPH_JUL,
            COALESCE(SLS_RPH_08,0) AS SLS_RPH_AGT,
            COALESCE(SLS_RPH_09,0) AS SLS_RPH_SEP,
            COALESCE(SLS_RPH_10,0) AS SLS_RPH_OKT,
            COALESCE(SLS_RPH_11,0) AS SLS_RPH_NOV,
            COALESCE(SLS_RPH_12,0) AS SLS_RPH_DES,
            TO_CHAR(BPBAKHIR.BPBTERAKHIR,'DD/MM/YYYY') TGLBPB 
        FROM TBMASTER_STOCK 
        LEFT JOIN TBMASTER_PRODMAST ON ST_PRDCD=PRD_PRDCD 
        LEFT JOIN tbmaster_prodcrm ON PRD_PRDCD=prc_pluigr 
        LEFT JOIN TBTR_SALESBULANAN ON (ST_PRDCD=SLS_PRDCD) 
        LEFT JOIN (
            SELECT DISTINCT (mstd_prdcd) PLPB, MAX(mstd_tgldoc) BPBTERAKHIR  
            FROM tbtr_mstran_d 
            WHERE mstd_typetrn='B' 
            GROUP BY mstd_prdcd
        ) BPBAKHIR ON (ST_PRDCD=BPBAKHIR.PLPB) 
        WHERE ST_LOKASI='01' AND {$where_plu}"
    ]
];

// Parameter Filter UI
$sel_perusahaan = $_GET['perusahaan'] ?? 'ALL';
$sel_cabang     = $_GET['cabang'] ?? 'ALL';

// Daftar Laporan
$reports = [
    ["id" => 1, "code" => "lpp_retur",       "name" => "LPP RETUR (Running) "],
    ["id" => 2, "code" => "so_ic",            "name" => "SO IC"],
    ["id" => 3, "code" => "master_mpp",       "name" => "Laporan MPP (MPP)"],
    ["id" => 4, "code" => "master_nbh",       "name" => "Laporan NBH (NBH)"],
    ["id" => 5, "code" => "retur_supplier",   "name" => "Retur Ke Supplier"],
    ["id" => 6, "code" => "tidak_ada_sales",  "name" => "Tidak Ada Sales (Running)"]
];

// ---------------------------------------------------------
// 3. HANDLER EXPORT DATA REAL DARI DATABASE
// ---------------------------------------------------------
$action      = $_GET['action'] ?? '';
$report_type = $_GET['report_type'] ?? '';

if (in_array($action, ['export_txt', 'export_xls', 'export_csv'])) {
    
    // Server-Side Validation: Cek apakah laporan butuh tanggal tapi tanggal kosong
    $require_date_reports = ['so_ic', 'master_mpp', 'master_nbh', 'retur_supplier'];
    if (in_array($report_type, $require_date_reports) && (empty($tgl_mulai) || empty($tgl_selesai))) {
        echo "<script>alert('Harap pilih rentang tanggal terlebih dahulu!'); window.history.back();</script>";
        exit;
    }

    $filename = "Laporan_" . strtoupper($report_type) . "_" . date('Ymd_His');

    $target_servers = [];
    foreach ($servers as $s) {
        if ($sel_perusahaan !== 'ALL' && $s['type'] !== $sel_perusahaan) continue;
        if ($sel_cabang !== 'ALL' && $s['id'] !== $sel_cabang) continue;
        $target_servers[] = $s;
    }

    $active_report  = isset($queries[$report_type]) ? $queries[$report_type] : $queries['lpp_retur'];
    $sql_to_execute = $active_report['sql'];
    $qty_col        = strtolower($active_report['qty_col']);
    $rp_col         = strtolower($active_report['rp_col']);
    $grand_qty      = 0;
    $grand_rp       = 0;

    // --- A. EXPORT CSV ---
    if ($action === 'export_csv') {
        header("Content-Type: text/csv; charset=utf-8");
        header("Content-Disposition: attachment; filename={$filename}.csv");
        header("Pragma: no-cache");
        header("Expires: 0");

        $output = fopen("php://output", "w");
        fputs($output, "\xEF\xBB\xBF");

        $is_header_printed = false;

        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
            $dbconn = @pg_connect($conn_string);

            if ($dbconn) {
                $result = @pg_query($dbconn, $sql_to_execute);
                if ($result) {
                    if (!$is_header_printed) {
                        $headers = ['CAB'];
                        $num_fields = pg_num_fields($result);
                        for ($i = 0; $i < $num_fields; $i++) {
                            $headers[] = strtoupper(pg_field_name($result, $i));
                        }
                        fputcsv($output, $headers);
                        $is_header_printed = true;
                    }

                    while ($row = pg_fetch_assoc($result)) {
                        $csv_row = [$server['name']];
                        foreach ($row as $key => $value) {
                            $csv_row[] = $value ?? '';
                            $field_name = strtolower($key);
                            if ($field_name === $qty_col) $grand_qty += (float)$value;
                            if ($field_name === $rp_col) $grand_rp += (float)$value;
                        }
                        fputcsv($output, $csv_row);
                    }
                    pg_free_result($result);
                }
                pg_close($dbconn);
            }
        }
        fclose($output);
        exit;
    }

    // --- B. EXPORT XLS ---
    if ($action === 'export_xls') {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename={$filename}.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        echo "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
        echo "<head><meta charset='utf-8'></head><body>";
        echo "<table border='1' cellpadding='3' cellspacing='0' style='border-collapse:collapse; font-family:Calibri, sans-serif; font-size:11pt;'>";
        
        $is_header_printed = false;

        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
            $dbconn = @pg_connect($conn_string);

            if ($dbconn) {
                $result = @pg_query($dbconn, $sql_to_execute);
                if ($result) {
                    if (!$is_header_printed) {
                        echo "<tr style='font-weight:bold; background-color:#1E293B; color:white;'>";
                        echo "<th>CAB</th>";
                        $num_fields = pg_num_fields($result);
                        for ($i = 0; $i < $num_fields; $i++) {
                            echo "<th>" . htmlspecialchars(strtoupper(pg_field_name($result, $i))) . "</th>";
                        }
                        echo "</tr>";
                        $is_header_printed = true;
                    }

                    while ($row = pg_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($server['name']) . "</td>";
                        foreach ($row as $key => $value) {
                            $val = htmlspecialchars($value ?? '');
                            $field_name = strtolower($key);

                            if (in_array($field_name, ['plu', 'prdcd', 'div', 'dep', 'dept', 'kat', 'katb', 'rak', 'sub', 'shlv', 'no_urut', 'nodoc', 'kode_supplier'])) {
                                echo "<td style='mso-number-format:\"\\@\";'>" . $val . "</td>";
                            } elseif (in_array($field_name, ['lpp', 'lpp_rph', 'lpp_pcs', 'lpp_rupiah', 'qtyso', 'rpso', 'qty', 'gross', 'discount', 'disc', 'ppn', 'acost', 'lcost', 'pkmt', 'mplus', 'frac', 'frc']) || strpos($field_name, 'sls_rph_') !== false) {
                                echo "<td style='text-align:right;'>" . (is_numeric($value) ? number_format((float)$value, 2, '.', '') : $val) . "</td>";
                            } else {
                                echo "<td>" . $val . "</td>";
                            }

                            if ($field_name === $qty_col) $grand_qty += (float)$value;
                            if ($field_name === $rp_col) $grand_rp += (float)$value;
                        }
                        echo "</tr>";
                    }
                    pg_free_result($result);
                }
                pg_close($dbconn);
            }
            if (ob_get_level() > 0) { ob_flush(); flush(); }
        }

        if ($is_header_printed) {
            echo "<tr style='font-weight:bold; background-color:#E2E8F0;'>";
            echo "<td colspan='10' style='text-align:right;'>GRAND TOTAL:</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
            echo "<td colspan='13'></td>";
            echo "</tr>";
        }

        echo "</table></body></html>";
        exit;
    }

    // --- C. EXPORT TXT (Tab Delimited) ---
    if ($action === 'export_txt') {
        header("Content-Type: text/plain; charset=utf-8");
        header("Content-Disposition: attachment; filename={$filename}.txt");
        header("Pragma: no-cache");
        header("Expires: 0");

        $output = fopen("php://output", "w");
        fputs($output, "\xEF\xBB\xBF");

        $is_header_printed = false;

        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
            $dbconn = @pg_connect($conn_string);

            if ($dbconn) {
                $result = @pg_query($dbconn, $sql_to_execute);
                if ($result) {
                    if (!$is_header_printed) {
                        $headers = ['CAB'];
                        $num_fields = pg_num_fields($result);
                        for ($i = 0; $i < $num_fields; $i++) {
                            $headers[] = strtoupper(pg_field_name($result, $i));
                        }
                        fputs($output, implode("\t", $headers) . "\r\n");
                        $is_header_printed = true;
                    }

                    while ($row = pg_fetch_assoc($result)) {
                        $txt_row = [$server['name']];
                        foreach ($row as $key => $value) {
                            $txt_row[] = str_replace(["\r", "\n", "\t"], " ", $value ?? '');
                            $field_name = strtolower($key);
                            if ($field_name === $qty_col) $grand_qty += (float)$value;
                            if ($field_name === $rp_col) $grand_rp += (float)$value;
                        }
                        fputs($output, implode("\t", $txt_row) . "\r\n");
                    }
                    pg_free_result($result);
                }
                pg_close($dbconn);
            }
        }
        fclose($output);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Modernisasi - Indogrosir</title>
    <style>
        * { box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; }
        body { background-color: #ffffff; margin: 0; padding: 25px 40px; color: #333; }
        
        .page-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 25px; }
        
        .logo-container { width: 155px; height: auto; }
        .logo-container img { width: 100%; height: auto; display: block; }

        .filter-section { display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px; }
        .filter-row { display: flex; gap: 25px; align-items: flex-end; flex-wrap: wrap; }
        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group label { font-size: 13px; font-weight: 700; color: #1e293b; }
        
        select, input[type="date"] {
            padding: 7px 12px; font-size: 13px; border: 1px solid #cbd5e1;
            border-radius: 6px; background-color: #fff; outline: none; min-width: 180px;
        }
        select:focus, input[type="date"]:focus { border-color: #2563eb; }
        
        .date-range-group { display: flex; align-items: center; gap: 8px; }
        .date-range-group span { font-size: 12px; color: #64748b; font-weight: 600; }
        
        .table-controls { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        .entries-control { display: flex; align-items: center; gap: 8px; font-size: 13px; color: #334155; }
        .entries-control select { min-width: 60px; padding: 4px 8px; }
        .search-control { display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; }
        .search-control input { padding: 5px 10px; border: 1px solid #cbd5e1; border-radius: 4px; min-width: 180px; }

        .table-container { border-top: 1px solid #e2e8f0; width: 100%; }
        table { width: 100%; border-collapse: collapse; font-size: 13px; }
        th { padding: 12px 16px; text-align: left; font-weight: 700; color: #0f172a; border-bottom: 2px solid #e2e8f0; background: #fff; }
        th.sortable { cursor: pointer; }
        th.sortable::after { content: '⇅'; font-size: 10px; margin-left: 6px; color: #94a3b8; }
        
        td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; color: #334155; }
        tr:nth-child(even) { background-color: #f8fafc; }
        tr:hover { background-color: #f1f5f9; }

        .col-no { width: 70px; text-align: center; }
        .col-action { width: 120px; text-align: center; }

        .btn-download {
            background-color: #1d4ed8; color: white; border: none; padding: 6px 14px;
            font-size: 12px; font-weight: 600; border-radius: 4px; cursor: pointer;
            transition: background 0.2s; text-decoration: none; display: inline-block;
        }
        .btn-download:hover { background-color: #1e40af; }

        .modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.4); justify-content: center; align-items: center; z-index: 1000; }
        .modal-content { background: #fff; padding: 20px 25px; border-radius: 8px; width: 340px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
        .modal-header { font-weight: bold; font-size: 15px; margin-bottom: 15px; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px; }
        .modal-body { display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px; }
        .btn-export { padding: 10px; border-radius: 5px; text-align: center; text-decoration: none; color: white; font-weight: bold; font-size: 13px; }
        .btn-export-txt { background-color: #d97706; }
        .btn-export-xls { background-color: #15803d; }
        .btn-export-csv { background-color: #0284c7; }
        .btn-close { background: #64748b; color: white; border: none; padding: 6px; border-radius: 4px; width: 100%; cursor: pointer; }
    </style>
</head>
<body>

    <div class="page-header">
        <form id="filterForm" method="GET" class="filter-section">
            <div class="form-group">
                <label for="perusahaan">Perusahaan</label>
                <select name="perusahaan" id="perusahaan" onchange="this.form.submit()">
                    <option value="ALL" <?= $sel_perusahaan == 'ALL' ? 'selected' : '' ?>>All (IGR/SPI/ICM)</option>
                    <option value="IGR" <?= $sel_perusahaan == 'IGR' ? 'selected' : '' ?>>IGR ONLY</option>
                    <option value="SPI" <?= $sel_perusahaan == 'SPI' ? 'selected' : '' ?>>SPI ONLY</option>
                    <option value="ICM" <?= $sel_perusahaan == 'ICM' ? 'selected' : '' ?>>ICM ONLY</option>
                </select>
            </div>

            <div class="filter-row">
                <div class="form-group">
                    <label for="cabang">Cabang</label>
                    <select name="cabang" id="cabang" onchange="this.form.submit()">
                        <option value="ALL">All Cabang (IGR/SPI/ICM)</option>
                        <?php foreach ($servers as $srv): 
                            if ($sel_perusahaan !== 'ALL' && $srv['type'] !== $sel_perusahaan) continue; ?>
                            <option value="<?= $srv['id'] ?>" <?= $sel_cabang == $srv['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($srv['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Periode</label>
                    <div class="date-range-group">
                        <input type="date" id="tgl_mulai" name="tgl_mulai" value="<?= htmlspecialchars($tgl_mulai) ?>" onchange="this.form.submit()">
                        <span>s/d</span>
                        <input type="date" id="tgl_selesai" name="tgl_selesai" value="<?= htmlspecialchars($tgl_selesai) ?>" onchange="this.form.submit()">
                    </div>
                </div>
            </div>
        </form>

        <div class="logo-container">
            <img src="logo1.png" alt="Logo Indogrosir">
        </div>
    </div>

    <div class="table-controls">
        <div class="entries-control">
            <select id="entriesPerPage">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <span>entries per page</span>
        </div>
        <div class="search-control">
            <label for="tableSearch">Search:</label>
            <input type="text" id="tableSearch" onkeyup="filterTable()">
        </div>
    </div>

    <div class="table-container">
        <table id="reportTable">
            <thead>
                <tr>
                    <th class="col-no sortable" onclick="sortTable(0)">No.</th>
                    <th class="sortable" onclick="sortTable(1)">Nama</th>
                    <th class="col-action sortable" onclick="sortTable(2)">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reports as $index => $row): ?>
                    <tr>
                        <td class="col-no"><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td class="col-action">
                            <button class="btn-download" onclick="openExportModal('<?= $row['code'] ?>')">Download</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="exportModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">Pilih Format Export</div>
            <div class="modal-body">
                <a id="btnTxt" href="#" class="btn-export btn-export-txt">Download .TXT</a>
                <a id="btnXls" href="#" class="btn-export btn-export-xls">Download .XLS</a>
                <a id="btnCsv" href="#" class="btn-export btn-export-csv">Download .CSV</a>
            </div>
            <button class="btn-close" onclick="closeExportModal()">Batal</button>
        </div>
    </div>

    <script>
        function openExportModal(code) {
            // Validasi tanggal untuk laporan tertentu
            const requireDateReports = ['so_ic', 'master_mpp', 'master_nbh', 'retur_supplier'];
            const tglMulai = document.getElementById('tgl_mulai').value;
            const tglSelesai = document.getElementById('tgl_selesai').value;

            if (requireDateReports.includes(code)) {
                if (!tglMulai || !tglSelesai) {
                    alert('Harap pilih rentang tanggal terlebih dahulu!');
                    return; // Hentikan proses dan jangan tampilkan modal
                }
            }

            const params = new URLSearchParams(window.location.search);
            params.set('report_type', code);

            params.set('action', 'export_txt');
            document.getElementById('btnTxt').href = '?' + params.toString();

            params.set('action', 'export_xls');
            document.getElementById('btnXls').href = '?' + params.toString();

            params.set('action', 'export_csv');
            document.getElementById('btnCsv').href = '?' + params.toString();

            document.getElementById('exportModal').style.display = 'flex';
        }

        function closeExportModal() {
            document.getElementById('exportModal').style.display = 'none';
        }

        function filterTable() {
            const input = document.getElementById("tableSearch").value.toUpperCase();
            const table = document.getElementById("reportTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    let txtValue = td.textContent || td.innerText;
                    tr[i].style.display = txtValue.toUpperCase().indexOf(input) > -1 ? "" : "none";
                }
            }
        }

        function sortTable(n) {
            let table = document.getElementById("reportTable");
            let rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            switching = true;
            dir = "asc"; 
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount ++; 
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</body>
</html>