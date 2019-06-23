<link rel="stylesheet" href="styles.css">
<?php
require "contactscontroller.php";

if(isset($_POST["charactername"])){
  if(isset($_POST["charactername"])) {
      $char = $_POST["charactername"];
  }

  if(isset($_POST["contact"])) {
      $cont = $_POST["contact"];
  }

  if (isset($_POST["submit1"]) && isset($cont) && isset($char)) {
    addContact($char, $cont, $GLOBALS["dataconnection"])  ;
  }

  if (isset($_POST["submit2"]) && isset($cont) && isset($char)) {
    deleteContact($char, $cont, $GLOBALS["dataconnection"])  ;
  }


  echo "$char<br>";
  echo $cont;
  if (isset($_POST["refererUrl"])) {
      echo '<a href="'. $_POST["refererUrl"] . '"><br>Return</a>';
  }
}
