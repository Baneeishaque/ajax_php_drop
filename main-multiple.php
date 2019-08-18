<html>
<head>

<script type="text/javascript">
function AjaxFunction()
{
//alert('hi');
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
var myarray = JSON.parse(httpxml.responseText);

// Before adding new we must remove previously loaded elements
for(j=document.getElementById('s2').length-1;j>=0;j--)
{
document.getElementById('s2').remove(j);
}

for (i=0;i<myarray.data.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].subcategory;
//optn.value = myarray.data[i].subcat_id;  // You can change this to subcategory 
optn.value = myarray.data[i].subcategory;  

document.getElementById('s2').options.add(optn);

} 

      }
    }
//////

var str='';
var s1ar=document.getElementById('s1');
for (i=0;i< s1ar.length;i++) { 
if(s1ar[i].selected){
str += s1ar[i].value + ','; 
}
} 
//alert (s1ar);

var str=str.slice(0,str.length -1); // remove the last coma from string
//alert(str);


/////
//alert(str);
	var url="dd-multiple.php";

url=url+"?cat_id="+str;
url=url+"&sid="+Math.random();
//alert(url);
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
</head>
<body>
<?Php
require "config.php";// connection to database 
echo "<form name='testform' method='POST' action='mainck-multiple.php'>";

echo "
<br>Select  more than one ( Multiple )  <br><br>
<select id=s1 name=s1[] onChange=AjaxFunction(); multiple size=4>";
$sql="select * from category ";
foreach ($dbo->query($sql) as $row) {
echo "<option value=$row[cat_id]>$row[category]</option>";
}
echo "</select>

<select id=s2 name=s2[] multiple size=5>
</select><input type=submit value=submit></form><br><br>
Press & Hold the Ctrl button to select multiple options ( for windows )<br>
Command button for Mac
<br><br>
Submit this form and see how the form components data are available in action page of the form. 
";
?>

<center><br><br><a href=index.php>Demo with Single Selection</a>
<br><br>
<a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 
</body>
</html>