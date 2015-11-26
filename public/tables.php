<?php
/*
 * This array represents a set of database tables 
 */
$tables=array(
	array( # table 0
		'name'=>'dependencies',
		'attributes'=>array(
			array(	
				'name'=>'workpackageid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Workpackage',
				#'label'=>'Dependency',
				'inputtype'=>'text'
			),
			array(
				'name'=>'dependson',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				#'label'=>'Depends On Workpackage',
				'label'=>'Is Dependent On Workpackage:',
				'inputtype'=>'text'
			),
			array(
				'name'=>'dependid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'the ID of this Dependency:',
				'inputtype'=>'text'
			),
			array(	
				'name'=>'dependency',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Dependency Name',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'criticality',
				'def'=>"ENUM ('','Y','N')",
				'show'=>1,
				'label'=>'Criticality',
				'inputtype'=>'select/-:Critical:Non-Critical',
				'options'=>':Y:N'
			),
			array(
				'name'=>'internal_external',
				'def'=>"ENUM ('','E','I')",
				'show'=>1,
				'label'=>'External or Internal',
				'inputtype'=>'select/-:External:Internal',
				'options'=>':E:I'
			),
			array(
				'name'=>'externalid',
				'def'=>"SMALLINT UNSIGNED",
				'show'=>1,
				'label'=>'External ID',
				'inputtype'=>'SELECTDB'
			),			
			array(
				'name'=>'description',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Description',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'originaldate_required',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Date Required',
				'inputtype'=>'date'
			),
			array(
				'name'=>'required_desc',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Date Required Description',
				'inputtype'=>'textarea'
			),
			array(	
				'name'=>'rag',	
				'def'=>"ENUM('','Red','Amber','Green')",
				'show'=>1,
				'label'=>'Red/Amber/Green',
				'inputtype'=>'select/-:Red:Amber:Green',
				'options'=>':Red:Amber:Green'
			),
			array(
				'name'=>'requestdate',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Date Requested',
				'inputtype'=>'date'
			),
			array(
				'name'=>'deliverydate',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Delivery Date',
				'inputtype'=>'date'
			),
			array(
				'name'=>'acceptance',
				'def'=>"ENUM('','Matched','Unmatched','Closed','TBC')",
				'show'=>1,
				'label'=>'Acceptance',
				'inputtype'=>'select/-:Matched:Unmatched:Closed:TBC',
				'options'=>':Matched:Unmatched:Closed:TBC'
			),
			array(
				'name'=>'acceptancedate',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Acceptance Date',
				'inputtype'=>'date'
			),
			array(
				'name'=>'rejecteddate',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Rejected Date',
				'inputtype'=>'date'
			),
			array(
				'name'=>'rejected_reason',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Rejected Reason',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'rejected_comments',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Comments',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'rescheduleddate',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Rescheduled Date',
				'inputtype'=>'date'
			),
			array(
				'name'=>'rescheduled_count',
				'def'=>"TINYINT UNSIGNED",
				'show'=>1,
				'label'=>'Rescheduled Count',
				'inputtype'=>'select/0:1:2:3:4:5:6:7:8:9:10:11:12',
				'options'=>'0:1:2:3:4:5:6:7:8:9:10:11:12'
			),
			#array(
			#	'name'=>'status',
			#	'def'=>"ENUM('','Accepted','Rejected')",
			#	'show'=>1,
			#	'label'=>'Status',
			#	'inputtype'=>'select/-:Accepted:Rejected'
			#
			#),
			array(
				'name'=>'delay_impact',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Delay Impact',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'actionsred',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Action in case Red/Amber',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'change_request_id',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Change Request ID',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'responsible',
				'def'=>"VARCHAR(4)",
				'show'=>1,
				'label'=>'Responsible',
				'inputtype'=>'text'
				/*foreign key lookup 
				 * fieldnames: [firstname:lastname:email]
				 * on Managers: id;
				 * */
			),
			array(
				'name'=>'responsible_comment',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Comments',
				'inputtype'=>'textarea'
			),
			array(
				'name'=>'track',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Track Changes',
				'inputtype'=>'textarea'
			)
		),
		'pkey'=>array('workpackageid','dependson','dependid'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'workpackageid, dependson, dependid',
		'limit'=>true
	),
	array( # table 1
		'name'=>'managers',
		'attributes'=>array(
			array(
				'name'=>'id',
				'def'=>"SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT",
				'key'=>true,
				'show'=>1,
				'label'=>'ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'firstname',
				'def'=>"VARCHAR(64) NOT NULL",
				'show'=>1,
				'label'=>'First Name',
				'inputtype'=>'text'
			),
			array(
				'name'=>'lastname',
				'def'=>"VARCHAR(64) NOT NULL",
				'show'=>1,
				'label'=>'Last Name',
				'inputtype'=>'text'
			),
			array(
				'name'=>'privilege',
				'def'=>"ENUM('A','M','P')",
				'show'=>1,
				'label'=>'Privilege (Admin,Manager,PM)',
				'inputtype'=>'select/-:A:M:P',
				'options'=>':A:M:P'
			),
			array(
				'name'=>'userid',
				'def'=>"CHAR(24) NOT NULL",
				'show'=>0,
				'label'=>'User ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'password',
				'def'=>"CHAR(48) NOT NULL",
				'show'=>1,
				'label'=>'Password',
				'inputtype'=>'password'
			),
			array(
				'name'=>'email',
				'def'=>"VARCHAR(128) NOT NULL",
				'show'=>1,
				'label'=>'Email',
				'inputtype'=>'text'
			),
			array(
				'name'=>'created',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Date created',
				'inputtype'=>'date'
			),
			array(
				'name'=>'lastaccess',
				'def'=>"DATE",
				'show'=>1,
				'label'=>'Date last logged in',
				'inputtype'=>'date'
			)
		),
		'pkey'=>array('id'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'lastname',
		'limit'=>true
	),
	array( # table 2
		'name'=>'portfolios',
		'attributes'=>array(
			array(
				'name'=>'id',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'name',
				'def'=>"VARCHAR(128)",
				'show'=>1,
				'label'=>'Portfolio Name',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('id'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'id',
		'limit'=>true
	),
	array( # table 3
		'name'=>'projects',
		'attributes'=>array(
			array(
				'name'=>'id',
				'def'=>"SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT",
				'key'=>true,
				'show'=>1,
				'label'=>'ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'portfolioid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'show'=>1,
				'label'=>'Portfolio',
				'inputtype'=>'text'
			),
			array(
				'name'=>'project',
				'def'=>"CHAR(3)",
				'show'=>1,
				'label'=>'Project',
				'inputtype'=>'text'
			),
			array(
				'name'=>'projectname',
				'def'=>"VARCHAR(128)",
				'show'=>1,
				'label'=>'Project Name',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('id'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'id',
		'limit'=>true
	),
	array( # table 4
		'name'=>'workpackages',
		'attributes'=>array(
			array(
				'name'=>'id',
				'def'=>"SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT",
				'key'=>true,
				'show'=>1,
				'label'=>'ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'projectid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'show'=>1,
				'label'=>'Project',
				'inputtype'=>'text'
			),
			array(
				'name'=>'workpackage',
				'def'=>"CHAR(3)",
				'show'=>1,
				'label'=>'Workpackage',
				'inputtype'=>'text'
			),
			array(
				'name'=>'workpackagename',
				'def'=>"VARCHAR(128) NOT NULL",
				'show'=>1,
				'label'=>'Workpackage Name',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('id'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'id',
		'limit'=>true
	),
	array( # table 5
		'name'=>'manager_portfolio',
		'attributes'=>array(
			array(
				'name'=>'managerid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Manager ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'portfolioid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Portfolio ID',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('managerid','portfolioid'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'portfolioid',
		'limit'=>true
	),
	array( # table 6
		'name'=>'manager_project',
		'attributes'=>array(
			array(
				'name'=>'managerid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Manager ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'projectid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Project ID',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('managerid','projectid'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'projectid',
		'limit'=>true
	),
	array( # table 7
		'name'=>'manager_workpackage',
		'attributes'=>array(
			array(
				'name'=>'managerid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Manager ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'workpackageid',
				'def'=>"SMALLINT UNSIGNED NOT NULL",
				'key'=>true,
				'show'=>1,
				'label'=>'Workpackage ID',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('managerid','workpackageid'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'workpackageid',
		'limit'=>true
	),
	array( #table 8
		'name'=>'externalsuppliers',
		'attributes'=>array(
			array(
				'name'=>'id',
				'def'=>"SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT",
				'key'=>true,
				'show'=>1,
				'label'=>'External Supplier ID',
				'inputtype'=>'text'
			),
			array(
				'name'=>'name',
				'def'=>"VARCHAR(128)",
				'show'=>1,
				'label'=>'External Supplier',
				'inputtype'=>'text'
			),
			array(
				'name'=>'info',
				'def'=>"TEXT",
				'show'=>1,
				'label'=>'Description',
				'inputtype'=>'text'
			)
		),
		'pkey'=>array('id'),
		'engine'=>'MyISAM DEFAULT CHARSET=latin1',
		'order'=>'id',
		'limit'=>true
	)
);

?>
