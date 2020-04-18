<?php
/**
 * User: valentin böck
 * Date: 18-4-2020
 * Time: 11:21
 * File: Eindopdracht
 */

$Users = array (
    "ValentinBock" => "LeffeBlond",
    "DaanWeisbeek" => "BierBrouwerij",
    "Jasperschellekens" => "Cykablyat",
    "SaraBrown" => "Lenteweer",
    "RosalieDamarcus" => "ZomerDrankje",
    "JasmijnVanLent" => "SneeuwWit",
    "NoaKooiman" => "Sterretje2014",
    "RubendeGraaff" => "Kaas1234",
    "RicardoLouis" => "YeetBoomer",
    "Gorgialennarts" => "OkBoomerNah"
);

print_r($_POST);

foreach($Users as $key => $value) {
    echo "<br>". $key ."-". $value;
    $UsnameErr = $PasswordErr = "";
    $name = $Password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["name"]))
        {
            $nameERR = "Name is Required";
        }
        else
        {
            $Username = test_input($_POST["name"]);
        }
    }
};
?>