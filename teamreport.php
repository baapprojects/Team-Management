<html>
<head>
<STYLE>
h1 {
    background-color: lightblue;
}
h2 {
    background-color: lightblue;
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
</style>
</head>
<body font-size: 16px; font-type="Times New Roman">
<form  method="post">
<center>
<h1>TEAMS REPORT</h1><br><br>
<h1>---------------------------------------------------------------------------------------</h1><br>
<h1>Project Name <?php echo $_POST["name"]; ?></h1><br>
<h1>---------------------------------------------------------------------------------------</h1><br>
<h3>This is the report generated about the team the report contains the detail about the team name<br>
under the project speccified.And the detail about starting and the ending date of the team's work<br>
the report is up to date as it is generated now.And the report is useful for the manager to maintain<br>
the team details.</h3>

<?php
if ($_POST["name"]=='Aetna')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\Aetna.txt', "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}

$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\Aetna.txt' );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "<pre>$filetext</pre>" );
}
else if ($_POST["name"]=='Well Point')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt', "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt' );
$filetext = fread( $file, $filesize );
fclose( $file );
$i=0;
$sp=' ';
$pos=strpos($filetext,$_POST["name"]);
echo $pos;
if(pos){
echo "inside if $filetext[$pos]";}
echo("<pre>$filetext</pre>");
}
else if ($_POST["name"]=='Health Care')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\health.txt', "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\health.txt' );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "<pre>$filetext</pre>" );
}
else
{
echo ( "<pre>'Check the Proj Name'</pre>" );
}

?>
<h3>---------------------------------------------------------------------------------------</h3>
<button class="button button1" type="submit" formaction="home.php">HOME</button></BR></BR></BR>
</center>
</form>
</body>
</html>
