<?php
   $timestamp = strtotime( "28-03-1994");
   $timestamp2 = strtotime("+3 months", $timestamp);
   
   echo date('l', $timestamp) . "<br>";
   
   echo date('d-m-Y', $timestamp2) . "<br>";


?>
Search: Generating a timestamp with a relative template