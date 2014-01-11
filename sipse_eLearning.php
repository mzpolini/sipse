<?php
require_once('class.biNu.php');

// Assign application configuration variables during constructor
$app_config = array (
	'dev_id' => 19526,								// Your DevCentral developer ID goes here
	'app_id' => 6773,								// Your DevCentral application ID goes here
	'app_name' => 'Binu Dev Test',				// Your application name goes here
	'app_home' => 'http://mzpdesigns.com/Stuff/BiNu/SIPSE/TestBinuClass/sipse_eLearning.php',	// Publically accessible URI
	'ttl' => 1										// Your page "time to live" parameter here
);

try {
	// Construct biNu object
	$binu_app = new biNu_app($app_config);
/*
	if (TESTING) {
		// Show test info
		add_test_info();

		/* Override TTL for testing purposes 
		$binu_app->time_to_live = 1;
	}
	*/ 
	//MZP 1-10-14 2:27PM
	//  This is where you can add content, I will be developing a IF/THEN structure to guide app navigation and condense all XMLs into 1 page
	
	$binu_app->add_style( array('name' => 'body_text', 'color' => '#1540eb') );
	$binu_app->add_text('Hello world', 'body_text');
	$binu_app->add_text('Module 1 – Applying ICT to Support Didactic Teaching in Science, Technology, English and Mathematics (STEM) subject teaching', 'body_text');
	$binu_app->add_text('By the end of this module you will be able to:', 'body_text');  
$binu_app->add_text('•	Describe how didactic teaching with ICT can be used to support students’ acquisition of STEM subject matter knowledge.', 'body_text');
$binu_app->add_text('•	Integrate appropriate ICT activities into your lesson plans so as to support students’ acquisition of STEM subject matter knowledge.', 'body_text');

	/* Process menu options */
	$binu_app->add_menu_item( '8', 'My App Home', $binu_app->application_URL  );
	$binu_app->add_menu_item( '9', 'biNu Home', 'http://apps.binu.net/apps/mybinu/index.php' );

	/* Show biNu page */
	$binu_app->generate_BML();

} catch (Exception $e) {
	app_error('Error: '.$e->getMessage());
}

/* Test function declarations */
function add_test_info() {
	global $$binu_app;
	$binu_app->add_text('Your device id is :'.$binu_app->device_id, 'body');
	$binu_app->add_text('Your Width is :'.$binu_app->screen_width, 'body');
	$binu_app->add_text('Your Height is :'.$binu_app->screen_height, 'body');
	$binu_app->add_text('Your Orientation is :'.$binu_app->orientation, 'body');
}

?>
