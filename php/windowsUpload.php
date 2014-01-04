<?php
 	
	// PHP Development By Alberto Villalobos
	// http://albertovillalobos.me/
	
	$encodedImage = $_POST["data"];
    $unencodedData=base64_decode($encodedImage)or die("Error decoding image.");
    $name = uniqid();
 
    $fp = fopen( "../uploads/$name.png", "wb" )or die("Error opening uploads folder.");
    fwrite( $fp, $unencodedData)or die("Error writing file.");
    fclose( $fp )or die("Error closing file.");
 
    echo "http://fotorift.com/uploads/$name.png";
?>