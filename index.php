<?php
class data{
 public $link='';
 function __construct($rfid1, $rfid2){
  $this->connect();
  $this->storeInDB($rfid1, $rfid2);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'library') or die('Cannot select the DB');
 }
 
 function storeInDB($rfid1, $rfid2){
  $query1 = "insert into violations s_id='".$rfid1."'";
  $query2 = "insert into violations s_id='".$rfid1."'";
  $result1 = mysqli_query($this->link,$query1) or die('Errant query:  '.$query1);
  
  $result2 = mysqli_query($this->link,$query2) or die('Errant query:  '.$query2);
 }
 
}
if($_GET['rfid1'] != '' and  $_GET['rfid2'] != ''){
 $data=new data($_GET['rfid1'],$_GET['rfid2']);
}
?>