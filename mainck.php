<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
</head>

<body >

<?Php

echo "\$_POST['fname'] = $_POST[fname]<br>
\$_POST['cat'] = $_POST[cat]<br>
\$_POST['subcat'] = $_POST[subcat]
";

/*
while (list ($key,$val) = each ($_POST)) {
echo "\$$key = $val";
echo "<br>";
} 
*/
?>

<br><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">

</body>

</html>
