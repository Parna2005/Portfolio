<?php
  
// Store the file name into variable
$file = 'http://127.0.0.1:5500/assets/img/portfolio/Inmortalis.pdf';
$filename = 'http://127.0.0.1:5500/assets/img/portfolio/Inmortalis.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . 'http://127.0.0.1:5500/assets/img/portfolio/Inmortalis.pdf"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile(http://127.0.0.1:5500/assets/img/portfolio/Inmortalis.pdf);
  
?>