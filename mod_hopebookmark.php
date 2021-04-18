<?php

defined('_JEXEC') or die;
$link   = $params->get('link');
$pic   = $params->get('pic');
$alttext   = $params->get('altinfo');
$text1 = $params->get('uptext');
$text2 = $params->get('downtext');
$divstyle = $params->get('divstyle');
$folder = $params->get('folder');
$imgtype   = $params->get('imgtype');
$maxwidth = $params->get('maxwidth');

echo '<div class="hopebookmark" style="max-width:',$maxwidth,";",$divstyle,'">';
if ($text1){
    echo $text1,"<br>";
}
if ($link) {
    echo '<a href="', $link, '">';
}
if ($pic == 1) {
    echo '<img src="modules/mod_hopebookmark/hope-embark/hope-embark-', sprintf("%03d", idate('z') + 1), '.jpg" alt="',$alttext,'" width="100%">';
} else if ($pic == 2) {
    echo '<img src="modules/mod_hopebookmark/heart-of-the-hero/heart-of-the-hero-', sprintf("%03d", idate('z') + 1), '.jpg" alt="',$alttext,'" width="100%">';
} else if ($pic == 3) {
    echo '<img src="modules/mod_hopebookmark/heart-of-the-hero-2/heart-of-the-hero-', sprintf("%03d", idate('z') + 1), '.jpg" alt="',$alttext,'" width="100%">';
} else{
    echo  '<img src="',$folder,sprintf("%03d", idate('z') + 1), '.',$imgtype,'" alt="',$alttext,'" width="100%">';
}
if ($link){
    echo '</a>';
}
if ($text2){
    echo "<br>",$text2;
}
echo '</div>';
?>