<?php
// Set execution time limit
set_time_limit(300);

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
    ["id" => "SPI_BMS4",  "type" => "SPI", "name" => "SPI BMS4",  "host" => "172.31.172.239", "port" => "5432", "dbname" => "spibms4x", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_MKS2",  "type" => "SPI", "name" => "SPI MKS2",  "host" => "172.31.172.133", "port" => "5432", "dbname" => "spimks3v", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_SMD3",  "type" => "SPI", "name" => "SPI SMD3",  "host" => "172.31.172.248", "port" => "5432", "dbname" => "spismd4q", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "SPI_BLI",   "type" => "SPI", "name" => "SPI BLI",   "host" => "172.31.172.212", "port" => "5432", "dbname" => "spibli4f", "user" => "edp", "password" => "3dp1grVIEW"],

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

// ---------------------------------------------------------
// 2. PARAMETER FILTER, PAGINATION, DAN TRIGGER SEARCH
// ---------------------------------------------------------

$is_searched = isset($_GET['search']) && $_GET['search'] === '1';

$sel_type   = isset($_GET['server_type']) ? $_GET['server_type'] : 'ALL';

// Multi-Select Cabang
$sel_cabang = isset($_GET['cabang']) ? $_GET['cabang'] : ['ALL'];
if (!is_array($sel_cabang)) {
    $sel_cabang = [$sel_cabang];
}

$sel_view   = isset($_GET['view_mode']) ? $_GET['view_mode'] : 'detail';

// Filter Input Pencarian Text
$search_nopb   = isset($_GET['search_nopb']) ? trim($_GET['search_nopb']) : '';
$search_member = isset($_GET['search_member']) ? trim($_GET['search_member']) : '';

// Multi-Select Tanggal
$sel_tgl    = isset($_GET['tgl']) ? $_GET['tgl'] : ['ALL'];
if (!is_array($sel_tgl)) {
    $sel_tgl = [$sel_tgl];
}

// Multi-Select Bulan
$sel_bulan  = isset($_GET['bulan']) ? $_GET['bulan'] : [date('m')];
if (!is_array($sel_bulan)) {
    $sel_bulan = [$sel_bulan];
}

$sel_tahun  = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');

// Pagination System
$page       = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page   = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 50; 

// Filter Server Berdasarkan Tipe & Cabang
$target_servers = [];
foreach ($servers as $s) {
    if ($sel_type !== 'ALL' && $s['type'] !== $sel_type) {
        continue;
    }
    if (!in_array('ALL', $sel_cabang) && !in_array($s['id'], $sel_cabang)) {
        continue;
    }
    $target_servers[] = $s;
}

// Where Query - Dynamic Filter Tanggal & Waktu
$cond_obi_tgltrans   = [];
$cond_h_obi_tgltrans = [];
$cond_sti_tgl        = [];
$cond_obi_tglpb      = [];
$cond_h_obi_tglpb    = [];

if (!in_array('ALL', $sel_tgl) && !empty($sel_tgl)) {
    $clean_tgl = array_map('intval', $sel_tgl);
    $cond_obi_tgltrans[]   = "EXTRACT(DAY FROM obi_tgltrans) IN (" . implode(',', $clean_tgl) . ")";
    $cond_h_obi_tgltrans[] = "EXTRACT(DAY FROM h.obi_tgltrans) IN (" . implode(',', $clean_tgl) . ")";
    $cond_sti_tgl[]        = "EXTRACT(DAY FROM sti_tglserahterima) IN (" . implode(',', $clean_tgl) . ")";
    $cond_obi_tglpb[]      = "EXTRACT(DAY FROM obi_tglpb) IN (" . implode(',', $clean_tgl) . ")";
    $cond_h_obi_tglpb[]    = "EXTRACT(DAY FROM h.obi_tglpb) IN (" . implode(',', $clean_tgl) . ")";
}

if (!in_array('ALL', $sel_bulan) && !empty($sel_bulan)) {
    $clean_bulan = array_map('intval', $sel_bulan);
    $cond_obi_tgltrans[]   = "EXTRACT(MONTH FROM obi_tgltrans) IN (" . implode(',', $clean_bulan) . ")";
    $cond_h_obi_tgltrans[] = "EXTRACT(MONTH FROM h.obi_tgltrans) IN (" . implode(',', $clean_bulan) . ")";
    $cond_sti_tgl[]        = "EXTRACT(MONTH FROM sti_tglserahterima) IN (" . implode(',', $clean_bulan) . ")";
    $cond_obi_tglpb[]      = "EXTRACT(MONTH FROM obi_tglpb) IN (" . implode(',', $clean_bulan) . ")";
    $cond_h_obi_tglpb[]    = "EXTRACT(MONTH FROM h.obi_tglpb) IN (" . implode(',', $clean_bulan) . ")";
}

if ($sel_tahun !== 'ALL') {
    $cond_obi_tgltrans[]   = "EXTRACT(YEAR FROM obi_tgltrans) = " . (int)$sel_tahun;
    $cond_h_obi_tgltrans[] = "EXTRACT(YEAR FROM h.obi_tgltrans) = " . (int)$sel_tahun;
    $cond_sti_tgl[]        = "EXTRACT(YEAR FROM sti_tglserahterima) = " . (int)$sel_tahun;
    $cond_obi_tglpb[]      = "EXTRACT(YEAR FROM obi_tglpb) = " . (int)$sel_tahun;
    $cond_h_obi_tglpb[]    = "EXTRACT(YEAR FROM h.obi_tglpb) = " . (int)$sel_tahun;
}

// Additional Filters for NO PB and Nama Member
if ($search_nopb !== '') {
    $escaped_nopb = pg_escape_string($search_nopb);
    $cond_obi_tgltrans[]   = "obi_nopb ILIKE '%{$escaped_nopb}%'";
    $cond_h_obi_tgltrans[] = "h.obi_nopb ILIKE '%{$escaped_nopb}%'";
    $cond_sti_tgl[]        = "obi_nopb ILIKE '%{$escaped_nopb}%'";
    $cond_obi_tglpb[]      = "obi_nopb ILIKE '%{$escaped_nopb}%'";
    $cond_h_obi_tglpb[]    = "h.obi_nopb ILIKE '%{$escaped_nopb}%'";
}

if ($search_member !== '') {
    $escaped_member = pg_escape_string($search_member);
    $cond_obi_tgltrans[]   = "c.cus_namamember ILIKE '%{$escaped_member}%'";
    $cond_h_obi_tgltrans[] = "c.cus_namamember ILIKE '%{$escaped_member}%'";
    $cond_sti_tgl[]        = "c.cus_namamember ILIKE '%{$escaped_member}%'";
    $cond_obi_tglpb[]      = "c.cus_namamember ILIKE '%{$escaped_member}%'";
    $cond_h_obi_tglpb[]    = "c.cus_namamember ILIKE '%{$escaped_member}%'";
}

$where_d_tgltrans   = count($cond_obi_tgltrans) > 0 ? implode(' AND ', $cond_obi_tgltrans) : "1=1";
$where_h_tgltrans   = count($cond_h_obi_tgltrans) > 0 ? implode(' AND ', $cond_h_obi_tgltrans) : "1=1";
$where_s_tgltrans   = count($cond_sti_tgl) > 0 ? implode(' AND ', $cond_sti_tgl) : "DATE(sti_tglserahterima) BETWEEN CURRENT_DATE - 1 AND CURRENT_DATE";
$where_obi_tglpb    = count($cond_obi_tglpb) > 0 ? implode(' AND ', $cond_obi_tglpb) : "1=1";
$where_h_obi_tglpb  = count($cond_h_obi_tglpb) > 0 ? implode(' AND ', $cond_h_obi_tglpb) : "1=1";

// ---------------------------------------------------------
// 3. DAFTAR PILIHAN QUERY
// ---------------------------------------------------------
$case_cabang_prd_sql = "
    WHEN prd_kodeigr='01' THEN 'IGR CPG' WHEN prd_kodeigr='03' THEN 'IGR SBY' WHEN prd_kodeigr='04' THEN 'IGR BDG'
    WHEN prd_kodeigr='05' THEN 'IGR TGR' WHEN prd_kodeigr='06' THEN 'IGR YOG' WHEN prd_kodeigr='15' THEN 'IGR MDN'
    WHEN prd_kodeigr='16' THEN 'IGR BKS' WHEN prd_kodeigr='17' THEN 'IGR PLG' WHEN prd_kodeigr='18' THEN 'IGR KMY'
    WHEN prd_kodeigr='20' THEN 'IGR PKU' WHEN prd_kodeigr='21' THEN 'IGR SMD' WHEN prd_kodeigr='22' THEN 'IGR SMG'
    WHEN prd_kodeigr='25' THEN 'IGR BGR' WHEN prd_kodeigr='26' THEN 'IGR PTK' WHEN prd_kodeigr='27' THEN 'IGR BMS'
    WHEN prd_kodeigr='28' THEN 'IGR MDO' WHEN prd_kodeigr='31' THEN 'IGR MKS' WHEN prd_kodeigr='32' THEN 'IGR JBI'
    WHEN prd_kodeigr='33' THEN 'IGR KRI' WHEN prd_kodeigr='34' THEN 'IGR AMB' WHEN prd_kodeigr='35' THEN 'IGR CPT'
    WHEN prd_kodeigr='36' THEN 'IGR KRW' WHEN prd_kodeigr='37' THEN 'IGR MLG' WHEN prd_kodeigr='38' THEN 'IGR BDL'
    WHEN prd_kodeigr='39' THEN 'IGR SLO' WHEN prd_kodeigr='43' THEN 'IGR SBI' WHEN prd_kodeigr='44' THEN 'IGR CKL'
    WHEN prd_kodeigr='46' THEN 'IGR BTM' WHEN prd_kodeigr='47' THEN 'IGR PWT' WHEN prd_kodeigr='50' THEN 'IGR GTO'
    WHEN prd_kodeigr='48' THEN 'IGR BLI' WHEN prd_kodeigr='51' THEN 'IGR PDG' WHEN prd_kodeigr='7A' THEN 'ICM CKL'
    WHEN prd_kodeigr='7B' THEN 'ICM SBI' WHEN prd_kodeigr='7D' THEN 'ICM TGR' WHEN prd_kodeigr='7G' THEN 'ICM YOG'
    WHEN prd_kodeigr='7K' THEN 'ICM PLG' WHEN prd_kodeigr='7H' THEN 'ICM BGR' WHEN prd_kodeigr='7F' THEN 'ICM MLG'
    WHEN prd_kodeigr='7P' THEN 'ICM AMB' WHEN prd_kodeigr='7L' THEN 'ICM KRW' WHEN prd_kodeigr='7E' THEN 'ICM BDL'
    WHEN prd_kodeigr='7S' THEN 'ICM PWT' WHEN prd_kodeigr='7R' THEN 'ICM SMG' WHEN prd_kodeigr='7N' THEN 'ICM KRI'
    WHEN prd_kodeigr='7M' THEN 'ICM PKU' WHEN prd_kodeigr='7C' THEN 'ICM BTM' WHEN prd_kodeigr='7I' THEN 'ICM SMD'
    WHEN prd_kodeigr='7O' THEN 'ICM KMY' WHEN prd_kodeigr='7J' THEN 'ICM BMS' WHEN prd_kodeigr='7U' THEN 'ICM PTK'
    WHEN prd_kodeigr='7V' THEN 'ICM SLO' WHEN prd_kodeigr='7X' THEN 'ICM GTO' WHEN prd_kodeigr='7Q' THEN 'ICM BDG'
    WHEN prd_kodeigr='7W' THEN 'ICM MDO' WHEN prd_kodeigr='8B' THEN 'ICM BLI' WHEN prd_kodeigr='7Z' THEN 'ICM SBY'
    WHEN prd_kodeigr='7Y' THEN 'ICM CPG' WHEN prd_kodeigr='1A' THEN 'SPI BLJ' WHEN prd_kodeigr='1B' THEN 'SPI MKS'
    WHEN prd_kodeigr='1C' THEN 'SPI KRW' WHEN prd_kodeigr='1D' THEN 'SPI SBY' WHEN prd_kodeigr='1E' THEN 'SPI MDN'
    WHEN prd_kodeigr='1F' THEN 'SPI MDO' WHEN prd_kodeigr='1G' THEN 'SPI BDG' WHEN prd_kodeigr='1H' THEN 'SPI MLG'
    WHEN prd_kodeigr='1I' THEN 'SPI CPG' WHEN prd_kodeigr='1K' THEN 'SPI BKS' WHEN prd_kodeigr='1L' THEN 'SPI SMD'
    WHEN prd_kodeigr='1M' THEN 'SPI BMS' WHEN prd_kodeigr='1N' THEN 'SPI SMG' WHEN prd_kodeigr='1Q' THEN 'SPI BGR'
    WHEN prd_kodeigr='1J' THEN 'SPI SLO' WHEN prd_kodeigr='1P' THEN 'SPI TGR2' WHEN prd_kodeigr='1S' THEN 'SPI CKL'
    WHEN prd_kodeigr='1R' THEN 'SPI BDL' WHEN prd_kodeigr='1T' THEN 'SPI SBI' WHEN prd_kodeigr='1O' THEN 'SPI YOG'
    WHEN prd_kodeigr='1U' THEN 'SPI BDG2' WHEN prd_kodeigr='1V' THEN 'SPI BDG3' WHEN prd_kodeigr='1W' THEN 'SPI BDG4'
    WHEN prd_kodeigr='1Y' THEN 'SPI BDG5' WHEN prd_kodeigr='2B' THEN 'SPI CKL2' WHEN prd_kodeigr='2G' THEN 'SPI SLO2'
    WHEN prd_kodeigr='2H' THEN 'SPI BDG6' WHEN prd_kodeigr='2A' THEN 'SPI CPT' WHEN prd_kodeigr='2D' THEN 'SPI SBY2'
    WHEN prd_kodeigr='2E' THEN 'SPI SBY3' WHEN prd_kodeigr='2F' THEN 'SPI SMG3' WHEN prd_kodeigr='1Z' THEN 'SPI KMY'
    WHEN prd_kodeigr='2L' THEN 'SPI CKL3' WHEN prd_kodeigr='2N' THEN 'SPI SLO3' WHEN prd_kodeigr='2I' THEN 'SPI SMG4'
    WHEN prd_kodeigr='2J' THEN 'SPI SMG5' WHEN prd_kodeigr='2O' THEN 'SPI SBY4' WHEN prd_kodeigr='2K' THEN 'SPI BDG7'
    WHEN prd_kodeigr='2C' THEN 'SPI MLG2' WHEN prd_kodeigr='AA' THEN 'SPIX BKS' WHEN prd_kodeigr='AB' THEN 'SPIX BGR'
    WHEN prd_kodeigr='AC' THEN 'SPIX SMG' WHEN prd_kodeigr='2P' THEN 'SPI BDG8' WHEN prd_kodeigr='2Q' THEN 'SPI MLG4'
    WHEN prd_kodeigr='2R' THEN 'SPI CKL4' WHEN prd_kodeigr='2M' THEN 'SPI MLG3' WHEN prd_kodeigr='2V' THEN 'SPI PKU'
    WHEN prd_kodeigr='2X' THEN 'SPI SBY5' WHEN prd_kodeigr='2U' THEN 'SPI BDL2' WHEN prd_kodeigr='2T' THEN 'SPI BDG9'
    WHEN prd_kodeigr='2Y' THEN 'SPI SMG6' WHEN prd_kodeigr='2Z' THEN 'SPI YOG2' WHEN prd_kodeigr='2W' THEN 'SPI SBI2'
    WHEN prd_kodeigr='2S' THEN 'SPI MDN2' WHEN prd_kodeigr='3A' THEN 'SPI TGR3' WHEN prd_kodeigr='3B' THEN 'SPI BGR2'
    WHEN prd_kodeigr='3C' THEN 'SPI MLG5' WHEN prd_kodeigr='3D' THEN 'SPI PWT'  WHEN prd_kodeigr='3E' THEN 'SPI BDG10'
    WHEN prd_kodeigr='3F' THEN 'SPI SLO4' WHEN prd_kodeigr='3O' THEN 'SPI BKS3' WHEN prd_kodeigr='3L' THEN 'SPI BKS2'
    WHEN prd_kodeigr='4C' THEN 'SPI BMS2' WHEN prd_kodeigr='3U' THEN 'SPI BGR4' WHEN prd_kodeigr='3M' THEN 'SPI CKL5'
    WHEN prd_kodeigr='3K' THEN 'SPI SMG7' WHEN prd_kodeigr='3J' THEN 'SPI SMD2' WHEN prd_kodeigr='3I' THEN 'SPI SBI3'
    WHEN prd_kodeigr='3N' THEN 'SPI SBY6' WHEN prd_kodeigr='4B' THEN 'SPI MLG7' WHEN prd_kodeigr='3X' THEN 'SPI BKS4'
    WHEN prd_kodeigr='4G' THEN 'SPI BLI2' WHEN prd_kodeigr='4D' THEN 'SPI KRI2' WHEN prd_kodeigr='4E' THEN 'SPI BMS3'
    WHEN prd_kodeigr='4L' THEN 'SPI CPG2' WHEN prd_kodeigr='3R' THEN 'SPI JBI'  WHEN prd_kodeigr='4A' THEN 'SPI SBY8'
    WHEN prd_kodeigr='3G' THEN 'SPI BGR3' WHEN prd_kodeigr='3Y' THEN 'SPI MLG6' WHEN prd_kodeigr='4I' THEN 'SPI MLG8'
    WHEN prd_kodeigr='4M' THEN 'SPI PTK'  WHEN prd_kodeigr='4H' THEN 'SPI SBY9' WHEN prd_kodeigr='3S' THEN 'SPI TGR4'
    WHEN prd_kodeigr='3T' THEN 'SPI AMB'  WHEN prd_kodeigr='7T' THEN 'ICM CPT'  WHEN prd_kodeigr='3Q' THEN 'SPI KRI'
    WHEN prd_kodeigr='4J' THEN 'SPI KRW2' WHEN prd_kodeigr='4N' THEN 'SPI KRW3' WHEN prd_kodeigr='4K' THEN 'SPI MDO'
    WHEN prd_kodeigr='3H' THEN 'SPI PLG'  WHEN prd_kodeigr='3W' THEN 'SPI PLG2' WHEN prd_kodeigr='3P' THEN 'SPI CPT2'
    WHEN prd_kodeigr='4P' THEN 'SPI KMY2' WHEN prd_kodeigr='4X' THEN 'SPI BMS4' WHEN prd_kodeigr='3V' THEN 'SPI MKS2'
    WHEN prd_kodeigr='4Q' THEN 'SPI SMD3' WHEN prd_kodeigr='4F' THEN 'SPI BLI'
";

$case_cabang_obi_sql = "
    WHEN obi_kodeigr='01' THEN 'IGR CPG' WHEN obi_kodeigr='03' THEN 'IGR SBY' WHEN obi_kodeigr='04' THEN 'IGR BDG'
    WHEN obi_kodeigr='05' THEN 'IGR TGR' WHEN obi_kodeigr='06' THEN 'IGR YOG' WHEN obi_kodeigr='15' THEN 'IGR MDN'
    WHEN obi_kodeigr='16' THEN 'IGR BKS' WHEN obi_kodeigr='17' THEN 'IGR PLG' WHEN obi_kodeigr='18' THEN 'IGR KMY'
    WHEN obi_kodeigr='20' THEN 'IGR PKU' WHEN obi_kodeigr='21' THEN 'IGR SMD' WHEN obi_kodeigr='22' THEN 'IGR SMG'
    WHEN obi_kodeigr='25' THEN 'IGR BGR' WHEN obi_kodeigr='26' THEN 'IGR PTK' WHEN obi_kodeigr='27' THEN 'IGR BMS'
    WHEN obi_kodeigr='28' THEN 'IGR MDO' WHEN obi_kodeigr='31' THEN 'IGR MKS' WHEN obi_kodeigr='32' THEN 'IGR JBI'
    WHEN obi_kodeigr='33' THEN 'IGR KRI' WHEN obi_kodeigr='34' THEN 'IGR AMB' WHEN obi_kodeigr='35' THEN 'IGR CPT'
    WHEN obi_kodeigr='36' THEN 'IGR KRW' WHEN obi_kodeigr='37' THEN 'IGR MLG' WHEN obi_kodeigr='38' THEN 'IGR BDL'
    WHEN obi_kodeigr='39' THEN 'IGR SLO' WHEN obi_kodeigr='43' THEN 'IGR SBI' WHEN obi_kodeigr='44' THEN 'IGR CKL'
    WHEN obi_kodeigr='46' THEN 'IGR BTM' WHEN obi_kodeigr='47' THEN 'IGR PWT' WHEN obi_kodeigr='50' THEN 'IGR GTO'
    WHEN obi_kodeigr='48' THEN 'IGR BLI' WHEN obi_kodeigr='51' THEN 'IGR PDG' WHEN obi_kodeigr='7A' THEN 'ICM CKL'
    WHEN obi_kodeigr='7B' THEN 'ICM SBI' WHEN obi_kodeigr='7D' THEN 'ICM TGR' WHEN obi_kodeigr='7G' THEN 'ICM YOG'
    WHEN obi_kodeigr='7K' THEN 'ICM PLG' WHEN obi_kodeigr='7H' THEN 'ICM BGR' WHEN obi_kodeigr='7F' THEN 'ICM MLG'
    WHEN obi_kodeigr='7P' THEN 'ICM AMB' WHEN obi_kodeigr='7L' THEN 'ICM KRW' WHEN obi_kodeigr='7E' THEN 'ICM BDL'
    WHEN obi_kodeigr='7S' THEN 'ICM PWT' WHEN obi_kodeigr='7R' THEN 'ICM SMG' WHEN obi_kodeigr='7N' THEN 'ICM KRI'
    WHEN obi_kodeigr='7M' THEN 'ICM PKU' WHEN obi_kodeigr='7C' THEN 'ICM BTM' WHEN obi_kodeigr='7I' THEN 'ICM SMD'
    WHEN obi_kodeigr='7O' THEN 'ICM KMY' WHEN obi_kodeigr='7J' THEN 'ICM BMS' WHEN obi_kodeigr='7U' THEN 'ICM PTK'
    WHEN obi_kodeigr='7V' THEN 'ICM SLO' WHEN obi_kodeigr='7X' THEN 'ICM GTO' WHEN obi_kodeigr='7Q' THEN 'ICM BDG'
    WHEN obi_kodeigr='7W' THEN 'ICM MDO' WHEN obi_kodeigr='8B' THEN 'ICM BLI' WHEN obi_kodeigr='7Z' THEN 'ICM SBY'
    WHEN obi_kodeigr='7Y' THEN 'ICM CPG' WHEN obi_kodeigr='1A' THEN 'SPI BLJ' WHEN obi_kodeigr='1B' THEN 'SPI MKS'
    WHEN obi_kodeigr='1C' THEN 'SPI KRW' WHEN obi_kodeigr='1D' THEN 'SPI SBY' WHEN obi_kodeigr='1E' THEN 'SPI MDN'
    WHEN obi_kodeigr='1F' THEN 'SPI MDO' WHEN obi_kodeigr='1G' THEN 'SPI BDG' WHEN obi_kodeigr='1H' THEN 'SPI MLG'
    WHEN obi_kodeigr='1I' THEN 'SPI CPG' WHEN obi_kodeigr='1K' THEN 'SPI BKS' WHEN obi_kodeigr='1L' THEN 'SPI SMD'
    WHEN obi_kodeigr='1M' THEN 'SPI BMS' WHEN obi_kodeigr='1N' THEN 'SPI SMG' WHEN obi_kodeigr='1Q' THEN 'SPI BGR'
    WHEN obi_kodeigr='1J' THEN 'SPI SLO' WHEN obi_kodeigr='1P' THEN 'SPI TGR2' WHEN obi_kodeigr='1S' THEN 'SPI CKL'
    WHEN obi_kodeigr='1R' THEN 'SPI BDL' WHEN obi_kodeigr='1T' THEN 'SPI SBI' WHEN obi_kodeigr='1O' THEN 'SPI YOG'
    WHEN obi_kodeigr='1U' THEN 'SPI BDG2' WHEN obi_kodeigr='1V' THEN 'SPI BDG3' WHEN obi_kodeigr='1W' THEN 'SPI BDG4'
    WHEN obi_kodeigr='1Y' THEN 'SPI BDG5' WHEN obi_kodeigr='2B' THEN 'SPI CKL2' WHEN obi_kodeigr='2G' THEN 'SPI SLO2'
    WHEN obi_kodeigr='2H' THEN 'SPI BDG6' WHEN obi_kodeigr='2A' THEN 'SPI CPT' WHEN obi_kodeigr='2D' THEN 'SPI SBY2'
    WHEN obi_kodeigr='2E' THEN 'SPI SBY3' WHEN obi_kodeigr='2F' THEN 'SPI SMG3' WHEN obi_kodeigr='1Z' THEN 'SPI KMY'
    WHEN obi_kodeigr='2L' THEN 'SPI CKL3' WHEN obi_kodeigr='2N' THEN 'SPI SLO3' WHEN obi_kodeigr='2I' THEN 'SPI SMG4'
    WHEN obi_kodeigr='2J' THEN 'SPI SMG5' WHEN obi_kodeigr='2O' THEN 'SPI SBY4' WHEN obi_kodeigr='2K' THEN 'SPI BDG7'
    WHEN obi_kodeigr='2C' THEN 'SPI MLG2' WHEN obi_kodeigr='AA' THEN 'SPIX BKS' WHEN obi_kodeigr='AB' THEN 'SPIX BGR'
    WHEN obi_kodeigr='AC' THEN 'SPIX SMG' WHEN obi_kodeigr='2P' THEN 'SPI BDG8' WHEN obi_kodeigr='2Q' THEN 'SPI MLG4'
    WHEN obi_kodeigr='2R' THEN 'SPI CKL4' WHEN obi_kodeigr='2M' THEN 'SPI MLG3' WHEN obi_kodeigr='2V' THEN 'SPI PKU'
    WHEN obi_kodeigr='2X' THEN 'SPI SBY5' WHEN obi_kodeigr='2U' THEN 'SPI BDL2' WHEN obi_kodeigr='2T' THEN 'SPI BDG9'
    WHEN obi_kodeigr='2Y' THEN 'SPI SMG6' WHEN obi_kodeigr='2Z' THEN 'SPI YOG2' WHEN obi_kodeigr='2W' THEN 'SPI SBI2'
    WHEN obi_kodeigr='2S' THEN 'SPI MDN2' WHEN obi_kodeigr='3A' THEN 'SPI TGR3' WHEN obi_kodeigr='3B' THEN 'SPI BGR2'
    WHEN obi_kodeigr='3C' THEN 'SPI MLG5' WHEN obi_kodeigr='3D' THEN 'SPI PWT'  WHEN obi_kodeigr='3E' THEN 'SPI BDG10'
    WHEN obi_kodeigr='3F' THEN 'SPI SLO4' WHEN obi_kodeigr='3O' THEN 'SPI BKS3' WHEN obi_kodeigr='3L' THEN 'SPI BKS2'
    WHEN obi_kodeigr='4C' THEN 'SPI BMS2' WHEN obi_kodeigr='3U' THEN 'SPI BGR4' WHEN obi_kodeigr='3M' THEN 'SPI CKL5'
    WHEN obi_kodeigr='3K' THEN 'SPI SMG7' WHEN obi_kodeigr='3J' THEN 'SPI SMD2' WHEN obi_kodeigr='3I' THEN 'SPI SBI3'
    WHEN obi_kodeigr='3N' THEN 'SPI SBY6' WHEN obi_kodeigr='4B' THEN 'SPI MLG7' WHEN obi_kodeigr='3X' THEN 'SPI BKS4'
    WHEN obi_kodeigr='4G' THEN 'SPI BLI2' WHEN obi_kodeigr='4D' THEN 'SPI KRI2' WHEN obi_kodeigr='4E' THEN 'SPI BMS3'
    WHEN obi_kodeigr='4L' THEN 'SPI CPG2' WHEN obi_kodeigr='3R' THEN 'SPI JBI'  WHEN obi_kodeigr='4A' THEN 'SPI SBY8'
    WHEN obi_kodeigr='3G' THEN 'SPI BGR3' WHEN obi_kodeigr='3Y' THEN 'SPI MLG6' WHEN obi_kodeigr='4I' THEN 'SPI MLG8'
    WHEN obi_kodeigr='4M' THEN 'SPI PTK'  WHEN obi_kodeigr='4H' THEN 'SPI SBY9' WHEN obi_kodeigr='3S' THEN 'SPI TGR4'
    WHEN obi_kodeigr='3T' THEN 'SPI AMB'  WHEN obi_kodeigr='7T' THEN 'ICM CPT'  WHEN obi_kodeigr='3Q' THEN 'SPI KRI'
    WHEN obi_kodeigr='4J' THEN 'SPI KRW2' WHEN obi_kodeigr='4N' THEN 'SPI KRW3' WHEN obi_kodeigr='4K' THEN 'SPI MDO'
    WHEN obi_kodeigr='3H' THEN 'SPI PLG'  WHEN obi_kodeigr='3W' THEN 'SPI PLG2' WHEN obi_kodeigr='3P' THEN 'SPI CPT2'
    WHEN obi_kodeigr='4P' THEN 'SPI KMY2' WHEN obi_kodeigr='4X' THEN 'SPI BMS4' WHEN obi_kodeigr='3V' THEN 'SPI MKS2'
    WHEN obi_kodeigr='4Q' THEN 'SPI SMD3' WHEN obi_kodeigr='4F' THEN 'SPI BLI'
";

$queries = [
    'batalan' => [
        'title' => 'BATALAN',
        'qty_col' => 'obi_qtyrealisasi',
        'rp_col'  => 'total',
        'sql_detail' => "WITH req_approval AS (
            SELECT *
            FROM (
                SELECT
                    r.*,
                    REGEXP_REPLACE(r.rap_keterangan, '[^0-9]', '', 'g') AS no_pb,
                    ROW_NUMBER() OVER (
                        PARTITION BY REGEXP_REPLACE(r.rap_keterangan, '[^0-9]', '', 'g')
                        ORDER BY r.rap_time DESC
                    ) rn
                FROM tbtr_req_approval r
                WHERE r.rap_program = 'PBIDM'
                  AND r.rap_keterangan LIKE 'Batal PB-%'
            ) x
            WHERE rn = 1
        )
        SELECT
            CASE {$case_cabang_prd_sql} ELSE p.prd_kodeigr END AS cab,
            h.obi_recid,
            to_char(h.obi_tglorder, 'DD-MM-YYYY') AS obi_tglorder,
            h.obi_nopb AS nopb,
            h.obi_notrans AS notrans,
            r.no_pb AS trx,
            h.obi_kdmember,
            c.cus_namamember,
            p.prd_kodedivisi AS div,
            p.prd_kodedepartement AS dep,
            p.prd_kodekategoribarang AS kat,
            d.obi_prdcd AS plu,
            p.prd_deskripsipanjang AS desk,
            p.prd_frac AS frac,
            d.obi_qtyorder,
            d.obi_qtyrealisasi,
            d.obi_hargaweb,
            d.obi_hargaweb * (d.obi_qtyrealisasi / NULLIF(p.prd_frac, 0)) AS total,
            r.rap_username,
            r.rap_station,
            r.rap_time,
            r.rap_keterangan,
            h.obi_alasanbtl,
            h.obi_kdekspedisi,
            d.obi_picker,
            d.obi_pick_dt,
            d.obi_close_dt,
            d.obi_scan_dt,
            r.rap_program,
            r.rap_modify_by,
            c.cus_nosalesman AS mr
        FROM tbtr_obi_h h
        JOIN tbtr_obi_d d
            ON h.obi_notrans = d.obi_notrans
           AND DATE(h.obi_tgltrans) = DATE(d.obi_tgltrans)
        LEFT JOIN tbmaster_prodmast p
            ON p.prd_prdcd = d.obi_prdcd
        LEFT JOIN tbmaster_customer c
            ON c.cus_kodemember = h.obi_kdmember
        LEFT JOIN req_approval r
            ON SPLIT_PART(h.obi_nopb, '/', 1) = r.no_pb
        WHERE h.obi_recid LIKE 'B%' AND {$where_h_tgltrans}
        ORDER BY cab, h.obi_notrans, d.obi_prdcd",

        'sql_rekap' => "WITH req_approval AS (
            SELECT *
            FROM (
                SELECT
                    r.*,
                    REGEXP_REPLACE(r.rap_keterangan, '[^0-9]', '', 'g') AS no_pb,
                    ROW_NUMBER() OVER (
                        PARTITION BY REGEXP_REPLACE(r.rap_keterangan, '[^0-9]', '', 'g')
                        ORDER BY r.rap_time DESC
                    ) rn
                FROM tbtr_req_approval r
                WHERE r.rap_program = 'PBIDM' AND r.rap_keterangan LIKE 'Batal PB-%'
            ) x WHERE rn = 1
        )
        SELECT 
            p.prd_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(d.obi_qtyrealisasi) AS TOTAL_QTY,
            SUM(d.obi_hargaweb * (d.obi_qtyrealisasi / NULLIF(p.prd_frac, 0))) AS TOTAL_RUPIAH
        FROM tbtr_obi_h h
        JOIN tbtr_obi_d d ON h.obi_notrans = d.obi_notrans AND DATE(h.obi_tgltrans) = DATE(d.obi_tgltrans)
        LEFT JOIN tbmaster_prodmast p ON p.prd_prdcd = d.obi_prdcd
        LEFT JOIN tbmaster_customer c ON c.cus_kodemember = h.obi_kdmember
        LEFT JOIN req_approval r ON SPLIT_PART(h.obi_nopb, '/', 1) = r.no_pb
        WHERE h.obi_recid LIKE 'B%' AND {$where_h_tgltrans}
        GROUP BY p.prd_kodeigr
        ORDER BY p.prd_kodeigr"
    ],

    'intransit' => [
        'title' => 'INTRANSIT',
        'qty_col' => 'int',
        'rp_col'  => 'total',
        'sql_detail' => "SELECT
            CASE {$case_cabang_prd_sql} ELSE p.prd_kodeigr END AS CAB,
            to_char(h.obi_tgltrans, 'DD-MM-YYYY') AS TGL,
            d.obi_notrans AS NOTRANS,
            h.obi_nopb AS PB,
            c.cus_namamember AS NAMA,
            d.obi_prdcd AS PLU,
            p.prd_deskripsipanjang AS deskripsi,
            d.obi_qtyorder AS QTYO,
            d.obi_qtyrealisasi AS QTYR,
            d.OBI_QTYINTRANSIT AS INT,
            d.obi_hargaweb,
            d.obi_hargaweb * (d.obi_qtyrealisasi / NULLIF(p.prd_frac,0)) AS total,  
            h.OBI_ATTRIBUTE2 AS ATTRIBUTE
        FROM tbtr_obi_d d
        JOIN tbtr_obi_h h 
            ON d.obi_tgltrans = h.obi_tgltrans 
           AND d.obi_notrans = h.obi_notrans
        LEFT JOIN tbmaster_customer c 
            ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN tbmaster_prodmast p 
            ON p.prd_prdcd = d.obi_prdcd
        WHERE d.OBI_QTYINTRANSIT <> 0 
          AND {$where_h_tgltrans}
        ORDER BY d.obi_prdcd ASC",

        'sql_rekap' => "SELECT 
            p.prd_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(d.OBI_QTYINTRANSIT) AS TOTAL_QTY,
            SUM(d.obi_hargaweb * (d.obi_qtyrealisasi / NULLIF(p.prd_frac,0))) AS TOTAL_RUPIAH
        FROM tbtr_obi_d d
        JOIN tbtr_obi_h h 
            ON d.obi_tgltrans = h.obi_tgltrans 
           AND d.obi_notrans = h.obi_notrans
        LEFT JOIN tbmaster_customer c 
            ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN tbmaster_prodmast p 
            ON p.prd_prdcd = d.obi_prdcd
        WHERE d.OBI_QTYINTRANSIT <> 0 
          AND {$where_h_tgltrans}
        GROUP BY p.prd_kodeigr
        ORDER BY p.prd_kodeigr"
    ],

    'sertim_ipp' => [
        'title' => 'SERTIM IPP',
        'qty_col' => 'obi_realitem',
        'rp_col'  => 'sti_codvalue',
        'sql_detail' => "SELECT
            CASE {$case_cabang_obi_sql} ELSE obi_kodeigr END AS cab,
            obi_nopb,
            to_char(obi_tglpb, 'DD-MM-YYYY') AS obi_tglpb,
            to_char(sti_tglserahterima, 'DD-MM-YYYY HH24:MI:SS') AS sti_tglserahterima,
            obi_kdmember,
            c.cus_namamember,
            sti_penerima,
            obi_realitem,
            sti_codvalue,
            sti_receivernik,
            sti_receivername,
            sti_vehicleno
        FROM tbtr_obi_h
        LEFT JOIN tbmaster_customer c ON c.cus_kodemember = obi_kdmember
        LEFT JOIN tbtr_serahterima_ipp ON sti_noorder = SUBSTR(obi_nopb, 1, 7)
        WHERE obi_recid = '5'
          AND obi_kdekspedisi <> 'Ambil di Stock Point Indogrosir'
          AND {$where_s_tgltrans}
        ORDER BY sti_receivername",

        'sql_rekap' => "SELECT 
            obi_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(obi_realitem) AS TOTAL_QTY,
            SUM(sti_codvalue) AS TOTAL_RUPIAH
        FROM tbtr_obi_h
        LEFT JOIN tbmaster_customer c ON c.cus_kodemember = obi_kdmember
        LEFT JOIN tbtr_serahterima_ipp ON sti_noorder = SUBSTR(obi_nopb, 1, 7)
        WHERE obi_recid = '5'
          AND obi_kdekspedisi <> 'Ambil di Stock Point Indogrosir'
          AND {$where_s_tgltrans}
        GROUP BY obi_kodeigr
        ORDER BY obi_kodeigr"
    ],

   'siap_struk_belum_dikirim' => [
        'title' => 'SIAP STRUK BELUM DIKIRIM',
        'qty_col' => 'item_real',
        'rp_col'  => 'rp_realisasi',
        'sql_detail' => "SELECT
            CASE 
                when cab.prd_kodeigr='01' then 'IGR CPG' when cab.prd_kodeigr='03' then 'IGR SBY' when cab.prd_kodeigr='04' then 'IGR BDG'
                when cab.prd_kodeigr='05' then 'IGR TGR' when cab.prd_kodeigr='06' then 'IGR YOG' when cab.prd_kodeigr='15' then 'IGR MDN'
                when cab.prd_kodeigr='16' then 'IGR BKS' when cab.prd_kodeigr='17' then 'IGR PLG' when cab.prd_kodeigr='18' then 'IGR KMY'
                when cab.prd_kodeigr='20' then 'IGR PKU' when cab.prd_kodeigr='21' then 'IGR SMD' when cab.prd_kodeigr='22' then 'IGR SMG'
                when cab.prd_kodeigr='25' then 'IGR BGR' when cab.prd_kodeigr='26' then 'IGR PTK' when cab.prd_kodeigr='27' then 'IGR BMS'
                when cab.prd_kodeigr='28' then 'IGR MDO' when cab.prd_kodeigr='31' then 'IGR MKS' when cab.prd_kodeigr='32' then 'IGR JBI'
                when cab.prd_kodeigr='33' then 'IGR KRI' when cab.prd_kodeigr='34' then 'IGR AMB' when cab.prd_kodeigr='35' then 'IGR CPT'
                when cab.prd_kodeigr='36' then 'IGR KRW' when cab.prd_kodeigr='37' then 'IGR MLG' when cab.prd_kodeigr='38' then 'IGR BDL'
                when cab.prd_kodeigr='39' then 'IGR SLO' when cab.prd_kodeigr='43' then 'IGR SBI' when cab.prd_kodeigr='44' then 'IGR CKL'
                when cab.prd_kodeigr='46' then 'IGR BTM' when cab.prd_kodeigr='47' then 'IGR PWT' when cab.prd_kodeigr='50' then 'IGR GTO'
                when cab.prd_kodeigr='48' then 'IGR BLI' when cab.prd_kodeigr='51' then 'IGR PDG' when cab.prd_kodeigr='7A' then 'ICM CKL'
                when cab.prd_kodeigr='7B' then 'ICM SBI' when cab.prd_kodeigr='7D' then 'ICM TGR' when cab.prd_kodeigr='7G' then 'ICM YOG'
                when cab.prd_kodeigr='7K' then 'ICM PLG' when cab.prd_kodeigr='7H' then 'ICM BGR' when cab.prd_kodeigr='7F' then 'ICM MLG'
                when cab.prd_kodeigr='7P' then 'ICM AMB' when cab.prd_kodeigr='7L' then 'ICM KRW' when cab.prd_kodeigr='7E' then 'ICM BDL'
                when cab.prd_kodeigr='7S' then 'ICM PWT' when cab.prd_kodeigr='7R' then 'ICM SMG' when cab.prd_kodeigr='7N' then 'ICM KRI'
                when cab.prd_kodeigr='7M' then 'ICM PKU' when cab.prd_kodeigr='7C' then 'ICM BTM' when cab.prd_kodeigr='7I' then 'ICM SMD'
                when cab.prd_kodeigr='7O' then 'ICM KMY' when cab.prd_kodeigr='7J' then 'ICM BMS' when cab.prd_kodeigr='7U' then 'ICM PTK'
                when cab.prd_kodeigr='7V' then 'ICM SLO' when cab.prd_kodeigr='7X' then 'ICM GTO' when cab.prd_kodeigr='7Q' then 'ICM BDG'
                when cab.prd_kodeigr='7W' then 'ICM MDO' when cab.prd_kodeigr='8B' then 'ICM BLI' when cab.prd_kodeigr='7Z' then 'ICM SBY'
                when cab.prd_kodeigr='7Y' then 'ICM CPG' when cab.prd_kodeigr='1A' then 'SPI BLJ' when cab.prd_kodeigr='1B' then 'SPI MKS'
                when cab.prd_kodeigr='1C' then 'SPI KRW' when cab.prd_kodeigr='1D' then 'SPI SBY' when cab.prd_kodeigr='1E' then 'SPI MDN'
                when cab.prd_kodeigr='1F' then 'SPI MDO' when cab.prd_kodeigr='1G' then 'SPI BDG' when cab.prd_kodeigr='1H' then 'SPI MLG'
                when cab.prd_kodeigr='1I' then 'SPI CPG' when cab.prd_kodeigr='1K' then 'SPI BKS' when cab.prd_kodeigr='1L' then 'SPI SMD'
                when cab.prd_kodeigr='1M' then 'SPI BMS' when cab.prd_kodeigr='1N' then 'SPI SMG' when cab.prd_kodeigr='1Q' then 'SPI BGR'
                when cab.prd_kodeigr='1J' then 'SPI SLO' when cab.prd_kodeigr='1P' then 'SPI TGR2' when cab.prd_kodeigr='1S' then 'SPI CKL'
                when cab.prd_kodeigr='1R' then 'SPI BDL' when cab.prd_kodeigr='1T' then 'SPI SBI' when cab.prd_kodeigr='1O' then 'SPI YOG'
                when cab.prd_kodeigr='1U' then 'SPI BDG2' when cab.prd_kodeigr='1V' then 'SPI BDG3' when cab.prd_kodeigr='1W' then 'SPI BDG4'
                when cab.prd_kodeigr='1Y' then 'SPI BDG5' when cab.prd_kodeigr='2B' then 'SPI CKL2' when cab.prd_kodeigr='2G' then 'SPI SLO2'
                when cab.prd_kodeigr='2H' then 'SPI BDG6' when cab.prd_kodeigr='2A' then 'SPI CPT' when cab.prd_kodeigr='2D' then 'SPI SBY2'
                when cab.prd_kodeigr='2E' then 'SPI SBY3' when cab.prd_kodeigr='2F' then 'SPI SMG3' when cab.prd_kodeigr='1Z' then 'SPI KMY'
                when cab.prd_kodeigr='2L' then 'SPI CKL3' when cab.prd_kodeigr='2N' then 'SPI SLO3' when cab.prd_kodeigr='2I' then 'SPI SMG4'
                when cab.prd_kodeigr='2J' then 'SPI SMG5' when cab.prd_kodeigr='2O' then 'SPI SBY4' when cab.prd_kodeigr='2K' then 'SPI BDG7'
                when cab.prd_kodeigr='2C' then 'SPI MLG2' when cab.prd_kodeigr='AA' then 'SPIX BKS' when cab.prd_kodeigr='AB' then 'SPIX BGR'
                when cab.prd_kodeigr='AC' then 'SPIX SMG' when cab.prd_kodeigr='2P' then 'SPI BDG8' when cab.prd_kodeigr='2Q' then 'SPI MLG4'
                when cab.prd_kodeigr='2R' then 'SPI CKL4' when cab.prd_kodeigr='2M' then 'SPI MLG3' when cab.prd_kodeigr='2V' then 'SPI PKU'
                when cab.prd_kodeigr='2X' then 'SPI SBY5' when cab.prd_kodeigr='2U' then 'SPI BDL2' when cab.prd_kodeigr='2T' then 'SPI BDG9'
                when cab.prd_kodeigr='2Y' then 'SPI SMG6' when cab.prd_kodeigr='2Z' then 'SPI YOG2' when cab.prd_kodeigr='2W' then 'SPI SBI2'
                when cab.prd_kodeigr='2S' then 'SPI MDN2' when cab.prd_kodeigr='3A' then 'SPI TGR3' when cab.prd_kodeigr='3B' then 'SPI BGR2'
                when cab.prd_kodeigr='3C' then 'SPI MLG5' when cab.prd_kodeigr='3D' then 'SPI PWT'  when cab.prd_kodeigr='3E' then 'SPI BDG10'
                when cab.prd_kodeigr='3F' then 'SPI SLO4' when cab.prd_kodeigr='3O' then 'SPI BKS3' when cab.prd_kodeigr='3L' then 'SPI BKS2'
                when cab.prd_kodeigr='4C' then 'SPI BMS2' when cab.prd_kodeigr='3U' then 'SPI BGR4' when cab.prd_kodeigr='3M' then 'SPI CKL5'
                when cab.prd_kodeigr='3K' then 'SPI SMG7' when cab.prd_kodeigr='3J' then 'SPI SMD2' when cab.prd_kodeigr='3I' then 'SPI SBI3'
                when cab.prd_kodeigr='3N' then 'SPI SBY6' when cab.prd_kodeigr='4B' then 'SPI MLG7' when cab.prd_kodeigr='3X' then 'SPI BKS4'
                when cab.prd_kodeigr='4G' then 'SPI BLI2' when cab.prd_kodeigr='4D' then 'SPI KRI2' when cab.prd_kodeigr='4E' then 'SPI BMS3'
                when cab.prd_kodeigr='4L' then 'SPI CPG2' when cab.prd_kodeigr='3R' then 'SPI JBI'  when cab.prd_kodeigr='4A' then 'SPI SBY8'
                when cab.prd_kodeigr='3G' then 'SPI BGR3' when cab.prd_kodeigr='3Y' then 'SPI MLG6' when cab.prd_kodeigr='4I' then 'SPI MLG8'
                when cab.prd_kodeigr='4M' then 'SPI PTK'  when cab.prd_kodeigr='4H' then 'SPI SBY9' when cab.prd_kodeigr='3S' then 'SPI TGR4'
                when cab.prd_kodeigr='3T' then 'SPI AMB'  when cab.prd_kodeigr='7T' then 'ICM CPT'  when cab.prd_kodeigr='3Q' then 'SPI KRI'
                when cab.prd_kodeigr='4J' then 'SPI KRW2' when cab.prd_kodeigr='4N' then 'SPI KRW3' when cab.prd_kodeigr='4K' then 'SPI MDO'
                when cab.prd_kodeigr='3H' then 'SPI PLG'  when cab.prd_kodeigr='3W' then 'SPI PLG2' when cab.prd_kodeigr='3P' then 'SPI CPT2'
                when cab.prd_kodeigr='4P' then 'SPI KMY2'
                ELSE cab.prd_kodeigr
            END AS CAB,
            h.obi_notrans AS NO_PB,
            h.obi_nopb AS NOPB,
            h.obi_kdmember AS MEMBER,
            c.cus_namamember AS NAMA,
            c.cus_alamatmember8 AS TUJUAN_KIRIM,
            to_char(h.obi_tglpb, 'DD-MM-YYYY') AS TGL_PB,
            h.obi_ttlorder + h.obi_ttlppn - h.obi_ttldiskon AS RP_PESANAN,
            h.obi_realorder + h.obi_realppn - h.obi_realdiskon AS RP_REALISASI,
            h.obi_ttlorder AS DPP_PESANAN,
            payment.NTOTAL,
            h.obi_itemorder AS ITEM_ORDER,
            h.obi_realitem AS ITEM_REAL,
            CASE
                WHEN h.obi_recid = '6' THEN 'SELESAI'
                WHEN h.obi_recid = '1' THEN 'SIAP PICKING'
                WHEN h.obi_recid = '2' THEN 'SIAP PACKING'
                WHEN h.obi_recid = '3' THEN 'SIAP DRAFT STRUK'
                WHEN h.obi_recid = '4' THEN 'KONFIRMASI PEMBAYARAN'
                WHEN h.obi_recid = '5' THEN 'SIAP STRUK'
                WHEN h.obi_recid LIKE 'B%' THEN 'BATAL'
                WHEN h.obi_recid IS NULL THEN 'SIAP SEND HANDHELD'
                ELSE h.obi_recid
            END AS STATUS,
            TO_CHAR(h.obi_maxdeliverytime, 'DD-MM-YYYY HH24:MI:SS') AS TGL_STATUS,
            h.obi_kdekspedisi AS EKSPEDISI,
            CASE 
                WHEN serahterima.TGL_KIRIM IS NULL THEN 'BELUM KIRIM'
                ELSE TO_CHAR(serahterima.TGL_KIRIM, 'DD-MM-YYYY HH24:MI:SS')
            END AS TANGGAL_SERTIM
        FROM tbtr_obi_h h
        LEFT JOIN tbmaster_customer c ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN LATERAL (
            SELECT p.prd_kodeigr
            FROM tbtr_obi_d d
            LEFT JOIN tbmaster_prodmast p ON p.prd_prdcd = d.obi_prdcd
            WHERE d.obi_notrans = h.obi_notrans
            ORDER BY d.obi_prdcd
            LIMIT 1
        ) cab ON TRUE
        LEFT JOIN (
            SELECT no_pb, MAX(TOTAL) AS NTOTAL
            FROM payment_klikigr 
            GROUP BY no_pb
        ) AS payment ON h.obi_nopb = payment.no_pb
        LEFT JOIN (
            SELECT STI_CODPAYMENTCODE, MAX(sti_tglserahterima) AS TGL_KIRIM
            FROM TBTR_SERAHTERIMA_IPP 
            GROUP BY STI_CODPAYMENTCODE
        ) AS serahterima ON h.obi_nopb = serahterima.STI_CODPAYMENTCODE
        WHERE h.obi_kdekspedisi <> 'Ambil di Stock Point Indogrosir'
          AND h.obi_recid = '5'
          AND {$where_obi_tglpb}
        ORDER BY h.obi_tglpb, h.obi_notrans ASC",

        'sql_rekap' => "SELECT 
            COALESCE(cab.prd_kodeigr, 'UNKNOWN') AS KODE_CABANG,
            COUNT(DISTINCT h.obi_nopb) AS TOTAL_RECORD,
            SUM(h.obi_realitem) AS TOTAL_QTY,
            SUM(h.obi_realorder + h.obi_realppn - h.obi_realdiskon) AS TOTAL_RUPIAH
        FROM tbtr_obi_h h
        LEFT JOIN tbmaster_customer c ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN LATERAL (
            SELECT p.prd_kodeigr
            FROM tbtr_obi_d d
            LEFT JOIN tbmaster_prodmast p ON p.prd_prdcd = d.obi_prdcd
            WHERE d.obi_notrans = h.obi_notrans
            ORDER BY d.obi_prdcd
            LIMIT 1
        ) cab ON TRUE
        WHERE h.obi_kdekspedisi <> 'Ambil di Stock Point Indogrosir'
          AND h.obi_recid = '5'
          AND {$where_obi_tglpb}
        GROUP BY cab.prd_kodeigr
        ORDER BY cab.prd_kodeigr"
    ],

    'pb_vs_realisasi' => [
        'title' => 'PB VS REALISASI',
        'qty_col' => 'qty_pb',
        'rp_col'  => 'rupiah_pb',
        'sql_detail' => "SELECT
            CASE {$case_cabang_prd_sql} ELSE p.prd_kodeigr END AS cabang,
            TO_CHAR(h.obi_tglpb, 'DD-MM-YYYY') AS tgl_pb,
            COUNT(DISTINCT h.obi_nopb) AS total_pb,
            COUNT(d.obi_prdcd) AS jumlah_item_pb,
            COUNT(CASE WHEN d.obi_qtyrealisasi > 0 THEN d.obi_prdcd END) AS jumlah_item_realisasi,
            COALESCE(header_rp.rupiah_pb, 0) AS rupiah_pb,
            COALESCE(header_rp.rupiah_realisasi, 0) AS rupiah_realisasi,
            SUM(d.obi_qtyorder) AS qty_pb,
            SUM(d.obi_qtyrealisasi) AS realisasi_pb
        FROM tbtr_obi_h h
        JOIN tbtr_obi_d d 
            ON d.obi_tgltrans = h.obi_tgltrans 
           AND d.obi_notrans = h.obi_notrans
        LEFT JOIN tbmaster_customer c ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN tbmaster_prodmast p 
            ON p.prd_prdcd = d.obi_prdcd
        LEFT JOIN (
            SELECT 
                obi_tglpb,
                SUM(obi_ttlorder + obi_ttlppn - obi_ttldiskon) AS rupiah_pb,
                SUM(obi_realorder + obi_realppn - obi_realdiskon) AS rupiah_realisasi
            FROM tbtr_obi_h
            LEFT JOIN tbmaster_customer c ON c.cus_kodemember = obi_kdmember
            WHERE {$where_obi_tglpb}
            GROUP BY obi_tglpb
        ) header_rp ON header_rp.obi_tglpb = h.obi_tglpb
        WHERE {$where_h_obi_tglpb}
        GROUP BY 
            p.prd_kodeigr,
            h.obi_tglpb,
            header_rp.rupiah_pb,
            header_rp.rupiah_realisasi
        ORDER BY 
            p.prd_kodeigr,
            h.obi_tglpb ASC",

        'sql_rekap' => "SELECT 
            p.prd_kodeigr AS KODE_CABANG,
            COUNT(DISTINCT h.obi_nopb) AS TOTAL_RECORD,
            SUM(d.obi_qtyorder) AS TOTAL_QTY,
            COALESCE(SUM(h.obi_ttlorder + h.obi_ttlppn - h.obi_ttldiskon), 0) AS TOTAL_RUPIAH
        FROM tbtr_obi_h h
        JOIN tbtr_obi_d d ON d.obi_tgltrans = h.obi_tgltrans AND d.obi_notrans = h.obi_notrans
        LEFT JOIN tbmaster_customer c ON h.obi_kdmember = c.cus_kodemember
        LEFT JOIN tbmaster_prodmast p ON p.prd_prdcd = d.obi_prdcd
        WHERE {$where_h_obi_tglpb}
        GROUP BY p.prd_kodeigr
        ORDER BY p.prd_kodeigr"
    ]
];

$selected_query_key = isset($_GET['query_type']) && isset($queries[$_GET['query_type']]) ? $_GET['query_type'] : 'batalan';
$active_query_config = $queries[$selected_query_key];
$base_query = ($sel_view === 'rekap') ? $active_query_config['sql_rekap'] : $active_query_config['sql_detail'];

// Query String Base untuk Navigation & Export
$query_params = $_GET;
unset($query_params['action']);
$query_string_base = http_build_query($query_params);

// ---------------------------------------------------------
// 4. EXPORT EXCEL (Keluarkan seluruh data jika dipanggil)
// ---------------------------------------------------------
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'export_excel') {
    $filename = "Laporan_" . strtoupper($selected_query_key) . "_" . strtoupper($sel_view) . "_" . date('Ymd_His');

    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename={$filename}.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    echo "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
    echo "<head><meta charset='utf-8'></head><body>";
    echo "<table border='1' cellpadding='3' cellspacing='0' style='border-collapse:collapse; font-family:Calibri, sans-serif; font-size:11pt;'>";
    
    $is_header_printed = false;
    $grand_qty = 0;
    $grand_rp = 0;
    $grand_rp_real = 0;
    $grand_qty_real = 0;
    $qty_col = strtolower($active_query_config['qty_col']);
    $rp_col  = strtolower($active_query_config['rp_col']);

    foreach ($target_servers as $server) {
        $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
        $dbconn = @pg_connect($conn_string);

        if ($dbconn) {
            $result = @pg_query($dbconn, $base_query);
            if ($result) {
                if (!$is_header_printed) {
                    echo "<tr style='font-weight:bold; background-color:#1E293B; color:white;'>";
                    if ($sel_view === 'rekap') {
                        echo "<th style='text-align:center;'>NAMA SERVER</th>";
                    }
                    $num_fields = pg_num_fields($result);
                    for ($i = 0; $i < $num_fields; $i++) {
                        echo "<th style='text-align:center;'>" . htmlspecialchars(pg_field_name($result, $i)) . "</th>";
                    }
                    echo "</tr>";
                    $is_header_printed = true;
                }

                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    if ($sel_view === 'rekap') {
                        echo "<td>" . htmlspecialchars($server['name']) . "</td>";
                    }
                    foreach ($row as $key => $value) {
                        $val = htmlspecialchars($value ?? '');
                        $field_name = strtolower($key);

                        if (in_array($field_name, ['plu', 'div', 'dep', 'kat', 'kode_cabang', 'nopb', 'no_pb', 'notrans', 'trx', 'pb', 'member', 'obi_kdmember', 'sti_receivernik'])) {
                            echo "<td style='mso-number-format:\"\\@\";'>" . $val . "</td>";
                        } elseif (in_array($field_name, ['total_qty', 'total_rupiah', 'total_record', $qty_col, $rp_col, 'qtyo', 'qtyr', 'rp_pesanan', 'rp_realisasi', 'rupiah_pb', 'rupiah_realisasi', 'dpp_pesanan', 'ntotal', 'item_order', 'item_real', 'jumlah_item_pb', 'jumlah_item_realisasi', 'realisasi_pb'])) {
                            echo "<td style='text-align:center;'>" . (is_numeric($value) ? number_format((float)$value, 2, '.', '') : $val) . "</td>";
                        } else {
                            echo "<td>" . $val . "</td>";
                        }

                        if ($sel_view === 'rekap') {
                            if ($field_name === 'total_qty') $grand_qty += (float)$value;
                            if ($field_name === 'total_rupiah') $grand_rp += (float)$value;
                        } else {
                            if ($field_name === $qty_col) $grand_qty += (float)$value;
                            if ($field_name === $rp_col) $grand_rp += (float)$value;
                            if ($field_name === 'rupiah_realisasi') $grand_rp_real += (float)$value;
                            if ($field_name === 'realisasi_pb') $grand_qty_real += (float)$value;
                        }
                    }
                    echo "</tr>";
                }
                pg_free_result($result);
            }
            pg_close($dbconn);
        }
    }

    if ($is_header_printed) {
        echo "<tr style='font-weight:bold; background-color:#E2E8F0;'>";
        if ($sel_view === 'rekap') {
            echo "<td colspan='3' style='text-align:right;'>GRAND TOTAL:</td>";
            echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
            echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
        } else {
            if ($selected_query_key === 'intransit') {
                $colspan_qty = 9;
                echo "<td colspan='{$colspan_qty}' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td></td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td></td>";
            } elseif ($selected_query_key === 'sertim_ipp') {
                $colspan_qty = 7;
                echo "<td colspan='{$colspan_qty}' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td colspan='3'></td>";
            } elseif ($selected_query_key === 'siap_struk_belum_dikirim') {
                echo "<td colspan='7' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td colspan='3'></td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td colspan='4'></td>";
            } elseif ($selected_query_key === 'pb_vs_realisasi') {
                echo "<td colspan='5' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp_real, 2, '.', '') . "</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty_real, 2, '.', '') . "</td>";
            } else {
                $colspan_qty = 16;
                echo "<td colspan='{$colspan_qty}' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:center;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td></td>";
                echo "<td style='text-align:center;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td colspan='14'></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table></body></html>";
    exit;
}

// ---------------------------------------------------------
// 5. PENARIKAN DATA HANYA DILAKUKAN JIKA TOMBOL CARI DITEKAN
// ---------------------------------------------------------

$all_rows = [];
$total_all_records = 0;
$grand_qty = 0;
$grand_rp = 0;
$grand_rp_real = 0;
$grand_qty_real = 0;

$qty_col = strtolower($active_query_config['qty_col']);
$rp_col  = strtolower($active_query_config['rp_col']);

if ($is_searched) {
    foreach ($target_servers as $server) {
        $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=2";
        $dbconn = @pg_connect($conn_string);

        if ($dbconn) {
            $result = @pg_query($dbconn, $base_query);
            if ($result) {
                while ($row = pg_fetch_assoc($result)) {
                    $row_data = $row;
                    if ($sel_view === 'rekap') {
                        $row_data = array_merge(['SERVER_NAME' => $server['name']], $row);
                    }
                    $all_rows[] = $row_data;

                    foreach ($row as $key => $value) {
                        $field_name = strtolower($key);
                        $num_val = (float)$value;
                        if ($sel_view === 'rekap') {
                            if ($field_name === 'total_qty') $grand_qty += $num_val;
                            if ($field_name === 'total_rupiah') $grand_rp += $num_val;
                        } else {
                            if ($field_name === $qty_col) $grand_qty += $num_val;
                            if ($field_name === $rp_col) $grand_rp += $num_val;
                            if ($field_name === 'rupiah_realisasi') $grand_rp_real += $num_val;
                            if ($field_name === 'realisasi_pb') $grand_qty_real += $num_val;
                        }
                    }
                }
                pg_free_result($result);
            }
            pg_close($dbconn);
        }
    }
}

// Slice Data Per Page
$total_all_records = count($all_rows);
$total_pages = $total_all_records > 0 ? ceil($total_all_records / $per_page) : 1;
$offset = ($page - 1) * $per_page;
$display_rows = array_slice($all_rows, $offset, $per_page);

$nama_bulan = [
    'ALL' => '-- Semua Bulan --',
    '01'  => 'Januari',   '02' => 'Februari', '03' => 'Maret',    '04' => 'April',
    '05'  => 'Mei',        '06' => 'Juni',     '07' => 'Juli',      '08' => 'Agustus',
    '09'  => 'September', '10' => 'Oktober',  '11' => 'November', '12' => 'Desember'
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Multi IP Database</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; margin: 20px; color: #333; }
        .header-container { background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .top-row { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        h2 { margin: 0; color: #1E293B; font-size: 20px; }
        .filter-form { display: flex; align-items: flex-start; gap: 12px; margin-top: 15px; background: #F8FAFC; padding: 12px; border-radius: 6px; border: 1px solid #E2E8F0; flex-wrap: wrap; }
        .form-group { display: flex; flex-direction: column; gap: 4px; }
        label { font-weight: bold; font-size: 12px; color: #475569; }
        select, input[type="text"] { padding: 8px 12px; font-size: 13px; border-radius: 6px; border: 1px solid #CBD5E1; background: white; font-weight: 500; }
        select[multiple] { height: 100px; min-width: 150px; padding: 4px; }
        .btn-group { display: flex; gap: 10px; }
        .btn { padding: 9px 16px; font-weight: bold; border-radius: 6px; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; font-size: 13px; transition: all 0.2s; }
        .btn-submit { background-color: #0F172A; color: white; margin-top: 18px; }
        .btn-submit:hover { background-color: #1E293B; }
        .btn-excel { background-color: #107C41; color: white; }
        .btn-excel:hover { background-color: #0B5C30; }
        .table-responsive { background: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; font-size: 13px; }
        th { background-color: #1E293B; color: white; padding: 11px; text-align: center; white-space: nowrap; }
        td { padding: 10px; border-bottom: 1px solid #E2E8F0; white-space: nowrap; }
        tr:nth-child(even) { background-color: #F8FAFC; }
        tr:hover { background-color: #F1F5F9; }
        tfoot tr { background-color: #E2E8F0; font-weight: bold; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .help-text { font-size: 11px; color: #64748B; margin-top: 2px; }
        
        /* Pagination */
        .pagination-container { display: flex; justify-content: space-between; align-items: center; margin-top: 15px; background: #fff; padding: 12px; border-radius: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .pagination { display: flex; gap: 5px; list-style: none; padding: 0; margin: 0; }
        .pagination a, .pagination span { padding: 6px 12px; border: 1px solid #CBD5E1; border-radius: 4px; text-decoration: none; color: #0F172A; font-size: 12px; font-weight: 600; }
        .pagination .active { background-color: #0F172A; color: white; border-color: #0F172A; }
        .pagination .disabled { color: #94A3B8; pointer-events: none; }
    </style>
</head>
<body>

<div class="header-container">
    <div class="top-row">
        <div>
            <h2>Monitoring Klik & SPI</h2>
            <small style="color: #64748B;">Pilih filter lalu klik tombol <b>Tampilkan Data</b> untuk menarik data dari server</small>
        </div>
        <div class="btn-group">
            <?php if ($is_searched): ?>
                <a href="?<?= $query_string_base ?>&action=export_excel" class="btn btn-excel">
                    📥 Save Data XLS (Excel)
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- FORM FILTER -->
    <form method="GET" action="" class="filter-form">
        <input type="hidden" name="search" value="1">

        <div class="form-group">
            <label for="server_type">Tipe Server:</label>
            <select name="server_type" id="server_type">
                <option value="ALL" <?= $sel_type == 'ALL' ? 'selected' : '' ?>>-- SEMUA TIPE (IGR/SPI/ICM) --</option>
                <option value="IGR" <?= $sel_type == 'IGR' ? 'selected' : '' ?>>IGR ONLY</option>
                <option value="SPI" <?= $sel_type == 'SPI' ? 'selected' : '' ?>>SPI ONLY</option>
                <option value="ICM" <?= $sel_type == 'ICM' ? 'selected' : '' ?>>ICM ONLY</option>
            </select>
        </div>

        <div class="form-group">
            <label for="view_mode">Tampilan:</label>
            <select name="view_mode" id="view_mode">
                <option value="detail" <?= $sel_view == 'detail' ? 'selected' : '' ?>>📄 Detail Transaksi</option>
                <option value="rekap" <?= $sel_view == 'rekap' ? 'selected' : '' ?>>📊 Rekap per Cabang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cabang">Pilih Cabang (Multi):</label>
            <select name="cabang[]" id="cabang" multiple>
                <option value="ALL" <?= in_array('ALL', $sel_cabang) ? 'selected' : '' ?>>-- SEMUA CABANG --</option>
                <?php foreach ($servers as $srv): 
                    if ($sel_type !== 'ALL' && $srv['type'] !== $sel_type) continue; ?>
                    <option value="<?= $srv['id'] ?>" <?= in_array($srv['id'], $sel_cabang) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($srv['name']) ?> (<?= $srv['host'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
            <span class="help-text">Tahan <b>Ctrl</b>/<b>Cmd</b></span>
        </div>

        <div class="form-group">
            <label for="query_type">Query:</label>
            <select name="query_type" id="query_type">
                <?php foreach ($queries as $key => $q): ?>
                    <option value="<?= $key ?>" <?= $key == $selected_query_key ? 'selected' : '' ?>>
                        <?= htmlspecialchars($q['title']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- FILTER PENCARIAN NO PB -->
        <div class="form-group">
            <label for="search_nopb">Cari No PB:</label>
            <input type="text" name="search_nopb" id="search_nopb" value="<?= htmlspecialchars($search_nopb) ?>" placeholder="Contoh: PB-..." style="width: 140px;">
        </div>

        <!-- FILTER PENCARIAN NAMA MEMBER -->
        <div class="form-group">
            <label for="search_member">Cari Nama Member:</label>
            <input type="text" name="search_member" id="search_member" value="<?= htmlspecialchars($search_member) ?>" placeholder="Nama Member..." style="width: 150px;">
        </div>

        <div class="form-group">
            <label for="tgl">Tanggal (Multi):</label>
            <select name="tgl[]" id="tgl" multiple>
                <option value="ALL" <?= in_array('ALL', $sel_tgl) ? 'selected' : '' ?>>-- Semua Tanggal --</option>
                <?php for ($i = 1; $i <= 31; $i++): 
                    $t = sprintf("%02d", $i); ?>
                    <option value="<?= $i ?>" <?= in_array((string)$i, $sel_tgl) || in_array($t, $sel_tgl) ? 'selected' : '' ?>><?= $t ?></option>
                <?php endfor; ?>
            </select>
            <span class="help-text">Tahan <b>Ctrl</b>/<b>Cmd</b></span>
        </div>

        <div class="form-group">
            <label for="bulan">Bulan (Multi):</label>
            <select name="bulan[]" id="bulan" multiple>
                <option value="ALL" <?= in_array('ALL', $sel_bulan) ? 'selected' : '' ?>>-- Semua Bulan --</option>
                <?php foreach ($nama_bulan as $num => $nama): 
                    if ($num === 'ALL') continue; ?>
                    <option value="<?= (int)$num ?>" <?= in_array((string)$num, $sel_bulan) || in_array((string)(int)$num, $sel_bulan) ? 'selected' : '' ?>><?= $nama ?></option>
                <?php endforeach; ?>
            </select>
            <span class="help-text">Tahan <b>Ctrl</b>/<b>Cmd</b></span>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <select name="tahun" id="tahun">
                <option value="ALL" <?= $sel_tahun == 'ALL' ? 'selected' : '' ?>>-- Semua Tahun --</option>
                <?php 
                $tahun_sekarang = (int)date('Y');
                for ($y = $tahun_sekarang - 3; $y <= $tahun_sekarang + 2; $y++): ?>
                    <option value="<?= $y ?>" <?= $sel_tahun == (string)$y ? 'selected' : '' ?>><?= $y ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="per_page">Per Hal:</label>
            <select name="per_page" id="per_page">
                <option value="25" <?= $per_page == 25 ? 'selected' : '' ?>>25</option>
                <option value="50" <?= $per_page == 50 ? 'selected' : '' ?>>50</option>
                <option value="100" <?= $per_page == 100 ? 'selected' : '' ?>>100</option>
                <option value="250" <?= $per_page == 250 ? 'selected' : '' ?>>250</option>
            </select>
        </div>

        <button type="submit" class="btn btn-submit">🔍 Tampilkan Data</button>
    </form>
</div>

<!-- PAGINATION CONTAINER (TOP) -->
<?php if ($is_searched && $total_pages > 1): ?>
<div class="pagination-container">
    <div>
        Menampilkan <b><?= count($display_rows) ?></b> dari total <b><?= number_format($total_all_records, 0, ',', '.') ?></b> data
    </div>
    <ul class="pagination">
        <?php 
        $query_nav = $_GET;
        
        if ($page > 1) {
            $query_nav['page'] = $page - 1;
            echo "<li><a href='?" . http_build_query($query_nav) . "'>&laquo; Prev</a></li>";
        } else {
            echo "<li><span class='disabled'>&laquo; Prev</span></li>";
        }

        $start_p = max(1, $page - 2);
        $end_p   = min($total_pages, $page + 2);

        for ($p = $start_p; $p <= $end_p; $p++) {
            $query_nav['page'] = $p;
            if ($p == $page) {
                echo "<li><span class='active'>{$p}</span></li>";
            } else {
                echo "<li><a href='?" . http_build_query($query_nav) . "'>{$p}</a></li>";
            }
        }

        if ($page < $total_pages) {
            $query_nav['page'] = $page + 1;
            echo "<li><a href='?" . http_build_query($query_nav) . "'>Next &raquo;</a></li>";
        } else {
            echo "<li><span class='disabled'>Next &raquo;</span></li>";
        }
        ?>
    </ul>
</div>
<?php endif; ?>

<div class="table-responsive" style="margin-top: 15px;">
    <table>
        <?php if (!$is_searched): ?>
            <tbody>
                <tr>
                    <td colspan="35" style="text-align:center; padding:30px; color:#64748B; font-size:14px;">
                        📌 Silakan atur filter di atas, lalu klik tombol <b>🔍 Tampilkan Data</b> untuk menarik data.
                    </td>
                </tr>
            </tbody>
        <?php elseif (!empty($display_rows)): ?>
            <thead>
                <tr>
                    <?php 
                    $headers = array_keys($display_rows[0]);
                    foreach ($headers as $h): ?>
                        <th><?= htmlspecialchars(strtoupper($h)) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($display_rows as $r): ?>
                    <tr>
                        <?php foreach ($r as $key => $value): 
                            $field_name = strtolower($key);
                            $val = htmlspecialchars($value ?? '');
                        ?>
                            <?php if (in_array($field_name, ['total_qty', 'total_rupiah', $qty_col, $rp_col, 'qtyo', 'qtyr', 'rp_pesanan', 'rp_realisasi', 'rupiah_pb', 'rupiah_realisasi', 'dpp_pesanan', 'ntotal', 'item_order', 'item_real', 'jumlah_item_pb', 'jumlah_item_realisasi', 'realisasi_pb'])): ?>
                                <td class="text-center"><?= number_format((float)$value, 2, ',', '.') ?></td>
                            <?php elseif (in_array($field_name, ['total_record', 'total_pb'])): ?>
                                <td class="text-center"><?= number_format((float)$value, 0, ',', '.') ?></td>
                            <?php else: ?>
                                <td><?= $val ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <?php if ($sel_view === 'rekap'): ?>
                        <td colspan="3" class="text-right">GRAND TOTAL (ALL PAGES):</td>
                        <td class="text-center"><?= number_format($grand_qty, 2, ',', '.') ?></td>
                        <td class="text-center"><?= number_format($grand_rp, 2, ',', '.') ?></td>
                    <?php else: ?>
                        <?php 
                        if ($selected_query_key === 'intransit') {
                            $colspan_qty = 9;
                            echo "<td colspan='{$colspan_qty}' class='text-right'>GRAND TOTAL (ALL PAGES):</td>";
                            echo "<td class='text-center'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td></td>";
                            echo "<td class='text-center'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td></td>";
                        } elseif ($selected_query_key === 'sertim_ipp') {
                            $colspan_qty = 7;
                            echo "<td colspan='{$colspan_qty}' class='text-right'>GRAND TOTAL (ALL PAGES):</td>";
                            echo "<td class='text-center'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td class='text-center'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td colspan='3'></td>";
                        } elseif ($selected_query_key === 'siap_struk_belum_dikirim') {
                            echo "<td colspan='7' class='text-right'>GRAND TOTAL (ALL PAGES):</td>";
                            echo "<td class='text-center'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td colspan='3'></td>";
                            echo "<td class='text-center'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td colspan='4'></td>";
                        } elseif ($selected_query_key === 'pb_vs_realisasi') {
                            echo "<td colspan='5' class='text-right'>GRAND TOTAL (ALL PAGES):</td>";
                            echo "<td class='text-center'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td class='text-center'>" . number_format($grand_rp_real, 2, ',', '.') . "</td>";
                            echo "<td class='text-center'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td class='text-center'>" . number_format($grand_qty_real, 2, ',', '.') . "</td>";
                        } else {
                            $colspan_qty = 16;
                            echo "<td colspan='{$colspan_qty}' class='text-right'>GRAND TOTAL (ALL PAGES):</td>";
                            echo "<td class='text-center'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td></td>";
                            echo "<td class='text-center'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td colspan='14'></td>";
                        }
                        ?>
                    <?php endif; ?>
                </tr>
            </tfoot>
        <?php else: ?>
            <tbody>
                <tr>
                    <td colspan="35" style="text-align:center; padding:20px; color:#64748B;">
                        Data tidak ditemukan untuk periode/filter yang dipilih.
                    </td>
                </tr>
            </tbody>
        <?php endif; ?>
    </table>
</div>

</body>
</html>