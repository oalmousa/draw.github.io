<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://draw.mrosama.com/',
	'homepage_url' => 'https://draw.mrosama.com/index.html',
	'icon' => 'https://draw.mrosama.com/favImage.png',
	'version' => '15.2.3.0',
	'sitename' => 'Graphics of Osama Almousa',
	'public_folder' => '',
	'salt' => 'v13uukyxr3nhbe9ytz4qvqg0fdv9lzh7xq',
);


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_0bgionn6.png',
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Check word:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php