<?php

  // ----------------------------------------------//
  // ----- Backend Script for MM Tohyo Forms ------//
  // ----------------------------------------------//

  include('./header.php');
  include('./settings.php');
  include('./class/mmfile.php');
  include('./class/mmform.php');
  include('./class/mmdb.php');

  $keys = array(
    'name',
    'email',
    'idNumber',
    'idType',
    'professionalCard',
    'cellphone',
    'city',
    'address',
    'phone',
    'undergraduateInstitution',
    'undergraduateYear',
    'graduateInstitution',
    'graduateYear',
    'area'
  );

  $mmForm = new MMForm($keys);

  $mFileProposal = new MMFile('FileProposal','Propuesta');
  $mFileResource = new MMFile('FileResource','Recurso');
  $mFileConcept = new MMFile('FileConcept','Concepto');

  $mmDB = new MMDB();

  $mmDB->FileProposal = $mFileProposal;
  $mmDB->FileResource  = $mFileResource;
  $mmDB->FileConcept = $mFileConcept;

  if(!$mmDB->getConnStatus()){
    echo $mmDB->appendForm($mmForm);
  }else{
    echo $mmDB->getConnStatus();
  }

  // --------------------------------------------//

?>
