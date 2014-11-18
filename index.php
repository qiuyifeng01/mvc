<?php
    require 'config.php';
    require 'boot.php';
    require DOCVIEWS."views.php";
    require DOCROUTE."route.php";
    require DOCSYSTEM."log.php";
    
    date_default_timezone_set("Asia/Shanghai");    

    $route_key=$_REQUEST["route"];
    session_start();
    $out=new route($route_key);
    session_destroy();
    
//     
    // if(isset($route_key)){
        // try{
            // $out=new route($route_key);
        // }catch(ErrorException $e){
            // System_Log::record("error_type:".$e->getCode()." ".$e->getMessage()." ".$e->getFile()." ".$e->getline());
//        
        // }
    // }

