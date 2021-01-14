<?php 
    $xml = simplexml_load_file('source.xml');
    $error = null;
    $idControl = array();
    foreach($xml->page as $page) {
        $idControl[] = $page['id'];
    }
    $currentDate = date('Y');
?>