<?php
class MMFile{

  private $name;
  private $type;
  private $error;
  private $temp;

  private $user;
  private $folder;
  private $date;

  public $FileName;

  function MMFile($queryName,$category){
    $iFile = $_FILES[$queryName];
    $name = $iFile['name'];
    $type = $iFile['type'];
    $error = $iFile['error'];
    $temp = $iFile['tmp_name'];

    $filesPath = "./files";

    mkdir($filesPath);
    mkdir($filesPath."/".$_POST['idNumber']);

    if(is_uploaded_file($temp)) {
      $newPath = $filesPath."/".$_POST['idNumber']."/".$category."_". $name;
      echo $newPath;
      if(move_uploaded_file($temp, $newPath)) {
          echo "Sussfully uploaded your image.";
      }
      else {
          echo "Failed to move your image.";
      }
    }
    else {
     echo "Failed to upload your image.";
    }


  }
}
?>
