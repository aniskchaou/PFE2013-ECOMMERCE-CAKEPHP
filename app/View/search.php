<?php mysql_connect("localhost","root","");
mysql_select_db("cakephp");


if(isset($_POST['search_term']))
{
$search=mysql_real_escape_string($_POST['search_term']);
$query=mysql_query("select nom from produits where nom like '$search%'");
while(($row=mysql_fetch_array($query))==true)
{
echo "<li>".$row['nom']."</li>";

}
}







?>