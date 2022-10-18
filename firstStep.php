<?php
include_once('./simple_html_dom.php');
$html = file_get_html("https://livescore.football365.com/azerbaijan-birinci-dasta-shamakhi-fk-ii-vs-neftchi-baku-ii/18-10-2022/2237735/overview");

// echo $html;
// ftb_details_header_status


echo $check = $html->find('div.ftb_details_header_name_pic h3', 0)->plaintext . '<br />';
echo $check = $html->find('div.ftb_details_header_name_pic h3', 1)->plaintext . '<br />';
echo $check = $html->find('div.ftb_details_header_status label', 0)->plaintext . '<br />';
echo $check = $html->find('div.ftb_details_header_status h3 a', 0)->plaintext . '<br />';

?>