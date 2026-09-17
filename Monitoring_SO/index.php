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
    ["id" => "SPI_BLI",  "type" => "SPI", "name" => "SPI BLI",  "host" => "172.31.172.212", "port" => "5432", "dbname" => "spibli4f", "user" => "edp", "password" => "3dp1grVIEW"],

    // ICM
    ["id" => "ICM_AMB",   "type" => "ICM", "name" => "ICM AMB",   "host" => "192.168.230.191", "port" => "5432", "dbname" => "icmamb", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BDG",   "type" => "ICM", "name" => "ICM BDG",   "host" => "192.168.222.191", "port" => "5432", "dbname" => "icmbdg", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BDL",   "type" => "ICM", "name" => "ICM BDL",   "host" => "192.168.247.191", "port" => "5432", "dbname" => "icmbdl", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BGR",   "type" => "ICM", "name" => "ICM BGR",   "host" => "192.168.240.191", "port" => "5432", "dbname" => "icmbgr", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BLI",   "type" => "ICM", "name" => "ICM BLI",   "host" => "192.168.148.191", "port" => "5432", "dbname" => "icmbli", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BMS",   "type" => "ICM", "name" => "ICM BMS",   "host" => "192.168.239.191", "port" => "5432", "dbname" => "icmbms", "user" => "edp", "password" => "3dp1grVIEW"],
    ["id" => "ICM_BTM",   "type" => "ICM", "name" => "ICM BTM",   "host" => "192.168.255.191", "port" => "5432", "dbname" => "igrbtm", "user" => "edp", "password" => "3dp1grVIEW"],
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
// 2. PARAMETER FILTER, PAGINATION, DAN TRIGGER LOAD DATA
// ---------------------------------------------------------
$is_searched = isset($_GET['search']) && $_GET['search'] === '1';

$sel_type   = isset($_GET['server_type']) ? $_GET['server_type'] : 'ALL';
$sel_cabang = isset($_GET['cabang']) ? $_GET['cabang'] : ['ALL'];
if (!is_array($sel_cabang)) {
    $sel_cabang = [$sel_cabang];
}

$sel_view   = isset($_GET['view_mode']) ? $_GET['view_mode'] : 'rekap';
$sel_tgl    = isset($_GET['tgl']) && $_GET['tgl'] !== 'ALL' ? sprintf("%02d", $_GET['tgl']) : 'ALL';
$sel_bulan  = isset($_GET['bulan']) ? $_GET['bulan'] : date('m');
$sel_tahun  = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');

// Pagination System
$page     = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 50; 

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

// Where Query Condition
$conditions_soic = [];
$conditions_mstran = [];

if ($sel_tgl !== 'ALL') {
    $conditions_soic[]   = "EXTRACT(DAY FROM rso_tglso) = " . (int)$sel_tgl;
    $conditions_mstran[] = "EXTRACT(DAY FROM mstd_tgldoc) = " . (int)$sel_tgl;
}

if ($sel_bulan !== 'ALL') {
    $conditions_soic[]   = "EXTRACT(MONTH FROM rso_tglso) = " . (int)$sel_bulan;
    $conditions_mstran[] = "EXTRACT(MONTH FROM mstd_tgldoc) = " . (int)$sel_bulan;
}

if ($sel_tahun !== 'ALL') {
    $conditions_soic[]   = "EXTRACT(YEAR FROM rso_tglso) = " . (int)$sel_tahun;
    $conditions_mstran[] = "EXTRACT(YEAR FROM mstd_tgldoc) = " . (int)$sel_tahun;
}

$where_soic   = count($conditions_soic) > 0 ? implode(' AND ', $conditions_soic) : "1=1";
$where_mstran = count($conditions_mstran) > 0 ? implode(' AND ', $conditions_mstran) : "1=1";

// ---------------------------------------------------------
// 3. CONFIG QUERY
// ---------------------------------------------------------
$queries = [
    'so_ic' => [
        'title' => '1. Laporan SO_IC (Reset SO)',
        'qty_col' => 'QTYSO',
        'rp_col'  => 'RPSO',
        'sql_detail' => "SELECT 
            case 
                when rso_kodeigr='01' then 'IGR CPG' when rso_kodeigr='03' then 'IGR SBY' when rso_kodeigr='04' then 'IGR BDG'
                when rso_kodeigr='05' then 'IGR TGR' when rso_kodeigr='06' then 'IGR YOG' when rso_kodeigr='15' then 'IGR MDN'
                when rso_kodeigr='16' then 'IGR BKS' when rso_kodeigr='17' then 'IGR PLG' when rso_kodeigr='18' then 'IGR KMY'
                when rso_kodeigr='20' then 'IGR PKU' when rso_kodeigr='21' then 'IGR SMD' when rso_kodeigr='22' then 'IGR SMG'
                when rso_kodeigr='25' then 'IGR BGR' when rso_kodeigr='26' then 'IGR PTK' when rso_kodeigr='27' then 'IGR BMS'
                when rso_kodeigr='28' then 'IGR MDO' when rso_kodeigr='31' then 'IGR MKS' when rso_kodeigr='32' then 'IGR JBI'
                when rso_kodeigr='33' then 'IGR KRI' when rso_kodeigr='34' then 'IGR AMB' when rso_kodeigr='35' then 'IGR CPT'
                when rso_kodeigr='36' then 'IGR KRW' when rso_kodeigr='37' then 'IGR MLG' when rso_kodeigr='38' then 'IGR BDL'
                when rso_kodeigr='39' then 'IGR SLO' when rso_kodeigr='43' then 'IGR SBI' when rso_kodeigr='44' then 'IGR CKL'
                when rso_kodeigr='46' then 'IGR BTM' when rso_kodeigr='47' then 'IGR PWT' when rso_kodeigr='50' then 'IGR GTO'
                when rso_kodeigr='48' then 'IGR BLI' when rso_kodeigr='51' then 'IGR PDG' when rso_kodeigr='7A' then 'ICM CKL'
                when rso_kodeigr='7B' then 'ICM SBI' when rso_kodeigr='7D' then 'ICM TGR' when rso_kodeigr='7G' then 'ICM YOG'
                when rso_kodeigr='7K' then 'ICM PLG' when rso_kodeigr='7H' then 'ICM BGR' when rso_kodeigr='7F' then 'ICM MLG'
                when rso_kodeigr='7P' then 'ICM AMB' when rso_kodeigr='7L' then 'ICM KRW' when rso_kodeigr='7E' then 'ICM BDL'
                when rso_kodeigr='7S' then 'ICM PWT' when rso_kodeigr='7R' then 'ICM SMG' when rso_kodeigr='7N' then 'ICM KRI'
                when rso_kodeigr='7M' then 'ICM PKU' when rso_kodeigr='7C' then 'ICM BTM' when rso_kodeigr='7I' then 'ICM SMD'
                when rso_kodeigr='7O' then 'ICM KMY' when rso_kodeigr='7J' then 'ICM BMS' when rso_kodeigr='7U' then 'ICM PTK'
                when rso_kodeigr='7V' then 'ICM SLO' when rso_kodeigr='7X' then 'ICM GTO' when rso_kodeigr='7Q' then 'ICM BDG'
                when rso_kodeigr='7W' then 'ICM MDO' when rso_kodeigr='8B' then 'ICM BLI' when rso_kodeigr='7Z' then 'ICM SBY'
                when rso_kodeigr='7Y' then 'ICM CPG' when rso_kodeigr='1A' then 'SPI BLJ' when rso_kodeigr='1B' then 'SPI MKS'
                when rso_kodeigr='1C' then 'SPI KRW' when rso_kodeigr='1D' then 'SPI SBY' when rso_kodeigr='1E' then 'SPI MDN'
                when rso_kodeigr='1F' then 'SPI MDO' when rso_kodeigr='1G' then 'SPI BDG' when rso_kodeigr='1H' then 'SPI MLG'
                when rso_kodeigr='1I' then 'SPI CPG' when rso_kodeigr='1K' then 'SPI BKS' when rso_kodeigr='1L' then 'SPI SMD'
                when rso_kodeigr='1M' then 'SPI BMS' when rso_kodeigr='1N' then 'SPI SMG' when rso_kodeigr='1Q' then 'SPI BGR'
                when rso_kodeigr='1J' then 'SPI SLO' when rso_kodeigr='1P' then 'SPI TGR2' when rso_kodeigr='1S' then 'SPI CKL'
                when rso_kodeigr='1R' then 'SPI BDL' when rso_kodeigr='1T' then 'SPI SBI' when rso_kodeigr='1O' then 'SPI YOG'
                when rso_kodeigr='1U' then 'SPI BDG2' when rso_kodeigr='1V' then 'SPI BDG3' when rso_kodeigr='1W' then 'SPI BDG4'
                when rso_kodeigr='1Y' then 'SPI BDG5' when rso_kodeigr='2B' then 'SPI CKL2' when rso_kodeigr='2G' then 'SPI SLO2'
                when rso_kodeigr='2H' then 'SPI BDG6' when rso_kodeigr='2A' then 'SPI CPT' when rso_kodeigr='2D' then 'SPI SBY2'
                when rso_kodeigr='2E' then 'SPI SBY3' when rso_kodeigr='2F' then 'SPI SMG3' when rso_kodeigr='1Z' then 'SPI KMY'
                when rso_kodeigr='2L' then 'SPI CKL3' when rso_kodeigr='2N' then 'SPI SLO3' when rso_kodeigr='2I' then 'SPI SMG4'
                when rso_kodeigr='2J' then 'SPI SMG5' when rso_kodeigr='2O' then 'SPI SBY4' when rso_kodeigr='2K' then 'SPI BDG7'
                when rso_kodeigr='2C' then 'SPI MLG2' when rso_kodeigr='AA' then 'SPIX BKS' when rso_kodeigr='AB' then 'SPIX BGR'
                when rso_kodeigr='AC' then 'SPIX SMG' when rso_kodeigr='2P' then 'SPI BDG8' when rso_kodeigr='2Q' then 'SPI MLG4'
                when rso_kodeigr='2R' then 'SPI CKL4' when rso_kodeigr='2M' then 'SPI MLG3' when rso_kodeigr='2V' then 'SPI PKU'
                when rso_kodeigr='2X' then 'SPI SBY5' when rso_kodeigr='2U' then 'SPI BDL2' when rso_kodeigr='2T' then 'SPI BDG9'
                when rso_kodeigr='2Y' then 'SPI SMG6' when rso_kodeigr='2Z' then 'SPI YOG2' when rso_kodeigr='2W' then 'SPI SBI2'
                when rso_kodeigr='2S' then 'SPI MDN2' when rso_kodeigr='3A' then 'SPI TGR3' when rso_kodeigr='3B' then 'SPI BGR2'
                when rso_kodeigr='3C' then 'SPI MLG5' when rso_kodeigr='3D' then 'SPI PWT'  when rso_kodeigr='3E' then 'SPI BDG10'
                when rso_kodeigr='3F' then 'SPI SLO4' when rso_kodeigr='3O' then 'SPI BKS3' when rso_kodeigr='3L' then 'SPI BKS2'
                when rso_kodeigr='4C' then 'SPI BMS2' when rso_kodeigr='3U' then 'SPI BGR4' when rso_kodeigr='3M' then 'SPI CKL5'
                when rso_kodeigr='3K' then 'SPI SMG7' when rso_kodeigr='3J' then 'SPI SMD2' when rso_kodeigr='3I' then 'SPI SBI3'
                when rso_kodeigr='3N' then 'SPI SBY6' when rso_kodeigr='4B' then 'SPI MLG7' when rso_kodeigr='3X' then 'SPI BKS4'
                when rso_kodeigr='4G' then 'SPI BLI2' when rso_kodeigr='4D' then 'SPI KRI2' when rso_kodeigr='4E' then 'SPI BMS3'
                when rso_kodeigr='4L' then 'SPI CPG2' when rso_kodeigr='3R' then 'SPI JBI'  when rso_kodeigr='4A' then 'SPI SBY8'
                when rso_kodeigr='3G' then 'SPI BGR3' when rso_kodeigr='3Y' then 'SPI MLG6' when rso_kodeigr='4I' then 'SPI MLG8'
                when rso_kodeigr='4M' then 'SPI PTK'  when rso_kodeigr='4H' then 'SPI SBY9' when rso_kodeigr='3S' then 'SPI TGR4'
                when rso_kodeigr='3T' then 'SPI AMB'  when rso_kodeigr='7T' then 'ICM CPT'  when rso_kodeigr='3Q' then 'SPI KRI'
                when rso_kodeigr='4J' then 'SPI KRW2' when rso_kodeigr='4N' then 'SPI KRW3' when rso_kodeigr='4K' then 'SPI MDO'
                when rso_kodeigr='3H' then 'SPI PLG'  when rso_kodeigr='3W' then 'SPI PLG2'
            END AS CAB,
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
        order by rso_tglso desc",
        'sql_rekap' => "SELECT 
            rso_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(rso_qtyreset) AS TOTAL_QTY,
            SUM(rso_qtyreset * rso_avgcostreset) AS TOTAL_RUPIAH
        FROM TBTR_RESET_SOIC
        WHERE {$where_soic}
        GROUP BY rso_kodeigr
        ORDER BY rso_kodeigr"
    ],
    'master_mpp' => [
        'title' => '2. Laporan MPP (MPP)',
        'qty_col' => 'QTY',
        'rp_col'  => 'GROSS',
        'sql_detail' => "SELECT
            case 
                when mstd_kodeigr='01' then 'IGR CPG' when mstd_kodeigr='03' then 'IGR SBY' when mstd_kodeigr='04' then 'IGR BDG'
                when mstd_kodeigr='05' then 'IGR TGR' when mstd_kodeigr='06' then 'IGR YOG' when mstd_kodeigr='15' then 'IGR MDN'
                when mstd_kodeigr='16' then 'IGR BKS' when mstd_kodeigr='17' then 'IGR PLG' when mstd_kodeigr='18' then 'IGR KMY'
                when mstd_kodeigr='20' then 'IGR PKU' when mstd_kodeigr='21' then 'IGR SMD' when mstd_kodeigr='22' then 'IGR SMG'
                when mstd_kodeigr='25' then 'IGR BGR' when mstd_kodeigr='26' then 'IGR PTK' when mstd_kodeigr='27' then 'IGR BMS'
                when mstd_kodeigr='28' then 'IGR MDO' when mstd_kodeigr='31' then 'IGR MKS' when mstd_kodeigr='32' then 'IGR JBI'
                when mstd_kodeigr='33' then 'IGR KRI' when mstd_kodeigr='34' then 'IGR AMB' when mstd_kodeigr='35' then 'IGR CPT'
                when mstd_kodeigr='36' then 'IGR KRW' when mstd_kodeigr='37' then 'IGR MLG' when mstd_kodeigr='38' then 'IGR BDL'
                when mstd_kodeigr='39' then 'IGR SLO' when mstd_kodeigr='43' then 'IGR SBI' when mstd_kodeigr='44' then 'IGR CKL'
                when mstd_kodeigr='46' then 'IGR BTM' when mstd_kodeigr='47' then 'IGR PWT' when mstd_kodeigr='50' then 'IGR GTO'
                when mstd_kodeigr='48' then 'IGR BLI' when mstd_kodeigr='51' then 'IGR PDG' when mstd_kodeigr='7A' then 'ICM CKL'
                when mstd_kodeigr='7B' then 'ICM SBI' when mstd_kodeigr='7D' then 'ICM TGR' when mstd_kodeigr='7G' then 'ICM YOG'
                when mstd_kodeigr='7K' then 'ICM PLG' when mstd_kodeigr='7H' then 'ICM BGR' when mstd_kodeigr='7F' then 'ICM MLG'
                when mstd_kodeigr='7P' then 'ICM AMB' when mstd_kodeigr='7L' then 'ICM KRW' when mstd_kodeigr='7E' then 'ICM BDL'
                when mstd_kodeigr='7S' then 'ICM PWT' when mstd_kodeigr='7R' then 'ICM SMG' when mstd_kodeigr='7N' then 'ICM KRI'
                when mstd_kodeigr='7M' then 'ICM PKU' when mstd_kodeigr='7C' then 'ICM BTM' when mstd_kodeigr='7I' then 'ICM SMD'
                when mstd_kodeigr='7O' then 'ICM KMY' when mstd_kodeigr='7J' then 'ICM BMS' when mstd_kodeigr='7U' then 'ICM PTK'
                when mstd_kodeigr='7V' then 'ICM SLO' when mstd_kodeigr='7X' then 'ICM GTO' when mstd_kodeigr='7Q' then 'ICM BDG'
                when mstd_kodeigr='7W' then 'ICM MDO' when mstd_kodeigr='8B' then 'ICM BLI' when mstd_kodeigr='7Z' then 'ICM SBY'
                when mstd_kodeigr='7Y' then 'ICM CPG' when mstd_kodeigr='1A' then 'SPI BLJ' when mstd_kodeigr='1B' then 'SPI MKS'
                when mstd_kodeigr='1C' then 'SPI KRW' when mstd_kodeigr='1D' then 'SPI SBY' when mstd_kodeigr='1E' then 'SPI MDN'
                when mstd_kodeigr='1F' then 'SPI MDO' when mstd_kodeigr='1G' then 'SPI BDG' when mstd_kodeigr='1H' then 'SPI MLG'
                when mstd_kodeigr='1I' then 'SPI CPG' when mstd_kodeigr='1K' then 'SPI BKS' when mstd_kodeigr='1L' then 'SPI SMD'
                when mstd_kodeigr='1M' then 'SPI BMS' when mstd_kodeigr='1N' then 'SPI SMG' when mstd_kodeigr='1Q' then 'SPI BGR'
                when mstd_kodeigr='1J' then 'SPI SLO' when mstd_kodeigr='1P' then 'SPI TGR2' when mstd_kodeigr='1S' then 'SPI CKL'
                when mstd_kodeigr='1R' then 'SPI BDL' when mstd_kodeigr='1T' then 'SPI SBI' when mstd_kodeigr='1O' then 'SPI YOG'
                when mstd_kodeigr='1U' then 'SPI BDG2' when mstd_kodeigr='1V' then 'SPI BDG3' when mstd_kodeigr='1W' then 'SPI BDG4'
                when mstd_kodeigr='1Y' then 'SPI BDG5' when mstd_kodeigr='2B' then 'SPI CKL2' when mstd_kodeigr='2G' then 'SPI SLO2'
                when mstd_kodeigr='2H' then 'SPI BDG6' when mstd_kodeigr='2A' then 'SPI CPT' when mstd_kodeigr='2D' then 'SPI SBY2'
                when mstd_kodeigr='2E' then 'SPI SBY3' when mstd_kodeigr='2F' then 'SPI SMG3' when mstd_kodeigr='1Z' then 'SPI KMY'
                when mstd_kodeigr='2L' then 'SPI CKL3' when mstd_kodeigr='2N' then 'SPI SLO3' when mstd_kodeigr='2I' then 'SPI SMG4'
                when mstd_kodeigr='2J' then 'SPI SMG5' when mstd_kodeigr='2O' then 'SPI SBY4' when mstd_kodeigr='2K' then 'SPI BDG7'
                when mstd_kodeigr='2C' then 'SPI MLG2' when mstd_kodeigr='AA' then 'SPIX BKS' when mstd_kodeigr='AB' then 'SPIX BGR'
                when mstd_kodeigr='AC' then 'SPIX SMG' when mstd_kodeigr='2P' then 'SPI BDG8' when mstd_kodeigr='2Q' then 'SPI MLG4'
                when mstd_kodeigr='2R' then 'SPI CKL4' when mstd_kodeigr='2M' then 'SPI MLG3' when mstd_kodeigr='2V' then 'SPI PKU'
                when mstd_kodeigr='2X' then 'SPI SBY5' when mstd_kodeigr='2U' then 'SPI BDL2' when mstd_kodeigr='2T' then 'SPI BDG9'
                when mstd_kodeigr='2Y' then 'SPI SMG6' when mstd_kodeigr='2Z' then 'SPI YOG2' when mstd_kodeigr='2W' then 'SPI SBI2'
                when mstd_kodeigr='2S' then 'SPI MDN2' when mstd_kodeigr='3A' then 'SPI TGR3' when mstd_kodeigr='3B' then 'SPI BGR2'
                when mstd_kodeigr='3C' then 'SPI MLG5' when mstd_kodeigr='3D' then 'SPI PWT'  when mstd_kodeigr='3E' then 'SPI BDG10'
                when mstd_kodeigr='3F' then 'SPI SLO4' when mstd_kodeigr='3O' then 'SPI BKS3' when mstd_kodeigr='3L' then 'SPI BKS2'
                when mstd_kodeigr='4C' then 'SPI BMS2' when mstd_kodeigr='3U' then 'SPI BGR4' when mstd_kodeigr='3M' then 'SPI CKL5'
                when mstd_kodeigr='3K' then 'SPI SMG7' when mstd_kodeigr='3J' then 'SPI SMD2' when mstd_kodeigr='3I' then 'SPI SBI3'
                when mstd_kodeigr='3N' then 'SPI SBY6' when mstd_kodeigr='4B' then 'SPI MLG7' when mstd_kodeigr='3X' then 'SPI BKS4'
                when mstd_kodeigr='4G' then 'SPI BLI2' when mstd_kodeigr='4D' then 'SPI KRI2' when mstd_kodeigr='4E' then 'SPI BMS3'
                when mstd_kodeigr='4L' then 'SPI CPG2' when mstd_kodeigr='3R' then 'SPI JBI'  when mstd_kodeigr='4A' then 'SPI SBY8'
                when mstd_kodeigr='3G' then 'SPI BGR3' when mstd_kodeigr='3Y' then 'SPI MLG6' when mstd_kodeigr='4I' then 'SPI MLG8'
                when mstd_kodeigr='4M' then 'SPI PTK'  when mstd_kodeigr='4H' then 'SPI SBY9' when mstd_kodeigr='3S' then 'SPI TGR4'
                when mstd_kodeigr='7T' then 'ICM CPT'  when mstd_kodeigr='3T' then 'SPI AMB'
            END AS CAB,
            to_char(MSTD_TGLDOC, 'DD-MM-YYYY') AS TGL,
            MSTD_KODEDIVISI AS DIV, MSTD_KODEDEPARTEMENT AS DEP, MSTD_KODEKATEGORIBRG AS KAT,
            MSTD_PRDCD AS PLU, PRD_DESKRIPSIPANJANG AS DESKRIPSI, MSTD_UNIT AS UNIT, MSTD_FRAC AS FRAC, MSTD_KODETAG AS TAG,
            case when prd_flagomi='Y' and prc_pluigr is not null then 'IGR+OMI' else 'IGR ONLY' end as FLAG, 
            MSTD_QTY AS QTY, MSTD_GROSS AS GROSS, MSTD_KETERANGAN
        FROM TBTR_MSTRAN_D
        left join tbmaster_prodmast on prd_prdcd=mstd_prdcd      
        left join tbmaster_prodcrm on prc_pluigr=prd_prdcd 
        WHERE MSTD_TYPETRN='X' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        ORDER BY MSTD_TGLDOC DESC",
        'sql_rekap' => "SELECT 
            mstd_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(MSTD_QTY) AS TOTAL_QTY,
            SUM(MSTD_GROSS) AS TOTAL_RUPIAH
        FROM TBTR_MSTRAN_D
        WHERE MSTD_TYPETRN='X' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        GROUP BY mstd_kodeigr
        ORDER BY mstd_kodeigr"
    ],
    'master_nbh' => [
        'title' => '3. Laporan NBH (NBH)',
        'qty_col' => 'QTY',
        'rp_col'  => 'GROSS',
        'sql_detail' => "SELECT     
            case 
                when mstd_kodeigr='01' then 'IGR CPG' when mstd_kodeigr='03' then 'IGR SBY' when mstd_kodeigr='04' then 'IGR BDG'
                when mstd_kodeigr='05' then 'IGR TGR' when mstd_kodeigr='06' then 'IGR YOG' when mstd_kodeigr='15' then 'IGR MDN'
                when mstd_kodeigr='16' then 'IGR BKS' when mstd_kodeigr='17' then 'IGR PLG' when mstd_kodeigr='18' then 'IGR KMY'
                when mstd_kodeigr='20' then 'IGR PKU' when mstd_kodeigr='21' then 'IGR SMD' when mstd_kodeigr='22' then 'IGR SMG'
                when mstd_kodeigr='25' then 'IGR BGR' when mstd_kodeigr='26' then 'IGR PTK' when mstd_kodeigr='27' then 'IGR BMS'
                when mstd_kodeigr='28' then 'IGR MDO' when mstd_kodeigr='31' then 'IGR MKS' when mstd_kodeigr='32' then 'IGR JBI'
                when mstd_kodeigr='33' then 'IGR KRI' when mstd_kodeigr='34' then 'IGR AMB' when mstd_kodeigr='35' then 'IGR CPT'
                when mstd_kodeigr='36' then 'IGR KRW' when mstd_kodeigr='37' then 'IGR MLG' when mstd_kodeigr='38' then 'IGR BDL'
                when mstd_kodeigr='39' then 'IGR SLO' when mstd_kodeigr='43' then 'IGR SBI' when mstd_kodeigr='44' then 'IGR CKL'
                when mstd_kodeigr='46' then 'IGR BTM' when mstd_kodeigr='47' then 'IGR PWT' when mstd_kodeigr='50' then 'IGR GTO'
                when mstd_kodeigr='48' then 'IGR BLI' when mstd_kodeigr='51' then 'IGR PDG' when mstd_kodeigr='7A' then 'ICM CKL'
                when mstd_kodeigr='7B' then 'ICM SBI' when mstd_kodeigr='7D' then 'ICM TGR' when mstd_kodeigr='7G' then 'ICM YOG'
                when mstd_kodeigr='7K' then 'ICM PLG' when mstd_kodeigr='7H' then 'ICM BGR' when mstd_kodeigr='7F' then 'ICM MLG'
                when mstd_kodeigr='7P' then 'ICM AMB' when mstd_kodeigr='7L' then 'ICM KRW' when mstd_kodeigr='7E' then 'ICM BDL'
                when mstd_kodeigr='7S' then 'ICM PWT' when mstd_kodeigr='7R' then 'ICM SMG' when mstd_kodeigr='7N' then 'ICM KRI'
                when mstd_kodeigr='7M' then 'ICM PKU' when mstd_kodeigr='7C' then 'ICM BTM' when mstd_kodeigr='7I' then 'ICM SMD'
                when mstd_kodeigr='7O' then 'ICM KMY' when mstd_kodeigr='7J' then 'ICM BMS' when mstd_kodeigr='7U' then 'ICM PTK'
                when mstd_kodeigr='7V' then 'ICM SLO' when mstd_kodeigr='7X' then 'ICM GTO' when mstd_kodeigr='7Q' then 'ICM BDG'
                when mstd_kodeigr='7W' then 'ICM MDO' when mstd_kodeigr='8B' then 'ICM BLI' when mstd_kodeigr='7Z' then 'ICM SBY'
                when mstd_kodeigr='7Y' then 'ICM CPG' when mstd_kodeigr='1A' then 'SPI BLJ' when mstd_kodeigr='1B' then 'SPI MKS'
                when mstd_kodeigr='1C' then 'SPI KRW' when mstd_kodeigr='1D' then 'SPI SBY' when mstd_kodeigr='1E' then 'SPI MDN'
                when mstd_kodeigr='1F' then 'SPI MDO' when mstd_kodeigr='1G' then 'SPI BDG' when mstd_kodeigr='1H' then 'SPI MLG'
                when mstd_kodeigr='1I' then 'SPI CPG' when mstd_kodeigr='1K' then 'SPI BKS' when mstd_kodeigr='1L' then 'SPI SMD'
                when mstd_kodeigr='1M' then 'SPI BMS' when mstd_kodeigr='1N' then 'SPI SMG' when mstd_kodeigr='1Q' then 'SPI BGR'
                when mstd_kodeigr='1J' then 'SPI SLO' when mstd_kodeigr='1P' then 'SPI TGR2' when mstd_kodeigr='1S' then 'SPI CKL'
                when mstd_kodeigr='1R' then 'SPI BDL' when mstd_kodeigr='1T' then 'SPI SBI' when mstd_kodeigr='1O' then 'SPI YOG'
                when mstd_kodeigr='1U' then 'SPI BDG2' when mstd_kodeigr='1V' then 'SPI BDG3' when mstd_kodeigr='1W' then 'SPI BDG4'
                when mstd_kodeigr='1Y' then 'SPI BDG5' when mstd_kodeigr='2B' then 'SPI CKL2' when mstd_kodeigr='2G' then 'SPI SLO2'
                when mstd_kodeigr='2H' then 'SPI BDG6' when mstd_kodeigr='2A' then 'SPI CPT' when mstd_kodeigr='2D' then 'SPI SBY2'
                when mstd_kodeigr='2E' then 'SPI SBY3' when mstd_kodeigr='2F' then 'SPI SMG3' when mstd_kodeigr='1Z' then 'SPI KMY'
                when mstd_kodeigr='2L' then 'SPI CKL3' when mstd_kodeigr='2N' then 'SPI SLO3' when mstd_kodeigr='2I' then 'SPI SMG4'
                when mstd_kodeigr='2J' then 'SPI SMG5' when mstd_kodeigr='2O' then 'SPI SBY4' when mstd_kodeigr='2K' then 'SPI BDG7'
                when mstd_kodeigr='2C' then 'SPI MLG2' when mstd_kodeigr='AA' then 'SPIX BKS' when mstd_kodeigr='AB' then 'SPIX BGR'
                when mstd_kodeigr='AC' then 'SPIX SMG' when mstd_kodeigr='2P' then 'SPI BDG8' when mstd_kodeigr='2Q' then 'SPI MLG4'
                when mstd_kodeigr='2R' then 'SPI CKL4' when mstd_kodeigr='2M' then 'SPI MLG3' when mstd_kodeigr='2V' then 'SPI PKU'
                when mstd_kodeigr='2X' then 'SPI SBY5' when mstd_kodeigr='2U' then 'SPI BDL2' when mstd_kodeigr='2T' then 'SPI BDG9'
                when mstd_kodeigr='2Y' then 'SPI SMG6' when mstd_kodeigr='2Z' then 'SPI YOG2' when mstd_kodeigr='2W' then 'SPI SBI2'
                when mstd_kodeigr='2S' then 'SPI MDN2' when mstd_kodeigr='3A' then 'SPI TGR3' when mstd_kodeigr='3B' then 'SPI BGR2'
                when mstd_kodeigr='3C' then 'SPI MLG5' when mstd_kodeigr='3D' then 'SPI PWT'  when mstd_kodeigr='3E' then 'SPI BDG10'
                when mstd_kodeigr='3F' then 'SPI SLO4' when mstd_kodeigr='3O' then 'SPI BKS3' when mstd_kodeigr='3L' then 'SPI BKS2'
                when mstd_kodeigr='4C' then 'SPI BMS2' when mstd_kodeigr='3U' then 'SPI BGR4' when mstd_kodeigr='3M' then 'SPI CKL5'
                when mstd_kodeigr='3K' then 'SPI SMG7' when mstd_kodeigr='3J' then 'SPI SMD2' when mstd_kodeigr='3I' then 'SPI SBI3'
                when mstd_kodeigr='3N' then 'SPI SBY6' when mstd_kodeigr='4B' then 'SPI MLG7' when mstd_kodeigr='3X' then 'SPI BKS4'
                when mstd_kodeigr='4G' then 'SPI BLI2' when mstd_kodeigr='4D' then 'SPI KRI2' when mstd_kodeigr='4E' then 'SPI BMS3'
                when mstd_kodeigr='4L' then 'SPI CPG2' when mstd_kodeigr='3R' then 'SPI JBI'  when mstd_kodeigr='4A' then 'SPI SBY8'
                when mstd_kodeigr='3G' then 'SPI BGR3' when mstd_kodeigr='3Y' then 'SPI MLG6' when mstd_kodeigr='4I' then 'SPI MLG8'
                when mstd_kodeigr='4M' then 'SPI PTK'  when mstd_kodeigr='4H' then 'SPI SBY9' when mstd_kodeigr='3S' then 'SPI TGR4'
            END AS CAB,
            to_char(MSTD_TGLDOC, 'DD-MM-YYYY') AS TGL,
            MSTD_KODEDIVISI AS DIV, MSTD_KODEDEPARTEMENT AS DEP, MSTD_KODEKATEGORIBRG AS KAT,
            MSTD_PRDCD AS PLU, PRD_DESKRIPSIPANJANG AS DESKRIPSI, MSTD_UNIT AS UNIT, MSTD_FRAC AS FRAC, MSTD_KODETAG AS TAG,
            case when prd_flagomi='Y' and prc_pluigr is not null then 'IGR+OMI' else 'IGR ONLY' end as FLAG, 
            MSTD_QTY AS QTY, MSTD_GROSS AS GROSS, MSTD_DISCRPH AS DISCOUNT, MSTD_KETERANGAN AS KETERANGAN  
        FROM TBTR_MSTRAN_D
        left join tbmaster_prodmast on prd_prdcd=mstd_prdcd      
        left join tbmaster_prodcrm on prc_pluigr=prd_prdcd 
        WHERE MSTD_TYPETRN='H' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        ORDER BY MSTD_TGLDOC DESC",
        'sql_rekap' => "SELECT 
            mstd_kodeigr AS KODE_CABANG,
            COUNT(*) AS TOTAL_RECORD,
            SUM(MSTD_QTY) AS TOTAL_QTY,
            SUM(MSTD_GROSS) AS TOTAL_RUPIAH
        FROM TBTR_MSTRAN_D
        WHERE MSTD_TYPETRN='H' AND MSTD_RECORDID IS NULL AND {$where_mstran}
        GROUP BY mstd_kodeigr
        ORDER BY mstd_kodeigr"
    ]
];

$selected_query_key = isset($_GET['query_type']) && isset($queries[$_GET['query_type']]) ? $_GET['query_type'] : 'so_ic';
$active_query_config = $queries[$selected_query_key];
$base_query = ($sel_view === 'rekap') ? $active_query_config['sql_rekap'] : $active_query_config['sql_detail'];

// Query agregat khusus untuk Rekap Gabungan 3 Modul
$sql_soic_agg = "SELECT COALESCE(SUM(rso_qtyreset * rso_avgcostreset), 0) AS total_rp FROM TBTR_RESET_SOIC WHERE {$where_soic}";
$sql_mpp_agg  = "SELECT COALESCE(SUM(MSTD_GROSS), 0) AS total_rp FROM TBTR_MSTRAN_D WHERE MSTD_TYPETRN='X' AND MSTD_RECORDID IS NULL AND {$where_mstran}";
$sql_nbh_agg  = "SELECT COALESCE(SUM(MSTD_GROSS), 0) AS total_rp FROM TBTR_MSTRAN_D WHERE MSTD_TYPETRN='H' AND MSTD_RECORDID IS NULL AND {$where_mstran}";

// Query String Base
$query_params = $_GET;
unset($query_params['action']);
$query_string_base = http_build_query($query_params);

// ---------------------------------------------------------
// 4. EXPORT EXCEL
// ---------------------------------------------------------
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'export_excel') {
    $filename = "Laporan_" . strtoupper($sel_view) . "_" . date('Ymd_His');

    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename={$filename}.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    echo "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
    echo "<head><meta charset='utf-8'></head><body>";
    echo "<table border='1' cellpadding='3' cellspacing='0' style='border-collapse:collapse; font-family:Calibri, sans-serif; font-size:11pt;'>";
    
    // EXPORT EXCEL REKAP GABUNGAN
    if ($sel_view === 'rekap_gabungan') {
        echo "<tr style='font-weight:bold; background-color:#1E293B; color:white;'>";
        echo "<th>SERVER CABANG</th>";
        echo "<th>SO_IC (RUPIAH)</th>";
        echo "<th>MPP (RUPIAH)</th>";
        echo "<th>NBH (RUPIAH)</th>";
        echo "<th>TOTAL (RUPIAH)</th>";
        echo "</tr>";

        $g_soic = 0; $g_mpp = 0; $g_nbh = 0;

        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
            $dbconn = @pg_connect($conn_string);

            $r_soic = 0; $r_mpp = 0; $r_nbh = 0;
            if ($dbconn) {
                $res = @pg_query($dbconn, $sql_soic_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_soic = (float)$r['total_rp']; pg_free_result($res); }
                $res = @pg_query($dbconn, $sql_mpp_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_mpp = (float)$r['total_rp']; pg_free_result($res); }
                $res = @pg_query($dbconn, $sql_nbh_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_nbh = (float)$r['total_rp']; pg_free_result($res); }
                pg_close($dbconn);
            }

            $r_tot = $r_soic + $r_mpp + $r_nbh;
            $g_soic += $r_soic; $g_mpp += $r_mpp; $g_nbh += $r_nbh;

            echo "<tr>";
            echo "<td>" . htmlspecialchars($server['name']) . "</td>";
            echo "<td style='text-align:right;'>" . number_format($r_soic, 2, '.', '') . "</td>";
            echo "<td style='text-align:right;'>" . number_format($r_mpp, 2, '.', '') . "</td>";
            echo "<td style='text-align:right;'>" . number_format($r_nbh, 2, '.', '') . "</td>";
            echo "<td style='text-align:right; font-weight:bold;'>" . number_format($r_tot, 2, '.', '') . "</td>";
            echo "</tr>";
        }
        $g_tot = $g_soic + $g_mpp + $g_nbh;
        echo "<tr style='font-weight:bold; background-color:#E2E8F0;'>";
        echo "<td style='text-align:right;'>GRAND TOTAL:</td>";
        echo "<td style='text-align:right;'>" . number_format($g_soic, 2, '.', '') . "</td>";
        echo "<td style='text-align:right;'>" . number_format($g_mpp, 2, '.', '') . "</td>";
        echo "<td style='text-align:right;'>" . number_format($g_nbh, 2, '.', '') . "</td>";
        echo "<td style='text-align:right;'>" . number_format($g_tot, 2, '.', '') . "</td>";
        echo "</tr>";
    } 
    // EXPORT EXCEL DETAIL & REKAP SINGLE MODUL
    else {
        $is_header_printed = false;
        $grand_qty = 0;
        $grand_rp = 0;
        $qty_col = $active_query_config['qty_col'];
        $rp_col  = $active_query_config['rp_col'];

        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
            $dbconn = @pg_connect($conn_string);

            if ($dbconn) {
                $result = @pg_query($dbconn, $base_query);
                if ($result) {
                    if (!$is_header_printed) {
                        echo "<tr style='font-weight:bold; background-color:#1E293B; color:white;'>";
                        if ($sel_view === 'rekap') {
                            echo "<th>SERVER CABANG</th>";
                        }
                        $num_fields = pg_num_fields($result);
                        for ($i = 0; $i < $num_fields; $i++) {
                            $fname = pg_field_name($result, $i);
                            if ($sel_view === 'rekap' && strtolower($fname) === 'kode_cabang') continue;
                            echo "<th>" . htmlspecialchars($fname) . "</th>";
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
                            $field_name = strtoupper($key);
                            if ($sel_view === 'rekap' && $field_name === 'KODE_CABANG') continue;

                            if (in_array($field_name, ['PRDCD', 'PLU', 'DIV', 'DEP', 'KAT', 'DIVISI', 'DEPT', 'KATBRG', 'KODE'])) {
                                echo "<td style='mso-number-format:\"\\@\";'>" . $val . "</td>";
                            } elseif (in_array($field_name, ['TOTAL_QTY', 'TOTAL_RUPIAH', 'TOTAL_RECORD', $qty_col, $rp_col])) {
                                echo "<td style='text-align:right;'>" . (is_numeric($value) ? number_format($value, 2, '.', '') : $val) . "</td>";
                            } else {
                                echo "<td>" . $val . "</td>";
                            }

                            if ($sel_view === 'rekap') {
                                if ($field_name === 'TOTAL_QTY') $grand_qty += (float)$value;
                                if ($field_name === 'TOTAL_RUPIAH') $grand_rp += (float)$value;
                            } else {
                                if ($field_name === $qty_col) $grand_qty += (float)$value;
                                if ($field_name === $rp_col) $grand_rp += (float)$value;
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
                echo "<td colspan='2' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:right;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td style='text-align:right;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
            } else {
                echo "<td colspan='10' style='text-align:right;'>GRAND TOTAL:</td>";
                echo "<td style='text-align:right;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
                echo "<td style='text-align:right;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
                echo "<td colspan='2'></td>";
            }
            echo "</tr>";
        }
    }

    echo "</table></body></html>";
    exit;
}

// ---------------------------------------------------------
// 5. PENARIKAN DATA UNTUK TAMPILAN WEB
// ---------------------------------------------------------
$all_rows = [];
$total_all_records = 0;
$grand_qty = 0;
$grand_rp = 0;

// Variabel Khusus Rekap Gabungan
$grand_soic = 0; $grand_mpp = 0; $grand_nbh = 0;

// Variabel Ringkasan Dashboard Tipe (IGR, SPI, ICM)
$type_summary = [
    'IGR' => ['item' => 0, 'qty' => 0, 'rupiah' => 0],
    'SPI' => ['item' => 0, 'qty' => 0, 'rupiah' => 0],
    'ICM' => ['item' => 0, 'qty' => 0, 'rupiah' => 0],
];

$qty_col = $active_query_config['qty_col'];
$rp_col  = $active_query_config['rp_col'];

if ($is_searched) {
    // PROSES TAMPILAN REKAP GABUNGAN
    if ($sel_view === 'rekap_gabungan') {
        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=2";
            $dbconn = @pg_connect($conn_string);

            $r_soic = 0; $r_mpp = 0; $r_nbh = 0;
            if ($dbconn) {
                $res = @pg_query($dbconn, $sql_soic_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_soic = (float)$r['total_rp']; pg_free_result($res); }
                $res = @pg_query($dbconn, $sql_mpp_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_mpp = (float)$r['total_rp']; pg_free_result($res); }
                $res = @pg_query($dbconn, $sql_nbh_agg);
                if ($res && $r = pg_fetch_assoc($res)) { $r_nbh = (float)$r['total_rp']; pg_free_result($res); }
                pg_close($dbconn);
            }

            $r_tot = $r_soic + $r_mpp + $r_nbh;
            $grand_soic += $r_soic; $grand_mpp += $r_mpp; $grand_nbh += $r_nbh;

            $all_rows[] = [
                'SERVER CABANG' => $server['name'],
                'SO_IC_RUPIAH'  => $r_soic,
                'MPP_RUPIAH'    => $r_mpp,
                'NBH_RUPIAH'    => $r_nbh,
                'TOTAL_RUPIAH'  => $r_tot
            ];
        }
    } 
    // PROSES TAMPILAN DETAIL & REKAP SINGLE MODUL
    else {
        foreach ($target_servers as $server) {
            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=2";
            $dbconn = @pg_connect($conn_string);

            if ($dbconn) {
                $result = @pg_query($dbconn, $base_query);
                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $row_data = $row;
                        if ($sel_view === 'rekap') {
                            $row_data = [
                                'SERVER CABANG' => $server['name'],
                                'TOTAL_ITEM'    => (float)($row['total_record'] ?? $row['TOTAL_RECORD'] ?? 0),
                                'TOTAL_QTY'     => (float)($row['total_qty'] ?? $row['TOTAL_QTY'] ?? 0),
                                'TOTAL_RUPIAH'  => (float)($row['total_rupiah'] ?? $row['TOTAL_RUPIAH'] ?? 0)
                            ];

                            // Akumulasi summary per Jenis Server (IGR, SPI, ICM)
                            $srv_type_key = strtoupper($server['type']);
                            if (isset($type_summary[$srv_type_key])) {
                                $type_summary[$srv_type_key]['item']   += $row_data['TOTAL_ITEM'];
                                $type_summary[$srv_type_key]['qty']    += $row_data['TOTAL_QTY'];
                                $type_summary[$srv_type_key]['rupiah'] += $row_data['TOTAL_RUPIAH'];
                            }
                        }
                        $all_rows[] = $row_data;

                        foreach ($row as $key => $value) {
                            $field_name = strtoupper($key);
                            $num_val = (float)$value;
                            if ($sel_view === 'rekap') {
                                if ($field_name === 'TOTAL_QTY') $grand_qty += $num_val;
                                if ($field_name === 'TOTAL_RUPIAH') $grand_rp += $num_val;
                            } else {
                                if ($field_name === $qty_col) $grand_qty += $num_val;
                                if ($field_name === $rp_col) $grand_rp += $num_val;
                            }
                        }
                    }
                    pg_free_result($result);
                }
                pg_close($dbconn);
            }
        }
    }
}

// Slice Data Per Page (Hanya untuk Detail, Rekap tampil langsung utuh)
$total_all_records = count($all_rows);
$total_pages = ($sel_view === 'detail' && $total_all_records > 0) ? ceil($total_all_records / $per_page) : 1;
$offset = ($page - 1) * $per_page;
$display_rows = ($sel_view === 'detail') ? array_slice($all_rows, $offset, $per_page) : $all_rows;

$nama_bulan = [
    'ALL' => '-- Semua Bulan --',
    '01'  => 'Januari',   '02' => 'Februari', '03' => 'Maret',    '04' => 'April',
    '05'  => 'Mei',        '06' => 'Juni',     '07' => 'Juli',     '08' => 'Agustus',
    '09'  => 'September', '10' => 'Oktober',  '11' => 'November', '12' => 'Desember'
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Query & Multi-IP Database Monitoring</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; margin: 20px; color: #333; }
        .header-container { background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 20px; }
        .top-row { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        h2 { margin: 0; color: #1E293B; font-size: 18px; font-weight: 700; }
        .filter-form { display: flex; align-items: flex-start; gap: 10px; margin-top: 15px; background: #F8FAFC; padding: 12px; border-radius: 6px; border: 1px solid #E2E8F0; flex-wrap: wrap; }
        .form-group { display: flex; flex-direction: column; gap: 4px; }
        label { font-weight: 600; font-size: 11px; color: #475569; white-space: nowrap; }
        select { padding: 6px 10px; font-size: 12px; border-radius: 4px; border: 1px solid #CBD5E1; background: white; font-weight: 500; }
        select[multiple] { height: 80px; min-width: 160px; padding: 4px; }
        .btn-group { display: flex; gap: 10px; }
        .btn { padding: 8px 14px; font-weight: bold; border-radius: 4px; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; font-size: 12px; transition: all 0.2s; }
        .btn-submit { background-color: #0F172A; color: white; margin-top: 17px; }
        .btn-submit:hover { background-color: #1E293B; }
        .btn-excel { background-color: #107C41; color: white; }
        .btn-excel:hover { background-color: #0B5C30; }
        
        /* Dashboard Summary Cards Style */
        .section-title { font-size: 15px; font-weight: 700; color: #1E293B; margin: 20px 0 10px 0; display: flex; align-items: center; gap: 6px; }
        .cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-bottom: 20px; }
        .card { background: #fff; border-radius: 8px; padding: 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #E2E8F0; }
        .card-type { font-weight: 700; color: #64748B; font-size: 12px; margin-bottom: 6px; text-transform: uppercase; }
        .card-value { font-size: 22px; font-weight: 800; color: #0F172A; }
        .card-sub { font-size: 11px; color: #94A3B8; margin-top: 4px; }

        /* Tables & Pagination */
        .table-responsive { background: #ffffff; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); overflow-x: auto; margin-bottom: 20px; border: 1px solid #E2E8F0; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th { background-color: #1E293B; color: white; padding: 10px 12px; text-align: left; font-weight: 600; white-space: nowrap; }
        td { padding: 9px 12px; border-bottom: 1px solid #F1F5F9; white-space: nowrap; }
        tr:nth-child(even) { background-color: #F8FAFC; }
        tr:hover { background-color: #F1F5F9; }
        tfoot tr { background-color: #E2E8F0; font-weight: bold; }
        .table-summary th { background-color: #F8FAFC; color: #475569; font-weight: 700; border-bottom: 2px solid #E2E8F0; }
        .text-right { text-align: right; }
        .help-text { font-size: 10px; color: #64748B; margin-top: 2px; }
        
        .pagination-container { display: flex; justify-content: space-between; align-items: center; margin-top: 15px; background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0; }
        .pagination { display: flex; gap: 4px; list-style: none; padding: 0; margin: 0; }
        .pagination a, .pagination span { padding: 5px 10px; border: 1px solid #CBD5E1; border-radius: 4px; text-decoration: none; color: #0F172A; font-size: 11px; font-weight: 600; }
        .pagination .active { background-color: #0F172A; color: white; border-color: #0F172A; }
        .pagination .disabled { color: #94A3B8; pointer-events: none; }
    </style>
</head>
<body>

<div class="header-container">
    <div class="top-row">
        <div>
            <h2>Monitoring SOIC / MPP / NBH</h2>
            <small style="color: #64748B;">Pilih mode rekap/detail, query, cabang, dan tanggal target yang diinginkan</small>
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
            <label for="view_mode">Tampilan:</label>
            <select name="view_mode" id="view_mode">
                <option value="rekap" <?= $sel_view == 'rekap' ? 'selected' : '' ?>>📊 Rekap per Cabang</option>
                <option value="detail" <?= $sel_view == 'detail' ? 'selected' : '' ?>>📄 Detail Transaksi</option>
                <option value="rekap_gabungan" <?= $sel_view == 'rekap_gabungan' ? 'selected' : '' ?>>📊 Rekap Gabungan (SO IC + MPP + NBH)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="server_type">Jenis:</label>
            <select name="server_type" id="server_type">
                <option value="ALL" <?= $sel_type == 'ALL' ? 'selected' : '' ?>>-- Semua Jenis --</option>
                <option value="IGR" <?= $sel_type == 'IGR' ? 'selected' : '' ?>>IGR ONLY</option>
                <option value="SPI" <?= $sel_type == 'SPI' ? 'selected' : '' ?>>SPI ONLY</option>
                <option value="ICM" <?= $sel_type == 'ICM' ? 'selected' : '' ?>>ICM ONLY</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cabang">Cabang:</label>
            <select name="cabang[]" id="cabang" multiple>
                <option value="ALL" <?= in_array('ALL', $sel_cabang) ? 'selected' : '' ?>>-- Semua Cabang --</option>
                <?php foreach ($servers as $srv): 
                    if ($sel_type !== 'ALL' && $srv['type'] !== $sel_type) continue; ?>
                    <option value="<?= $srv['id'] ?>" <?= in_array($srv['id'], $sel_cabang) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($srv['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
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

        <div class="form-group">
            <label for="tgl">Tanggal:</label>
            <select name="tgl" id="tgl">
                <option value="ALL" <?= $sel_tgl == 'ALL' ? 'selected' : '' ?>>-- Semua Tanggal --</option>
                <?php for ($i = 1; $i <= 31; $i++): $t = sprintf("%02d", $i); ?>
                    <option value="<?= $t ?>" <?= $sel_tgl == $t ? 'selected' : '' ?>><?= $t ?></option>
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
                <option value="ALL" <?= $sel_tahun == 'ALL' ? 'selected' : '' ?>>-- Semua Tahun --</option>
                <?php $t_curr = (int)date('Y'); for ($y = $t_curr - 3; $y <= $t_curr + 2; $y++): ?>
                    <option value="<?= $y ?>" <?= $sel_tahun == (string)$y ? 'selected' : '' ?>><?= $y ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <?php if ($sel_view === 'detail'): ?>
        <div class="form-group">
            <label for="per_page">Per Hal:</label>
            <select name="per_page" id="per_page">
                <option value="25" <?= $per_page == 25 ? 'selected' : '' ?>>25</option>
                <option value="50" <?= $per_page == 50 ? 'selected' : '' ?>>50</option>
                <option value="100" <?= $per_page == 100 ? 'selected' : '' ?>>100</option>
            </select>
        </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-submit">🔍 Tampilkan Data</button>
    </form>
</div>

<?php if ($is_searched): ?>

    <!-- CARDS & TABEL RINGKASAN JENIS -->
    <?php if ($sel_view === 'rekap'): ?>
        <div class="section-title">
            📊 Rekap Awal IGR, SPI & ICM
        </div>

        <div class="cards-grid">
            <div class="card">
                <div class="card-type">IGR</div>
                <div class="card-value">Rp <?= number_format($type_summary['IGR']['rupiah'], 0, ',', '.') ?></div>
                <div class="card-sub">Total Rupiah</div>
            </div>
            <div class="card">
                <div class="card-type">SPI</div>
                <div class="card-value">Rp <?= number_format($type_summary['SPI']['rupiah'], 0, ',', '.') ?></div>
                <div class="card-sub">Total Rupiah</div>
            </div>
            <div class="card">
                <div class="card-type">ICM</div>
                <div class="card-value">Rp <?= number_format($type_summary['ICM']['rupiah'], 0, ',', '.') ?></div>
                <div class="card-sub">Total Rupiah</div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table-summary">
                <thead>
                    <tr>
                        <th>JENIS</th>
                        <th class="text-right">TOTAL ITEM</th>
                        <th class="text-right">TOTAL QTY</th>
                        <th class="text-right">TOTAL RUPIAH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($type_summary as $type_name => $vals): ?>
                        <tr>
                            <td><b><?= $type_name ?></b></td>
                            <td class="text-right"><?= number_format($vals['item'], 0, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($vals['qty'], 2, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($vals['rupiah'], 2, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

    <!-- PAGINATION UNTUK MODE DETAIL -->
    <?php if ($sel_view === 'detail' && $total_pages > 1): ?>
    <div class="pagination-container">
        <div>Menampilkan <b><?= count($display_rows) ?></b> dari <b><?= number_format($total_all_records, 0, ',', '.') ?></b> data</div>
        <ul class="pagination">
            <?php 
            $query_nav = $_GET;
            if ($page > 1) {
                $query_nav['page'] = $page - 1;
                echo "<li><a href='?" . http_build_query($query_nav) . "'>&laquo; Prev</a></li>";
            }
            for ($p = max(1, $page - 2); $p <= min($total_pages, $page + 2); $p++) {
                $query_nav['page'] = $p;
                echo ($p == $page) ? "<li><span class='active'>{$p}</span></li>" : "<li><a href='?" . http_build_query($query_nav) . "'>{$p}</a></li>";
            }
            if ($page < $total_pages) {
                $query_nav['page'] = $page + 1;
                echo "<li><a href='?" . http_build_query($query_nav) . "'>Next &raquo;</a></li>";
            }
            ?>
        </ul>
    </div>
    <?php endif; ?>

    <!-- TABEL UTAMA -->
    <div class="table-responsive" style="margin-top: 15px;">
        <table>
            <?php if (!empty($display_rows)): ?>
                <thead>
                    <tr>
                        <?php foreach (array_keys($display_rows[0]) as $h): ?>
                            <th class="<?= in_array(strtoupper($h), ['SO_IC_RUPIAH','MPP_RUPIAH','NBH_RUPIAH','TOTAL_RUPIAH','TOTAL_QTY','TOTAL_ITEM',$qty_col,$rp_col]) ? 'text-right' : '' ?>">
                                <?= htmlspecialchars(strtoupper($h)) ?>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($display_rows as $r): ?>
                        <tr>
                            <?php foreach ($r as $key => $value): 
                                $field_name = strtoupper($key);
                                $val = htmlspecialchars($value ?? '');
                            ?>
                                <?php if (in_array($field_name, ['TOTAL_QTY', 'TOTAL_RUPIAH', 'SO_IC_RUPIAH', 'MPP_RUPIAH', 'NBH_RUPIAH', $qty_col, $rp_col])): ?>
                                    <td class="text-right"><?= number_format((float)$value, 2, ',', '.') ?></td>
                                <?php elseif (in_array($field_name, ['TOTAL_RECORD', 'TOTAL_ITEM'])): ?>
                                    <td class="text-right"><?= number_format((float)$value, 0, ',', '.') ?></td>
                                <?php else: ?>
                                    <td><?= $val ?></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <?php if ($sel_view === 'rekap_gabungan'): ?>
                            <td class="text-right">GRAND TOTAL:</td>
                            <td class="text-right"><?= number_format($grand_soic, 2, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($grand_mpp, 2, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($grand_nbh, 2, ',', '.') ?></td>
                            <td class="text-right" style="background-color:#CBD5E1;"><?= number_format($grand_soic + $grand_mpp + $grand_nbh, 2, ',', '.') ?></td>
                        <?php elseif ($sel_view === 'rekap'): ?>
                            <td class="text-right">GRAND TOTAL:</td>
                            <td class="text-right"><?= number_format(array_sum(array_column($display_rows, 'TOTAL_ITEM')), 0, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($grand_qty, 2, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($grand_rp, 2, ',', '.') ?></td>
                        <?php else: ?>
                            <td colspan="10" class="text-right">GRAND TOTAL:</td>
                            <td class="text-right"><?= number_format($grand_qty, 2, ',', '.') ?></td>
                            <td class="text-right"><?= number_format($grand_rp, 2, ',', '.') ?></td>
                            <td colspan="2"></td>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            <?php else: ?>
                <tbody>
                    <tr>
                        <td colspan="25" style="text-align:center; padding:20px; color:#64748B;">
                            Data tidak ditemukan untuk periode/filter yang dipilih.
                        </td>
                    </tr>
                </tbody>
            <?php endif; ?>
        </table>
    </div>

<?php else: ?>
    <div class="table-responsive">
        <table>
            <tbody>
                <tr>
                    <td style="text-align:center; padding:30px; color:#64748B;">
                        📌 Silakan atur filter di atas, lalu klik tombol <b>🔍 Tampilkan Data</b> untuk menarik data dari database.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>

</body>
</html>