$conn=new com('ADODB.Connection');
$db='C:\Users\mohan\Documents\team.accdb';

<html>
<head>
<STYLE>
h1 {
    background-color: lightblue;
}
h2 {
    background-color: green;
}
</style>
</head>
<body>
<center>
<h1>TEAMS LIST</h1><br><br>
<h2>Project Name <?php echo $_POST["name"]; ?></h2><br><br>
<?php
$dbh=new PDO("odbc:driver={microsoftaccessdriver(*.mdb,*.accdb)}");
$dbq="C:\Users\mohan\Documents\team.accdb";
if($dbh)
{
echo"connection success";
}
else
{
echo"connection failed";
}
?>
</center>
</body>
</html>
