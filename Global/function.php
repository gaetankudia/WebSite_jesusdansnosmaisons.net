<?php
Function includ_Function()
 {
    include 'Function/service.php';     
 }

function start_session()
{

  session_start();
}

function detroy_session()
{
  session_destroy();
}

start_session();

 includ_Function(); 

?>