<?php
/*
 * This array represents a set of database tables 
 */
$tables=array(
	array( # table 0
		'name'=>'customerdetails',
		'attributes'=>array(
			array(	
				'name'=>'title',
				'def'=>"ENUM('Mr','Mrs','Miss','Ms','Dr')",
				'key'=>true,
				'required'=>false,
				'label'=>'Title',
				#'label'=>'Dependency',
				#'inputtype'=>'select/-:Title',
				'inputtype'=>'select/-:Mr:Mrs:Miss:Ms:Dr',
				'options'=>':Mr:Mrs:Miss:Ms:Dr'
			),
			array(
				'name'=>'firstname',
				'def'=>"TEXT",
				'key'=>false,
				'required'=>false,
				#'label'=>'Depends On Workpackage',
				'label'=>'First Name',
				'inputtype'=>'text'
			),
			array(
				'name'=>'lastname',
				'def'=>"TEXT",
				'key'=>false,
				'required'=>true,
				'label'=>'Last Name',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'addr1',
				'def'=>"TEXT",
				'required'=>true,
				'label'=>'Address 1',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'addr2',
				'def'=>"TEXT",
				'required'=>false,
				'label'=>'Address 2',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'city',
				'def'=>"TEXT",
				'required'=>true,
				'label'=>'City',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'country',
				'def'=>"TEXT",
				'required'=>true,
				'label'=>'Country',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'zipcode',
				'def'=>"TEXT",
				'required'=>true,
				'label'=>'Postal Code',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'email',
				'def'=>"TEXT",
				'required'=>true,
				'label'=>'Email',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'telephone',
				'def'=>"TEXT",
				'required'=>false,
				'label'=>'Telephone',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'mobile',
				'def'=>"TEXT",
				'required'=>false,
				'label'=>'Mobile',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'remarks',
				'def'=>"TEXT",
				'required'=>false,
				'label'=>'Remarks',
				'inputtype'=>'text'
			)
		),
		'pkey'=>'id',
    'engine'=>'MyISAM DEFAULT CHARSET=latin1',
    'order'=>'id, lastname',
		'limit'=>true
  )
);

?>
