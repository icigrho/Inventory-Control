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

// Where Query - Dynamic Filter (BAKP_TGLBAKP)
$cond_bakp_tgl = [];

if (!in_array('ALL', $sel_tgl) && !empty($sel_tgl)) {
    $clean_tgl = array_map('intval', $sel_tgl);
    $cond_bakp_tgl[] = "EXTRACT(DAY FROM BAKP_TGLBAKP) IN (" . implode(',', $clean_tgl) . ")";
}

if (!in_array('ALL', $sel_bulan) && !empty($sel_bulan)) {
    $clean_bulan = array_map('intval', $sel_bulan);
    $cond_bakp_tgl[] = "EXTRACT(MONTH FROM BAKP_TGLBAKP) IN (" . implode(',', $clean_bulan) . ")";
}

if ($sel_tahun !== 'ALL') {
    $cond_bakp_tgl[] = "EXTRACT(YEAR FROM BAKP_TGLBAKP) = " . (int)$sel_tahun;
}

$where_bakp_tgl = count($cond_bakp_tgl) > 0 ? implode(' AND ', $cond_bakp_tgl) : "1=1";

// ---------------------------------------------------------
// 3. DAFTAR PILIHAN QUERY (BAKP, BELUM VALIDASI 1, BELUM VALIDASI 2)
// ---------------------------------------------------------
$queries = [
    'bakp' => [
        'title' => 'BAKP',
        'qty_col' => 'qty_ba',
        'rp_col'  => 'nilai_ba',
        'sql_detail' => "SELECT DISTINCT ON (BAKP_NOBAKP, BAKP_PLUOMI)
            CASE
                WHEN bakp_kodeigr = '01' THEN 'CPG' 
                WHEN bakp_kodeigr = '03' THEN 'SBY'
                WHEN bakp_kodeigr = '04' THEN 'BDG'
                WHEN bakp_kodeigr = '05' THEN 'TGR'
                WHEN bakp_kodeigr = '06' THEN 'YOG'
                WHEN bakp_kodeigr = '15' THEN 'MDN'
                WHEN bakp_kodeigr = '16' THEN 'BKS'
                WHEN bakp_kodeigr = '17' THEN 'PLG'
                WHEN bakp_kodeigr = '18' THEN 'KMY'
                WHEN bakp_kodeigr = '1A' THEN 'SPI BLJ'
                WHEN bakp_kodeigr = '1B' THEN 'SPI MKS'
                WHEN bakp_kodeigr = '1C' THEN 'SPI KRW'
                WHEN bakp_kodeigr = '1D' THEN 'SPI SBY'
                WHEN bakp_kodeigr = '1E' THEN 'SPI MDN'
                WHEN bakp_kodeigr = '1F' THEN 'SPI MDO'
                WHEN bakp_kodeigr = '1G' THEN 'SPI BDG'
                WHEN bakp_kodeigr = '1H' THEN 'SPI MLG'
                WHEN bakp_kodeigr = '1I' THEN 'SPI CPG'
                WHEN bakp_kodeigr = '1K' THEN 'SPI BKS'
                WHEN bakp_kodeigr = '1L' THEN 'SPI SMD'
                WHEN bakp_kodeigr = '1M' THEN 'SPI BMS'
                WHEN bakp_kodeigr = '1N' THEN 'SPI SMG'
                WHEN bakp_kodeigr = '1Q' THEN 'SPI BGR'
                WHEN bakp_kodeigr = '1J' THEN 'SPI SLO'
                WHEN bakp_kodeigr = '1P' THEN 'SPI TGR2'
                WHEN bakp_kodeigr = '1R' THEN 'SPI BDL'
                WHEN bakp_kodeigr = '1S' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '1O' THEN 'SPI YOG'
                WHEN bakp_kodeigr = '1U' THEN 'SPI BDG2'
                WHEN bakp_kodeigr = '1V' THEN 'SPI BDG3'
                WHEN bakp_kodeigr = '1W' THEN 'SPI BDG4'
                WHEN bakp_kodeigr = '1Y' THEN 'SPI BDG5'
                WHEN bakp_kodeigr = '1Z' THEN 'SPI KMY'
                WHEN bakp_kodeigr = '2B' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '2C' THEN 'SPI MLG2'
                WHEN bakp_kodeigr = '2A' THEN 'SPI CPT'
                WHEN bakp_kodeigr = '2G' THEN 'SPI SLO2'
                WHEN bakp_kodeigr = '1T' THEN 'SPI SBI'
                WHEN bakp_kodeigr = '20' THEN 'PKU'
                WHEN bakp_kodeigr = '21' THEN 'SMD'
                WHEN bakp_kodeigr = '22' THEN 'SMG'
                WHEN bakp_kodeigr = '25' THEN 'BGR'
                WHEN bakp_kodeigr = '26' THEN 'PTK'
                WHEN bakp_kodeigr = '27' THEN 'BMS'
                WHEN bakp_kodeigr = '28' THEN 'MDO'
                WHEN bakp_kodeigr = '31' THEN 'MKS'
                WHEN bakp_kodeigr = '32' THEN 'JBI'
                WHEN bakp_kodeigr = '33' THEN 'KRI'
                WHEN bakp_kodeigr = '34' THEN 'AMB'
                WHEN bakp_kodeigr = '35' THEN 'CPT'
                WHEN bakp_kodeigr = '36' THEN 'KRW'
                WHEN bakp_kodeigr = '37' THEN 'MLG'
                WHEN bakp_kodeigr = '38' THEN 'BDL'
                WHEN bakp_kodeigr = '39' THEN 'SLO'
                WHEN bakp_kodeigr = '43' THEN 'SBI'
                WHEN bakp_kodeigr = '44' THEN 'CKL'
                WHEN bakp_kodeigr = '46' THEN 'BTM'
                WHEN bakp_kodeigr = '47' THEN 'PWT'
                WHEN bakp_kodeigr = '51' THEN 'PDG'
                WHEN bakp_kodeigr = '7A' THEN 'ICM CKL'
                WHEN bakp_kodeigr = '7B' THEN 'ICM SBI'
                WHEN bakp_kodeigr = '7C' THEN 'ICM BTM'
                WHEN bakp_kodeigr = '7D' THEN 'ICM TGR'
                WHEN bakp_kodeigr = '7G' THEN 'ICM YOG'
                WHEN bakp_kodeigr = '7K' THEN 'ICM PLG'
                WHEN bakp_kodeigr = '7H' THEN 'ICM BGR'
                WHEN bakp_kodeigr = '7I' THEN 'ICM SMD'
                WHEN bakp_kodeigr = '7F' THEN 'ICM MLG'
                WHEN bakp_kodeigr = '7P' THEN 'ICM AMB'
                WHEN bakp_kodeigr = '7L' THEN 'ICM KRW'
                WHEN bakp_kodeigr = '7S' THEN 'ICM PWT'
                WHEN bakp_kodeigr = '7E' THEN 'ICM BDL'
                WHEN bakp_kodeigr = '7N' THEN 'ICM KRI'
                WHEN bakp_kodeigr = '7R' THEN 'ICM SMG'
                WHEN bakp_kodeigr = '7M' THEN 'ICM PKU'
            END AS CAB,
            BAKP_KODEOMI    AS KODE_OMI,
            TKO_NAMAOMI     AS NAMA_OMI,
            BAKP_NOBAKP     AS NO_BAKP,
            TO_CHAR (BAKP_TGLBAKP,'yyyy-mm-dd')   AS TGL_BAKP,
            TO_CHAR (bakp_tglabsensi,'yyyy-mm-dd') as tgl_absensi,
            BAKP_NOSJ       AS NO_SJ,
            PC1.RPB_NOKOLI    AS NO_KOLI,
            BAKP_PLUOMI     AS PLU,
            PM2.PRD_PRDCD   AS PLU_IGR,
            PM2.PRD_KODEDIVISI      AS DIV,
            PM2.PRD_KODEDEPARTEMENT AS DEP,
            PM2.PRD_KODEKATEGORIBARANG AS KAT,
            COALESCE(PM1.PRD_DESKRIPSIPANJANG, PM2.PRD_DESKRIPSIPANJANG) AS DESKRIPSI,
            BAKP_KENDALA    AS JENIS_KENDALA,
            BAKP_METODEVALIDASI AS VALIDASI,
            BAKP_ALASANTOLAK AS ALASAN_TOLAK,
            PC1.RPB_QTYORDER    AS QTY_PB,
            (PC1.RPB_NILAIORDER + PC1.RPB_PPNORDER)  AS RP_PB,
            BAKP_QTYVALIDASI    AS QTY_VALIDASI,
            (BAKP_QTYVALIDASI * BAKP_NILAIBA) AS NILAI_VALIDASI_BAKP,
            (BAKP_QTYVALIDASI * BAKP_NILAIDF) AS NILAI_DF,
            BAKP_QTYBA AS QTY_BA,
            (BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA,
            BAKP_USER_IC        AS USER_VALIDASI,
            to_char (BAKP_TGLVALIDASI,'yyyy-mm-dd')   AS TGL_VALIDASI_BA,
            case
                when bakp_validasi ='Y' then 'Terima' 
                when bakp_validasi ='N' then 'Tolak'
                else '-'
            end as STATUS
        FROM TBTR_BAKP_OMI
        LEFT JOIN TBTR_REALPB PC1 
            ON PC1.RPB_PLU1 = BAKP_PLUOMI and PC1.RPB_NOKOLI = BAKP_NOKOLI
        LEFT JOIN TBMASTER_PRODMAST PM1 
            ON BAKP_PLUOMI = PM1.PRD_PRDCD
        LEFT JOIN TBMASTER_PRODMAST PM2 
            ON PC1.RPB_PLU2 = PM2.PRD_PRDCD
        LEFT JOIN TBMASTER_TOKOIGR 
            ON BAKP_KODEOMI = TKO_KODEOMI
        WHERE {$where_bakp_tgl}
        ORDER BY BAKP_NOBAKP, BAKP_PLUOMI, BAKP_TGLBAKP DESC",

        'sql_rekap' => "SELECT 
            bakp_kodeigr AS KODE_CABANG,
            COUNT(DISTINCT (BAKP_NOBAKP, BAKP_PLUOMI)) AS TOTAL_RECORD,
            SUM(BAKP_QTYBA) AS QTY_BA,
            SUM(BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA
        FROM TBTR_BAKP_OMI
        WHERE {$where_bakp_tgl}
        GROUP BY bakp_kodeigr
        ORDER BY bakp_kodeigr"
    ],

    'belum_validasi_1' => [
        'title' => 'BELUM VALIDASI 1',
        'qty_col' => 'qty_ba',
        'rp_col'  => 'nilai_ba',
        'sql_detail' => "SELECT DISTINCT ON (BAKP_NOBAKP, BAKP_PLUOMI)
            CASE
                WHEN bakp_kodeigr = '01' THEN 'CPG' 
                WHEN bakp_kodeigr = '03' THEN 'SBY'
                WHEN bakp_kodeigr = '04' THEN 'BDG'
                WHEN bakp_kodeigr = '05' THEN 'TGR'
                WHEN bakp_kodeigr = '06' THEN 'YOG'
                WHEN bakp_kodeigr = '15' THEN 'MDN'
                WHEN bakp_kodeigr = '16' THEN 'BKS'
                WHEN bakp_kodeigr = '17' THEN 'PLG'
                WHEN bakp_kodeigr = '18' THEN 'KMY'
                WHEN bakp_kodeigr = '1A' THEN 'SPI BLJ'
                WHEN bakp_kodeigr = '1B' THEN 'SPI MKS'
                WHEN bakp_kodeigr = '1C' THEN 'SPI KRW'
                WHEN bakp_kodeigr = '1D' THEN 'SPI SBY'
                WHEN bakp_kodeigr = '1E' THEN 'SPI MDN'
                WHEN bakp_kodeigr = '1F' THEN 'SPI MDO'
                WHEN bakp_kodeigr = '1G' THEN 'SPI BDG'
                WHEN bakp_kodeigr = '1H' THEN 'SPI MLG'
                WHEN bakp_kodeigr = '1I' THEN 'SPI CPG'
                WHEN bakp_kodeigr = '1K' THEN 'SPI BKS'
                WHEN bakp_kodeigr = '1L' THEN 'SPI SMD'
                WHEN bakp_kodeigr = '1M' THEN 'SPI BMS'
                WHEN bakp_kodeigr = '1N' THEN 'SPI SMG'
                WHEN bakp_kodeigr = '1Q' THEN 'SPI BGR'
                WHEN bakp_kodeigr = '1J' THEN 'SPI SLO'
                WHEN bakp_kodeigr = '1P' THEN 'SPI TGR2'
                WHEN bakp_kodeigr = '1R' THEN 'SPI BDL'
                WHEN bakp_kodeigr = '1S' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '1O' THEN 'SPI YOG'
                WHEN bakp_kodeigr = '1U' THEN 'SPI BDG2'
                WHEN bakp_kodeigr = '1V' THEN 'SPI BDG3'
                WHEN bakp_kodeigr = '1W' THEN 'SPI BDG4'
                WHEN bakp_kodeigr = '1Y' THEN 'SPI BDG5'
                WHEN bakp_kodeigr = '1Z' THEN 'SPI KMY'
                WHEN bakp_kodeigr = '2B' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '2C' THEN 'SPI MLG2'
                WHEN bakp_kodeigr = '2A' THEN 'SPI CPT'
                WHEN bakp_kodeigr = '2G' THEN 'SPI SLO2'
                WHEN bakp_kodeigr = '1T' THEN 'SPI SBI'
                WHEN bakp_kodeigr = '20' THEN 'PKU'
                WHEN bakp_kodeigr = '21' THEN 'SMD'
                WHEN bakp_kodeigr = '22' THEN 'SMG'
                WHEN bakp_kodeigr = '25' THEN 'BGR'
                WHEN bakp_kodeigr = '26' THEN 'PTK'
                WHEN bakp_kodeigr = '27' THEN 'BMS'
                WHEN bakp_kodeigr = '28' THEN 'MDO'
                WHEN bakp_kodeigr = '31' THEN 'MKS'
                WHEN bakp_kodeigr = '32' THEN 'JBI'
                WHEN bakp_kodeigr = '33' THEN 'KRI'
                WHEN bakp_kodeigr = '34' THEN 'AMB'
                WHEN bakp_kodeigr = '35' THEN 'CPT'
                WHEN bakp_kodeigr = '36' THEN 'KRW'
                WHEN bakp_kodeigr = '37' THEN 'MLG'
                WHEN bakp_kodeigr = '38' THEN 'BDL'
                WHEN bakp_kodeigr = '39' THEN 'SLO'
                WHEN bakp_kodeigr = '43' THEN 'SBI'
                WHEN bakp_kodeigr = '44' THEN 'CKL'
                WHEN bakp_kodeigr = '46' THEN 'BTM'
                WHEN bakp_kodeigr = '47' THEN 'PWT'
                WHEN bakp_kodeigr = '51' THEN 'PDG'
                WHEN bakp_kodeigr = '7A' THEN 'ICM CKL'
                WHEN bakp_kodeigr = '7B' THEN 'ICM SBI'
                WHEN bakp_kodeigr = '7C' THEN 'ICM BTM'
                WHEN bakp_kodeigr = '7D' THEN 'ICM TGR'
                WHEN bakp_kodeigr = '7G' THEN 'ICM YOG'
                WHEN bakp_kodeigr = '7K' THEN 'ICM PLG'
                WHEN bakp_kodeigr = '7H' THEN 'ICM BGR'
                WHEN bakp_kodeigr = '7I' THEN 'ICM SMD'
                WHEN bakp_kodeigr = '7F' THEN 'ICM MLG'
                WHEN bakp_kodeigr = '7P' THEN 'ICM AMB'
                WHEN bakp_kodeigr = '7L' THEN 'ICM KRW'
                WHEN bakp_kodeigr = '7S' THEN 'ICM PWT'
                WHEN bakp_kodeigr = '7E' THEN 'ICM BDL'
                WHEN bakp_kodeigr = '7N' THEN 'ICM KRI'
                WHEN bakp_kodeigr = '7R' THEN 'ICM SMG'
                WHEN bakp_kodeigr = '7M' THEN 'ICM PKU'
            END AS CAB,
            BAKP_KODEOMI    AS KODE_OMI,
            TKO_NAMAOMI     AS NAMA_OMI,
            BAKP_NOBAKP     AS NO_BAKP,
            TO_CHAR (BAKP_TGLBAKP,'yyyy-mm-dd')   AS TGL_BAKP,
            TO_CHAR (bakp_tglabsensi,'yyyy-mm-dd') as tgl_absensi,
            BAKP_NOSJ       AS NO_SJ,
            PC1.RPB_NOKOLI    AS NO_KOLI,
            BAKP_PLUOMI     AS PLU,
            PM2.PRD_PRDCD   AS PLU_IGR,
            PM2.PRD_KODEDIVISI      AS DIV,
            PM2.PRD_KODEDEPARTEMENT AS DEP,
            PM2.PRD_KODEKATEGORIBARANG AS KAT,
            COALESCE(PM1.PRD_DESKRIPSIPANJANG, PM2.PRD_DESKRIPSIPANJANG) AS DESKRIPSI,
            BAKP_KENDALA    AS JENIS_KENDALA,
            BAKP_METODEVALIDASI AS VALIDASI,
            BAKP_ALASANTOLAK AS ALASAN_TOLAK,
            PC1.RPB_QTYORDER    AS QTY_PB,
            (PC1.RPB_NILAIORDER + PC1.RPB_PPNORDER)  AS RP_PB,
            BAKP_QTYVALIDASI    AS QTY_VALIDASI,
            (BAKP_QTYVALIDASI * BAKP_NILAIBA) AS NILAI_VALIDASI_BAKP,
            (BAKP_QTYVALIDASI * BAKP_NILAIDF) AS NILAI_DF,
            BAKP_QTYBA AS QTY_BA,
            (BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA,
            BAKP_USER_IC        AS USER_VALIDASI,
            to_char (BAKP_TGLVALIDASI,'yyyy-mm-dd')   AS TGL_VALIDASI_BA,
            case
                when bakp_validasi ='Y' then 'Terima' 
                when bakp_validasi ='N' then 'Tolak'
                else '-'
            end as STATUS
        FROM TBTR_BAKP_OMI
        LEFT JOIN TBTR_REALPB PC1 
            ON PC1.RPB_PLU1 = BAKP_PLUOMI and PC1.RPB_NOKOLI = BAKP_NOKOLI
        LEFT JOIN TBMASTER_PRODMAST PM1 
            ON BAKP_PLUOMI = PM1.PRD_PRDCD
        LEFT JOIN TBMASTER_PRODMAST PM2 
            ON PC1.RPB_PLU2 = PM2.PRD_PRDCD
        LEFT JOIN TBMASTER_TOKOIGR 
            ON BAKP_KODEOMI = TKO_KODEOMI
        WHERE {$where_bakp_tgl} AND bakp_validasi IS NULL
        ORDER BY BAKP_NOBAKP, BAKP_PLUOMI, BAKP_TGLBAKP DESC",

        'sql_rekap' => "SELECT 
            bakp_kodeigr AS KODE_CABANG,
            COUNT(DISTINCT (BAKP_NOBAKP, BAKP_PLUOMI)) AS TOTAL_RECORD,
            SUM(BAKP_QTYBA) AS QTY_BA,
            SUM(BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA
        FROM TBTR_BAKP_OMI
        WHERE {$where_bakp_tgl} AND bakp_validasi IS NULL
        GROUP BY bakp_kodeigr
        ORDER BY bakp_kodeigr"
    ],

    'belum_validasi_2' => [
        'title' => 'BELUM VALIDASI 2',
        'qty_col' => 'qty_ba',
        'rp_col'  => 'nilai_ba',
        'sql_detail' => "SELECT DISTINCT ON (BAKP_NOBAKP, BAKP_PLUOMI)
            CASE
                WHEN bakp_kodeigr = '01' THEN 'CPG' 
                WHEN bakp_kodeigr = '03' THEN 'SBY'
                WHEN bakp_kodeigr = '04' THEN 'BDG'
                WHEN bakp_kodeigr = '05' THEN 'TGR'
                WHEN bakp_kodeigr = '06' THEN 'YOG'
                WHEN bakp_kodeigr = '15' THEN 'MDN'
                WHEN bakp_kodeigr = '16' THEN 'BKS'
                WHEN bakp_kodeigr = '17' THEN 'PLG'
                WHEN bakp_kodeigr = '18' THEN 'KMY'
                WHEN bakp_kodeigr = '1A' THEN 'SPI BLJ'
                WHEN bakp_kodeigr = '1B' THEN 'SPI MKS'
                WHEN bakp_kodeigr = '1C' THEN 'SPI KRW'
                WHEN bakp_kodeigr = '1D' THEN 'SPI SBY'
                WHEN bakp_kodeigr = '1E' THEN 'SPI MDN'
                WHEN bakp_kodeigr = '1F' THEN 'SPI MDO'
                WHEN bakp_kodeigr = '1G' THEN 'SPI BDG'
                WHEN bakp_kodeigr = '1H' THEN 'SPI MLG'
                WHEN bakp_kodeigr = '1I' THEN 'SPI CPG'
                WHEN bakp_kodeigr = '1K' THEN 'SPI BKS'
                WHEN bakp_kodeigr = '1L' THEN 'SPI SMD'
                WHEN bakp_kodeigr = '1M' THEN 'SPI BMS'
                WHEN bakp_kodeigr = '1N' THEN 'SPI SMG'
                WHEN bakp_kodeigr = '1Q' THEN 'SPI BGR'
                WHEN bakp_kodeigr = '1J' THEN 'SPI SLO'
                WHEN bakp_kodeigr = '1P' THEN 'SPI TGR2'
                WHEN bakp_kodeigr = '1R' THEN 'SPI BDL'
                WHEN bakp_kodeigr = '1S' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '1O' THEN 'SPI YOG'
                WHEN bakp_kodeigr = '1U' THEN 'SPI BDG2'
                WHEN bakp_kodeigr = '1V' THEN 'SPI BDG3'
                WHEN bakp_kodeigr = '1W' THEN 'SPI BDG4'
                WHEN bakp_kodeigr = '1Y' THEN 'SPI BDG5'
                WHEN bakp_kodeigr = '1Z' THEN 'SPI KMY'
                WHEN bakp_kodeigr = '2B' THEN 'SPI CKL'
                WHEN bakp_kodeigr = '2C' THEN 'SPI MLG2'
                WHEN bakp_kodeigr = '2A' THEN 'SPI CPT'
                WHEN bakp_kodeigr = '2G' THEN 'SPI SLO2'
                WHEN bakp_kodeigr = '1T' THEN 'SPI SBI'
                WHEN bakp_kodeigr = '20' THEN 'PKU'
                WHEN bakp_kodeigr = '21' THEN 'SMD'
                WHEN bakp_kodeigr = '22' THEN 'SMG'
                WHEN bakp_kodeigr = '25' THEN 'BGR'
                WHEN bakp_kodeigr = '26' THEN 'PTK'
                WHEN bakp_kodeigr = '27' THEN 'BMS'
                WHEN bakp_kodeigr = '28' THEN 'MDO'
                WHEN bakp_kodeigr = '31' THEN 'MKS'
                WHEN bakp_kodeigr = '32' THEN 'JBI'
                WHEN bakp_kodeigr = '33' THEN 'KRI'
                WHEN bakp_kodeigr = '34' THEN 'AMB'
                WHEN bakp_kodeigr = '35' THEN 'CPT'
                WHEN bakp_kodeigr = '36' THEN 'KRW'
                WHEN bakp_kodeigr = '37' THEN 'MLG'
                WHEN bakp_kodeigr = '38' THEN 'BDL'
                WHEN bakp_kodeigr = '39' THEN 'SLO'
                WHEN bakp_kodeigr = '43' THEN 'SBI'
                WHEN bakp_kodeigr = '44' THEN 'CKL'
                WHEN bakp_kodeigr = '46' THEN 'BTM'
                WHEN bakp_kodeigr = '47' THEN 'PWT'
                WHEN bakp_kodeigr = '51' THEN 'PDG'
                WHEN bakp_kodeigr = '7A' THEN 'ICM CKL'
                WHEN bakp_kodeigr = '7B' THEN 'ICM SBI'
                WHEN bakp_kodeigr = '7C' THEN 'ICM BTM'
                WHEN bakp_kodeigr = '7D' THEN 'ICM TGR'
                WHEN bakp_kodeigr = '7G' THEN 'ICM YOG'
                WHEN bakp_kodeigr = '7K' THEN 'ICM PLG'
                WHEN bakp_kodeigr = '7H' THEN 'ICM BGR'
                WHEN bakp_kodeigr = '7I' THEN 'ICM SMD'
                WHEN bakp_kodeigr = '7F' THEN 'ICM MLG'
                WHEN bakp_kodeigr = '7P' THEN 'ICM AMB'
                WHEN bakp_kodeigr = '7L' THEN 'ICM KRW'
                WHEN bakp_kodeigr = '7S' THEN 'ICM PWT'
                WHEN bakp_kodeigr = '7E' THEN 'ICM BDL'
                WHEN bakp_kodeigr = '7N' THEN 'ICM KRI'
                WHEN bakp_kodeigr = '7R' THEN 'ICM SMG'
                WHEN bakp_kodeigr = '7M' THEN 'ICM PKU'
            END AS CAB,
            BAKP_KODEOMI    AS KODE_OMI,
            TKO_NAMAOMI     AS NAMA_OMI,
            BAKP_NOBAKP     AS NO_BAKP,
            TO_CHAR (BAKP_TGLBAKP,'yyyy-mm-dd')   AS TGL_BAKP,
            TO_CHAR (bakp_tglabsensi,'yyyy-mm-dd') as tgl_absensi,
            BAKP_NOSJ       AS NO_SJ,
            PC1.RPB_NOKOLI    AS NO_KOLI,
            BAKP_PLUOMI     AS PLU,
            PM2.PRD_PRDCD   AS PLU_IGR,
            PM2.PRD_KODEDIVISI      AS DIV,
            PM2.PRD_KODEDEPARTEMENT AS DEP,
            PM2.PRD_KODEKATEGORIBARANG AS KAT,
            COALESCE(PM1.PRD_DESKRIPSIPANJANG, PM2.PRD_DESKRIPSIPANJANG) AS DESKRIPSI,
            BAKP_KENDALA    AS JENIS_KENDALA,
            BAKP_METODEVALIDASI AS VALIDASI,
            BAKP_ALASANTOLAK AS ALASAN_TOLAK,
            PC1.RPB_QTYORDER    AS QTY_PB,
            (PC1.RPB_NILAIORDER + PC1.RPB_PPNORDER)  AS RP_PB,
            BAKP_QTYVALIDASI    AS QTY_VALIDASI,
            (BAKP_QTYVALIDASI * BAKP_NILAIBA) AS NILAI_VALIDASI_BAKP,
            (BAKP_QTYVALIDASI * BAKP_NILAIDF) AS NILAI_DF,
            BAKP_QTYBA AS QTY_BA,
            (BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA,
            BAKP_USER_IC        AS USER_VALIDASI,
            to_char (BAKP_TGLVALIDASI,'yyyy-mm-dd')   AS TGL_VALIDASI_BA,
            case
                when bakp_validasi ='Y' then 'Terima' 
                when bakp_validasi ='N' then 'Tolak'
                else '-'
            end as STATUS
        FROM TBTR_BAKP_OMI
        LEFT JOIN TBTR_REALPB PC1 
            ON PC1.RPB_PLU1 = BAKP_PLUOMI and PC1.RPB_NOKOLI = BAKP_NOKOLI
        LEFT JOIN TBMASTER_PRODMAST PM1 
            ON BAKP_PLUOMI = PM1.PRD_PRDCD
        LEFT JOIN TBMASTER_PRODMAST PM2 
            ON PC1.RPB_PLU2 = PM2.PRD_PRDCD
        LEFT JOIN TBMASTER_TOKOIGR 
            ON BAKP_KODEOMI = TKO_KODEOMI
        WHERE {$where_bakp_tgl} AND bakp_validasi IN ('Y','N') AND BAKP_TGLVALIDASI IS NULL
        ORDER BY BAKP_NOBAKP, BAKP_PLUOMI, BAKP_TGLBAKP DESC",

        'sql_rekap' => "SELECT 
            bakp_kodeigr AS KODE_CABANG,
            COUNT(DISTINCT (BAKP_NOBAKP, BAKP_PLUOMI)) AS TOTAL_RECORD,
            SUM(BAKP_QTYBA) AS QTY_BA,
            SUM(BAKP_QTYBA * BAKP_NILAIBA) AS NILAI_BA
        FROM TBTR_BAKP_OMI
        WHERE {$where_bakp_tgl} AND bakp_validasi IN ('Y','N') AND BAKP_TGLVALIDASI IS NULL
        GROUP BY bakp_kodeigr
        ORDER BY bakp_kodeigr"
    ]
];

$selected_query_key = isset($_GET['query_type']) && isset($queries[$_GET['query_type']]) ? $_GET['query_type'] : 'bakp';
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
                        echo "<th>NAMA SERVER</th>";
                    }
                    $num_fields = pg_num_fields($result);
                    for ($i = 0; $i < $num_fields; $i++) {
                        echo "<th>" . htmlspecialchars(pg_field_name($result, $i)) . "</th>";
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

                        if (in_array($field_name, ['plu', 'plu_igr', 'div', 'dep', 'kat', 'kode_cabang', 'no_bakp', 'no_sj', 'no_koli', 'kode_omi'])) {
                            echo "<td style='mso-number-format:\"\\@\";'>" . $val . "</td>";
                        } elseif (in_array($field_name, ['total_qty', 'total_rupiah', 'total_record', $qty_col, $rp_col, 'qty_pb', 'rp_pb', 'nilai_df', 'qty_validasi', 'nilai_validasi_bakp', 'qty_ba', 'nilai_ba'])) {
                            echo "<td style='text-align:right;'>" . (is_numeric($value) ? number_format((float)$value, 2, '.', '') : $val) . "</td>";
                        } else {
                            echo "<td>" . $val . "</td>";
                        }

                        if ($sel_view === 'rekap') {
                            if ($field_name === 'qty_ba') $grand_qty += (float)$value;
                            if ($field_name === 'nilai_ba') $grand_rp += (float)$value;
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
            echo "<td colspan='3' style='text-align:right;'>GRAND TOTAL:</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
        } else {
            echo "<td colspan='22' style='text-align:right;'>GRAND TOTAL:</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_qty, 2, '.', '') . "</td>";
            echo "<td style='text-align:right;'>" . number_format($grand_rp, 2, '.', '') . "</td>";
            echo "<td colspan='3'></td>";
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
                            if ($field_name === 'qty_ba') $grand_qty += $num_val;
                            if ($field_name === 'nilai_ba') $grand_rp += $num_val;
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
    <title>Monitoring Multi IP Database - BAKP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; margin: 20px; color: #333; }
        .header-container { background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .top-row { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        h2 { margin: 0; color: #1E293B; font-size: 20px; }
        .filter-form { display: flex; align-items: flex-start; gap: 12px; margin-top: 15px; background: #F8FAFC; padding: 12px; border-radius: 6px; border: 1px solid #E2E8F0; flex-wrap: wrap; }
        .form-group { display: flex; flex-direction: column; gap: 4px; }
        label { font-weight: bold; font-size: 12px; color: #475569; }
        select { padding: 8px 12px; font-size: 13px; border-radius: 6px; border: 1px solid #CBD5E1; background: white; font-weight: 500; }
        select[multiple] { height: 100px; min-width: 150px; padding: 4px; }
        .btn-group { display: flex; gap: 10px; }
        .btn { padding: 9px 16px; font-weight: bold; border-radius: 6px; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; font-size: 13px; transition: all 0.2s; }
        .btn-submit { background-color: #0F172A; color: white; margin-top: 18px; }
        .btn-submit:hover { background-color: #1E293B; }
        .btn-excel { background-color: #107C41; color: white; }
        .btn-excel:hover { background-color: #0B5C30; }
        .table-responsive { background: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; font-size: 13px; }
        th { background-color: #1E293B; color: white; padding: 11px; text-align: left; white-space: nowrap; }
        td { padding: 10px; border-bottom: 1px solid #E2E8F0; white-space: nowrap; }
        tr:nth-child(even) { background-color: #F8FAFC; }
        tr:hover { background-color: #F1F5F9; }
        tfoot tr { background-color: #E2E8F0; font-weight: bold; }
        .text-right { text-align: right; }
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
            <h2>Monitoring BAKP</h2>
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
                            <?php if (in_array($field_name, ['total_qty', 'total_rupiah', 'qty_validasi', 'nilai_validasi_bakp', 'qty_pb', 'rp_pb', 'nilai_df', 'qty_ba', 'nilai_ba'])): ?>
                                <td class="text-right"><?= number_format((float)$value, 2, ',', '.') ?></td>
                            <?php elseif ($field_name === 'total_record'): ?>
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
                    <?php if ($sel_view === 'rekap'): ?>
                        <td colspan="3" class="text-right">GRAND TOTAL (ALL PAGES):</td>
                        <td class="text-right"><?= number_format($grand_qty, 2, ',', '.') ?></td>
                        <td class="text-right"><?= number_format($grand_rp, 2, ',', '.') ?></td>
                    <?php else: ?>
                        <td colspan="22" class="text-right">GRAND TOTAL (ALL PAGES):</td>
                        <td class="text-right"><?= number_format($grand_qty, 2, ',', '.') ?></td>
                        <td class="text-right"><?= number_format($grand_rp, 2, ',', '.') ?></td>
                        <td colspan="3"></td>
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