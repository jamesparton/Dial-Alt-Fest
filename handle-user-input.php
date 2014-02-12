<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$tracksDir = 'tracks/';
	$tracks = glob($tracksDir . '*.{mp3}', GLOB_BRACE);
	$randomTrack = $tracks[array_rand($tracks)];


	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 1)
	{
		echo '<Play>'. $randomTrack. '</Play>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 2)
	{
		echo '<Sms from="+44xxxxxxxxxx">Alt Fest is 15th-17th August 2014 in Kettering, UK. Visit http://www.alt-fest.com or follow @AltFestival for more info.</Sms>';
		echo '<Say voice="alice" language="en-GB">Your text is on the way!</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}


	else 
	{
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo '<Say voice="alice" language="en-GB">Sorry, try that again.</Say>';
		echo '<Redirect>handle-incoming-call.php</Redirect>';
	}

	echo '</Response>';
?>
