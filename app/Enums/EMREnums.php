<?php
namespace App\Enums;


abstract class EMREnums
{
    public static $prescriptionTypesWithNumber = array(
        "1" => 'suspension',
        "2" => 'tablet',
        "3" => 'capsule',
        "4" => 'solution',
        "5" => 'tsp',
        "6" => 'ml',
        "7" => 'units',
        "8" => 'inhalations',
        "9" => 'gtts(drops)',
        "10" => 'cream',
        "11" => 'ointment',
        "12" => 'puff',
    );

    public static $prescriptionTypesWithNames = array(
        "suspension" => '1',
        "tablet" => '2',
        "capsule" => '3',
        "solution" => '4',
        "tsp" => '5',
        "ml" => '6',
        "units" => '7',
        "inhalations" => '8',
        "gtts(drops)" => '9',
        "cream" => '10',
        "ointment" => '11',
        "puff" => '12',
    );

    public static $prescriptionRoutesWithNumber = array(
        "1" => 'Per Oris',
        "2" => 'Per Rectum',
        "3" => 'To Skin',
        "4" => 'To Affected Area',
        "5" => 'Sublingual',
        "6" => 'OS',
        "7" => 'OD',
        "8" => 'OU',
        "9" => 'SQ',
        "10" => 'IM',
        "11" => 'IV',
        "12" => 'Per Nostril',
        "13" => 'Both Ears',
        "14" => 'Left Ear',
        "15" => 'Right Ear',
        "16" => 'Inhale',
        "17" => 'Intradermal',
        "18" => 'Intramuscular',
        "19" => 'Other/Miscellaneous',
        "20" => 'Transdermal',
    );

    public static $prescriptionRoutesWithNames = array(
        "Per Oris" => '1',
        "Per Rectum" => '2',
        "To Skin" => '3',
        "To Affected Area" => '4',
        "Sublingual" => '5',
        "OS" => '6',
        "OD" => '7',
        "OU" => '8',
        "SQ" => '9',
        "IM" => '10',
        "IV" => '11',
        "Per Nostril" => '12',
        "Both Ears" => '13',
        "Left Ear" => '14',
        "Right Ear" => '15',
        "Inhale" => '16',
        "Intradermal" => '17',
        "Intramuscular" => '18',
        "Other/Miscellaneous" => '19',
        "Transdermal" => '20',
    );


    public static $prescriptionIntervalsWithNumber = array(
        "1" => 'b.i.d.',
        "2" => 't.i.d.',
        "3" => 'q.i.d.',
        "4" => 'q.3h',
        "5" => 'q.4h',
        "6" => 'q.5h',
        "7" => 'q.6h',
        "8" => 'q.8h',
        "9" => 'a.c.',
        "10" => 'p.c.',
        "11" => 'a.m.',
        "12" => 'p.m.',
        "13" => 'ante',
        "14" => 'h',
        "15" => 'h.s.',
        "16" => 'p.r.n.',
        "17" => 'stat',
    );

    public static $prescriptionIntervalsWithNames = array(
        "b.i.d." => '1',
        "t.i.d." => '2',
        "q.i.d." => '3',
        "q.3h" => '4',
        "q.4h" => '5',
        "q.5h" => '6',
        "q.6h" => '7',
        "q.8h" => '8',
        "a.c." => '9',
        "p.c." => '10',
        "a.m." => '11',
        "p.m." => '12',
        "ante" => '13',
        "h" => '14',
        "h.s." => '',
        "p.r.n." => '16',
        "stat" => '17',
    );


    public static $prescriptionUnitsMeasureWithNumber = array(
        "1" => 'mg',
        "2" => 'mg/1cc',
        "3" => 'mg/2cc',
        "4" => 'mg/3cc',
        "5" => 'mg/4cc',
        "6" => 'mg/5cc',
        "7" => 'mcg',
        "8" => 'grams',
        "9" => 'mL',
    );

    public static $prescriptionUnitsMeasureWithNames = array(
        "mg" => '1',
        "mg/1cc" => '2',
        "mg/2cc" => '3',
        "mg/3cc" => '4',
        "mg/4cc" => '5',
        "mg/5cc" => '6',
        "mcg" => '7',
        "grams" => '8',
        "mL" => '9',
    );


    public static $prescriptionAllowSubstitutionWithNumber = array(
        "1" => "Substitution Allowed",
        "2" => "Substitution not Allowed"
    );



    public static $medicalHistoryWithNames = array(
        "varicoseVeins" => '1',
        "hypertension" => '2',
        "diabetes" => '3',
        "sickleCell" => '4',
        "fibroids" => '5',
        "PID(PelvicInflammatoryDisease)" => '6',
        "severeMigraine" => '7',
        "heartDisease" => '8',
        "Stroke" => '9',
        "Hepatitis" => '10',
        "GallBladderCondition" => '11',
        "Breast_Disease" => '12',
        "Depression" => '13',
        "Allergies" => '14',
        "Infertility" => '15',
        "Asthma" => '16',
        "Epilepsy" => '17',
        "contactLenses" => '18',
        "contraceptiveComplication" => '19'
    );

    public static $medicalHistoryWithId = array(
        '1' => "varicoseVeins" ,
        '2' => "hypertension",
        '3' => "diabetes",
        '4' => "sickleCell",
        '5' => "fibroids" ,
        '6' => "PID(PelvicInflammatoryDisease)",
        '7' => "severeMigraine",
        '8' => "heartDisease" ,
        '9' => "Stroke",
        "10" => 'Hepatitis',
        "11" => 'GallBladderCondition',
        "12" => 'Breast_Disease',
        "13" => 'Depression',
        "14" => 'Allergies',
        "15" => 'Infertility',
        "16" => 'Asthma',
        "17" => 'Epilepsy',
        "18" => 'contactLenses',
        "19" => 'contraceptiveComplication'
    );


    public static $tempLocationWithNumber = array(
        "1" => "Oral",
        "2" => "Tympanic Membrane",
        "3" => "Rectal",
        "4" => "Axillary",
        "5" => "Temporal Artery",
    );

    public static $tempLocationWithNames = array(
        "Oral" => "1",
        "Tympanic Membrane" => "2",
        "Rectal" => "3",
        "Axillary" => "4",
        "Temporal Artery" => "5",
    );


    public static $isuuesOccuranceByNumber = array(
        "1" => "Unknown or N/A",
        "2" => "First",
        "3" => "Early Recurrence (&lt;2 Mo)",
        "4" => "Late Recurrence (2-12 Mo)",
        "5" => "Delayed Recurrence (&gt; 12 Mo)",
        "6" => "Chronic/Recurrent",
        "7" => "Acute on Chronic",
    );
    public static $isuuesOccuranceByName = array(
        "Unknown or N/A" => "1",
        "First" => "2",
        "Early Recurrence (&lt;2 Mo)" => "3",
        "Late Recurrence (2-12 Mo)" => "4",
        "Delayed Recurrence (&gt; 12 Mo)" => "5",
        "Chronic/Recurrent" => "6",
        "Acute on Chronic" => "7",
    );


    public static $isuuesOutComeByNumber = array(
        "1" => "Unassigned",
        "2" => "Resolved",
        "3" => "Improved",
        "4" => "Status quo",
        "5" => "Worse",
        "6" => "Pending followup",
    );

    public static $isuuesOutComeByName = array(
        "Unassigned" => "1",
        "Resolved" => "2",
        "Improved" => "3",
        "Status quo" => "4",
        "Worse" => "5",
        "Pending followup" => "6",
    );

    public static $isuuesTypeByName = array(
        "Problem" => "1",
        "Allergy" => "2",
        "Medication" => "3",
        "Surgery" => "4",
        "Dental" => "5"
    );
    public static $isuuesTypeByNumber = array(
        "1" => "Problem",
        "2" => "Allergy",
        "3" => "Medication",
        "4" => "Surgery",
        "5" => "Dental"
    );
}