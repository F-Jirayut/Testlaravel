<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class test extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $y = new test();
        $arr = [
            [
                "id" => "1",
                "name" => "name1"
            ],
            [
                "id" => "2",
                "name" => "name2"
            ],
            [
                "id" => "3",
                "name" => "name3"
            ]
            ];
        echo Fdropdown_genArray([1,2,3,4,5],"id","name","tt","",2);
        echo "<br>";
          // JSON string
        // $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

        // // Convert JSON string to Array
        // $someArray = json_decode($someJSON, true);
        // print_r($someArray);        // Dump all data of the Array
        // echo $someArray[0]["name"]; // Access Array data

        // Convert JSON string to Object
        // $someObject = json_decode($someJSON);
        // print_r($someObject);      // Dump all data of the Object
        // echo $someObject[0]->name; // Access Object data
        // echo Fdate_Ymd2Utail("2021/12/06" , "F Y");
        // echo Fdate_dmY2Utail("10-10-2020","-","yyyy");
        // echo Fdate_Ymd2Utail("2020-10-10","-");
        // echo "<br>";
        // echo todate2(date("Y-m-d"));
        // return view('pagetest1', ['data' => 'James']);
    }

    // function Fdropdown_genArrayKey($data , $keyid , $keyname , $class , $name , $id , $selected) {
    //     $genClass = ($class=="" ? "" : "class=\"".$class."\"");
    //     $genName = ($name=="" ? "" : "name=\"".$name."\"");
    //     $genId = ($id=="" ? "" : "id=\"".$id."\"");
    //     $html = "<select ".$genClass." ".$genName." ".$genId.">
    //     ".$y->Fdropdown_genOptionArrayKey($data , $keyid , $keyname , $selected)."
    //     </select>";
    //     return $html;
    // }

    // function Fdropdown_genOptionArrayKey($data , $keyid , $keyname , $selected){
    //     $options = "";
    //     foreach ($data as $opt){
    //         $options .= "<option ".($selected==$opt[$keyname] ? "selected" : "").
    //         " value=\"".$opt[$keyid]."\">".$opt[$keyname]."</option>";
    //     }
    //     return $options;
    // }
}
