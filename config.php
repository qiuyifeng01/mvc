<?php
  define("HOSTCSS","http://".$_SERVER['HTTP_HOST']."/mvc/template/css/");
   
   define("DOCROOT",dirname(__FILE__));
   define("DOCVIEWS",DOCROOT."\\views\\");
   define("DOCCONTROLLER",DOCROOT."\\controller\\");
   define("DOCMODEl",DOCROOT."\\model\\");
   define("DOCTEMPLATE",DOCROOT."\\template\\");
   define("DOCROUTE",DOCROOT."\\route\\");
   define("DOCLOG",DOCROOT."\\logs\\");
   define("DOCSYSTEM",DOCROOT."\\system\\");
   
   define("HOST","127.0.0.1");
   define("DATABASE","store");
   define("USERNAME","root");
   define("PASSWORD","");
   
// error_reporting( E_ALL );   
//     
// function exception_error_handler($errno, $errstr, $errfile, $errline ) {
        // throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
// }

// function check_for_fatal()
// {
    // $error = error_get_last();
    // if ($error["type"] == E_ERROR )
        // // System_log::record(" Fatal_error:".$error["message"]."_".$error["file"]." line:".$error["line"]);
//         
// }

// set_error_handler("exception_error_handler", E_ALL);
// register_shutdown_function( "check_for_fatal" );
   
   
   ?>