<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
</head>

<body >

<?Php
@$s1= $_POST['s1'];
if( is_array($s1)){
while (list ($key, $val) = each ($s1)) {
echo "$val <br>";
}
}//
else{echo "not array";}
/////////////////
@$s2= $_POST['s2'];
if( is_array($s2)){
while (list ($key, $val) = each ($s2)) {
echo "$val <br>";
}
}//
else{echo "not array";}



?>
<br><br>
<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">
</body>

</html>
