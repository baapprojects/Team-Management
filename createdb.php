<html>
<head>
<title>Writing a file using PHP</title>
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

</head>
<body>
<h1>Database Updated </h1><h3>
<?php
if ($_POST["prjname"]=='Aetna')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\Aetna.txt', "a" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
$space=" ";
$nw="<br>";
fwrite( $file,$nw);
fwrite( $file,$space);
fwrite( $file,$_POST["prjname"]);
fwrite( $file,$space);
fwrite( $file,$_POST["teamname"]);
fwrite( $file,$space);
fwrite( $file,$space);
fwrite( $file,$_POST["doc"]);
fwrite( $file,$space);
fwrite( $file,$_POST["mem"]);
fwrite( $file,$space);
fwrite( $file,$_POST["dof"]);
fclose( $file );
}
if ($_POST["prjname"]=='Well Point')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\wellpoint.txt', "a" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
$space="   ";
$nw="\\n";
fwrite( $file,$nw);
fwrite( $file,$space);
fwrite( $file,$_POST["prjname"]);
fwrite( $file,$space);
fwrite( $file,$_POST["teamname"]);
fwrite( $file,$space);
fwrite( $file,$space);
fwrite( $file,$_POST["doc"]);
fwrite( $file,$space);
fwrite( $file,$_POST["mem"]);
fwrite( $file,$space);
fwrite( $file,$_POST["dof"]);
fclose( $file );
}
if ($_POST["prjname"]=='Health Care')
{
$file = fopen( 'D:\PHP\php_home_dir\php_fine\health.txt', "a" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
$space="   ";
$nw="\\n";
fwrite( $file,$nw);
fwrite( $file,$space);
fwrite( $file,$_POST["prjname"]);
fwrite( $file,$space);
fwrite( $file,$_POST["teamname"]);
fwrite( $file,$space);
fwrite( $file,$space);
fwrite( $file,$_POST["doc"]);
fwrite( $file,$space);
fwrite( $file,$_POST["mem"]);
fwrite( $file,$space);
fwrite( $file,$_POST["dof"]);
fclose( $file );
}

?>
</h3>
<br><br><br>
<h2> Database Updated Successfully!!!!!!</h2>
</body>
</html>