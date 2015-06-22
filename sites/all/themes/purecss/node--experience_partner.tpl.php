<?php 

echo '<div style="border:1px solid black;background:#fff;padding:1em">';

$name = render($content['field_vorname']) . ' ' . render($content['field_nachname']);
$email = render($content['field_email']);
$firma = render($content['field_firma']);
$bereich = render($content['field_bereich']);
$website = render($content['field_website']);
$logo = render($content['field_logo']);
$zusammenfassung = render($content['body']);

// if (!empty($firma)) {
// 	echo empty($website) ? $firma : sprintf('<a target="_blank" href="%s">%s</a>', $website, $firma);
// 	echo '<br>';
// }

if (!empty($name)) {
	echo empty($email) ? $name : sprintf('<a href="mailto:%s">%s</a><br>', $email, $name);
}

if (!empty($bereich)) {
	echo $bereich;
	echo '<br>';
}

// if (!empty($email)) {
// 	echo sprintf('<a href="mailto:%s">E-Mail senden</a><br>', $email);
// }

if (!empty($logo)) {
	echo empty($website) ? $logo : sprintf('<a target="_blank" href="%s">%s</a>', $website, $logo);
	echo '<br>';
}


echo '</div>';

#print_r($content);


