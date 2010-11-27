<?php
  /************************************************
  ddlang library
  by Dody Rachmat Wicaksono (dodyrw@gmail.com)

  version 1.1
  Nov 27 2010
  ************************************************/
  
  function _l($s) {    
    global $ddlang;
    
    if ($ddlang[$s]) return $ddlang[$s];
    else return $s;
  }
  
  function ddlang_loadfile($file) {
    global $ddlang;
    
    $lines = file($file);

    foreach ($lines as $k => $v) {
      if (substr($v,0,5) == 'msgid') {
        $p_key[] = substr($v,7,strlen($v)-9); 
      }
      if (substr($v,0,6) == 'msgstr') {
        $p_val[] = trim(substr($v,8,strlen($v)-10)); 
      }
    }
  
    foreach ($p_key as $k => $v) {
      $ddlang[$v] = $p_val[$k];
    }

    array_shift($ddlang);	
  }
?>