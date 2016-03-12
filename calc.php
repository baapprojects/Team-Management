<HTML>
<HEAD>
<STYLE>
h1 {
    background-color: lightblue;
}
h2 {
    background-color:lightblue;
}
.button2 {
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
    width:150px;
}
.button3 {
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
    width:150px;
}
</STYLE>
</HEAD>
<body background="D:\PHP\php_home_dir\php_fine\images\simple.jpg">
<form  method="get">
<center>
<h1> TEAM PLANNER RESULT </h1><br><br><br><br><h2>
<?php
if($_POST["EXP"] > 1 && $_POST["EFF"] > 50)
{
ECHO ("THE RESOURCE YOU SELECTED IS GOOD FOR YOUR TEAM");
echo $_POST["exp"];
}
else if($_POST["EXP"] > 1 && $_POST["EFF"] < 50)
{
ECHO ("THE RESOURCE YOU SELECTED IS LESS EFFICIENCY FOR YOUR TEAM");
}
else
{
echo ("THE RESOURCE YOU SELECTED IS NOT GOOD FOR YOUR TEAM" );
}
?>
</h2>
</center>
<button class="button button2" type="submit" formaction="outing.php">TEAM OUTING</button></BR></BR></BR>
<button class="button button3" type="submit" formaction="reward.php">REWARD RECOMENDER</button></BR></BR></BR>
</form>
</body>
</html>