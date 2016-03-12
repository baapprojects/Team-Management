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
<h1>MODIFY PAGE</h1><br><br>
<h2>Project Name <?php echo $_POST["pname"]; ?></h2><br><br>
<h2>Modified Successfully!!!!</h2>
<?php
if ($_POST["pname"]=='Aetna')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\Aetna.txt', "r" );
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "w" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}

$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\Aetna.txt' );
$filetext = fread( $file, $filesize );
$pos=strpos($filetext,$_POST["tname"]);
if($pos)
{
$i=0;
$nw="<br>";
while($i!=$pos)
{
fwrite( $file2,$filetext[$i]);
$i=$i+1;
}
$sp=' ';
$l1=strlen($_POST["pname"]);
$l2=strlen($_POST["tname"]);
$l3=strlen($_POST["sdat"]);
$l4=strlen($_POST["tmem"]);
$l5=strlen($_POST["edat"]);
$l6=strlen($nw);
$l7=strlen($sp);
$i=($i+$l2+$l3+$l4+$l5+$l6+$l7+$l7+$l7+$l7)-3;
fwrite($file2,$sp);
fwrite( $file2,$_POST["tname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["sdat"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["tmem"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["edat"]);
fwrite($file2,$nw);
$len=strlen($filetext);
while($filetext[$i]!='A')
{
$i=$i+1;
}
echo $filetext[$i];
echo $i;
while($i!=$len)
{
fwrite($file2,$filetext[$i]);
$i=$i+1;
}
}
else
{
echo "You can modify only existing team";
}
fclose( $file);
fclose($file2);
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "r" );
$file = fopen( 'D:\PHP\php_home_dir\php_fine\Aetna.txt', "w" );
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
else if ($_POST["pname"]=='Wellpoint')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt', "r" );
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "w" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}

$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt' );
$filetext = fread( $file, $filesize );
$pos=strpos($filetext,$_POST["tname"]);
if($pos)
{
$i=0;
$nw="<br>";
while($i!=$pos)
{
fwrite( $file2,$filetext[$i]);
$i=$i+1;
}
$sp=' ';
$l1=strlen($_POST["pname"]);
$l2=strlen($_POST["tname"]);
$l3=strlen($_POST["sdat"]);
$l4=strlen($_POST["tmem"]);
$l5=strlen($_POST["edat"]);
$l6=strlen($nw);
$l7=strlen($sp);
$i=($i+$l2+$l3+$l4+$l5+$l6+$l7+$l7+$l7+$l7)-3;
fwrite($file2,$sp);
fwrite( $file2,$_POST["tname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["sdat"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["tmem"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["edat"]);
fwrite($file2,$nw);
$len=strlen($filetext);
while($filetext[$i]!='W')
{
$i=$i+1;
}
echo $filetext[$i];
echo $i;
while($i!=$len)
{
fwrite($file2,$filetext[$i]);
$i=$i+1;
}
}
else
{
echo "You can modify only existing team";
}
fclose( $file);
fclose($file2);
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "r" );
$file = fopen( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt', "w" );
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
else if ($_POST["pname"]=='Healthcare')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\health.txt', "r" );
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "w" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}

$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\health.txt' );
$filetext = fread( $file, $filesize );
$pos=strpos($filetext,$_POST["tname"]);
if($pos)
{
$i=0;
$nw="<br>";
while($i!=$pos)
{
fwrite( $file2,$filetext[$i]);
$i=$i+1;
}
$sp=' ';
$l1=strlen($_POST["pname"]);
$l2=strlen($_POST["tname"]);
$l3=strlen($_POST["sdat"]);
$l4=strlen($_POST["tmem"]);
$l5=strlen($_POST["edat"]);
$l6=strlen($nw);
$l7=strlen($sp);
$i=($i+$l2+$l3+$l4+$l5+$l6+$l7+$l7+$l7+$l7)-3;
fwrite($file2,$sp);
fwrite( $file2,$_POST["tname"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["sdat"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["tmem"]);
fwrite($file2,$sp);
fwrite( $file2,$_POST["edat"]);
fwrite($file2,$nw);
$len=strlen($filetext);
while($filetext[$i]!='H')
{
$i=$i+1;
}
echo $filetext[$i];
echo $i;
while($i!=$len)
{
fwrite($file2,$filetext[$i]);
$i=$i+1;
}
}
else
{
echo "You can modify only existing team";
}
fclose( $file);
fclose($file2);
$file2 = fopen( 'D:\PHP\php_home_dir\php_fine\temp.txt', "r" );
$file = fopen( 'D:\PHP\php_home_dir\php_fine\health.txt', "w" );
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
echo("<h2> YOU CAN MODIFY ONLY EXISTING PROJECT TEAM!!!!</h2>");
}

?>
</center>
</body>
</html>
