<?php 
    $xml = simplexml_load_file('source.xml');
    $idControl = array();
    foreach($xml->page as $page) {
        $idControl[] = $page['id'];
    }
?>