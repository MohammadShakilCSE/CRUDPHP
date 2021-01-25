<?php

include("db.php");
include("index.php");

$con = CreateDb();

if(isset($_POST['create'])){
    CreateData();
}

if(isset($_POST['refresh'])){
    GetAllData();
}
function CreateData()
{
    $bookname=TextValue(value:"bookname");
    $author=TextValue(value:"authorname");
    $price=TextValue(value :"price");

    if($bookname && $author && $price){
        $sql="INSERT INTO books (bookname,authorname,price) 
        values ('$bookname','$author','$price') ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            echo  Ele("bg-success py-2","Successfully inserted");
        }else {
            echo "Data not inserted";
        }
    }else{
         Ele("bg-warning py-2","Please provied the data");
    }
}

function TextValue($value){
    $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

function Ele($classname,$text){
    $ele="<h5 class='$classname'>$text<h5>";
    echo $ele;
}

function GetAllData(){
    $sql="Select * from books";
    $result=mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}
