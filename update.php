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
$file = fopen( 'D:\PHP\php_home_dir\php_fine\leaveupdate.txt', "a" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
$space=" ";
$nw="<br>";
fwrite( $file,$nw);
fwrite( $file,$space);
fwrite( $file,$_POST["name"]);
fwrite( $file,$space);
fwrite( $file,$_POST["start"]);
fwrite( $file,$space);
fwrite( $file,$space);
fwrite( $file,$_POST["end"]);
fclose($file);
$file = fopen( 'D:\PHP\php_home_dir\php_fine\leaveupdate.txt', "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\leaveupdate.txt' );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "<pre>$filetext</pre>" );
?>
</h3>
<br><br><br>
<h2> Leave Updated Successfully!!!!!!</h2>
</body>
</html>