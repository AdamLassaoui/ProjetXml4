<?php 
$xml = simplexml_load_file('source.xml');
$idControl = array();
foreach($xml->page as $page){
    $idControl[] = $page['id'];
}
if(isset($_GET['id'])){
    $currentPage =  $xml->page[(int)$_GET['id']]->content;
} else {
    $currentPage = $xml->page[0]->content;
}
if(in_array($page['id'], $idControl)){
    $currentPage = $xml->page['id']->content;
} else {
    $currentPage = 'ERROR 404';
}
?>