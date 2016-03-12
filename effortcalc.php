<HTML>
<HEAD>
<STYLE>
h1 {
    background-color: lightblue;
}
h2 {
    background-color: green;
}
</STYLE>
</HEAD>
<body><center>
<h1> EFFORT PERCENTAGE</h1><br><br><br><br><h2>
<?php
$effort=($_POST["DAYS"] / $_POST["NDAYS"])*100;
$rem=100-$effort;
$prj=$_POST["NAME"];
$tnam=$_POST["TNAME"];
echo("FOR THE PROJECT $prj TEAM $tnam EFFORT PERCENTAGE  IS $effort%<BR><BR>");
echo("REMAINING EFFORT PERCENTAGE OF THE PROJ IS $rem%");
?>
</h2>
</center>
</body>
</HTML>