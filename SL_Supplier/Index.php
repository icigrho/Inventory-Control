<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| MONITORING MULTI POSTGRESQL
| RETUR KE SUPPLIER
|--------------------------------------------------------------------------
*/

set_time_limit(300);
ini_set('memory_limit', '512M');

/*
|--------------------------------------------------------------------------
| 1. PASSWORD DATABASE
|--------------------------------------------------------------------------
| JANGAN simpan password database langsung di source code jika memungkinkan.
|
| Windows/Laragon:
|   set DB_PASSWORD=PASSWORD_ANDA
|
| Atau untuk sementara:
|   $DB_PASSWORD = 'PASSWORD_ANDA';
|
*/

$DB_PASSWORD = getenv('DB_PASSWORD');

if ($DB_PASSWORD === false || $DB_PASSWORD === '') {
    $DB_PASSWORD = '3dp1grVIEW';
}


/*
|--------------------------------------------------------------------------
| 2. DAFTAR SERVER
|--------------------------------------------------------------------------
|
| Format:
| [id, type, name, host, port, dbname, user]
|
| Password menggunakan $DB_PASSWORD di atas.
|
*/

$servers = [

    /* ==============================================================
       IGR
       ============================================================== */

    [
        "id" => "IGR_AMB",
        "type" => "IGR",
        "name" => "IGR AMB",
        "host" => "192.168.230.191",
        "port" => "5432",
        "dbname" => "igramb",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BDG",
        "type" => "IGR",
        "name" => "IGR BDG",
        "host" => "192.168.222.191",
        "port" => "5432",
        "dbname" => "igrbdg",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BDL",
        "type" => "IGR",
        "name" => "IGR BDL",
        "host" => "192.168.247.191",
        "port" => "5432",
        "dbname" => "igrbdl",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BGR",
        "type" => "IGR",
        "name" => "IGR BGR",
        "host" => "192.168.240.191",
        "port" => "5432",
        "dbname" => "igrbgr",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BKS",
        "type" => "IGR",
        "name" => "IGR BKS",
        "host" => "192.168.225.191",
        "port" => "5432",
        "dbname" => "igrbks",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BMS",
        "type" => "IGR",
        "name" => "IGR BMS",
        "host" => "192.168.239.191",
        "port" => "5432",
        "dbname" => "igrbms",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BTM",
        "type" => "IGR",
        "name" => "IGR BTM",
        "host" => "192.168.255.191",
        "port" => "5432",
        "dbname" => "igrbtm",
        "user" => "edp"
    ],
    [
        "id" => "IGR_CKL",
        "type" => "IGR",
        "name" => "IGR CKL",
        "host" => "192.168.249.191",
        "port" => "5432",
        "dbname" => "igrckl",
        "user" => "edp"
    ],
    [
        "id" => "IGR_CPG",
        "type" => "IGR",
        "name" => "IGR CPG",
        "host" => "192.168.226.191",
        "port" => "5432",
        "dbname" => "igrcpg",
        "user" => "edp"
    ],
    [
        "id" => "IGR_CPT",
        "type" => "IGR",
        "name" => "IGR CPT",
        "host" => "192.168.245.191",
        "port" => "5432",
        "dbname" => "igrcpt",
        "user" => "edp"
    ],
    [
        "id" => "IGR_GTO",
        "type" => "IGR",
        "name" => "IGR GTO",
        "host" => "192.168.150.191",
        "port" => "5432",
        "dbname" => "igrgto",
        "user" => "edp"
    ],
    [
        "id" => "IGR_JBI",
        "type" => "IGR",
        "name" => "IGR JBI",
        "host" => "192.168.242.191",
        "port" => "5432",
        "dbname" => "igrjbi",
        "user" => "edp"
    ],
    [
        "id" => "IGR_KMY",
        "type" => "IGR",
        "name" => "IGR KMY",
        "host" => "192.168.234.191",
        "port" => "5432",
        "dbname" => "igrkmy",
        "user" => "edp"
    ],
    [
        "id" => "IGR_KRI",
        "type" => "IGR",
        "name" => "IGR KRI",
        "host" => "192.168.244.191",
        "port" => "5432",
        "dbname" => "igrkri",
        "user" => "edp"
    ],
    [
        "id" => "IGR_KRW",
        "type" => "IGR",
        "name" => "IGR KRW",
        "host" => "192.168.231.191",
        "port" => "5432",
        "dbname" => "igrkrw",
        "user" => "edp"
    ],
    [
        "id" => "IGR_MDN",
        "type" => "IGR",
        "name" => "IGR MDN",
        "host" => "192.168.229.191",
        "port" => "5432",
        "dbname" => "igrmdn",
        "user" => "edp"
    ],
    [
        "id" => "IGR_MDO",
        "type" => "IGR",
        "name" => "IGR MDO",
        "host" => "192.168.241.191",
        "port" => "5432",
        "dbname" => "igrmdo",
        "user" => "edp"
    ],
    [
        "id" => "IGR_MKS",
        "type" => "IGR",
        "name" => "IGR MKS",
        "host" => "192.168.243.191",
        "port" => "5432",
        "dbname" => "igrmks",
        "user" => "edp"
    ],
    [
        "id" => "IGR_MLG",
        "type" => "IGR",
        "name" => "IGR MLG",
        "host" => "192.168.246.191",
        "port" => "5432",
        "dbname" => "igrmlg",
        "user" => "edp"
    ],
    [
        "id" => "IGR_PKU",
        "type" => "IGR",
        "name" => "IGR PKU",
        "host" => "192.168.235.191",
        "port" => "5432",
        "dbname" => "igrpku",
        "user" => "edp"
    ],
    [
        "id" => "IGR_PLG",
        "type" => "IGR",
        "name" => "IGR PLG",
        "host" => "192.168.232.191",
        "port" => "5432",
        "dbname" => "igrplg",
        "user" => "edp"
    ],
    [
        "id" => "IGR_PTK",
        "type" => "IGR",
        "name" => "IGR PTK",
        "host" => "192.168.238.191",
        "port" => "5432",
        "dbname" => "igrptk",
        "user" => "edp"
    ],
    [
        "id" => "IGR_PWT",
        "type" => "IGR",
        "name" => "IGR PWT",
        "host" => "192.168.83.191",
        "port" => "5432",
        "dbname" => "igrpwt",
        "user" => "edp"
    ],
    [
        "id" => "IGR_SBI",
        "type" => "IGR",
        "name" => "IGR SBI",
        "host" => "192.168.251.191",
        "port" => "5432",
        "dbname" => "igrsbi",
        "user" => "edp"
    ],
    [
        "id" => "IGR_SBY",
        "type" => "IGR",
        "name" => "IGR SBY",
        "host" => "192.168.227.191",
        "port" => "5432",
        "dbname" => "igrsby",
        "user" => "edp"
    ],
    [
        "id" => "IGR_SLO",
        "type" => "IGR",
        "name" => "IGR SLO",
        "host" => "192.168.248.191",
        "port" => "5432",
        "dbname" => "igrslo",
        "user" => "edp"
    ],
    [
        "id" => "IGR_SMD",
        "type" => "IGR",
        "name" => "IGR SMD",
        "host" => "192.168.236.191",
        "port" => "5432",
        "dbname" => "igrsmd",
        "user" => "edp"
    ],
    [
        "id" => "IGR_SMG",
        "type" => "IGR",
        "name" => "IGR SMG",
        "host" => "192.168.237.191",
        "port" => "5432",
        "dbname" => "igrsmg",
        "user" => "edp"
    ],
    [
        "id" => "IGR_TGR",
        "type" => "IGR",
        "name" => "IGR TGR",
        "host" => "192.168.228.191",
        "port" => "5432",
        "dbname" => "igrtgr",
        "user" => "edp"
    ],
    [
        "id" => "IGR_YOG",
        "type" => "IGR",
        "name" => "IGR YOG",
        "host" => "192.168.224.191",
        "port" => "5432",
        "dbname" => "igrygy",
        "user" => "edp"
    ],
    [
        "id" => "IGR_BLI",
        "type" => "IGR",
        "name" => "IGR BLI",
        "host" => "192.168.148.191",
        "port" => "5432",
        "dbname" => "igrbli",
        "user" => "edp"
    ],
    [
        "id" => "IGR_PDG",
        "type" => "IGR",
        "name" => "IGR PDG",
        "host" => "192.168.142.191",
        "port" => "5432",
        "dbname" => "igrpdg",
        "user" => "edp"
    ],


    /* ==============================================================
       SPI
       ============================================================== */

    [
        "id" => "SPI_BDG",
        "type" => "SPI",
        "name" => "SPI BDG",
        "host" => "172.31.146.154",
        "port" => "5432",
        "dbname" => "spibdg1g",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG10",
        "type" => "SPI",
        "name" => "SPI BDG10",
        "host" => "172.31.172.91",
        "port" => "5432",
        "dbname" => "spibdg3e",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG2",
        "type" => "SPI",
        "name" => "SPI BDG2",
        "host" => "172.31.146.139",
        "port" => "5432",
        "dbname" => "spibdg1u",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG3",
        "type" => "SPI",
        "name" => "SPI BDG3",
        "host" => "172.31.146.245",
        "port" => "5432",
        "dbname" => "spibdg1v",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG4",
        "type" => "SPI",
        "name" => "SPI BDG4",
        "host" => "172.31.147.246",
        "port" => "5432",
        "dbname" => "spibdg1w",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG5",
        "type" => "SPI",
        "name" => "SPI BDG5",
        "host" => "172.31.146.205",
        "port" => "5432",
        "dbname" => "spibdg1y",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG6",
        "type" => "SPI",
        "name" => "SPI BDG6",
        "host" => "172.31.147.209",
        "port" => "5432",
        "dbname" => "spibdg2h",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG7",
        "type" => "SPI",
        "name" => "SPI BDG7",
        "host" => "172.31.147.183",
        "port" => "5432",
        "dbname" => "spibdg2k",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG8",
        "type" => "SPI",
        "name" => "SPI BDG8",
        "host" => "172.31.147.216",
        "port" => "5432",
        "dbname" => "spibdg2p",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDG9",
        "type" => "SPI",
        "name" => "SPI BDG9",
        "host" => "172.31.147.186",
        "port" => "5432",
        "dbname" => "spibdg2t",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDL",
        "type" => "SPI",
        "name" => "SPI BDL",
        "host" => "172.31.146.253",
        "port" => "5432",
        "dbname" => "spibdl1r",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BDL2",
        "type" => "SPI",
        "name" => "SPI BDL2",
        "host" => "172.31.147.194",
        "port" => "5432",
        "dbname" => "spibdl2u",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BGR",
        "type" => "SPI",
        "name" => "SPI BGR",
        "host" => "172.31.146.223",
        "port" => "5432",
        "dbname" => "spibgr1q",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BGR2",
        "type" => "SPI",
        "name" => "SPI BGR2",
        "host" => "172.31.172.78",
        "port" => "5432",
        "dbname" => "spibgr3b",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BGR4",
        "type" => "SPI",
        "name" => "SPI BGR4",
        "host" => "172.31.172.125",
        "port" => "5432",
        "dbname" => "spibgr3u",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BKS",
        "type" => "SPI",
        "name" => "SPI BKS",
        "host" => "172.31.146.145",
        "port" => "5432",
        "dbname" => "spibks1k",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BKS2",
        "type" => "SPI",
        "name" => "SPI BKS2",
        "host" => "172.31.172.115",
        "port" => "5432",
        "dbname" => "spibks3l",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BKS3",
        "type" => "SPI",
        "name" => "SPI BKS3",
        "host" => "172.31.172.109",
        "port" => "5432",
        "dbname" => "spibks3o",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BLJ",
        "type" => "SPI",
        "name" => "SPI BLJ",
        "host" => "172.31.146.178",
        "port" => "5432",
        "dbname" => "spitgr1a",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BMS",
        "type" => "SPI",
        "name" => "SPI BMS",
        "host" => "172.31.147.147",
        "port" => "5432",
        "dbname" => "spibms1m",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BMS2",
        "type" => "SPI",
        "name" => "SPI BMS2",
        "host" => "172.31.172.88",
        "port" => "5432",
        "dbname" => "spibms4c",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CKL",
        "type" => "SPI",
        "name" => "SPI CKL",
        "host" => "172.31.146.142",
        "port" => "5432",
        "dbname" => "spickl1s",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CKL2",
        "type" => "SPI",
        "name" => "SPI CKL2",
        "host" => "172.31.146.201",
        "port" => "5432",
        "dbname" => "spickl2b",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CKL3",
        "type" => "SPI",
        "name" => "SPI CKL3",
        "host" => "172.31.147.251",
        "port" => "5432",
        "dbname" => "spickl2l",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CKL4",
        "type" => "SPI",
        "name" => "SPI CKL4",
        "host" => "172.31.147.196",
        "port" => "5432",
        "dbname" => "spickl2r",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CKL5",
        "type" => "SPI",
        "name" => "SPI CKL5",
        "host" => "172.31.172.90",
        "port" => "5432",
        "dbname" => "spickl3m",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CPG",
        "type" => "SPI",
        "name" => "SPI CPG",
        "host" => "172.31.146.162",
        "port" => "5432",
        "dbname" => "spicpg1i",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CPT",
        "type" => "SPI",
        "name" => "SPI CPT",
        "host" => "172.31.147.175",
        "port" => "5432",
        "dbname" => "spicpt2a",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KMY",
        "type" => "SPI",
        "name" => "SPI KMY",
        "host" => "172.31.146.172",
        "port" => "5432",
        "dbname" => "spikmy1z",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KRW",
        "type" => "SPI",
        "name" => "SPI KRW",
        "host" => "172.31.146.141",
        "port" => "5432",
        "dbname" => "spikrw1c",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MDN",
        "type" => "SPI",
        "name" => "SPI MDN",
        "host" => "172.31.146.166",
        "port" => "5432",
        "dbname" => "spimdn1e",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MDN2",
        "type" => "SPI",
        "name" => "SPI MDN2",
        "host" => "172.31.172.43",
        "port" => "5432",
        "dbname" => "spimdn2s",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MKS",
        "type" => "SPI",
        "name" => "SPI MKS",
        "host" => "172.31.146.240",
        "port" => "5432",
        "dbname" => "spimks1b",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG",
        "type" => "SPI",
        "name" => "SPI MLG",
        "host" => "172.31.146.244",
        "port" => "5432",
        "dbname" => "spimlg1h",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG2",
        "type" => "SPI",
        "name" => "SPI MLG2",
        "host" => "172.31.147.213",
        "port" => "5432",
        "dbname" => "spimlg2c",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG3",
        "type" => "SPI",
        "name" => "SPI MLG3",
        "host" => "172.31.147.170",
        "port" => "5432",
        "dbname" => "spimlg2m",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG4",
        "type" => "SPI",
        "name" => "SPI MLG4",
        "host" => "172.31.147.151",
        "port" => "5432",
        "dbname" => "spimlg2q",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG5",
        "type" => "SPI",
        "name" => "SPI MLG5",
        "host" => "172.31.172.47",
        "port" => "5432",
        "dbname" => "spimlg3c",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG7",
        "type" => "SPI",
        "name" => "SPI MLG7",
        "host" => "172.31.172.173",
        "port" => "5432",
        "dbname" => "spimlg4b",
        "user" => "edp"
    ],
    [
        "id" => "SPI_PKU",
        "type" => "SPI",
        "name" => "SPI PKU",
        "host" => "172.31.147.215",
        "port" => "5432",
        "dbname" => "spipku2v",
        "user" => "edp"
    ],
    [
        "id" => "SPI_PWT",
        "type" => "SPI",
        "name" => "SPI PWT",
        "host" => "172.31.172.51",
        "port" => "5432",
        "dbname" => "spipwt3d",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBI",
        "type" => "SPI",
        "name" => "SPI SBI",
        "host" => "172.31.146.165",
        "port" => "5432",
        "dbname" => "spisbi1t",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBI2",
        "type" => "SPI",
        "name" => "SPI SBI2",
        "host" => "172.31.172.99",
        "port" => "5432",
        "dbname" => "spisbi2w",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBI3",
        "type" => "SPI",
        "name" => "SPI SBI3",
        "host" => "172.31.172.94",
        "port" => "5432",
        "dbname" => "spisbi3i",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY",
        "type" => "SPI",
        "name" => "SPI SBY",
        "host" => "172.31.146.147",
        "port" => "5432",
        "dbname" => "spisby1d",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY2",
        "type" => "SPI",
        "name" => "SPI SBY2",
        "host" => "172.31.146.137",
        "port" => "5432",
        "dbname" => "spisby2d",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY3",
        "type" => "SPI",
        "name" => "SPI SBY3",
        "host" => "172.31.147.254",
        "port" => "5432",
        "dbname" => "spisby2e",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY4",
        "type" => "SPI",
        "name" => "SPI SBY4",
        "host" => "172.31.147.166",
        "port" => "5432",
        "dbname" => "spisby2o",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY5",
        "type" => "SPI",
        "name" => "SPI SBY5",
        "host" => "172.31.147.226",
        "port" => "5432",
        "dbname" => "spisby2x",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY6",
        "type" => "SPI",
        "name" => "SPI SBY6",
        "host" => "172.31.172.52",
        "port" => "5432",
        "dbname" => "spisby3n",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SLO",
        "type" => "SPI",
        "name" => "SPI SLO",
        "host" => "172.31.146.220",
        "port" => "5432",
        "dbname" => "spislo1j",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SLO2",
        "type" => "SPI",
        "name" => "SPI SLO2",
        "host" => "172.31.146.218",
        "port" => "5432",
        "dbname" => "spislo2g",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SLO3",
        "type" => "SPI",
        "name" => "SPI SLO3",
        "host" => "172.31.147.171",
        "port" => "5432",
        "dbname" => "spislo2n",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SLO4",
        "type" => "SPI",
        "name" => "SPI SLO4",
        "host" => "172.31.172.70",
        "port" => "5432",
        "dbname" => "spislo3f",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMD",
        "type" => "SPI",
        "name" => "SPI SMD",
        "host" => "172.31.146.208",
        "port" => "5432",
        "dbname" => "spismd1l",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMD2",
        "type" => "SPI",
        "name" => "SPI SMD2",
        "host" => "172.31.172.114",
        "port" => "5432",
        "dbname" => "spismd3j",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG",
        "type" => "SPI",
        "name" => "SPI SMG",
        "host" => "172.31.146.175",
        "port" => "5432",
        "dbname" => "spismg1n",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG3",
        "type" => "SPI",
        "name" => "SPI SMG3",
        "host" => "172.31.147.163",
        "port" => "5432",
        "dbname" => "spismg2f",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG4",
        "type" => "SPI",
        "name" => "SPI SMG4",
        "host" => "172.31.147.237",
        "port" => "5432",
        "dbname" => "spismg2i",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG5",
        "type" => "SPI",
        "name" => "SPI SMG5",
        "host" => "172.31.147.199",
        "port" => "5432",
        "dbname" => "spismg2j",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG6",
        "type" => "SPI",
        "name" => "SPI SMG6",
        "host" => "172.31.147.247",
        "port" => "5432",
        "dbname" => "spismg2y",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMG7",
        "type" => "SPI",
        "name" => "SPI SMG7",
        "host" => "172.31.172.118",
        "port" => "5432",
        "dbname" => "spismg3k",
        "user" => "edp"
    ],
    [
        "id" => "SPI_TGR2",
        "type" => "SPI",
        "name" => "SPI TGR2",
        "host" => "172.31.146.211",
        "port" => "5432",
        "dbname" => "spitgr1p",
        "user" => "edp"
    ],
    [
        "id" => "SPI_TGR3",
        "type" => "SPI",
        "name" => "SPI TGR3",
        "host" => "172.31.172.57",
        "port" => "5432",
        "dbname" => "spitgr3a",
        "user" => "edp"
    ],
    [
        "id" => "SPI_YOG",
        "type" => "SPI",
        "name" => "SPI YOG",
        "host" => "172.31.146.236",
        "port" => "5432",
        "dbname" => "spiyog1o",
        "user" => "edp"
    ],
    [
        "id" => "SPI_YOG2",
        "type" => "SPI",
        "name" => "SPI YOG2",
        "host" => "172.31.172.40",
        "port" => "5432",
        "dbname" => "spiyog2z",
        "user" => "edp"
    ],

    [
        "id" => "SPIX_BGR",
        "type" => "SPI",
        "name" => "SPIX BGR",
        "host" => "172.31.139.192",
        "port" => "5432",
        "dbname" => "spixbgrab",
        "user" => "edp"
    ],
    [
        "id" => "SPIX_BKS",
        "type" => "SPI",
        "name" => "SPIX BKS",
        "host" => "172.31.139.229",
        "port" => "5432",
        "dbname" => "spixbksaa",
        "user" => "edp"
    ],
    [
        "id" => "SPIX_SMG",
        "type" => "SPI",
        "name" => "SPIX SMG",
        "host" => "172.31.139.152",
        "port" => "5432",
        "dbname" => "spixsmgac",
        "user" => "edp"
    ],

    [
        "id" => "SPI_BKS4",
        "type" => "SPI",
        "name" => "SPI BKS4",
        "host" => "172.31.172.143",
        "port" => "5432",
        "dbname" => "spibks3x",
        "user" => "edp"
    ],
    [
        "id" => "SPI_PLG",
        "type" => "SPI",
        "name" => "SPI PLG",
        "host" => "172.31.172.106",
        "port" => "5432",
        "dbname" => "spiplg3h",
        "user" => "edp"
    ],
    [
        "id" => "SPI_TGR4",
        "type" => "SPI",
        "name" => "SPI TGR4",
        "host" => "172.31.172.160",
        "port" => "5432",
        "dbname" => "spitgr3s",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG6",
        "type" => "SPI",
        "name" => "SPI MLG6",
        "host" => "172.31.172.179",
        "port" => "5432",
        "dbname" => "spimlg3y",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KRI",
        "type" => "SPI",
        "name" => "SPI KRI",
        "host" => "172.31.172.233",
        "port" => "5432",
        "dbname" => "spikri3q",
        "user" => "edp"
    ],
    [
        "id" => "SPI_JBI",
        "type" => "SPI",
        "name" => "SPI JBI",
        "host" => "172.31.172.184",
        "port" => "5432",
        "dbname" => "spijbi3r",
        "user" => "edp"
    ],
    [
        "id" => "SPI_AMB",
        "type" => "SPI",
        "name" => "SPI AMB",
        "host" => "172.31.172.235",
        "port" => "5432",
        "dbname" => "spiamb3t",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY8",
        "type" => "SPI",
        "name" => "SPI SBY8",
        "host" => "172.31.172.141",
        "port" => "5432",
        "dbname" => "spisby4a",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KRI2",
        "type" => "SPI",
        "name" => "SPI KRI2",
        "host" => "172.31.172.69",
        "port" => "5432",
        "dbname" => "spikri4d",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BMS3",
        "type" => "SPI",
        "name" => "SPI BMS3",
        "host" => "172.31.172.249",
        "port" => "5432",
        "dbname" => "spibms4e",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CPG2",
        "type" => "SPI",
        "name" => "SPI CPG2",
        "host" => "172.31.172.153",
        "port" => "5432",
        "dbname" => "spicpg4l",
        "user" => "edp"
    ],
    [
        "id" => "SPI_PTK",
        "type" => "SPI",
        "name" => "SPI PTK",
        "host" => "172.31.172.164",
        "port" => "5432",
        "dbname" => "spiptk4m",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BLI2",
        "type" => "SPI",
        "name" => "SPI BLI2",
        "host" => "172.31.172.206",
        "port" => "5432",
        "dbname" => "spibli4g",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MDO",
        "type" => "SPI",
        "name" => "SPI MDO",
        "host" => "172.31.172.137",
        "port" => "5432",
        "dbname" => "spimdo4k",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SBY9",
        "type" => "SPI",
        "name" => "SPI SBY9",
        "host" => "172.31.172.148",
        "port" => "5432",
        "dbname" => "spisby4h",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MLG8",
        "type" => "SPI",
        "name" => "SPI MLG8",
        "host" => "172.31.172.187",
        "port" => "5432",
        "dbname" => "spimlg4i",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BGR3",
        "type" => "SPI",
        "name" => "SPI BGR3",
        "host" => "172.31.172.162",
        "port" => "5432",
        "dbname" => "spibgr3g",
        "user" => "edp"
    ],
    [
        "id" => "SPI_PLG2",
        "type" => "SPI",
        "name" => "SPI PLG2",
        "host" => "172.31.172.151",
        "port" => "5432",
        "dbname" => "spiplg3w",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KRW2",
        "type" => "SPI",
        "name" => "SPI KRW2",
        "host" => "172.31.172.217",
        "port" => "5432",
        "dbname" => "spikrw4j",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KRW3",
        "type" => "SPI",
        "name" => "SPI KRW3",
        "host" => "172.31.172.177",
        "port" => "5432",
        "dbname" => "spikrw4n",
        "user" => "edp"
    ],
    [
        "id" => "SPI_KMY2",
        "type" => "SPI",
        "name" => "SPI KMY2",
        "host" => "172.31.172.201",
        "port" => "5432",
        "dbname" => "spikmy4p",
        "user" => "edp"
    ],
    [
        "id" => "SPI_CPT2",
        "type" => "SPI",
        "name" => "SPI CPT2",
        "host" => "172.31.172.191",
        "port" => "5432",
        "dbname" => "spicpt3p",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BMS4",
        "type" => "SPI",
        "name" => "SPI BMS4",
        "host" => "172.31.172.239",
        "port" => "5432",
        "dbname" => "spibms4x",
        "user" => "edp"
    ],
    [
        "id" => "SPI_MKS2",
        "type" => "SPI",
        "name" => "SPI MKS2",
        "host" => "172.31.172.133",
        "port" => "5432",
        "dbname" => "spimks3v",
        "user" => "edp"
    ],
    [
        "id" => "SPI_SMD3",
        "type" => "SPI",
        "name" => "SPI SMD3",
        "host" => "172.31.172.248",
        "port" => "5432",
        "dbname" => "spismd4q",
        "user" => "edp"
    ],
    [
        "id" => "SPI_BLI",
        "type" => "SPI",
        "name" => "SPI BLI",
        "host" => "172.31.172.212",
        "port" => "5432",
        "dbname" => "spibli4f",
        "user" => "edp"
    ],


    /* ==============================================================
       ICM
       ============================================================== */

    [
        "id" => "ICM_AMB",
        "type" => "ICM",
        "name" => "ICM AMB",
        "host" => "192.168.230.191",
        "port" => "5432",
        "dbname" => "icmamb",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BDG",
        "type" => "ICM",
        "name" => "ICM BDG",
        "host" => "192.168.222.191",
        "port" => "5432",
        "dbname" => "icmbdg",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BDL",
        "type" => "ICM",
        "name" => "ICM BDL",
        "host" => "192.168.247.191",
        "port" => "5432",
        "dbname" => "icmbdl",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BGR",
        "type" => "ICM",
        "name" => "ICM BGR",
        "host" => "192.168.240.191",
        "port" => "5432",
        "dbname" => "icmbgr",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BLI",
        "type" => "ICM",
        "name" => "ICM BLI",
        "host" => "192.168.148.191",
        "port" => "5432",
        "dbname" => "icmbli",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BMS",
        "type" => "ICM",
        "name" => "ICM BMS",
        "host" => "192.168.239.191",
        "port" => "5432",
        "dbname" => "icmbms",
        "user" => "edp"
    ],
    [
        "id" => "ICM_BTM",
        "type" => "ICM",
        "name" => "ICM BTM",
        "host" => "192.168.255.191",
        "port" => "5432",
        "dbname" => "icmbtm",
        "user" => "edp"
    ],
    [
        "id" => "ICM_CKL",
        "type" => "ICM",
        "name" => "ICM CKL",
        "host" => "192.168.249.191",
        "port" => "5432",
        "dbname" => "icmckl",
        "user" => "edp"
    ],
    [
        "id" => "ICM_CPG",
        "type" => "ICM",
        "name" => "ICM CPG",
        "host" => "192.168.226.191",
        "port" => "5432",
        "dbname" => "icmcpg",
        "user" => "edp"
    ],
    [
        "id" => "ICM_CPT",
        "type" => "ICM",
        "name" => "ICM CPT",
        "host" => "192.168.245.191",
        "port" => "5432",
        "dbname" => "icmcpt",
        "user" => "edp"
    ],
    [
        "id" => "ICM_GTO",
        "type" => "ICM",
        "name" => "ICM GTO",
        "host" => "192.168.150.191",
        "port" => "5432",
        "dbname" => "icmgto",
        "user" => "edp"
    ],
    [
        "id" => "ICM_KMY",
        "type" => "ICM",
        "name" => "ICM KMY",
        "host" => "192.168.234.191",
        "port" => "5432",
        "dbname" => "icmkmy",
        "user" => "edp"
    ],
    [
        "id" => "ICM_KRI",
        "type" => "ICM",
        "name" => "ICM KRI",
        "host" => "192.168.244.191",
        "port" => "5432",
        "dbname" => "icmkri",
        "user" => "edp"
    ],
    [
        "id" => "ICM_KRW",
        "type" => "ICM",
        "name" => "ICM KRW",
        "host" => "192.168.231.191",
        "port" => "5432",
        "dbname" => "icmkrw",
        "user" => "edp"
    ],
    [
        "id" => "ICM_MDO",
        "type" => "ICM",
        "name" => "ICM MDO",
        "host" => "192.168.241.191",
        "port" => "5432",
        "dbname" => "icmmdo",
        "user" => "edp"
    ],
    [
        "id" => "ICM_MLG",
        "type" => "ICM",
        "name" => "ICM MLG",
        "host" => "192.168.246.191",
        "port" => "5432",
        "dbname" => "icmmlg",
        "user" => "edp"
    ],
    [
        "id" => "ICM_PKU",
        "type" => "ICM",
        "name" => "ICM PKU",
        "host" => "192.168.235.191",
        "port" => "5432",
        "dbname" => "icmpku",
        "user" => "edp"
    ],
    [
        "id" => "ICM_PLG",
        "type" => "ICM",
        "name" => "ICM PLG",
        "host" => "192.168.232.191",
        "port" => "5432",
        "dbname" => "icmplg",
        "user" => "edp"
    ],
    [
        "id" => "ICM_PTK",
        "type" => "ICM",
        "name" => "ICM PTK",
        "host" => "192.168.238.191",
        "port" => "5432",
        "dbname" => "icmptk",
        "user" => "edp"
    ],
    [
        "id" => "ICM_PWT",
        "type" => "ICM",
        "name" => "ICM PWT",
        "host" => "192.168.83.191",
        "port" => "5432",
        "dbname" => "icmpwt",
        "user" => "edp"
    ],
    [
        "id" => "ICM_SBI",
        "type" => "ICM",
        "name" => "ICM SBI",
        "host" => "192.168.251.191",
        "port" => "5432",
        "dbname" => "icmsbi",
        "user" => "edp"
    ],
    [
        "id" => "ICM_SBY",
        "type" => "ICM",
        "name" => "ICM SBY",
        "host" => "192.168.227.191",
        "port" => "5432",
        "dbname" => "icmsby",
        "user" => "edp"
    ],
    [
        "id" => "ICM_SLO",
        "type" => "ICM",
        "name" => "ICM SLO",
        "host" => "192.168.248.191",
        "port" => "5432",
        "dbname" => "icmslo",
        "user" => "edp"
    ],
    [
        "id" => "ICM_SMD",
        "type" => "ICM",
        "name" => "ICM SMD",
        "host" => "192.168.236.191",
        "port" => "5432",
        "dbname" => "icmsmd",
        "user" => "edp"
    ],
    [
        "id" => "ICM_SMG",
        "type" => "ICM",
        "name" => "ICM SMG",
        "host" => "192.168.237.191",
        "port" => "5432",
        "dbname" => "icmsmg",
        "user" => "edp"
    ],
    [
        "id" => "ICM_TGR",
        "type" => "ICM",
        "name" => "ICM TGR",
        "host" => "192.168.228.191",
        "port" => "5432",
        "dbname" => "icmtgr",
        "user" => "edp"
    ],
    [
        "id" => "ICM_YOG",
        "type" => "ICM",
        "name" => "ICM YOG",
        "host" => "192.168.224.191",
        "port" => "5432",
        "dbname" => "icmyog",
        "user" => "edp"
    ]
];


/*
|--------------------------------------------------------------------------
| 3. MAPPING KODE IGR
|--------------------------------------------------------------------------
*/

$cabMap = [

    /* IGR */
    '01' => 'CPG',
    '03' => 'SBY',
    '04' => 'BDG',
    '05' => 'TGR',
    '06' => 'YOG',
    '15' => 'MDN',
    '16' => 'BKS',
    '17' => 'PLG',
    '18' => 'KMY',
    '20' => 'PKU',
    '21' => 'SMD',
    '22' => 'SMG',
    '25' => 'BGR',
    '26' => 'PTK',
    '27' => 'BMS',
    '28' => 'MDO',
    '31' => 'MKS',
    '32' => 'JBI',
    '33' => 'KRI',
    '34' => 'AMB',
    '35' => 'CPT',
    '36' => 'KRW',
    '37' => 'MLG',
    '38' => 'BDL',
    '39' => 'SLO',
    '43' => 'SBI',
    '44' => 'CKL',
    '46' => 'BTM',
    '47' => 'PWT',
    '48' => 'BLI',
    '50' => 'GTO',
    '51' => 'PDG',

    /* SPI */
    '1A' => 'SPI BLJ',
    '1B' => 'SPI MKS',
    '1C' => 'SPI KRW',
    '1D' => 'SPI SBY',
    '1E' => 'SPI MDN',
    '1F' => 'SPI MDO',
    '1G' => 'SPI BDG',
    '1H' => 'SPI MLG',
    '1I' => 'SPI CPG',
    '1J' => 'SPI SLO',
    '1K' => 'SPI BKS',
    '1L' => 'SPI SMD',
    '1M' => 'SPI BMS',
    '1N' => 'SPI SMG',
    '1O' => 'SPI YOG',
    '1P' => 'SPI TGR2',
    '1Q' => 'SPI BGR',
    '1R' => 'SPI BDL',
    '1S' => 'SPI CKL',
    '1T' => 'SPI SBI',
    '1U' => 'SPI BDG2',
    '1V' => 'SPI BDG3',
    '1W' => 'SPI BDG4',
    '1Y' => 'SPI BDG5',
    '1Z' => 'SPI KMY',

    '2A' => 'SPI CPT',
    '2B' => 'SPI CKL2',
    '2C' => 'SPI MLG2',
    '2D' => 'SPI SBY2',
    '2E' => 'SPI SBY3',
    '2F' => 'SPI SMG3',
    '2G' => 'SPI SLO2',
    '2H' => 'SPI BDG6',
    '2I' => 'SPI SMG4',
    '2J' => 'SPI SMG5',
    '2K' => 'SPI BDG7',
    '2L' => 'SPI CKL3',
    '2M' => 'SPI MLG3',
    '2N' => 'SPI SLO3',
    '2O' => 'SPI SBY4',
    '2P' => 'SPI BDG8',
    '2Q' => 'SPI MLG4',
    '2R' => 'SPI CKL4',
    '2S' => 'SPI MDN2',
    '2T' => 'SPI BDG9',
    '2U' => 'SPI BDL2',
    '2V' => 'SPI PKU',
    '2W' => 'SPI SBI2',
    '2X' => 'SPI SBY5',
    '2Y' => 'SPI SMG6',
    '2Z' => 'SPI YOG2',

    '3A' => 'SPI TGR3',
    '3B' => 'SPI BGR2',
    '3C' => 'SPI MLG5',
    '3D' => 'SPI PWT',
    '3E' => 'SPI BDG10',
    '3F' => 'SPI SLO4',
    '3G' => 'SPI BGR3',
    '3H' => 'SPI PLG',
    '3I' => 'SPI SBI3',
    '3J' => 'SPI SMD2',
    '3K' => 'SPI SMG7',
    '3L' => 'SPI BKS2',
    '3M' => 'SPI CKL5',
    '3N' => 'SPI SBY6',
    '3O' => 'SPI BKS3',
    '3P' => 'SPI CPT2',
    '3Q' => 'SPI KRI',
    '3R' => 'SPI JBI',
    '3S' => 'SPI TGR4',
    '3T' => 'SPI AMB',
    '3U' => 'SPI BGR4',
    '3V' => 'SPI MKS2',
    '3W' => 'SPI PLG2',
    '3X' => 'SPI BKS4',
    '3Y' => 'SPI MLG6',

    '4A' => 'SPI SBY8',
    '4B' => 'SPI MLG7',
    '4C' => 'SPI BMS2',
    '4D' => 'SPI KRI2',
    '4E' => 'SPI BMS3',
    '4F' => 'SPI BLI',
    '4G' => 'SPI BLI2',
    '4H' => 'SPI SBY9',
    '4I' => 'SPI MLG8',
    '4J' => 'SPI KRW2',
    '4K' => 'SPI MDO',
    '4L' => 'SPI CPG2',
    '4M' => 'SPI PTK',
    '4N' => 'SPI KRW3',
    '4P' => 'SPI KMY2',
    '4Q' => 'SPI SMD3',
    '4X' => 'SPI BMS4',

    'AA' => 'SPI-X BKS',
    'AB' => 'SPI-X BGR',
    'AC' => 'SPI-X SMG',

    /* ICM */
    '7A' => 'ICM CKL',
    '7B' => 'ICM SBI',
    '7C' => 'ICM BTM',
    '7D' => 'ICM TGR',
    '7E' => 'ICM BDL',
    '7F' => 'ICM MLG',
    '7G' => 'ICM YOG',
    '7H' => 'ICM BGR',
    '7I' => 'ICM SMD',
    '7J' => 'ICM BMS',
    '7K' => 'ICM PLG',
    '7L' => 'ICM KRW',
    '7M' => 'ICM PKU',
    '7N' => 'ICM KRI',
    '7O' => 'ICM KMY',
    '7P' => 'ICM AMB',
    '7Q' => 'ICM BDG',
    '7R' => 'ICM SMG',
    '7S' => 'ICM PWT',
    '7T' => 'ICM CPT',
    '7U' => 'ICM PTK',
    '7V' => 'ICM SLO',
    '7W' => 'ICM MDO',
    '7X' => 'ICM GTO',
    '7Y' => 'ICM CPG',
    '7Z' => 'ICM SBY',
    '8B' => 'ICM BLI'
];


/*
|--------------------------------------------------------------------------
| 4. GENERATE CASE CABANG
|--------------------------------------------------------------------------
*/

$caseCab = "CASE\n";

foreach ($cabMap as $kode => $nama) {
    $kodeSql = str_replace("'", "''", (string)$kode);
    $namaSql = str_replace("'", "''", (string)$nama);

    $caseCab .= "    WHEN UPPER(TRIM(po.tpod_kodeigr::text)) = '{$kodeSql}' THEN '{$namaSql}'\n";
}

$caseCab .= "    ELSE 'UNKNOWN'\nEND";


/*
|--------------------------------------------------------------------------
| 5. PARAMETER FILTER
|--------------------------------------------------------------------------
*/

$isSearched = isset($_GET['search']) && $_GET['search'] === '1';

$selType = isset($_GET['server_type'])
    ? strtoupper(trim((string)$_GET['server_type']))
    : 'ALL';

if (!in_array($selType, ['ALL', 'IGR', 'SPI', 'ICM'], true)) {
    $selType = 'ALL';
}


/* Cabang */
$selCabang = $_GET['cabang'] ?? ['ALL'];

if (!is_array($selCabang)) {
    $selCabang = [$selCabang];
}

$selCabang = array_values(
    array_filter(
        array_map('strval', $selCabang),
        static function ($v) {
            return $v !== '';
        }
    )
);

if (empty($selCabang)) {
    $selCabang = ['ALL'];
}


/* View */
$selView = $_GET['view_mode'] ?? 'detail';

if (!in_array($selView, ['detail', 'rekap'], true)) {
    $selView = 'detail';
}


/* Tanggal */
$selTgl = $_GET['tgl'] ?? ['ALL'];

if (!is_array($selTgl)) {
    $selTgl = [$selTgl];
}


/* Bulan */
$selBulan = $_GET['bulan'] ?? [date('m')];

if (!is_array($selBulan)) {
    $selBulan = [$selBulan];
}


/* Tahun */
$selTahun = $_GET['tahun'] ?? date('Y');

$allowedYears = [];

$currentYear = (int)date('Y');

for ($y = $currentYear - 3; $y <= $currentYear + 2; $y++) {
    $allowedYears[] = (string)$y;
}

if ($selTahun !== 'ALL' && !in_array((string)$selTahun, $allowedYears, true)) {
    $selTahun = (string)$currentYear;
}


/* Pagination */
$page = isset($_GET['page'])
    ? max(1, (int)$_GET['page'])
    : 1;

$perPage = isset($_GET['per_page'])
    ? (int)$_GET['per_page']
    : 50;

if (!in_array($perPage, [25, 50, 100, 250], true)) {
    $perPage = 50;
}


/*
|--------------------------------------------------------------------------
| 6. TARGET SERVER
|--------------------------------------------------------------------------
*/

$targetServers = [];

foreach ($servers as $server) {

    if (
        $selType !== 'ALL'
        && strtoupper($server['type']) !== $selType
    ) {
        continue;
    }

    if (
        !in_array('ALL', $selCabang, true)
        && !in_array($server['id'], $selCabang, true)
    ) {
        continue;
    }

    $server['password'] = $DB_PASSWORD;

    $targetServers[] = $server;
}


/*
|--------------------------------------------------------------------------
| 7. FILTER TANGGAL
|--------------------------------------------------------------------------
|
| Karena query RETUR SUPPLIER menggunakan PO yang belum mempunyai BPB,
| mstd_tgldoc bisa NULL.
|
| Maka filter tanggal menggunakan:
|
| COALESCE(mst.mstd_tgldoc, poh.tpoh_tglpo)
|
| sehingga filter tetap bisa digunakan untuk PO yang belum BPB.
|
*/

$conditions = [];


/* Hanya PO yang belum BPB */
$conditions[] = "mst.mstd_recordid IS NULL";


/* Record PO */
$conditions[] = "(po.tpod_recordid IS NULL OR po.tpod_recordid = '2')";


/* Tanggal */
if (
    !in_array('ALL', $selTgl, true)
    && !empty($selTgl)
) {

    $days = [];

    foreach ($selTgl as $day) {

        $dayInt = filter_var(
            $day,
            FILTER_VALIDATE_INT,
            [
                'options' => [
                    'min_range' => 1,
                    'max_range' => 31
                ]
            ]
        );

        if ($dayInt !== false) {
            $days[] = (int)$dayInt;
        }
    }

    if (!empty($days)) {
        $conditions[] =
            "EXTRACT(DAY FROM COALESCE(mst.mstd_tgldoc, poh.tpoh_tglpo)) IN (" .
            implode(',', $days) .
            ")";
    }
}


/* Bulan */
if (
    !in_array('ALL', $selBulan, true)
    && !empty($selBulan)
) {

    $months = [];

    foreach ($selBulan as $month) {

        $monthInt = filter_var(
            $month,
            FILTER_VALIDATE_INT,
            [
                'options' => [
                    'min_range' => 1,
                    'max_range' => 12
                ]
            ]
        );

        if ($monthInt !== false) {
            $months[] = (int)$monthInt;
        }
    }

    if (!empty($months)) {
        $conditions[] =
            "EXTRACT(MONTH FROM COALESCE(mst.mstd_tgldoc, poh.tpoh_tglpo)) IN (" .
            implode(',', $months) .
            ")";
    }
}


/* Tahun */
if ($selTahun !== 'ALL') {

    $conditions[] =
        "EXTRACT(YEAR FROM COALESCE(mst.mstd_tgldoc, poh.tpoh_tglpo)) = " .
        (int)$selTahun;
}


$whereClause = implode("\nAND ", $conditions);


/*
|--------------------------------------------------------------------------
| 8. QUERY DETAIL
|--------------------------------------------------------------------------
|
| Query ini menjadi sumber utama untuk Detail dan Rekap.
|
*/

$sqlDetail = <<<SQL

WITH base_data AS (

    SELECT

        {$caseCab} AS cab,

        prd.prd_kodedivisi AS div,
        prd.prd_kodedepartement AS dept,
        prd.prd_kodekategoribarang AS kat,

        po.tpod_nopo AS nomor_po,

        poh.tpoh_tglpo AS tanggal_po,

        mst.mstd_nodoc AS nomor_bpb,

        mst.mstd_tgldoc AS tanggal_bpb,

        po.tpod_kodeigr AS kode_igr,

        po.tpod_prdcd AS plu,

        prd.prd_deskripsipanjang AS deskripsi,

        prd.prd_unit AS unit,

        prd.prd_frac AS frac,

        COALESCE(prd.prd_kodetag, ' ') AS tag,

        COALESCE(po.tpod_qtypo, 0) AS qty_po,

        COALESCE(
            po.tpod_gross + po.tpod_ppn,
            0
        ) AS rph_po,

        COALESCE(mst.mstd_qty, 0) AS qty_bpb,

        COALESCE(
            mst.mstd_gross
            - mst.mstd_discrph
            + mst.mstd_ppnrph,
            0
        ) AS rph_bpb,

        poh.tpoh_kodesupplier AS kode_supplier,

        sup.sup_namasupplier AS nama_supplier,

        COALESCE(stk.st_saldoakhir, 0) AS stock_qty,

        COALESCE(stk.st_lastcost, 0) AS lastcost,

        COALESCE(stk.st_avgcost, 0) AS avgcost

    FROM tbtr_po_d po

    LEFT JOIN tbtr_mstran_d mst
        ON po.tpod_prdcd = mst.mstd_prdcd
        AND po.tpod_nopo = mst.mstd_nopo

    LEFT JOIN tbtr_po_h poh
        ON po.tpod_nopo = poh.tpoh_nopo

    LEFT JOIN tbmaster_prodmast prd
        ON po.tpod_prdcd = prd.prd_prdcd

    LEFT JOIN tbmaster_supplier sup
        ON poh.tpoh_kodesupplier = sup.sup_kodesupplier

    LEFT JOIN tbmaster_stock stk
        ON po.tpod_prdcd = stk.st_prdcd
        AND stk.st_lokasi = '01'

    WHERE
        {$whereClause}

)

SELECT

    cab AS "CAB",

    MIN(div) AS "DIV",

    MIN(dept) AS "DEPT",

    MIN(kat) AS "KAT",

    plu AS "PLU",

    MIN(deskripsi) AS "DESKRIPSI",

    MIN(unit) AS "UNIT",

    MIN(frac) AS "FRAC",

    MIN(tag) AS "TAG",

    SUM(qty_po) AS "QTY_PO",

    SUM(qty_bpb) AS "QTY_BPB",

    ROUND(
        CASE
            WHEN SUM(qty_po) = 0 THEN 0
            ELSE
                SUM(qty_bpb)
                / NULLIF(SUM(qty_po), 0)
                * 100
        END,
        0
    ) AS "QTY_PERSEN",

    SUM(rph_po) AS "RPH_PO",

    SUM(rph_bpb) AS "RPH_BPB",

    ROUND(
        CASE
            WHEN SUM(rph_po) = 0 THEN 0
            ELSE
                SUM(rph_bpb)
                / NULLIF(SUM(rph_po), 0)
                * 100
        END,
        0
    ) AS "RPH_PERSEN",

    MIN(kode_supplier) AS "KODE_SUPPLIER",

    MIN(nama_supplier) AS "NAMA_SUPPLIER",

    MIN(stock_qty) AS "STOCK_QTY",

    MIN(lastcost) AS "LASTCOST",

    MIN(avgcost) AS "AVGCOST"

FROM base_data

GROUP BY
    cab,
    plu

ORDER BY
    cab,
    MIN(div),
    MIN(dept),
    MIN(kat),
    MIN(deskripsi)

SQL;


/*
|--------------------------------------------------------------------------
| 9. QUERY REKAP
|--------------------------------------------------------------------------
|
| REKAP menggunakan hasil yang sama dengan Detail.
|
*/

$sqlRekap = <<<SQL

WITH base_data AS (

    SELECT

        {$caseCab} AS cab,

        po.tpod_nopo AS nomor_po,

        po.tpod_prdcd AS plu,

        COALESCE(po.tpod_qtypo, 0) AS qty_po,

        COALESCE(
            po.tpod_gross + po.tpod_ppn,
            0
        ) AS rph_po,

        COALESCE(mst.mstd_qty, 0) AS qty_bpb,

        COALESCE(
            mst.mstd_gross
            - mst.mstd_discrph
            + mst.mstd_ppnrph,
            0
        ) AS rph_bpb

    FROM tbtr_po_d po

    LEFT JOIN tbtr_mstran_d mst
        ON po.tpod_prdcd = mst.mstd_prdcd
        AND po.tpod_nopo = mst.mstd_nopo

    LEFT JOIN tbtr_po_h poh
        ON po.tpod_nopo = poh.tpoh_nopo

    WHERE
        {$whereClause}

),

rekap AS (

    SELECT

        cab,

        COUNT(DISTINCT nomor_po) AS total_doc,

        COUNT(*) AS total_record,

        SUM(qty_po) AS total_qty_po,

        SUM(qty_bpb) AS total_qty_bpb,

        SUM(rph_po) AS total_rph_po,

        SUM(rph_bpb) AS total_rph_bpb

    FROM base_data

    GROUP BY cab

)

SELECT

    cab AS "CAB",

    total_doc AS "TOTAL_DOC",

    total_record AS "TOTAL_RECORD",

    total_qty_po AS "TOTAL_QTY_PO",

    total_qty_bpb AS "TOTAL_QTY_BPB",

    ROUND(
        CASE
            WHEN total_qty_po = 0 THEN 0
            ELSE
                total_qty_bpb
                / NULLIF(total_qty_po, 0)
                * 100
        END,
        0
    ) AS "QTY_PERSEN",

    total_rph_po AS "TOTAL_RPH_PO",

    total_rph_bpb AS "TOTAL_RPH_BPB",

    ROUND(
        CASE
            WHEN total_rph_po = 0 THEN 0
            ELSE
                total_rph_bpb
                / NULLIF(total_rph_po, 0)
                * 100
        END,
        0
    ) AS "RPH_PERSEN"

FROM rekap

ORDER BY cab

SQL;


/*
|--------------------------------------------------------------------------
| 10. QUERY AKTIF
|--------------------------------------------------------------------------
*/

$selectedQueryKey = 'sl_supplier';

$queryTitle = 'SL SUPPLIER';

$baseQuery =
    ($selView === 'rekap')
    ? $sqlRekap
    : $sqlDetail;


/*
|--------------------------------------------------------------------------
| 11. FUNCTION KONEKSI
|--------------------------------------------------------------------------
*/

function connectPostgreSQL(array $server)
{
    $connectionString =
        "host=" . $server['host'] .
        " port=" . $server['port'] .
        " dbname=" . $server['dbname'] .
        " user=" . $server['user'] .
        " password=" . $server['password'] .
        " connect_timeout=3";

    return @pg_connect($connectionString);
}


/*
|--------------------------------------------------------------------------
| 12. FUNCTION FORMAT
|--------------------------------------------------------------------------
*/

function e($value): string
{
    return htmlspecialchars(
        (string)($value ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );
}


function numberID($value, int $decimal = 2): string
{
    if ($value === null || $value === '') {
        return '';
    }

    return number_format(
        (float)$value,
        $decimal,
        ',',
        '.'
    );
}


function isNumericField(string $field): bool
{
    $fields = [
        'qty_po',
        'qty_bpb',
        'qty_persen',
        'rph_po',
        'rph_bpb',
        'rph_persen',
        'stock_qty',
        'lastcost',
        'avgcost',

        'total_qty_po',
        'total_qty_bpb',
        'total_rph_po',
        'total_rph_bpb',

        'total_doc',
        'total_record'
    ];

    return in_array(
        strtolower($field),
        $fields,
        true
    );
}


function isIntegerField(string $field): bool
{
    return in_array(
        strtolower($field),
        [
            'total_doc',
            'total_record'
        ],
        true
    );
}


/*
|--------------------------------------------------------------------------
| 13. AMBIL DATA
|--------------------------------------------------------------------------
*/

$allRows = [];

$serverStatus = [];

$grand = [
    'total_doc'      => 0,
    'total_record'   => 0,
    'qty_po'         => 0,
    'qty_bpb'        => 0,
    'rph_po'         => 0,
    'rph_bpb'        => 0
];


if ($isSearched) {

    foreach ($targetServers as $server) {

        $dbconn = connectPostgreSQL($server);

        if (!$dbconn) {

            $serverStatus[] = [
                'name' => $server['name'],
                'status' => 'ERROR',
                'message' => 'Tidak dapat terhubung ke database'
            ];

            continue;
        }


        $result = @pg_query(
            $dbconn,
            $baseQuery
        );


        if (!$result) {

            $errorMessage = pg_last_error($dbconn);

            $serverStatus[] = [
                'name' => $server['name'],
                'status' => 'ERROR',
                'message' => $errorMessage
            ];

            pg_close($dbconn);

            continue;
        }


        $rowCount = 0;


        while ($row = pg_fetch_assoc($result)) {

            $rowCount++;


            if ($selView === 'rekap') {

                $rowData = [
                    'SERVER_NAME' => $server['name']
                ];

                foreach ($row as $key => $value) {
                    $rowData[$key] = $value;
                }

            } else {

                $rowData = $row;
            }


            $allRows[] = $rowData;


            /*
            |--------------------------------------------------------------------------
            | GRAND TOTAL DETAIL
            |--------------------------------------------------------------------------
            */

            if ($selView === 'detail') {

                $grand['qty_po'] +=
                    (float)($row['QTY_PO'] ?? 0);

                $grand['qty_bpb'] +=
                    (float)($row['QTY_BPB'] ?? 0);

                $grand['rph_po'] +=
                    (float)($row['RPH_PO'] ?? 0);

                $grand['rph_bpb'] +=
                    (float)($row['RPH_BPB'] ?? 0);

            }


            /*
            |--------------------------------------------------------------------------
            | GRAND TOTAL REKAP
            |--------------------------------------------------------------------------
            */

            if ($selView === 'rekap') {

                $grand['total_doc'] +=
                    (float)($row['TOTAL_DOC'] ?? 0);

                $grand['total_record'] +=
                    (float)($row['TOTAL_RECORD'] ?? 0);

                $grand['qty_po'] +=
                    (float)($row['TOTAL_QTY_PO'] ?? 0);

                $grand['qty_bpb'] +=
                    (float)($row['TOTAL_QTY_BPB'] ?? 0);

                $grand['rph_po'] +=
                    (float)($row['TOTAL_RPH_PO'] ?? 0);

                $grand['rph_bpb'] +=
                    (float)($row['TOTAL_RPH_BPB'] ?? 0);
            }
        }


        pg_free_result($result);
        pg_close($dbconn);


        $serverStatus[] = [
            'name' => $server['name'],
            'status' => 'OK',
            'message' => $rowCount . ' record'
        ];
    }
}


/*
|--------------------------------------------------------------------------
| 14. PAGINATION
|--------------------------------------------------------------------------
*/

$totalRecords = count($allRows);

$totalPages =
    $totalRecords > 0
    ? (int)ceil($totalRecords / $perPage)
    : 1;


if ($page > $totalPages) {
    $page = $totalPages;
}


$offset = ($page - 1) * $perPage;


$displayRows = array_slice(
    $allRows,
    $offset,
    $perPage
);


/*
|--------------------------------------------------------------------------
| 15. PERSENTASE GRAND TOTAL
|--------------------------------------------------------------------------
*/

$grandQtyPercent =
    $grand['qty_po'] != 0
    ? ($grand['qty_bpb'] / $grand['qty_po']) * 100
    : 0;


$grandRphPercent =
    $grand['rph_po'] != 0
    ? ($grand['rph_bpb'] / $grand['rph_po']) * 100
    : 0;


/*
|--------------------------------------------------------------------------
| 16. BULAN
|--------------------------------------------------------------------------
*/

$namaBulan = [
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
];


/*
|--------------------------------------------------------------------------
| 17. EXPORT EXCEL
|--------------------------------------------------------------------------
*/

$action = $_GET['action'] ?? '';


if ($action === 'export_excel' && $isSearched) {

    $filename =
        'Laporan_RETUR_SUPPLIER_' .
        strtoupper($selView) .
        '_' .
        date('Ymd_His');


    header(
        'Content-Type: application/vnd.ms-excel; charset=utf-8'
    );

    header(
        'Content-Disposition: attachment; filename="' .
        $filename .
        '.xls"'
    );

    header('Pragma: no-cache');
    header('Expires: 0');


    echo '<html>';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '</head>';
    echo '<body>';


    echo '<table border="1" cellpadding="4" cellspacing="0">';


    /*
    |--------------------------------------------------------------------------
    | HEADER
    |--------------------------------------------------------------------------
    */

    if (!empty($allRows)) {

        echo '<tr style="font-weight:bold;background:#1E293B;color:white;">';

        foreach (array_keys($allRows[0]) as $header) {

            echo '<th>' .
                e(strtoupper($header)) .
                '</th>';
        }

        echo '</tr>';


        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */

        foreach ($allRows as $row) {

            echo '<tr>';

            foreach ($row as $key => $value) {

                $field = strtolower($key);


                if (
                    in_array(
                        $field,
                        [
                            'plu',
                            'kode_supplier'
                        ],
                        true
                    )
                ) {

                    echo '<td style="mso-number-format:\'@\';">' .
                        e($value) .
                        '</td>';

                } elseif (isIntegerField($field)) {

                    echo '<td style="text-align:right;">' .
                        number_format(
                            (float)$value,
                            0,
                            '.',
                            ''
                        ) .
                        '</td>';

                } elseif (isNumericField($field)) {

                    echo '<td style="text-align:right;">' .
                        number_format(
                            (float)$value,
                            2,
                            '.',
                            ''
                        ) .
                        '</td>';

                } else {

                    echo '<td>' .
                        e($value) .
                        '</td>';
                }
            }

            echo '</tr>';
        }


        /*
        |--------------------------------------------------------------------------
        | GRAND TOTAL DETAIL
        |--------------------------------------------------------------------------
        */

        if ($selView === 'detail') {

            echo '<tr style="font-weight:bold;background:#E2E8F0;">';

            echo '<td colspan="9" style="text-align:right;">';
            echo 'GRAND TOTAL';
            echo '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['qty_po'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['qty_bpb'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grandQtyPercent,
                    0,
                    '.',
                    ''
                ) .
                '%</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['rph_po'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['rph_bpb'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grandRphPercent,
                    0,
                    '.',
                    ''
                ) .
                '%</td>';

            echo '<td colspan="4"></td>';

            echo '</tr>';
        }


        /*
        |--------------------------------------------------------------------------
        | GRAND TOTAL REKAP
        |--------------------------------------------------------------------------
        */

        if ($selView === 'rekap') {

            echo '<tr style="font-weight:bold;background:#E2E8F0;">';

            echo '<td colspan="2" style="text-align:right;">';
            echo 'GRAND TOTAL';
            echo '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['total_doc'],
                    0,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['total_record'],
                    0,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['qty_po'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['qty_bpb'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grandQtyPercent,
                    0,
                    '.',
                    ''
                ) .
                '%</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['rph_po'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grand['rph_bpb'],
                    2,
                    '.',
                    ''
                ) .
                '</td>';

            echo '<td style="text-align:right;">' .
                number_format(
                    $grandRphPercent,
                    0,
                    '.',
                    ''
                ) .
                '%</td>';

            echo '</tr>';
        }
    }


    echo '</table>';
    echo '</body>';
    echo '</html>';

    exit;
}


/*
|--------------------------------------------------------------------------
| 18. URL NAVIGATION
|--------------------------------------------------------------------------
*/

$navParams = $_GET;

unset($navParams['page']);
unset($navParams['action']);


function pageUrl(array $params, int $page): string
{
    $params['page'] = $page;

    return '?' . http_build_query($params);
}

?>
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>
Monitoring SL SUPPLIER
</title>


<style>

/* =========================================================
   GLOBAL
   ========================================================= */

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 20px;

    font-family:
        "Segoe UI",
        Tahoma,
        Geneva,
        Verdana,
        sans-serif;

    background: #F1F5F9;
    color: #1E293B;
}


/* =========================================================
   CONTAINER
   ========================================================= */

.container {
    width: 100%;
    max-width: 1800px;
    margin: auto;
}


/* =========================================================
   HEADER
   ========================================================= */

.header-card {

    background: white;

    border-radius: 12px;

    padding: 20px;

    margin-bottom: 18px;

    box-shadow:
        0 2px 8px rgba(15, 23, 42, 0.08);
}


.header-top {

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 15px;

    flex-wrap: wrap;
}


.title {

    margin: 0;

    font-size: 21px;

    font-weight: 700;

    color: #0F172A;
}


.subtitle {

    margin-top: 5px;

    font-size: 12px;

    color: #64748B;
}


/* =========================================================
   BUTTON
   ========================================================= */

.btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 6px;

    padding: 9px 15px;

    border: 0;

    border-radius: 7px;

    cursor: pointer;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    transition: 0.2s;
}


.btn-search {

    background: #0F172A;

    color: white;
}


.btn-search:hover {

    background: #334155;
}


.btn-excel {

    background: #15803D;

    color: white;
}


.btn-excel:hover {

    background: #166534;
}


.btn-reset {

    background: #E2E8F0;

    color: #334155;
}


.btn-reset:hover {

    background: #CBD5E1;
}


/* =========================================================
   FILTER
   ========================================================= */

.filter-box {

    margin-top: 18px;

    padding: 15px;

    background: #F8FAFC;

    border: 1px solid #E2E8F0;

    border-radius: 9px;
}


.filter-grid {

    display: grid;

    grid-template-columns:
        repeat(auto-fit, minmax(150px, 1fr));

    gap: 12px;

    align-items: end;
}


.form-group {

    display: flex;

    flex-direction: column;

    gap: 5px;
}


.form-group label {

    font-size: 11px;

    font-weight: 700;

    color: #475569;
}


select {

    width: 100%;

    min-height: 38px;

    padding: 7px 9px;

    border: 1px solid #CBD5E1;

    border-radius: 6px;

    background: white;

    color: #1E293B;

    font-size: 12px;

    outline: none;
}


select:focus {

    border-color: #64748B;
}


select[multiple] {

    height: 120px;

    padding: 4px;
}


.help {

    font-size: 10px;

    color: #64748B;
}


/* =========================================================
   BUTTON AREA
   ========================================================= */

.button-area {

    display: flex;

    gap: 7px;

    flex-wrap: wrap;
}
.btn-exit{background:#DC2626;color:#fff}
.btn-exit:hover{background:#B91C1C}

/* =========================================================
   INFO
   ========================================================= */

.info-bar {

    display: flex;

    gap: 10px;

    flex-wrap: wrap;

    margin-bottom: 15px;
}


.info-card {

    background: white;

    padding: 12px 15px;

    border-radius: 8px;

    box-shadow:
        0 1px 4px rgba(15, 23, 42, 0.06);

    min-width: 160px;
}


.info-title {

    font-size: 10px;

    color: #64748B;

    font-weight: 600;
}


.info-value {

    margin-top: 3px;

    font-size: 17px;

    font-weight: 700;

    color: #0F172A;
}


/* =========================================================
   STATUS
   ========================================================= */

.status-box {

    background: white;

    border-radius: 9px;

    margin-bottom: 15px;

    padding: 12px 15px;

    box-shadow:
        0 1px 4px rgba(15, 23, 42, 0.06);
}


.status-title {

    font-weight: 700;

    font-size: 12px;

    margin-bottom: 8px;
}


.status-list {

    display: flex;

    flex-wrap: wrap;

    gap: 6px;
}


.status-item {

    padding: 5px 9px;

    border-radius: 5px;

    font-size: 10px;

    background: #DCFCE7;

    color: #166534;
}


.status-item.error {

    background: #FEE2E2;

    color: #991B1B;
}


/* =========================================================
   TABLE
   ========================================================= */

.table-card {

    background: white;

    border-radius: 10px;

    overflow: hidden;

    box-shadow:
        0 2px 8px rgba(15, 23, 42, 0.08);
}


.table-wrapper {

    width: 100%;

    overflow-x: auto;
}


table {

    width: 100%;

    border-collapse: collapse;

    font-size: 11px;
}


thead th {

    position: sticky;

    top: 0;

    z-index: 2;

    background: #0F172A;

    color: white;

    padding: 10px 9px;

    text-align: left;

    white-space: nowrap;
}


tbody td {

    padding: 8px 9px;

    border-bottom: 1px solid #E2E8F0;

    white-space: nowrap;
}


tbody tr:nth-child(even) {

    background: #F8FAFC;
}


tbody tr:hover {

    background: #EFF6FF;
}


tfoot td {

    padding: 10px 9px;

    font-weight: 700;

    background: #E2E8F0;

    border-top: 2px solid #CBD5E1;

    white-space: nowrap;
}


.text-right {

    text-align: right !important;
}


.text-center {

    text-align: center !important;
}


/* =========================================================
   BADGE
   ========================================================= */

.badge {

    display: inline-block;

    padding: 3px 7px;

    border-radius: 4px;

    font-size: 10px;

    font-weight: 700;

    background: #E2E8F0;

    color: #334155;
}


/* =========================================================
   EMPTY
   ========================================================= */

.empty {

    padding: 50px 20px;

    text-align: center;

    color: #64748B;
}


.empty-icon {

    font-size: 32px;

    margin-bottom: 8px;
}


/* =========================================================
   PAGINATION
   ========================================================= */

.pagination-box {

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 10px;

    flex-wrap: wrap;

    margin: 15px 0;

    background: white;

    padding: 11px 14px;

    border-radius: 8px;

    box-shadow:
        0 1px 4px rgba(15, 23, 42, 0.06);
}


.pagination-info {

    font-size: 11px;

    color: #475569;
}


.pagination {

    display: flex;

    gap: 4px;

    list-style: none;

    padding: 0;

    margin: 0;
}


.pagination a,
.pagination span {

    display: block;

    padding: 6px 10px;

    border: 1px solid #CBD5E1;

    border-radius: 5px;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    color: #334155;
}


.pagination a:hover {

    background: #F1F5F9;
}


.pagination .active {

    background: #0F172A;

    border-color: #0F172A;

    color: white;
}


.pagination .disabled {

    color: #94A3B8;

    background: #F8FAFC;
}


/* =========================================================
   RESPONSIVE
   ========================================================= */

@media (max-width: 800px) {

    body {
        padding: 10px;
    }

    .filter-grid {
        grid-template-columns: 1fr;
    }

    .header-top {
        align-items: flex-start;
    }

    .button-area {
        width: 100%;
    }

    .button-area .btn {
        flex: 1;
    }
}

</style>

</head>


<body>

<div class="container">


<!-- ======================================================
     HEADER
     ====================================================== -->

<div class="header-card">

    <div class="header-top">

        <div>

            <h1 class="title">
                Monitoring
                - SL Supplier
            </h1>

            <div class="subtitle">
                Monitoring Service Level Supplier
            </div>

        </div>


        <div class="button-area">

            <?php if ($isSearched && !empty($allRows)): ?>

                <a
                    href="?<?= e(http_build_query(array_merge(
                        $navParams,
                        ['action' => 'export_excel']
                    ))) ?>"
                    class="btn btn-excel"
                >
                    📥 Export Excel
                </a>

            <?php endif; ?>

        </div>

    </div>


    <!-- ==================================================
         FILTER
         ================================================== -->

    <div class="filter-box">

        <form method="GET" action="">

            <input
                type="hidden"
                name="search"
                value="1"
            >


            <div class="filter-grid">


                <!-- TIPE -->

                <div class="form-group">

                    <label>
                        TIPE SERVER
                    </label>

                    <select
                        name="server_type"
                        id="server_type"
                    >

                        <option
                            value="ALL"
                            <?= $selType === 'ALL' ? 'selected' : '' ?>
                        >
                            SEMUA
                        </option>

                        <option
                            value="IGR"
                            <?= $selType === 'IGR' ? 'selected' : '' ?>
                        >
                            IGR
                        </option>

                        <option
                            value="SPI"
                            <?= $selType === 'SPI' ? 'selected' : '' ?>
                        >
                            SPI
                        </option>

                        <option
                            value="ICM"
                            <?= $selType === 'ICM' ? 'selected' : '' ?>
                        >
                            ICM
                        </option>

                    </select>

                </div>


                <!-- VIEW -->

                <div class="form-group">

                    <label>
                        Rekap/Detail
                    </label>

                    <select
                        name="view_mode"
                    >

                        <option
                            value="detail"
                            <?= $selView === 'detail' ? 'selected' : '' ?>
                        >
                            📄 DETAIL
                        </option>

                        <option
                            value="rekap"
                            <?= $selView === 'rekap' ? 'selected' : '' ?>
                        >
                            📊 REKAP CABANG
                        </option>

                    </select>

                </div>


                <!-- CABANG -->

                <div class="form-group">

                    <label>
                        CABANG
                    </label>

                    <select
                        name="cabang[]"
                        multiple
                    >

                        <option
                            value="ALL"
                            <?= in_array('ALL', $selCabang, true)
                                ? 'selected'
                                : '' ?>
                        >
                            -- SEMUA CABANG --
                        </option>


                        <?php foreach ($servers as $srv): ?>

                            <?php

                            if (
                                $selType !== 'ALL'
                                && $srv['type'] !== $selType
                            ) {
                                continue;
                            }

                            ?>

                            <option
                                value="<?= e($srv['id']) ?>"
                                <?= in_array(
                                    $srv['id'],
                                    $selCabang,
                                    true
                                )
                                    ? 'selected'
                                    : '' ?>
                            >

                                <?= e($srv['name']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                    <span class="help">
                        Ctrl + klik untuk memilih beberapa
                    </span>

                </div>


                <!-- TANGGAL -->

                <div class="form-group">

                    <label>
                        TANGGAL
                    </label>

                    <select
                        name="tgl[]"
                        multiple
                    >

                        <option
                            value="ALL"
                            <?= in_array('ALL', $selTgl, true)
                                ? 'selected'
                                : '' ?>
                        >
                            -- SEMUA --
                        </option>


                        <?php for ($i = 1; $i <= 31; $i++): ?>

                            <option
                                value="<?= $i ?>"
                                <?= in_array(
                                    (string)$i,
                                    array_map(
                                        'strval',
                                        $selTgl
                                    ),
                                    true
                                )
                                    ? 'selected'
                                    : '' ?>
                            >

                                <?= sprintf('%02d', $i) ?>

                            </option>

                        <?php endfor; ?>

                    </select>

                </div>


                <!-- BULAN -->

                <div class="form-group">

                    <label>
                        BULAN
                    </label>

                    <select
                        name="bulan[]"
                        multiple
                    >

                        <option
                            value="ALL"
                            <?= in_array(
                                'ALL',
                                $selBulan,
                                true
                            )
                                ? 'selected'
                                : '' ?>
                        >
                            -- SEMUA --
                        </option>


                        <?php foreach ($namaBulan as $num => $nama): ?>

                            <option
                                value="<?= e($num) ?>"
                                <?= in_array(
                                    (string)((int)$num),
                                    array_map(
                                        static function ($v) {
                                            return (string)((int)$v);
                                        },
                                        $selBulan
                                    ),
                                    true
                                )
                                    ? 'selected'
                                    : '' ?>
                            >

                                <?= e($nama) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- TAHUN -->

                <div class="form-group">

                    <label>
                        TAHUN
                    </label>

                    <select name="tahun">

                        <option
                            value="ALL"
                            <?= $selTahun === 'ALL'
                                ? 'selected'
                                : '' ?>
                        >
                            -- SEMUA --
                        </option>


                        <?php foreach ($allowedYears as $year): ?>

                            <option
                                value="<?= e($year) ?>"
                                <?= (string)$selTahun === $year
                                    ? 'selected'
                                    : '' ?>
                            >

                                <?= e($year) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- PER PAGE -->

                <div class="form-group">

                    <label>
                        DATA / HALAMAN
                    </label>

                    <select name="per_page">

                        <?php foreach ([25, 50, 100, 250] as $pp): ?>

                            <option
                                value="<?= $pp ?>"
                                <?= $perPage === $pp
                                    ? 'selected'
                                    : '' ?>
                            >
                                <?= $pp ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- BUTTON -->

                <div class="form-group">

                    <div class="button-area">

                        <button
                            type="submit"
                            class="btn btn-search"
                        >
                            🔍 Tampilkan Data
                        </button>
						<a 
							href="http://172.20.133.59/" 
							class="btn btn-exit" onclick="return confirm('Yakin ingin keluar dari menu SL Supplier?')"
						>
							🚪 Keluar</a>

                        <a
                            href="<?= e($_SERVER['PHP_SELF']) ?>"
                            class="btn btn-reset"
                        >
                            ↻ Reset
                        </a>

                    </div>

                </div>


            </div>

        </form>

    </div>

</div>


<?php if ($isSearched): ?>


<!-- ======================================================
     INFO
     ====================================================== -->

<div class="info-bar">

    <div class="info-card">

        <div class="info-title">
            MODE
        </div>

        <div class="info-value">

            <?= $selView === 'detail'
                ? 'DETAIL'
                : 'REKAP' ?>

        </div>

    </div>


    <div class="info-card">

        <div class="info-title">
            SERVER DIPROSES
        </div>

        <div class="info-value">

            <?= number_format(
                count($targetServers),
                0,
                ',',
                '.'
            ) ?>

        </div>

    </div>


    <div class="info-card">

        <div class="info-title">
            TOTAL RECORD
        </div>

        <div class="info-value">

            <?= number_format(
                $totalRecords,
                0,
                ',',
                '.'
            ) ?>

        </div>

    </div>


    <div class="info-card">

        <div class="info-title">
            TOTAL QTY PO
        </div>

        <div class="info-value">

            <?= numberID(
                $grand['qty_po']
            ) ?>

        </div>

    </div>


    <div class="info-card">

        <div class="info-title">
            TOTAL RPH PO
        </div>

        <div class="info-value">

            <?= numberID(
                $grand['rph_po']
            ) ?>

        </div>

    </div>

</div>


<!-- ======================================================
     STATUS SERVER
     ====================================================== -->

<?php if (!empty($serverStatus)): ?>

<div class="status-box">

    <div class="status-title">
        Status Server
    </div>

    <div class="status-list">

        <?php foreach ($serverStatus as $status): ?>

            <div
                class="status-item
                <?= $status['status'] === 'ERROR'
                    ? 'error'
                    : '' ?>"
                title="<?= e($status['message']) ?>"
            >

                <?= $status['status'] === 'OK'
                    ? '✓'
                    : '✕' ?>

                <?= e($status['name']) ?>

                (<?= e($status['message']) ?>)

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php endif; ?>


<!-- ======================================================
     PAGINATION TOP
     ====================================================== -->

<?php if ($totalPages > 1): ?>

<div class="pagination-box">

    <div class="pagination-info">

        Menampilkan

        <b>
            <?= number_format(
                count($displayRows),
                0,
                ',',
                '.'
            ) ?>
        </b>

        dari

        <b>
            <?= number_format(
                $totalRecords,
                0,
                ',',
                '.'
            ) ?>
        </b>

        record

        — Halaman

        <b>
            <?= $page ?>
        </b>

        /

        <b>
            <?= $totalPages ?>
        </b>

    </div>


    <ul class="pagination">

        <?php if ($page > 1): ?>

            <li>

                <a
                    href="<?= e(
                        pageUrl(
                            $navParams,
                            $page - 1
                        )
                    ) ?>"
                >
                    « Prev
                </a>

            </li>

        <?php else: ?>

            <li>
                <span class="disabled">
                    « Prev
                </span>
            </li>

        <?php endif; ?>


        <?php

        $startPage = max(
            1,
            $page - 2
        );

        $endPage = min(
            $totalPages,
            $page + 2
        );

        ?>


        <?php for (
            $p = $startPage;
            $p <= $endPage;
            $p++
        ): ?>

            <li>

                <?php if ($p === $page): ?>

                    <span class="active">
                        <?= $p ?>
                    </span>

                <?php else: ?>

                    <a
                        href="<?= e(
                            pageUrl(
                                $navParams,
                                $p
                            )
                        ) ?>"
                    >
                        <?= $p ?>
                    </a>

                <?php endif; ?>

            </li>

        <?php endfor; ?>


        <?php if ($page < $totalPages): ?>

            <li>

                <a
                    href="<?= e(
                        pageUrl(
                            $navParams,
                            $page + 1
                        )
                    ) ?>"
                >
                    Next »
                </a>

            </li>

        <?php else: ?>

            <li>
                <span class="disabled">
                    Next »
                </span>
            </li>

        <?php endif; ?>

    </ul>

</div>

<?php endif; ?>


<!-- ======================================================
     TABLE
     ====================================================== -->

<div class="table-card">

<div class="table-wrapper">

<?php if (!empty($displayRows)): ?>


<table>

<thead>

<tr>

<?php foreach (
    array_keys($displayRows[0])
    as $header
): ?>

<th>

<?= e(
    strtoupper(
        str_replace(
            '_',
            ' ',
            $header
        )
    )
) ?>

</th>

<?php endforeach; ?>

</tr>

</thead>


<tbody>

<?php foreach ($displayRows as $row): ?>

<tr>

<?php foreach ($row as $key => $value): ?>

<?php

$field = strtolower($key);

?>


<td
    class="<?= isNumericField($field)
        ? 'text-right'
        : '' ?>"
>


<?php if (
    isIntegerField($field)
): ?>

    <?= number_format(
        (float)$value,
        0,
        ',',
        '.'
    ) ?>


<?php elseif (
    isNumericField($field)
): ?>

    <?= numberID(
        $value,
        2
    ) ?>


<?php elseif (
    $field === 'plu'
    || $field === 'kode_supplier'
): ?>

    <span
        style="
        font-family:monospace;
        "
    >
        <?= e($value) ?>
    </span>


<?php elseif (
    $field === 'server_name'
): ?>

    <span class="badge">
        <?= e($value) ?>
    </span>


<?php else: ?>

    <?= e($value) ?>

<?php endif; ?>


</td>

<?php endforeach; ?>

</tr>

<?php endforeach; ?>

</tbody>


<!-- ======================================================
     GRAND TOTAL
     ====================================================== -->

<tfoot>

<?php if ($selView === 'detail'): ?>

<tr>

<td
    colspan="9"
    class="text-right"
>
    GRAND TOTAL (ALL PAGES)
</td>


<td class="text-right">

<?= numberID(
    $grand['qty_po']
) ?>

</td>


<td class="text-right">

<?= numberID(
    $grand['qty_bpb']
) ?>

</td>


<td class="text-right">

<?= number_format(
    $grandQtyPercent,
    0,
    ',',
    '.'
) ?> %

</td>


<td class="text-right">

<?= numberID(
    $grand['rph_po']
) ?>

</td>


<td class="text-right">

<?= numberID(
    $grand['rph_bpb']
) ?>

</td>


<td class="text-right">

<?= number_format(
    $grandRphPercent,
    0,
    ',',
    '.'
) ?> %

</td>


<td colspan="4"></td>

</tr>


<?php else: ?>


<tr>

<td
    colspan="2"
    class="text-right"
>
    GRAND TOTAL (ALL PAGES)
</td>


<td class="text-right">

<?= number_format(
    $grand['total_doc'],
    0,
    ',',
    '.'
) ?>

</td>


<td class="text-right">

<?= number_format(
    $grand['total_record'],
    0,
    ',',
    '.'
) ?>

</td>


<td class="text-right">

<?= numberID(
    $grand['qty_po']
) ?>

</td>


<td class="text-right">

<?= numberID(
    $grand['qty_bpb']
) ?>

</td>


<td class="text-right">

<?= number_format(
    $grandQtyPercent,
    0,
    ',',
    '.'
) ?> %

</td>


<td class="text-right">

<?= numberID(
    $grand['rph_po']
) ?>

</td>


<td class="text-right">

<?= numberID(
    $grand['rph_bpb']
) ?>

</td>


<td class="text-right">

<?= number_format(
    $grandRphPercent,
    0,
    ',',
    '.'
) ?> %

</td>

</tr>


<?php endif; ?>

</tfoot>


</table>


<?php else: ?>


<div class="empty">

<div class="empty-icon">
    📭
</div>

<div>
    Data tidak ditemukan untuk filter yang dipilih.
</div>

</div>


<?php endif; ?>

</div>

</div>


<!-- ======================================================
     PAGINATION BOTTOM
     ====================================================== -->

<?php if ($totalPages > 1): ?>

<div class="pagination-box">

    <div class="pagination-info">

        Halaman

        <b>
            <?= $page ?>
        </b>

        dari

        <b>
            <?= $totalPages ?>
        </b>

    </div>


    <ul class="pagination">

        <?php if ($page > 1): ?>

            <li>

                <a
                    href="<?= e(
                        pageUrl(
                            $navParams,
                            $page - 1
                        )
                    ) ?>"
                >
                    « Prev
                </a>

            </li>

        <?php endif; ?>


        <?php

        $startPage = max(
            1,
            $page - 2
        );

        $endPage = min(
            $totalPages,
            $page + 2
        );

        ?>


        <?php for (
            $p = $startPage;
            $p <= $endPage;
            $p++
        ): ?>

            <li>

                <?php if ($p === $page): ?>

                    <span class="active">
                        <?= $p ?>
                    </span>

                <?php else: ?>

                    <a
                        href="<?= e(
                            pageUrl(
                                $navParams,
                                $p
                            )
                        ) ?>"
                    >
                        <?= $p ?>
                    </a>

                <?php endif; ?>

            </li>

        <?php endfor; ?>


        <?php if ($page < $totalPages): ?>

            <li>

                <a
                    href="<?= e(
                        pageUrl(
                            $navParams,
                            $page + 1
                        )
                    ) ?>"
                >
                    Next »
                </a>

            </li>

        <?php endif; ?>

    </ul>

</div>

<?php endif; ?>


<?php else: ?>


<!-- ======================================================
     BEFORE SEARCH
     ====================================================== -->

<div class="table-card">

    <div class="empty">

        <div class="empty-icon">
            🔍
        </div>

        <div>
            Silakan pilih filter kemudian klik
            <b>Tampilkan Data</b>.
        </div>

    </div>

</div>


<?php endif; ?>


</div>


<script>

/*
|--------------------------------------------------------------------------
| SELECT ALL CABANG
|--------------------------------------------------------------------------
*/

const cabangSelect =
    document.querySelector(
        'select[name="cabang[]"]'
    );

if (cabangSelect) {

    cabangSelect.addEventListener(
        'change',
        function () {

            const allOption =
                Array.from(
                    this.options
                ).find(
                    option =>
                        option.value === 'ALL'
                );

            if (!allOption) {
                return;
            }


            const selected =
                Array.from(
                    this.selectedOptions
                );


            const selectedAll =
                selected.some(
                    option =>
                        option.value === 'ALL'
                );


            if (selectedAll) {

                Array.from(
                    this.options
                ).forEach(
                    option => {
                        option.selected =
                            option.value === 'ALL';
                    }
                );
            }

        }
    );

}


/*
|--------------------------------------------------------------------------
| SELECT ALL TANGGAL
|--------------------------------------------------------------------------
*/

function handleMultiSelectAll(
    selector
) {

    const select =
        document.querySelector(
            selector
        );

    if (!select) {
        return;
    }


    select.addEventListener(
        'change',
        function () {

            const options =
                Array.from(
                    this.options
                );


            const all =
                options.find(
                    option =>
                        option.value === 'ALL'
                );


            if (!all) {
                return;
            }


            const selected =
                Array.from(
                    this.selectedOptions
                );


            const hasAll =
                selected.some(
                    option =>
                        option.value === 'ALL'
                );


            if (hasAll) {

                options.forEach(
                    option => {
                        option.selected =
                            option.value === 'ALL';
                    }
                );

            }

        }
    );

}


handleMultiSelectAll(
    'select[name="tgl[]"]'
);

handleMultiSelectAll(
    'select[name="bulan[]"]'
);

</script>
<div style="text-align:center;padding:12px;font-size:12px;color:#777;margin-top:15px">
    &copy; <?= date('Y') ?> Inventory Control Indogrosir — Laporan Service Level Supplier
</div>

</body>

</html>