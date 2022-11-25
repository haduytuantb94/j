<?php
$type = isset($_POST['type']) ? $_POST['type'] : "";
if($type == 'formdata') {
   echo json_encode($_POST);
}

if($type == 'filereader') {



}

  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
?>