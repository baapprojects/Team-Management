<HTML>
<HEAD>
<STYLE>
h1 {
    background-color: lightblue;
}
h2 {
    background-color: green;
}
.button {
    background-color: #008CBA;
    border: none;
    border-radius: 12px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
     height:70px;
    width:130px;
}

</STYLE>
</HEAD>
<body><center>
<form action="upleave.php" method="get">

<h1> LEAVE AVAILABILITY</h1><br><br><br><br><h2>
<?php
$tot=$_POST["TAKEN"] + $_POST["NEED"];
$nam=$_POST["NAME"];
if($tot > 5)
{
ECHO ("SORRY  YOU CAN  NOT TAKE LEAVE MORE THAN 5 DAYS!!! MR/MRS $nam");
}
else
{
echo ("LEAVE AVAILABLE MR/MRS $nam!!!" );
}
?>
</h2></BR></BR></BR>
<button class="button" type="submit">UPDATE LEAVE</button></BR></BR></BR>
</form>
</center>
</body>
</HTML>