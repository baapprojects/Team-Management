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
<body>
<form  method="post">
<center>
<h1>MODIFY PAGE</h1><br><br>
<h2>Member Name <?php echo $_POST["mname"]; ?></h2><br><br>
<h2>Modification Result!!!!</h2>
<?php
$file = fopen( 'D:\PHP\php_home_dir\php_fine\members.txt', "r" );
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "w" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}

$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\members.txt' );
$filetext = fread( $file, $filesize );
$i=0;
$pos=strpos($filetext,$_POST["mname"]);
if($pos==0)
{
echo "this is inside if";
$le=strlen($POST["mname"]);
fwrite( $file2,$_POST["mname"]);
$i=$le;
$pos=$le+1;
}
if($pos)
{
$nw="<br>";
while($i!=$pos)
{
fwrite( $file2,$filetext[$i]);
$i=$i+1;
}
$sp=' ';
$l4=strlen($_POST["mname"]);
$l1=strlen($_POST["pname"]);
$l2=strlen($_POST["tname"]);
$l3=strlen($_POST["jdat"]);
$l6=strlen($nw);
$l7=strlen($sp);
$i=($i+$l2+$l3+l4+$l6+$l7+$l7+$l7)-3;
fwrite($file2,$nw);
fwrite( $file2,$_POST["mname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["pname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["tname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["jdat"]);
fwrite($file2,$nw);
$len=strlen($filetext);
$clen=$i+$l4+$l1+$l2+$l3+$l6+$l7+$l7+$l7+$l8;
while($filetext[$i]!='<')
{
	$i=$i+1;
}
while($i!=$len && $i<=$len)
{
fwrite($file2,$filetext[$i]);
$i=$i+1;
}
fclose( $file);
fclose($file2);
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "r" );
$file = fopen( 'D:\PHP\php_home_dir\php_fine\members.txt', "w" );
if( $file2 == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\temp.txt' );
$filetext2 = fread( $file2, $filesize );
fwrite($file,$filetext2);
fclose($file);
fclose($file2);
echo("<pre><h3>$filetext2</h3></pre>");
}
else 
{
echo "<h2>You can modify only existing Member</h2>";
}
?>
<button class="button button1" type="submit" formaction="memreport.php">GENERATE REPORT</button></BR></BR></BR>
</center>
</form>
</body>
</html>
