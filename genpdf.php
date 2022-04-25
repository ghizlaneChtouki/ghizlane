<?php

use Dompdf\Dompdf;
ob_start(); // stocker les informations pendant l'xecution du code 
require_once 'Reçu.php';
$html=ob_get_contents(); // pour avoir ce contenu dans la variable $html
ob_end_clean(); // on l'arrete car on veut faire la'enregistrement juste de cette partie (mon code php)
//die;
require_once 'dompdf_1-2-1/dompdf/autoload.inc.php';
$dompdf = new Dompdf(); // creer un new variable de type Dompdf 
$dompdf->loadHtml($html); // pour reclamer que je veux executer un code HTml 
$dompdf->render() ; // pour rendre le html en pdf mais il est stocker dans la memoire 
$dompdf->stream(); // revoie le ^pdf sous format un ficher telechargeable 
?>