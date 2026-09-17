<?php
// Set execution time limit jika query membutuhkan waktu lebih lama
set_time_limit(0);

// ---------------------------------------------------------
// 1. DAFTAR SERVER / IP POSTGRESQL (IGR, SPI, ICM)
// ---------------------------------------------------------
$servers = [
    // --- IGR SERVERS ---
    ["id" => "IGR_AMB", "name" => "IGR AMB", "host" => "192.168.230.191", "port" => "5432", "dbname" => "igramb", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BDG", "name" => "IGR BDG", "host" => "192.168.222.191", "port" => "5432", "dbname" => "igrbdg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BDL", "name" => "IGR BDL", "host" => "192.168.247.191", "port" => "5432", "dbname" => "igrbdl", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BGR", "name" => "IGR BGR", "host" => "192.168.240.191", "port" => "5432", "dbname" => "igrbgr", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BKS", "name" => "IGR BKS", "host" => "192.168.225.191", "port" => "5432", "dbname" => "igrbks", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BMS", "name" => "IGR BMS", "host" => "192.168.239.191", "port" => "5432", "dbname" => "igrbms", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BTM", "name" => "IGR BTM", "host" => "192.168.255.191", "port" => "5432", "dbname" => "igrbtm", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_CKL", "name" => "IGR CKL", "host" => "192.168.249.191", "port" => "5432", "dbname" => "igrckl", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_CPG", "name" => "IGR CPG", "host" => "192.168.226.191", "port" => "5432", "dbname" => "igrcpg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_CPT", "name" => "IGR CPT", "host" => "192.168.245.191", "port" => "5432", "dbname" => "igrcpt", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_GTO", "name" => "IGR GTO", "host" => "192.168.150.191", "port" => "5432", "dbname" => "igrgto", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_JBI", "name" => "IGR JBI", "host" => "192.168.242.191", "port" => "5432", "dbname" => "igrjbi", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_KMY", "name" => "IGR KMY", "host" => "192.168.234.191", "port" => "5432", "dbname" => "igrkmy", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_KRI", "name" => "IGR KRI", "host" => "192.168.244.191", "port" => "5432", "dbname" => "igrkri", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_KRW", "name" => "IGR KRW", "host" => "192.168.231.191", "port" => "5432", "dbname" => "igrkrw", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_MDN", "name" => "IGR MDN", "host" => "192.168.229.191", "port" => "5432", "dbname" => "igrmdn", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_MDO", "name" => "IGR MDO", "host" => "192.168.241.191", "port" => "5432", "dbname" => "igrmdo", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_MKS", "name" => "IGR MKS", "host" => "192.168.243.191", "port" => "5432", "dbname" => "igrmks", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_MLG", "name" => "IGR MLG", "host" => "192.168.246.191", "port" => "5432", "dbname" => "igrmlg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_PKU", "name" => "IGR PKU", "host" => "192.168.235.191", "port" => "5432", "dbname" => "igrpku", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_PLG", "name" => "IGR PLG", "host" => "192.168.232.191", "port" => "5432", "dbname" => "igrplg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_PTK", "name" => "IGR PTK", "host" => "192.168.238.191", "port" => "5432", "dbname" => "igrptk", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_PWT", "name" => "IGR PWT", "host" => "192.168.83.191",  "port" => "5432", "dbname" => "igrpwt", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_SBI", "name" => "IGR SBI", "host" => "192.168.251.191", "port" => "5432", "dbname" => "igrsbi", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_SBY", "name" => "IGR SBY", "host" => "192.168.227.191", "port" => "5432", "dbname" => "igrsby", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_SLO", "name" => "IGR SLO", "host" => "192.168.248.191", "port" => "5432", "dbname" => "igrslo", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_SMD", "name" => "IGR SMD", "host" => "192.168.236.191", "port" => "5432", "dbname" => "igrsmd", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_SMG", "name" => "IGR SMG", "host" => "192.168.237.191", "port" => "5432", "dbname" => "igrsmg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_TGR", "name" => "IGR TGR", "host" => "192.168.228.191", "port" => "5432", "dbname" => "igrtgr", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_YOG", "name" => "IGR YOG", "host" => "192.168.224.191", "port" => "5432", "dbname" => "igrygy", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_BLI", "name" => "IGR BLI", "host" => "192.168.148.191", "port" => "5432", "dbname" => "igrbli", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],
    ["id" => "IGR_PDG", "name" => "IGR PDG", "host" => "192.168.142.191", "port" => "5432", "dbname" => "igrpdg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "IGR"],

    // --- SPI SERVERS ---
    ["id" => "SPI_BDG",   "name" => "SPI BDG",   "host" => "172.31.146.154", "port" => "5432", "dbname" => "spibdg1g", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG10", "name" => "SPI BDG10", "host" => "172.31.172.91",  "port" => "5432", "dbname" => "spibdg3e", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG2",  "name" => "SPI BDG2",  "host" => "172.31.146.139", "port" => "5432", "dbname" => "spibdg1u", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG3",  "name" => "SPI BDG3",  "host" => "172.31.146.245", "port" => "5432", "dbname" => "spibdg1v", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG4",  "name" => "SPI BDG4",  "host" => "172.31.147.246", "port" => "5432", "dbname" => "spibdg1w", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG5",  "name" => "SPI BDG5",  "host" => "172.31.146.205", "port" => "5432", "dbname" => "spibdg1y", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG6",  "name" => "SPI BDG6",  "host" => "172.31.147.209", "port" => "5432", "dbname" => "spibdg2h", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG7",  "name" => "SPI BDG7",  "host" => "172.31.147.183", "port" => "5432", "dbname" => "spibdg2k", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG8",  "name" => "SPI BDG8",  "host" => "172.31.147.216", "port" => "5432", "dbname" => "spibdg2p", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDG9",  "name" => "SPI BDG9",  "host" => "172.31.147.186", "port" => "5432", "dbname" => "spibdg2t", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDL",   "name" => "SPI BDL",   "host" => "172.31.146.253", "port" => "5432", "dbname" => "spibdl1r", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BDL2",  "name" => "SPI BDL2",  "host" => "172.31.147.194", "port" => "5432", "dbname" => "spibdl2u", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BGR",   "name" => "SPI BGR",   "host" => "172.31.146.223", "port" => "5432", "dbname" => "spibgr1q", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BGR2",  "name" => "SPI BGR2",  "host" => "172.31.172.78",  "port" => "5432", "dbname" => "spibgr3b", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BGR4",  "name" => "SPI BGR4",  "host" => "172.31.172.125", "port" => "5432", "dbname" => "spibgr3u", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BKS",   "name" => "SPI BKS",   "host" => "172.31.146.145", "port" => "5432", "dbname" => "spibks1k", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BKS2",  "name" => "SPI BKS2",  "host" => "172.31.172.115", "port" => "5432", "dbname" => "spibks3l", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BKS3",  "name" => "SPI BKS3",  "host" => "172.31.172.109", "port" => "5432", "dbname" => "spibks3o", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BLJ",   "name" => "SPI BLJ",   "host" => "172.31.146.178", "port" => "5432", "dbname" => "spitgr1a", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BMS",   "name" => "SPI BMS",   "host" => "172.31.147.147", "port" => "5432", "dbname" => "spibms1m", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BMS2",  "name" => "SPI BMS2",  "host" => "172.31.172.88",  "port" => "5432", "dbname" => "spibms4c", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CKL",   "name" => "SPI CKL",   "host" => "172.31.146.142", "port" => "5432", "dbname" => "spickl1s", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CKL2",  "name" => "SPI CKL2",  "host" => "172.31.146.201", "port" => "5432", "dbname" => "spickl2b", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CKL3",  "name" => "SPI CKL3",  "host" => "172.31.147.251", "port" => "5432", "dbname" => "spickl2l", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CKL4",  "name" => "SPI CKL4",  "host" => "172.31.147.196", "port" => "5432", "dbname" => "spickl2r", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CKL5",  "name" => "SPI CKL5",  "host" => "172.31.172.90",  "port" => "5432", "dbname" => "spickl3m", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CPG",   "name" => "SPI CPG",   "host" => "172.31.146.162", "port" => "5432", "dbname" => "spicpg1i", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CPT",   "name" => "SPI CPT",   "host" => "172.31.147.175", "port" => "5432", "dbname" => "spicpt2a", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KMY",   "name" => "SPI KMY",   "host" => "172.31.146.172", "port" => "5432", "dbname" => "spikmy1z", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KRW",   "name" => "SPI KRW",   "host" => "172.31.146.141", "port" => "5432", "dbname" => "spikrw1c", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MDN",   "name" => "SPI MDN",   "host" => "172.31.146.166", "port" => "5432", "dbname" => "spimdn1e", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MDN2",  "name" => "SPI MDN2",  "host" => "172.31.172.43",  "port" => "5432", "dbname" => "spimdn2s", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MKS",   "name" => "SPI MKS",   "host" => "172.31.146.240", "port" => "5432", "dbname" => "spimks1b", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG",   "name" => "SPI MLG",   "host" => "172.31.146.244", "port" => "5432", "dbname" => "spimlg1h", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG2",  "name" => "SPI MLG2",  "host" => "172.31.147.213", "port" => "5432", "dbname" => "spimlg2c", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG3",  "name" => "SPI MLG3",  "host" => "172.31.147.170", "port" => "5432", "dbname" => "spimlg2m", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG4",  "name" => "SPI MLG4",  "host" => "172.31.147.151", "port" => "5432", "dbname" => "spimlg2q", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG5",  "name" => "SPI MLG5",  "host" => "172.31.172.47",  "port" => "5432", "dbname" => "spimlg3c", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG7",  "name" => "SPI MLG7",  "host" => "172.31.172.173", "port" => "5432", "dbname" => "spimlg4b", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_PKU",   "name" => "SPI PKU",   "host" => "172.31.147.215", "port" => "5432", "dbname" => "spipku2v", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_PWT",   "name" => "SPI PWT",   "host" => "172.31.172.51",  "port" => "5432", "dbname" => "spipwt3d", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBI",   "name" => "SPI SBI",   "host" => "172.31.146.165", "port" => "5432", "dbname" => "spisbi1t", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBI2",  "name" => "SPI SBI2",  "host" => "172.31.172.99",  "port" => "5432", "dbname" => "spisbi2w", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBI3",  "name" => "SPI SBI3",  "host" => "172.31.172.94",  "port" => "5432", "dbname" => "spisbi3i", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY",   "name" => "SPI SBY",   "host" => "172.31.146.147", "port" => "5432", "dbname" => "spisby1d", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY2",  "name" => "SPI SBY2",  "host" => "172.31.146.137", "port" => "5432", "dbname" => "spisby2d", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY3",  "name" => "SPI SBY3",  "host" => "172.31.147.254", "port" => "5432", "dbname" => "spisby2e", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY4",  "name" => "SPI SBY4",  "host" => "172.31.147.166", "port" => "5432", "dbname" => "spisby2o", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY5",  "name" => "SPI SBY5",  "host" => "172.31.147.226", "port" => "5432", "dbname" => "spisby2x", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY6",  "name" => "SPI SBY6",  "host" => "172.31.172.52",  "port" => "5432", "dbname" => "spisby3n", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SLO",   "name" => "SPI SLO",   "host" => "172.31.146.220", "port" => "5432", "dbname" => "spislo1j", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SLO2",  "name" => "SPI SLO2",  "host" => "172.31.146.218", "port" => "5432", "dbname" => "spislo2g", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SLO3",  "name" => "SPI SLO3",  "host" => "172.31.147.171", "port" => "5432", "dbname" => "spislo2n", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SLO4",  "name" => "SPI SLO4",  "host" => "172.31.172.70",  "port" => "5432", "dbname" => "spislo3f", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMD",   "name" => "SPI SMD",   "host" => "172.31.146.208", "port" => "5432", "dbname" => "spismd1l", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMD2",  "name" => "SPI SMD2",  "host" => "172.31.172.114", "port" => "5432", "dbname" => "spismd3j", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG",   "name" => "SPI SMG",   "host" => "172.31.146.175", "port" => "5432", "dbname" => "spismg1n", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG3",  "name" => "SPI SMG3",  "host" => "172.31.147.163", "port" => "5432", "dbname" => "spismg2f", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG4",  "name" => "SPI SMG4",  "host" => "172.31.147.237", "port" => "5432", "dbname" => "spismg2i", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG5",  "name" => "SPI SMG5",  "host" => "172.31.147.199", "port" => "5432", "dbname" => "spismg2j", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG6",  "name" => "SPI SMG6",  "host" => "172.31.147.247", "port" => "5432", "dbname" => "spismg2y", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SMG7",  "name" => "SPI SMG7",  "host" => "172.31.172.118", "port" => "5432", "dbname" => "spismg3k", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_TGR2",  "name" => "SPI TGR2",  "host" => "172.31.146.211", "port" => "5432", "dbname" => "spitgr1p", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_TGR3",  "name" => "SPI TGR3",  "host" => "172.31.172.57",  "port" => "5432", "dbname" => "spitgr3a", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_YOG",   "name" => "SPI YOG",   "host" => "172.31.146.236", "port" => "5432", "dbname" => "spiyog1o", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_YOG2",  "name" => "SPI YOG2",  "host" => "172.31.172.40",  "port" => "5432", "dbname" => "spiyog2z", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPIX_BGR",  "name" => "SPIX BGR",  "host" => "172.31.139.192", "port" => "5432", "dbname" => "spixbgrab","user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPIX_BKS",  "name" => "SPIX BKS",  "host" => "172.31.139.229", "port" => "5432", "dbname" => "spixbksaa","user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPIX_SMG",  "name" => "SPIX SMG",  "host" => "172.31.139.152", "port" => "5432", "dbname" => "spixsmgac","user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BKS4",  "name" => "SPI BKS4",  "host" => "172.31.172.143", "port" => "5432", "dbname" => "spibks3x", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_PLG",   "name" => "SPI PLG",   "host" => "172.31.172.106", "port" => "5432", "dbname" => "spiplg3h", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_TGR4",  "name" => "SPI TGR4",  "host" => "172.31.172.160", "port" => "5432", "dbname" => "spitgr3s", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG6",  "name" => "SPI MLG6",  "host" => "172.31.172.179", "port" => "5432", "dbname" => "spimlg3y", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KRI",   "name" => "SPI KRI",   "host" => "172.31.172.233", "port" => "5432", "dbname" => "spikri3q", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_JBI",   "name" => "SPI JBI",   "host" => "172.31.172.184", "port" => "5432", "dbname" => "spijbi3r", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_AMB",   "name" => "SPI AMB",   "host" => "172.31.172.235", "port" => "5432", "dbname" => "spiamb3t", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY8",  "name" => "SPI SBY8",  "host" => "172.31.172.141", "port" => "5432", "dbname" => "spisby4a", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KRI2",  "name" => "SPI KRI2",  "host" => "172.31.172.69",  "port" => "5432", "dbname" => "spikri4d", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BMS3",  "name" => "SPI BMS3",  "host" => "172.31.172.249", "port" => "5432", "dbname" => "spibms4e", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_CPG2",  "name" => "SPI CPG2",  "host" => "172.31.172.153", "port" => "5432", "dbname" => "spicpg4l", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_PTK",   "name" => "SPI PTK",   "host" => "172.31.172.164", "port" => "5432", "dbname" => "spiptk4m", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BLI2",  "name" => "SPI BLI2",  "host" => "172.31.172.206", "port" => "5432", "dbname" => "spibli4g", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MDO",   "name" => "SPI MDO",   "host" => "172.31.172.137", "port" => "5432", "dbname" => "spimdo4k", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_SBY9",  "name" => "SPI SBY9",  "host" => "172.31.172.148", "port" => "5432", "dbname" => "spisby4h", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_MLG8",  "name" => "SPI MLG8",  "host" => "172.31.172.187", "port" => "5432", "dbname" => "spimlg4i", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_BGR3",  "name" => "SPI BGR3",  "host" => "172.31.172.162", "port" => "5432", "dbname" => "spibgr3g", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_PLG2",  "name" => "SPI PLG2",  "host" => "172.31.172.151", "port" => "5432", "dbname" => "spiplg3w", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KRW2",  "name" => "SPI KRW2",  "host" => "172.31.172.217", "port" => "5432", "dbname" => "spikrw4j", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KRW3",  "name" => "SPI KRW3",  "host" => "172.31.172.177", "port" => "5432", "dbname" => "spikrw4n", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],
    ["id" => "SPI_KMY2",  "name" => "SPI KMY2",  "host" => "172.31.172.201", "port" => "5432", "dbname" => "spikmy4p", "user" => "edp", "password" => "3dp1grVIEW", "group" => "SPI"],

    // --- ICM SERVERS ---
    ["id" => "ICM_AMB",   "name" => "ICM AMB",   "host" => "192.168.230.191", "port" => "5432", "dbname" => "icmamb", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BDG",   "name" => "ICM BDG",   "host" => "192.168.222.191", "port" => "5432", "dbname" => "icmbdg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BDL",   "name" => "ICM BDL",   "host" => "192.168.247.191", "port" => "5432", "dbname" => "icmbdl", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BGR",   "name" => "ICM BGR",   "host" => "192.168.240.191", "port" => "5432", "dbname" => "icmbgr", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BLI",   "name" => "ICM BLI",   "host" => "192.168.148.191", "port" => "5432", "dbname" => "icmbli", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BMS",   "name" => "ICM BMS",   "host" => "192.168.239.191", "port" => "5432", "dbname" => "icmbms", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_BTM",   "name" => "ICM BTM",   "host" => "192.168.255.191", "port" => "5432", "dbname" => "icmbtm", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_CKL",   "name" => "ICM CKL",   "host" => "192.168.249.191", "port" => "5432", "dbname" => "icmckl", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_CPG",   "name" => "ICM CPG",   "host" => "192.168.226.191", "port" => "5432", "dbname" => "icmcpg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_GTO",   "name" => "ICM GTO",   "host" => "192.168.150.191", "port" => "5432", "dbname" => "icmgto", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_KMY",   "name" => "ICM KMY",   "host" => "192.168.234.191", "port" => "5432", "dbname" => "icmkmy", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_KRI",   "name" => "ICM KRI",   "host" => "192.168.244.191", "port" => "5432", "dbname" => "icmkri", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_KRW",   "name" => "ICM KRW",   "host" => "192.168.231.191", "port" => "5432", "dbname" => "icmkrw", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_MDO",   "name" => "ICM MDO",   "host" => "192.168.241.191", "port" => "5432", "dbname" => "icmmdo", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_MLG",   "name" => "ICM MLG",   "host" => "192.168.246.191", "port" => "5432", "dbname" => "icmmlg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_PKU",   "name" => "ICM PKU",   "host" => "192.168.235.191", "port" => "5432", "dbname" => "icmpku", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_PLG",   "name" => "ICM PLG",   "host" => "192.168.232.191", "port" => "5432", "dbname" => "icmplg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_PTK",   "name" => "ICM PTK",   "host" => "192.168.238.191", "port" => "5432", "dbname" => "icmptk", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_PWT",   "name" => "ICM PWT",   "host" => "192.168.83.191",  "port" => "5432", "dbname" => "icmpwt", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_SBI",   "name" => "ICM SBI",   "host" => "192.168.251.191", "port" => "5432", "dbname" => "icmsbi", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_SBY",   "name" => "ICM SBY",   "host" => "192.168.227.191", "port" => "5432", "dbname" => "icmsby", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_SLO",   "name" => "ICM SLO",   "host" => "192.168.248.191", "port" => "5432", "dbname" => "icmslo", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_SMD",   "name" => "ICM SMD",   "host" => "192.168.236.191", "port" => "5432", "dbname" => "icmsmd", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_SMG",   "name" => "ICM SMG",   "host" => "192.168.237.191", "port" => "5432", "dbname" => "icmsmg", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_TGR",   "name" => "ICM TGR",   "host" => "192.168.228.191", "port" => "5432", "dbname" => "icmtgr", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_YOG",   "name" => "ICM YOG",   "host" => "192.168.224.191", "port" => "5432", "dbname" => "icmyog", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"],
    ["id" => "ICM_CPT",   "name" => "ICM CPT",   "host" => "192.168.245.191", "port" => "5432", "dbname" => "icmcpt", "user" => "edp", "password" => "3dp1grVIEW", "group" => "ICM"]
];

// ---------------------------------------------------------
// PERIKSA APAKAH FORM / PROSES TELAH DI-SUBMIT
// ---------------------------------------------------------
$is_submitted = isset($_GET['submit_filter']) || isset($_GET['page']) || (isset($_GET['action']) && $_GET['action'] === 'export_excel');

// ---------------------------------------------------------
// 2. TANGGAP FILTER CABANG, VIEW MODE, TANGGAL, BULAN, TAHUN & PAGINATION
// ---------------------------------------------------------
$sel_type   = $_GET['server_type'] ?? 'ALL';

// Multi-Select Cabang
$sel_cabang = $_GET['cabang'] ?? ['ALL'];
if (!is_array($sel_cabang)) {
    $sel_cabang = [$sel_cabang];
}

$sel_view   = $_GET['view_mode'] ?? 'detail';

// Multi-Select Tanggal
$sel_tgl    = $_GET['tgl'] ?? ['ALL'];
if (!is_array($sel_tgl)) {
    $sel_tgl = [$sel_tgl];
}

// Multi-Select Bulan
$sel_bulan  = $_GET['bulan'] ?? [date('m')];
if (!is_array($sel_bulan)) {
    $sel_bulan = [$sel_bulan];
}

$sel_tahun  = $_GET['tahun'] ?? date('Y');

// Penentuan Variabel Bulan M-1, M-2, M-3 secara Dinamis
$single_bulan = is_array($sel_bulan) ? ($sel_bulan[0] ?? date('m')) : $sel_bulan;
if ($single_bulan === 'ALL') {
    $single_bulan = date('m');
}

$current_date_str = sprintf('%04d-%02d-01', (int)$sel_tahun, (int)$single_bulan);
$dt = new DateTime($current_date_str);

$m1 = strtolower($dt->format('M')); // Bulan Terpilih (M-1)

$dt->modify('-1 month');
$m2 = strtolower($dt->format('M')); // 1 Bulan Sebelumnya (M-2)

$dt->modify('-1 month');
$m3 = strtolower($dt->format('M')); // 2 Bulan Sebelumnya (M-3)

// Pembuatan Klausa Date Filter Dinamis untuk SQL BPB / Transaction
$date_where_clause = "";
if (!in_array('ALL', $sel_tgl)) {
    $tgl_conditions = [];
    foreach ($sel_tgl as $t) {
        $tgl_formatted = sprintf('%04d-%02d-%02d', (int)$sel_tahun, (int)$single_bulan, (int)$t);
        $tgl_conditions[] = "mstd_tgldoc = '{$tgl_formatted}'";
    }
    if (!empty($tgl_conditions)) {
        $date_where_clause = " AND (" . implode(" OR ", $tgl_conditions) . ")";
    }
} else {
    $date_where_clause = " AND EXTRACT(MONTH FROM mstd_tgldoc) = " . (int)$single_bulan . " AND EXTRACT(YEAR FROM mstd_tgldoc) = " . (int)$sel_tahun;
}

// Pagination System
$limit_per_page = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 50;
if ($limit_per_page < 10) $limit_per_page = 50;

$page   = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $limit_per_page;

// Filter Server berdasarkan pilihan Cabang
$target_servers = [];
if (in_array('ALL', $sel_cabang)) {
    $target_servers = $servers;
} else {
    foreach ($servers as $s) {
        if (in_array($s['id'], $sel_cabang)) {
            $target_servers[] = $s;
        }
    }
}

// ---------------------------------------------------------
// 3. DAFTAR PILIHAN QUERY
// ---------------------------------------------------------
$queries = [
    'LPP' => [
        'title' => '1. Laporan Stock (LPP)',
        'qty_col' => 'LPP',
        'rp_col'  => 'LPP_RPH',
        'sql_detail' => "select * from (
select * from (
select  
 case 
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
    WHEN prd_kodeigr='3H' THEN 'SPI PLG'  WHEN prd_kodeigr='3W' THEN 'SPI PLG2'
    END AS CAB,
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
  PKM_LEADTIME AS LEADTIME,
  PRD_UNIT AS SAT, 
  PRD_FRAC AS FRC, 
  PRD_PERLAKUANBARANG STT,
  ROUND(ST_AVGCOST) AS ACOST,
  ROUND(ST_LASTCOST) AS LCOST,
  ST_SALDOAKHIR AS LPP,
  CASE WHEN PRD_UNIT='KG' THEN (ST_AVGCOST/1000)*ST_SALDOAKHIR ELSE ST_AVGCOST*ST_SALDOAKHIR END LPP_RPH,
  SLS_QTY_{$m3} AS SLS_QTY_{$m3}, SLS_QTY_{$m2} AS SLS_QTY_{$m2}, SLS_QTY_{$m1} AS SLS_QTY_{$m1},
  SLS_RPH_{$m3} AS SLS_RPH_{$m3}, SLS_RPH_{$m2} AS SLS_RPH_{$m2}, SLS_RPH_{$m1} AS SLS_RPH_{$m1},
  SLS_HPP_{$m3} AS SLS_HPP_{$m3}, SLS_HPP_{$m2} AS SLS_HPP_{$m2}, SLS_HPP_{$m1} AS SLS_HPP_{$m1},
  SUP_TOP TOP,
  PRD_CREATE_DT AS TGL_AKTIF,
  TO_CHAR(BPBAKHIR.BPBTERAKHIR,'DD/MM/YYYY') TGLBPB,
  lks_expdate as TGL_ED,
  prd_tgldiscontinue TGL_TAG,
  SUP_NAMASUPPLIER AS NAMASUPPLIER
      FROM TBMASTER_STOCK
LEFT JOIN (SELECT * FROM TBMASTER_LOKASI WHERE LKS_TIPERAK NOT IN ('Z','S')) TYPE ON ST_PRDCD=LKS_PRDCD
LEFT JOIN TBMASTER_PRODMAST ON ST_PRDCD=prd_prdcd
LEFT JOIN tbtr_salesbulanan ON sls_prdcd=prd_prdcd
LEFT JOIN TBMASTER_KKPKM on PRD_PRDCD = PKM_PRDCD	
LEFT JOIN (select distinct (mstd_prdcd)PLPB,max(mstd_tgldoc)BPBTERAKHIR  
          from tbtr_mstran_d where mstd_typetrn='B' {$date_where_clause} group by mstd_prdcd) BPBAKHIR 
ON (ST_PRDCD=BPBAKHIR.PLPB)
left join tbmaster_prodcrm on prc_pluigr=prd_prdcd 
left JOIN TBMASTER_HARGABELI ON HGB_PRDCD = PRD_PRDCD
LEFT JOIN TBMASTER_SUPPLIER ON SUP_KODESUPPLIER = HGB_KODESUPPLIER
where ST_LOKASI='01' 
ORDER BY LKS_KODERAK,LKS_KODESUBRAK,LKS_TIPERAK,LKS_SHELVINGRAK,LKS_NOURUT
) sub1 order by 10 asc
) sub1 order by 15 desc",

        'sql_rekap' => "SELECT
    CASE 
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
    WHEN prd_kodeigr='3H' THEN 'SPI PLG'  WHEN prd_kodeigr='3W' THEN 'SPI PLG2'
        ELSE COALESCE(prd_kodeigr, 'UNKNOWN')
    END AS KODE_CABANG,
    COUNT(DISTINCT st_prdcd) AS TOTAL_ITEM,
    SUM(st_saldoakhir) AS TOTAL_QTY,
    SUM(
        CASE 
            WHEN prd_unit = 'KG' THEN (st_avgcost / 1000.0) * st_saldoakhir 
            ELSE st_avgcost * st_saldoakhir 
        END
    ) AS TOTAL_RUPIAH
FROM TBMASTER_STOCK
LEFT JOIN TBMASTER_PRODMAST ON st_prdcd = prd_prdcd
WHERE st_lokasi = '01'
GROUP BY KODE_CABANG
ORDER BY KODE_CABANG"
    ]
];

// ---------------------------------------------------------
// FUNGSI MEMBUAT QUERY YANG KOMPATIBEL PER SERVER
// ---------------------------------------------------------
function build_server_query($dbconn, $sql)
{
    $table_check = @pg_query($dbconn, "
        SELECT 1
        FROM information_schema.tables
        WHERE table_schema = current_schema()
          AND lower(table_name) = 'tbtr_salesbulanan'
        LIMIT 1
    ");

    $sales_table_exists = ($table_check && pg_num_rows($table_check) > 0);
    if ($table_check) {
        pg_free_result($table_check);
    }

    if (!$sales_table_exists) {
        $sql = preg_replace(
            '/LEFT\\s+JOIN\\s+tbtr_salesbulanan\\s+ON\\s+sls_prdcd\\s*=\\s*prd_prdcd/i',
            '',
            $sql
        );
        $existing = [];
    } else {
        $existing = [];
        $col_result = @pg_query($dbconn, "
            SELECT lower(column_name) AS column_name
            FROM information_schema.columns
            WHERE table_schema = current_schema()
              AND lower(table_name) = 'tbtr_salesbulanan'
        ");

        if ($col_result) {
            while ($r = pg_fetch_assoc($col_result)) {
                $existing[$r['column_name']] = true;
            }
            pg_free_result($col_result);
        }
    }

    $sql = preg_replace_callback(
        '/\\b(SLS_(?:QTY|RPH|HPP)_([A-Za-z]{3}))\\s+AS\\s+\\1\\b/i',
        function ($m) use ($existing) {
            $column = strtolower($m[1]);
            $alias  = $m[1];
            if (isset($existing[$column])) {
                return $m[1] . ' AS ' . $alias;
            }
            return '0 AS ' . $alias;
        },
        $sql
    );

    return $sql;
}

// ---------------------------------------------------------
// AMBIL QUERY TERPILIH DAN TERAPKAN LIMIT & OFFSET
// ---------------------------------------------------------
$selected_query_key = $_GET['query_type'] ?? 'LPP';
$active_query_config = $queries[$selected_query_key] ?? $queries['LPP'];

$qty_col = ($sel_view === 'rekap') ? 'TOTAL_QTY' : $active_query_config['qty_col'];
$rp_col  = ($sel_view === 'rekap') ? 'TOTAL_RUPIAH' : $active_query_config['rp_col'];

$base_sql = ($sel_view === 'rekap') ? $active_query_config['sql_rekap'] : $active_query_config['sql_detail'];

$active_query = trim($base_sql);
$active_query = rtrim($active_query, " ;\t\r\n");
if ($sel_view === 'detail' && empty($_GET['action'])) {
    $active_query .= " LIMIT {$limit_per_page} OFFSET {$offset}";
}

// ---------------------------------------------------------
// 4. PROSES EXPORT KE EXCEL
// ---------------------------------------------------------
$action = $_GET['action'] ?? '';

if ($is_submitted && $action === 'export_excel') {
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

    foreach ($target_servers as $server) {
        $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
        $dbconn = pg_connect($conn_string);

        if (!$dbconn) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($server['name']) . "</td>";
            echo "<td colspan='100' style='color:#b91c1c;font-weight:bold;'>GAGAL KONEKSI: " . htmlspecialchars(pg_last_error() ?: 'Tidak dapat terhubung ke PostgreSQL') . "</td>";
            echo "</tr>";
            continue;
        }

        $server_sql = build_server_query($dbconn, rtrim($base_sql, " ;\t\r\n"));
        $result = @pg_query($dbconn, $server_sql);
        if (!$result) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($server['name']) . "</td>";
            echo "<td colspan='100' style='color:#b91c1c;font-weight:bold;'>SQL ERROR: " . htmlspecialchars(pg_last_error($dbconn) ?: 'Query gagal dijalankan') . "</td>";
            echo "</tr>";
            pg_close($dbconn);
            continue;
        }
        if (!$is_header_printed) {
            echo "<tr style='font-weight:bold; background-color:#1E293B; color:white;'>";
            echo "<th>NAMA SERVER</th>";
            $num_fields = pg_num_fields($result);
            for ($i = 0; $i < $num_fields; $i++) {
                echo "<th>" . htmlspecialchars(pg_field_name($result, $i)) . "</th>";
            }
            echo "</tr>";
            $is_header_printed = true;
        }

        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($server['name']) . "</td>";
            foreach ($row as $key => $value) {
                $val = htmlspecialchars($value ?? '');
                $field_name = strtoupper($key);

                if (in_array($field_name, ['PRDCD', 'PLU', 'DIV', 'DEP', 'KAT', 'KODE', 'KODE_CABANG'])) {
                    echo "<td style='mso-number-format:\"\\@\";'>" . $val . "</td>";
                } elseif (in_array($field_name, ['TOTAL_QTY', 'TOTAL_RUPIAH', 'TOTAL_ITEM', $qty_col, $rp_col])) {
                    echo "<td style='text-align:right;'>" . (is_numeric($value) ? number_format($value, 2, '.', '') : $val) . "</td>";
                } else {
                    echo "<td>" . $val . "</td>";
                }

                if ($field_name === $qty_col) $grand_qty += (float)$value;
                if ($field_name === $rp_col) $grand_rp += (float)$value;
            }
            echo "</tr>";
        }
        pg_free_result($result);
        pg_close($dbconn);
    }

    if ($is_header_printed) {
        echo "<tr style='font-weight:bold; background-color:#E2E8F0;'>";
        if ($sel_view === 'rekap') {
            echo "<td colspan='3' style='text-align:right;'>GRAND TOTAL:</td>";
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

    echo "</table></body></html>";
    exit;
}

$nama_bulan = [
    'ALL' => '-- Semua Bulan --',
    '01'  => 'Januari',   '02' => 'Februari', '03' => 'Maret',    '04' => 'April',
    '05'  => 'Mei',       '06' => 'Juni',     '07' => 'Juli',     '08' => 'Agustus',
    '09'  => 'September', '10' => 'Oktober',  '11' => 'November', '12' => 'Desember'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Stock Server (IGR, SPI, ICM)</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; color: #334155; margin: 0; padding: 20px; }
        .container { max-width: 1400px; margin: 0 auto; }
        .card { background-color: #ffffff; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 20px; }
        h2 { margin-top: 0; color: #0f172a; }
        .form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-bottom: 15px; }
        .form-group { display: flex; flex-direction: column; }
        .form-group label { font-size: 12px; font-weight: bold; margin-bottom: 5px; color: #64748b; }
        .form-group select, .form-group input { padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; }
        .btn-group { display: flex; gap: 10px; margin-top: 10px; }
        .btn { padding: 8px 16px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; text-decoration: none; display: inline-block; text-align: center; }
        .btn-primary { background-color: #2563eb; color: white; }
        .btn-success { background-color: #16a34a; color: white; }
        .btn:hover { opacity: 0.9; }
        .table-responsive { overflow-x: auto; max-height: 600px; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #e2e8f0; padding: 8px 10px; text-align: left; }
        th { background-color: #1e293b; color: white; position: sticky; top: 0; z-index: 10; }
        tr:nth-child(even) { background-color: #f1f5f9; }
        tr:hover { background-color: #e2e8f0; }
        .num { text-align: right; }
        .grand-total { font-weight: bold; background-color: #cbd5e1; }
        .pagination { display: flex; justify-content: space-between; align-items: center; margin-top: 15px; }
        .page-links { display: flex; gap: 5px; }
        .page-btn { padding: 6px 12px; border: 1px solid #cbd5e1; background: white; border-radius: 4px; text-decoration: none; color: #334155; font-size: 13px; }
        .page-btn.active { background: #2563eb; color: white; border-color: #2563eb; font-weight: bold; }
        .page-btn:hover:not(.active) { background: #e2e8f0; }
        .info-box { text-align: center; padding: 30px; color: #64748b; font-size: 14px; }
        .server-status-card { background:#fff; border:1px solid #e2e8f0; border-radius:8px; padding:16px; margin-bottom:20px; box-shadow:0 1px 3px rgba(0,0,0,0.08); }
        .server-status-card h3 { margin:0 0 12px; color:#0f172a; font-size:16px; }
        .status-table { margin:0; }
        .status-table th { position:static; }
        .status-table td { vertical-align:top; }
        .status-error td { background:#fee2e2; color:#991b1b; }
        .status-empty td { background:#fef3c7; color:#92400e; }
        .status-ok td { background:#dcfce7; color:#166534; }
        .status-scroll { max-height:350px; }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Dashboard Monitoring Stock Server (IGR, SPI, ICM)</h2>
        <form method="GET" action="">
            <div class="form-grid">
                <div class="form-group">
                    <label>Cabang / Server:</label>
                    <select name="cabang[]" multiple size="4">
                        <option value="ALL" <?= in_array('ALL', $sel_cabang) ? 'selected' : '' ?>>-- Semua Server (IGR, SPI, ICM) --</option>
                        <?php 
                        // Mengelompokkan server berdasarkan group (IGR, SPI, ICM)
                        $grouped_servers = [];
                        foreach ($servers as $s) {
                            $grouped_servers[$s['group']][] = $s;
                        }
                        foreach ($grouped_servers as $group_name => $srv_list): 
                        ?>
                            <optgroup label="<?= htmlspecialchars($group_name) ?> Servers">
                                <?php foreach ($srv_list as $s): ?>
                                    <option value="<?= $s['id'] ?>" <?= in_array($s['id'], $sel_cabang) ? 'selected' : '' ?>><?= $s['name'] ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tipe Laporan:</label>
                    <select name="query_type">
                        <?php foreach ($queries as $key => $q): ?>
                            <option value="<?= $key ?>" <?= $selected_query_key === $key ? 'selected' : '' ?>><?= $q['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tampilan Data:</label>
                    <select name="view_mode">
                        <option value="detail" <?= $sel_view === 'detail' ? 'selected' : '' ?>>Detail Item</option>
                        <option value="rekap" <?= $sel_view === 'rekap' ? 'selected' : '' ?>>Rekap per Cabang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Transaksi:</label>
                    <select name="tgl[]" multiple size="4">
                        <option value="ALL" <?= in_array('ALL', $sel_tgl) ? 'selected' : '' ?>>-- Semua Tanggal --</option>
                        <?php for ($d = 1; $d <= 31; $d++): 
                            $d_str = sprintf('%02d', $d); ?>
                            <option value="<?= $d_str ?>" <?= in_array($d_str, $sel_tgl) ? 'selected' : '' ?>><?= $d_str ?></option>
                        <?php endfor; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Bulan:</label>
                    <select name="bulan[]">
                        <?php foreach ($nama_bulan as $code => $name): if ($code === 'ALL') continue; ?>
                            <option value="<?= $code ?>" <?= in_array($code, $sel_bulan) ? 'selected' : '' ?>><?= $name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun:</label>
                    <input type="number" name="tahun" value="<?= htmlspecialchars($sel_tahun) ?>" min="2000" max="2099">
                </div>

                <div class="form-group">
                    <label>Jumlah per Halaman:</label>
                    <select name="per_page">
                        <option value="50" <?= $limit_per_page === 50 ? 'selected' : '' ?>>50 Baris</option>
                        <option value="100" <?= $limit_per_page === 100 ? 'selected' : '' ?>>100 Baris</option>
                        <option value="200" <?= $limit_per_page === 200 ? 'selected' : '' ?>>200 Baris</option>
                    </select>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" name="submit_filter" value="1" class="btn btn-primary">Tampilkan Data</button>
                <?php
                $export_params = $_GET;
                $export_params['submit_filter'] = '1';
                $export_params['action'] = 'export_excel';
                $export_url = '?' . http_build_query($export_params);
                ?>
                <a href="<?= htmlspecialchars($export_url) ?>" class="btn btn-success">Export Excel</a>
            </div>
        </form>
    </div>
	<div class="btn-group mb-4" role="group">
    <a href="index.php" class="btn btn-<?php echo empty($_GET['divisi']) ? 'primary' : 'outline-primary'; ?>">Semua</a>
    <a href="index.php?divisi=IGR" class="btn btn-<?php echo (isset($_GET['divisi']) && $_GET['divisi'] === 'IGR') ? 'primary' : 'outline-primary'; ?>">IGR</a>
    <a href="index.php?divisi=SPI" class="btn btn-<?php echo (isset($_GET['divisi']) && $_GET['divisi'] === 'SPI') ? 'primary' : 'outline-primary'; ?>">SPI</a>
    <a href="index.php?divisi=ICM" class="btn btn-<?php echo (isset($_GET['divisi']) && $_GET['divisi'] === 'ICM') ? 'primary' : 'outline-primary'; ?>">ICM</a>
</div>

    <div class="card">
        <?php if (!$is_submitted): ?>
            <div class="info-box">
                Silakan pilih filter server IGR, SPI, atau ICM lalu tekan tombol <b>"Tampilkan Data"</b> untuk memuat data.
            </div>
        <?php else: ?>
            <?php
            $is_header_printed = false;
            $current_rows_count = 0;
            $grand_qty = 0;
            $grand_rp = 0;
            ?>

            <div class="server-status-card">
                <h3>Status Koneksi / Query per Server (IGR, SPI, ICM)</h3>
                <div class="table-responsive status-scroll">
                    <table class="status-table">
                        <thead>
                            <tr>
                                <th>Server</th>
                                <th>Status</th>
                                <th>Jumlah Data</th>
                                <th>Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($target_servers as $server) {
                            $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
                            $dbconn = @pg_connect($conn_string);

                            if (!$dbconn) {
                                $err = pg_last_error();
                                echo '<tr class="status-error">';
                                echo '<td>' . htmlspecialchars($server['name']) . '</td>';
                                echo '<td><b>ERROR KONEKSI</b></td>';
                                echo '<td>-</td>';
                                echo '<td>' . htmlspecialchars($err ?: 'Tidak dapat terhubung ke PostgreSQL.') . '</td>';
                                echo '</tr>';
                                continue;
                            }

                            $server_sql = build_server_query($dbconn, $active_query);
                            $result = @pg_query($dbconn, $server_sql);
                            if (!$result) {
                                $err = pg_last_error($dbconn);
                                echo '<tr class="status-error">';
                                echo '<td>' . htmlspecialchars($server['name']) . '</td>';
                                echo '<td><b>ERROR SQL</b></td>';
                                echo '<td>-</td>';
                                echo '<td><b>' . htmlspecialchars($err ?: 'Query gagal dijalankan.') . '</b></td>';
                                echo '</tr>';
                                pg_close($dbconn);
                                continue;
                            }

                            $row_count_server = pg_num_rows($result);
                            echo '<tr class="' . ($row_count_server > 0 ? 'status-ok' : 'status-empty') . '">';
                            echo '<td>' . htmlspecialchars($server['name']) . '</td>';
                            echo '<td><b>' . ($row_count_server > 0 ? 'OK' : 'OK - 0 DATA') . '</b></td>';
                            echo '<td>' . number_format($row_count_server, 0, ',', '.') . '</td>';
                            echo '<td>' . htmlspecialchars($row_count_server > 0 ? 'Query berhasil.' : 'Query berhasil tetapi tidak ada data.') . '</td>';
                            echo '</tr>';
                            pg_free_result($result);
                            pg_close($dbconn);
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="table-responsive">
                <table>
                    <?php
                    foreach ($target_servers as $server) {
                        $conn_string = "host={$server['host']} port={$server['port']} dbname={$server['dbname']} user={$server['user']} password={$server['password']} connect_timeout=3";
                        $dbconn = @pg_connect($conn_string);

                        if (!$dbconn) {
                            continue;
                        }

                        $server_sql = build_server_query($dbconn, $active_query);
                        $result = @pg_query($dbconn, $server_sql);
                        if (!$result) {
                            @pg_close($dbconn);
                            continue;
                        }

                        if ($result) {
                            if (!$is_header_printed) {
                                echo "<thead><tr>";
                                echo "<th>NAMA SERVER</th>";
                                $num_fields = pg_num_fields($result);
                                for ($i = 0; $i < $num_fields; $i++) {
                                    echo "<th>" . htmlspecialchars(pg_field_name($result, $i)) . "</th>";
                                }
                                echo "</tr></thead><tbody>";
                                $is_header_printed = true;
                            }

                            while ($row = pg_fetch_assoc($result)) {
                                $current_rows_count++;
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($server['name']) . "</td>";

                                foreach ($row as $key => $value) {
                                    $val = htmlspecialchars($value ?? '');
                                    $field_name = strtoupper($key);

                                    if (in_array($field_name, ['TOTAL_QTY', 'TOTAL_RUPIAH', 'TOTAL_ITEM', $qty_col, $rp_col])) {
                                        echo "<td class='num'>" . (is_numeric($value) ? number_format($value, 2, ',', '.') : $val) . "</td>";
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
                        @pg_close($dbconn);
                    }

                    if (!$is_header_printed) {
                        echo "<tr><td style='text-align:center; padding:20px;'>Tidak ada data pada server yang berhasil menjalankan query. Lihat tabel <b>Status Koneksi / Query per Server</b> di atas untuk detail error.</td></tr>";
                    } else {
                        echo "<tfoot><tr class='grand-total'>";
                        if ($sel_view === 'rekap') {
                            echo "<td colspan='3' class='num'>TOTAL HALAMAN INI:</td>";
                            echo "<td class='num'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td class='num'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                        } else {
                            echo "<td colspan='10' class='num'>TOTAL HALAMAN INI:</td>";
                            echo "<td class='num'>" . number_format($grand_qty, 2, ',', '.') . "</td>";
                            echo "<td class='num'>" . number_format($grand_rp, 2, ',', '.') . "</td>";
                            echo "<td colspan='2'></td>";
                        }
                        echo "</tr></tfoot>";
                        echo "</tbody>";
                    }
                    ?>
                </table>
            </div>

            <?php if ($sel_view === 'detail'): ?>
            <div class="pagination">
                <div>
                    Menampilkan <b><?= $current_rows_count ?></b> data di Halaman <b><?= $page ?></b>
                </div>
                <div class="page-links">
                    <?php
                    $queryParams = $_GET;
                    $queryParams['submit_filter'] = '1';
                    
                    if ($page > 1) {
                        $queryParams['page'] = $page - 1;
                        echo "<a class='page-btn' href='?" . http_build_query($queryParams) . "'>&laquo; Prev</a>";
                    }

                    for ($p = max(1, $page - 2); $p <= $page + 2; $p++) {
                        $queryParams['page'] = $p;
                        $activeClass = ($p == $page) ? 'active' : '';
                        echo "<a class='page-btn {$activeClass}' href='?" . http_build_query($queryParams) . "'>{$p}</a>";
                    }

                    if ($current_rows_count >= $limit_per_page) {
                        $queryParams['page'] = $page + 1;
                        echo "<a class='page-btn' href='?" . http_build_query($queryParams) . "'>Next &raquo;</a>";
                    }
                    ?>
                </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</div>

</body>
</html>