<?php
  /************************************************
  ddlang library
  by Dody Rachmat Wicaksono (dodyrw@gmail.com)

  version 1.1
  Nov 27 2010
  ************************************************/
  
  include "ddlang.php";
  
  $lang_file = 'language/indonesian.po';
  
  // load language file
  ddlang_loadfile($lang_file);
  
  // assing some value
  $name = 'Dody';
  $address = 'Sutorejo Utara VII/1';
  $city = 'Surabaya';
  
  // print some text, notice the text inside _l() will be translated
  print _l('Name') . " : " . $name . "<br />";  
  print _l('Address') . " : " . $address . "<br />";  
  print _l('City') . " : " . $city;  
  
  // this text will not be translated because the text is not exist 
  // in language file (.po)
  print "<p>" . _l('I do not like gettext! This is cool!') . "</p>";
?>