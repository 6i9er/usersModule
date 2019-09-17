<?php
namespace App\Enums;


abstract class VisitsEnums
{
//    const  visit = "1",
//        emloyeeType = "2",
//        clientType = "3",
//        accountOwnerType = "4",
//        activeStatus = "1",
//        blockedStats= "0";


    public static $visitTypesByNames = array(
        "visit" => "1",
        "revisit" => "2",
        "officeVisit" => "3",
        );

    public static $visitTypesByNumbers = array(
        "1" => "visit",
        "2" => "revisit" ,
        "3" => "officeVisit",
    );
}