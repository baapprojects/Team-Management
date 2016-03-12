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
<h1>MEMBERS LIST</h1><br><br>
<h2>Project Name <?php echo $_POST["name"]; ?></h2><br><br>
<?php
$file = fopen( 'D:\PHP\php_home_dir\php_fine\members.txt', "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( 'D:\PHP\php_home_dir\php_fine\members.txt' );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "<pre>$filetext</pre>" );

?>
</center>
</body>
</html>
