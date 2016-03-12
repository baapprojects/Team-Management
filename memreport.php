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
<body font-size: 16px; font-type="Times New Roman">
<center>
<h1>---------------------------------------------------------------------------------------</h1><br>
<h1>MEMBERS REPORT</h1><br>
<h1>---------------------------------------------------------------------------------------</h1><br>
<h3>This is the report generated about the members the report contains the detail about the members name<br>
under the project speccified.And the detail about  date of joiningthe team's work<br>
the report is up to date as it is generated now.And the report is useful for the manager to maintain<br>
the team details.</h3><br>
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
