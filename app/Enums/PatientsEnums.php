<?php
namespace App\Enums;


abstract class PatientsEnums
{
//    const  visit = "1",
//        emloyeeType = "2",
//        clientType = "3",
//        accountOwnerType = "4",
//        activeStatus = "1",
//        blockedStats= "0";


    public static $maritalStatusByNames = array(
        "married" => "1",
        "widowed" => "2",
        "separated" => "3",
        "divorced" => "4",
        "single" => "5"
        );

    public static $visitTypesByNumbers = array(
        "1" => "married",
        "2" => "widowed" ,
        "3" => "separated",
        "4" => "divorced",
        "5" => "single",
    );
}