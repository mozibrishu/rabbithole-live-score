<?php
# wikipedia.php
include('simple_html_dom.php');
// $html1 = file_get_contents('https://en.wikipedia.org/wiki/December_10');

// echo $html1;
$html = file_get_html('https://www.livescore.com/en/football/spain/laliga-santander/sevilla-vs-valencia/717496/');

// echo $html;
foreach($html->find('a.widget-match-header__team.widget-match-header__team--home > div > span.widget-match-header__name--full') as $element)
    echo $element->innerText . '<br>';

// foreach($html->find('a') as $element)
//     echo $element->href . '<br>';
?>