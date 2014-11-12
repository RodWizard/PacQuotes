<?php
/***************************************************************************
 Sava's Random Quotes
 Copyright (C) 2006 Sava Stefan (ssavaa@gmail.com)

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 More Info About The Licence At http://www.gnu.org/copyleft/gpl.html
****************************************************************************/

// Included Files
include 'config.php';

// Open the quote file
$fp = fopen($quote_file, "r");

// Read the contents and tokenize the file to individual quotes
$quotes = fread($fp, filesize($quote_file)); 
$array_q = explode("\n",$quotes); 
fclose($fp); 

// Find a random quote
srand((double)microtime()*1000000);
$array_index_q = (rand(1, sizeof($array_q)) - 1);


?>