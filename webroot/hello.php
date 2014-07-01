<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Anax container.
$alacer['title'] = "Hello World";
 
$alacer['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Alacer Logo'/>
<span class='sitetitle'>Alacer webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$alacer['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Alacer ser ut och fungerar.</p>
EOD;
 
$alacer['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Alacer| <a href='https://github.com/zhytizz/Alacer'>Alacer på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Alacer.
include(ALACER_THEME_PATH);