<!DOCTYPE html>
<?php
include "functions.php";
$Title = checkTitle();
$check_ID = checkID();
$pageInfo = pageSelector();
echo "<h1>" . $Title  . "</h1>";
echo $pageInfo . '<a href="links.php?">Return to Menu</a>';
if ($pageInfo == ""){
header("Location: https://www.imdb.com/title/tt0076759/?ref_=fn_al_tt_1");
exit();
}


include_once "header.php"
?>
<?php
// put your code here
?>
<?php
include_once "footer.php"
?>