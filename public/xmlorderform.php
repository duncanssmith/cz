<?php

class Orderform{

  var $customerdetails;

  $this->customerdetails = array(
    'id'=>'',
    'title'=>'',
    'firstname'=>'',
    'lastname'=>'',
    'address1'=>'',
    'address2'=>'',
    'city'=>'',
    'postcode'=>'',
    'country'=>'',
    'email'=>'',
    'telephone'=>''
  );


  function Orderform($filename){

    global $debug;

    if($debug['methods']){
      $thisFunction ="Orderform::Orderform($filename)";
      echo_functionname($thisFunction);
    }  

  }



}
