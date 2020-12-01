<?php

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(
            ['refProvId' => '1', 'psgsCode' => '012800000', 'provDesc' => 'ILOCOS NORTE', 'regCode' => '01', 'provCode' => '0128']
        );

        Province::create(
            ['refProvId' => '2', 'psgsCode' => '012900000', 'provDesc' => 'ILOCOS SUR', 'regCode' => '01', 'provCode' => '0129']
        );

        Province::create(
            ['refProvId' => '3', 'psgsCode' => '013300000', 'provDesc' => 'LA UNION', 'regCode' => '01', 'provCode' => '0133']
        );

        Province::create(
            ['refProvId' => '4', 'psgsCode' => '015500000', 'provDesc' => 'PANGASINAN', 'regCode' => '01', 'provCode' => '0155']
        );

        Province::create(
            ['refProvId' => '5', 'psgsCode' => '020900000', 'provDesc' => 'BATANES', 'regCode' => '02', 'provCode' => '0209']
        );

        Province::create(
            ['refProvId' => '6', 'psgsCode' => '021500000', 'provDesc' => 'CAGAYAN', 'regCode' => '02', 'provCode' => '0215']
        );

        Province::create(
            ['refProvId' => '7', 'psgsCode' => '023100000', 'provDesc' => 'ISABELA', 'regCode' => '02', 'provCode' => '0231']
        );

        Province::create(
            ['refProvId' => '8', 'psgsCode' => '025000000', 'provDesc' => 'NUEVA VIZCAYA', 'regCode' => '02', 'provCode' => '0250']
        );

        Province::create(
            ['refProvId' => '9', 'psgsCode' => '025700000', 'provDesc' => 'QUIRINO', 'regCode' => '02', 'provCode' => '0257']
        );

        Province::create(
            ['refProvId' => '10', 'psgsCode' => '030800000', 'provDesc' => 'BATAAN', 'regCode' => '03', 'provCode' => '0308']
        );

        Province::create(
            ['refProvId' => '11', 'psgsCode' => '031400000', 'provDesc' => 'BULACAN', 'regCode' => '03', 'provCode' => '0314']
        );

        Province::create(
            ['refProvId' => '12', 'psgsCode' => '034900000', 'provDesc' => 'NUEVA ECIJA', 'regCode' => '03', 'provCode' => '0349']
        );

        Province::create(
            ['refProvId' => '13', 'psgsCode' => '035400000', 'provDesc' => 'PAMPANGA', 'regCode' => '03', 'provCode' => '0354']
        );

        Province::create(
            ['refProvId' => '14', 'psgsCode' => '036900000', 'provDesc' => 'TARLAC', 'regCode' => '03', 'provCode' => '0369']
        );

        Province::create(
            ['refProvId' => '15', 'psgsCode' => '037100000', 'provDesc' => 'ZAMBALES', 'regCode' => '03', 'provCode' => '0371']
        );

        Province::create(
            ['refProvId' => '16', 'psgsCode' => '037700000', 'provDesc' => 'AURORA', 'regCode' => '03', 'provCode' => '0377']
        );

        Province::create(
            ['refProvId' => '17', 'psgsCode' => '041000000', 'provDesc' => 'BATANGAS', 'regCode' => '04', 'provCode' => '0410']
        );

        Province::create(
            ['refProvId' => '18', 'psgsCode' => '042100000', 'provDesc' => 'CAVITE', 'regCode' => '04', 'provCode' => '0421']
        );

        Province::create(
            ['refProvId' => '19', 'psgsCode' => '043400000', 'provDesc' => 'LAGUNA', 'regCode' => '04', 'provCode' => '0434']
        );

        Province::create(
            ['refProvId' => '20', 'psgsCode' => '045600000', 'provDesc' => 'QUEZON', 'regCode' => '04', 'provCode' => '0456']
        );

        Province::create(
            ['refProvId' => '21', 'psgsCode' => '045800000', 'provDesc' => 'RIZAL', 'regCode' => '04', 'provCode' => '0458']
        );

        Province::create(
            ['refProvId' => '22', 'psgsCode' => '175100000', 'provDesc' => 'MARINDUQUE', 'regCode' => '17', 'provCode' => '1740']
        );

        Province::create(
            ['refProvId' => '23', 'psgsCode' => '175200000', 'provDesc' => 'OCCIDENTAL MINDORO', 'regCode' => '17', 'provCode' => '1751']
        );

        Province::create(
            ['refProvId' => '24', 'psgsCode' => '175300000', 'provDesc' => 'ORIENTAL MINDORO', 'regCode' => '17', 'provCode' => '1752']
        );

        Province::create(
            ['refProvId' => '25', 'psgsCode' => '175300000', 'provDesc' => 'PALAWAN', 'regCode' => '17', 'provCode' => '1753']
        );

        Province::create(
            ['refProvId' => '26', 'psgsCode' => '175900000', 'provDesc' => 'ROMBLON', 'regCode' => '17', 'provCode' => '1759']
        );

        Province::create(
            ['refProvId' => '27', 'psgsCode' => '050500000', 'provDesc' => 'ALBAY', 'regCode' => '05', 'provCode' => '0505']
        );

        Province::create(
            ['refProvId' => '28', 'psgsCode' => '051600000', 'provDesc' => 'CAMARINES NORTE', 'regCode' => '05', 'provCode' => '0516']
        );

        Province::create(
            ['refProvId' => '29', 'psgsCode' => '051700000', 'provDesc' => 'CAMARINES SUR', 'regCode' => '05', 'provCode' => '0517']
        );

        Province::create(
            ['refProvId' => '30', 'psgsCode' => '052000000', 'provDesc' => 'CATANDUANES', 'regCode' => '05', 'provCode' => '0520']
        );

        Province::create(
            ['refProvId' => '31', 'psgsCode' => '054100000', 'provDesc' => 'MASBATE', 'regCode' => '05', 'provCode' => '0541']
        );

        Province::create(
            ['refProvId' => '32', 'psgsCode' => '056200000', 'provDesc' => 'SORSOGON', 'regCode' => '05', 'provCode' => '0562']
        );

        Province::create(
            ['refProvId' => '33', 'psgsCode' => '060400000', 'provDesc' => 'AKLAN', 'regCode' => '06', 'provCode' => '0604']
        );

        Province::create(
            ['refProvId' => '34', 'psgsCode' => '060600000', 'provDesc' => 'ANTIQUE', 'regCode' => '06', 'provCode' => '0606']
        );

        Province::create(
            ['refProvId' => '35', 'psgsCode' => '061900000', 'provDesc' => 'CAPIZ', 'regCode' => '06', 'provCode' => '0619']
        );

        Province::create(
            ['refProvId' => '36', 'psgsCode' => '063000000', 'provDesc' => 'ILOILO', 'regCode' => '06', 'provCode' => '0630']
        );

        Province::create(
            ['refProvId' => '37', 'psgsCode' => '064500000', 'provDesc' => 'NEGROS OCCIDENTAL', 'regCode' => '06', 'provCode' => '0645']
        );

        Province::create(
            ['refProvId' => '38', 'psgsCode' => '067900000', 'provDesc' => 'GUIMARAS', 'regCode' => '06', 'provCode' => '0679']
        );

        Province::create(
            ['refProvId' => '39', 'psgsCode' => '071200000', 'provDesc' => 'BOHOL', 'regCode' => '07', 'provCode' => '0712']
        );

        Province::create(
            ['refProvId' => '40', 'psgsCode' => '072200000', 'provDesc' => 'CEBU', 'regCode' => '07', 'provCode' => '0722']
        );

        Province::create(
            ['refProvId' => '41', 'psgsCode' => '074600000', 'provDesc' => 'NEGROS ORIENTAL', 'regCode' => '07', 'provCode' => '0746']
        );

        Province::create(
            ['refProvId' => '42', 'psgsCode' => '076100000', 'provDesc' => 'SIQUIJOR', 'regCode' => '07', 'provCode' => '0761']
        );

        Province::create(
            ['refProvId' => '43', 'psgsCode' => '082600000', 'provDesc' => 'EASTERN SAMAR', 'regCode' => '08', 'provCode' => '0826']
        );

        Province::create(
            ['refProvId' => '44', 'psgsCode' => '083700000', 'provDesc' => 'LEYTE', 'regCode' => '08', 'provCode' => '0837']
        );

        Province::create(
            ['refProvId' => '45', 'psgsCode' => '084800000', 'provDesc' => 'NORTHERN SAMAR', 'regCode' => '08', 'provCode' => '0848']
        );

        Province::create(
            ['refProvId' => '46', 'psgsCode' => '086000000', 'provDesc' => 'SAMAR (WESTERN SAMAR)', 'regCode' => '08', 'provCode' => '0860']
        );

        Province::create(
            ['refProvId' => '47', 'psgsCode' => '086400000', 'provDesc' => 'SOUTHERN LEYTE', 'regCode' => '08', 'provCode' => '0864']
        );

        Province::create(
            ['refProvId' => '48', 'psgsCode' => '087800000', 'provDesc' => 'BILIRAN', 'regCode' => '08', 'provCode' => '0878']
        );

        Province::create(
            ['refProvId' => '49', 'psgsCode' => '097200000', 'provDesc' => 'ZAMBOANGA DEL NORTE', 'regCode' => '09', 'provCode' => '0972']
        );

        Province::create(
            ['refProvId' => '50', 'psgsCode' => '097300000', 'provDesc' => 'ZAMBOANGA DEL SUR', 'regCode' => '09', 'provCode' => '0973']
        );

        Province::create(
            ['refProvId' => '51', 'psgsCode' => '098300000', 'provDesc' => 'ZAMBOANGA SIBUGAY', 'regCode' => '09', 'provCode' => '0983']
        );

        Province::create(
            ['refProvId' => '52', 'psgsCode' => '099700000', 'provDesc' => 'CITY OF ISABELA', 'regCode' => '09', 'provCode' => '0997']
        );

        Province::create(
            ['refProvId' => '53', 'psgsCode' => '101300000', 'provDesc' => 'BUKIDNON', 'regCode' => '10', 'provCode' => '1013']
        );

        Province::create(
            ['refProvId' => '54', 'psgsCode' => '101800000', 'provDesc' => 'CAMIGUIN', 'regCode' => '10', 'provCode' => '1018']
        );

        Province::create(
            ['refProvId' => '55', 'psgsCode' => '103500000', 'provDesc' => 'LANAO DEL NORTE', 'regCode' => '10', 'provCode' => '1035']
        );

        Province::create(
            ['refProvId' => '56', 'psgsCode' => '104200000', 'provDesc' => 'MISAMIS OCCIDENTAL', 'regCode' => '10', 'provCode' => '1042']
        );

        Province::create(
            ['refProvId' => '47', 'psgsCode' => '104300000', 'provDesc' => 'MISAMIS ORIENTAL', 'regCode' => '10', 'provCode' => '1043']
        );

        Province::create(
            ['refProvId' => '58', 'psgsCode' => '112300000', 'provDesc' => 'DAVAO DEL NORTE', 'regCode' => '11', 'provCode' => '1123']
        );

        Province::create(
            ['refProvId' => '59', 'psgsCode' => '112400000', 'provDesc' => 'DAVAO DEL SUR', 'regCode' => '11', 'provCode' => '1124']
        );

        Province::create(
            ['refProvId' => '60', 'psgsCode' => '112500000', 'provDesc' => 'DAVAO ORIENTAL', 'regCode' => '11', 'provCode' => '1125']
        );

        Province::create(
            ['refProvId' => '61', 'psgsCode' => '118200000', 'provDesc' => 'COMPOSTELA VALLEY', 'regCode' => '11', 'provCode' => '1182']
        );

        Province::create(
            ['refProvId' => '62', 'psgsCode' => '118600000', 'provDesc' => 'DAVAO OCCIDENTAL', 'regCode' => '11', 'provCode' => '1186']
        );

        Province::create(
            ['refProvId' => '63', 'psgsCode' => '124700000', 'provDesc' => 'COTABATO (NORTH COTABATO)', 'regCode' => '12', 'provCode' => '1247']
        );

        Province::create(
            ['refProvId' => '64', 'psgsCode' => '126300000', 'provDesc' => 'SOUTH COTABATO', 'regCode' => '12', 'provCode' => '1263']
        );

        Province::create(
            ['refProvId' => '65', 'psgsCode' => '126500000', 'provDesc' => 'SULTAN KUDARAT', 'regCode' => '12', 'provCode' => '1265']
        );

        Province::create(
            ['refProvId' => '66', 'psgsCode' => '128000000', 'provDesc' => 'SARANGANI', 'regCode' => '21', 'provCode' => '1280']
        );

        Province::create(
            ['refProvId' => '67', 'psgsCode' => '129800000', 'provDesc' => 'COTABATO CITY', 'regCode' => '12', 'provCode' => '1298']
        );

        Province::create(
            ['refProvId' => '68', 'psgsCode' => '133900000', 'provDesc' => 'NCR, CITY OF MANILA, FIRST DISTRICT', 'regCode' => '13', 'provCode' => '1339']
        );

        Province::create(
            ['refProvId' => '69', 'psgsCode' => '133900000', 'provDesc' => 'CITY OF MANILA', 'regCode' => '13', 'provCode' => '1339']
        );

        Province::create(
            ['refProvId' => '70', 'psgsCode' => '137400000', 'provDesc' => 'NCR, SECOND DISTRICT', 'regCode' => '13', 'provCode' => '1374']
        );

        Province::create(
            ['refProvId' => '71', 'psgsCode' => '137500000', 'provDesc' => 'NCR, THIRD DISTRICT', 'regCode' => '13', 'provCode' => '1375']
        );

        Province::create(
            ['refProvId' => '72', 'psgsCode' => '137600000', 'provDesc' => 'NCR, FOURTH DISTRICT', 'regCode' => '13', 'provCode' => '1376']
        );

        Province::create(
            ['refProvId' => '73', 'psgsCode' => '140100000', 'provDesc' => 'ABRA', 'regCode' => '14', 'provCode' => '1401']
        );

        Province::create(
            ['refProvId' => '74', 'psgsCode' => '141100000', 'provDesc' => 'BENGUET', 'regCode' => '14', 'provCode' => '1411']
        );

        Province::create(
            ['refProvId' => '75', 'psgsCode' => '142700000', 'provDesc' => 'IFUGAO', 'regCode' => '14', 'provCode' => '1427']
        );

        Province::create(
            ['refProvId' => '76', 'psgsCode' => '143200000', 'provDesc' => 'KALINGA', 'regCode' => '14', 'provCode' => '1432']
        );

        Province::create(
            ['refProvId' => '77', 'psgsCode' => '144400000', 'provDesc' => 'MOUNTAIN PROVINCE', 'regCode' => '14', 'provCode' => '1444']
        );

        Province::create(
            ['refProvId' => '78', 'psgsCode' => '148100000', 'provDesc' => 'APAYAO', 'regCode' => '14', 'provCode' => '1481']
        );

        Province::create(
            ['refProvId' => '79', 'psgsCode' => '150700000', 'provDesc' => 'BASILAN', 'regCode' => '15', 'provCode' => '1507']
        );

        Province::create(
            ['refProvId' => '80', 'psgsCode' => '153600000', 'provDesc' => 'LANAO DEL SUR', 'regCode' => '15', 'provCode' => '1536']
        );

        Province::create(
            ['refProvId' => '81', 'psgsCode' => '153800000', 'provDesc' => 'MAGUINDANAO', 'regCode' => '15', 'provCode' => '1538']
        );

        Province::create(
            ['refProvId' => '82', 'psgsCode' => '156600000', 'provDesc' => 'SULU', 'regCode' => '15', 'provCode' => '1566']
        );

        Province::create(
            ['refProvId' => '83', 'psgsCode' => '157000000', 'provDesc' => 'TAWI-TAWI', 'regCode' => '15', 'provCode' => '1570']
        );

        Province::create(
            ['refProvId' => '84', 'psgsCode' => '160200000', 'provDesc' => 'AGUSAN DEL NORTE', 'regCode' => '16', 'provCode' => '1602']
        );

        Province::create(
            ['refProvId' => '85', 'psgsCode' => '160300000', 'provDesc' => 'AGUSAN DEL SUR', 'regCode' => '16', 'provCode' => '1603']
        );

        Province::create(
            ['refProvId' => '86', 'psgsCode' => '166700000', 'provDesc' => 'SURIGAO DEL NORTE', 'regCode' => '16', 'provCode' => '1667']
        );

        Province::create(
            ['refProvId' => '87', 'psgsCode' => '166800000', 'provDesc' => 'SURIGAO DEL SUR', 'regCode' => '16', 'provCode' => '1668']
        );

        Province::create(
            ['refProvId' => '88', 'psgsCode' => '168500000', 'provDesc' => 'DINAGAT ISLANDS', 'regCode' => '16', 'provCode' => '1685']
        );
    }
}
