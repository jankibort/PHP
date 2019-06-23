<?php
include "connectingprocess.php";

function deleteContact($char, $cont) {
  global $dataconnection;
  $sql = "delete from phonecontacts where Mobilephone='$cont' ";

  if (mysqli_query($dataconnection,$sql)) {
    echo 'Removed from phonebook<br>';
  } else {
    echo '</br> Failed to remove' . mysqli_error($dataconnection);
  }
}

function addContact($char, $cont) {
  global $dataconnection;
  $sql = "insert into phonecontacts values(' $char  ',' $cont ')";

  if (mysqli_query($dataconnection,$sql)) {
    echo 'Added to phonebook<br>';
  } else {
    echo '</br> Failed to add' . mysqli_error($dataconnection);
  }
}
