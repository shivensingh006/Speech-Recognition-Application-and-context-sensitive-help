<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="search" type="application/opensearchdescription+xml" title="Documentation Copix" href="<?php echo _url(); ?>goodies/copix.xml"/>

<?php

if (CopixSession::get('modeconfig') == 0)  //7450 
{
    echo "<title>"._i18n('default|default.titleTopPageTMA')." - ".$TITLE_BAR."</title>";
}
else // Embedded
{
    /* récupère le nom du meuble dans ../../etc/multisite.ini */
    if (file_exists("./Ressources/Partage/multisite.ini")) // vérifie que le fichier existe
    {
        $values="";
        $nom="";
        
        $ini_array = our_parse_string(file_get_contents("./Ressources/Partage/multisite.ini"));

        if (array_key_exists("S1",$ini_array))
        {
            $nom = $ini_array["S1"];
            
            /* echo "<div class=instal2>".$nom."</div>"; */
        }
    }
    
     echo "<title>".$nom." - "._i18n('default|default.titleTopPage')." - ".$TITLE_BAR."</title>";
}
?>


<?php
_tag ('mootools', array ('plugin'=>'pngfix;elementmover;transcorners;toolbar;shadows;fixhrefbutton')); 
echo $HTML_HEAD; 

if (CopixSession::get('modeconfig') == 0)    $css = 'copix.M7450.css.php';
else                                         $css = 'copix.Embeded.css.php';

?>
<link   type="text/css" rel="stylesheet" href="<?php echo _resource ($css); ?>?copixurl=<?php echo _url (); ?>" />

<?php 
if (CopixSession::get('modeconfig') == 0)
    echo '<script type="text/javascript" src="'._resource ("site.js").'"></script>';
else
    echo '<script type="text/javascript" src="'._resource ("site.Embeded.js").'"></script>';
?>

<script type="text/javascript" src="<?php echo _resource ("js/libs/excanvas/excanvas-compressed.js"); ?>"></script>
<script type="text/javascript" src="<?php echo _resource ("js/myLib/utils.js"); ?>"></script>

<!--<link rel="shortcut icon" href="<?php echo _resource("img/favicon.png");?>" type="image/png"></link>-->

<link href="<?php echo _resource("img/favicon.png");?>" rel="shortcut icon" type="image/png"></link>



<!--[if IE]>
  <link rel="stylesheet" href="<?php echo _resource ("ie.css"); ?>" type="text/css"/>
<![endif]-->

</head>

<?php

/*TMA 7450 ou embarqué - PARTIE 7450 */ 
if (CopixSession::get('modeconfig') == 0)   include 'main.M7450.php';
else                                        include 'main.Embeded.php';

?>

</html>