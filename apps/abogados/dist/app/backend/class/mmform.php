<?php

$name = $_POST['name'];
$email = $_POST['email'];
$idNumber = $_POST['idNumber'];
$idType = $_POST['idType'];
$professionalCard = $_POST['professionalCard'];
$cellphone = $_POST['cellphone'];
$city = $_POST['city'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$undergraduateInstitution = $_POST['undergraduateInstitution'];
$undergraduateYear = $_POST['undergraduateYear'];
$graduateInstitution = $_POST['graduateInstitution'];
$graduateYear = $_POST['graduateYear'];
$area = $_POST['area'];
$FileProposal = $_FILES['FileProposal'];
$FileResource = $_FILES['FileResource'];
$FileConcept = $_FILES['FileConcept'];

$submitDate = date("Y-m-d",$t);

$FileProposalname = $FileProposal['name'];
$FileProposaltype = $FileProposal['type'];
$FileProposalerror = $FileProposal['error'];
$FileProposaltemp = $FileProposal['tmp_name'];

$FileResourcename = $FileProposal['name'];
$FileResourcetype = $FileProposal['type'];
$FileResourceerror = $FileProposal['error'];
$FileResourcetemp = $FileProposal['tmp_name'];

$FileConceptname = $FileProposal['name'];
$FileConcepttype = $FileProposal['type'];
$FileConcepterror = $FileProposal['error'];
$FileConcepttemp = $FileProposal['tmp_name'];
?>

<?php

class MMForm{
  public $keys;
  public $data;

  function MMForm($keys){
    for ($x = 0; $x <= count($keys); $x++) {
      $k = $x;
      $value = $_POST[$keys[$k]];
      $this->setDataByIndex($value,$k);
    }
    $this->keys = $keys;
  }
  function setDataByIndex($value,$k){
    $this->data[$k] = $value;
  }


}


?>
