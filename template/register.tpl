<!DOCTYPE  html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta content="text/html">
        <title>user_register</title>
        <link type="text/css" href="<?php echo HOSTCSS.'register.css';?>" rel="stylesheet" />
    </head>
    <body>
        <?php require("head.tpl");?>
        <form id="register_form" method="post" action="./index.php?route=user&page=register&do_register=1">
           <span>user_group_id</span> <input name="user_group_id" type="text" />
           <span>user_name</span><input name="user_name" type="text" />
           <span>password</span> <input name="password" type="text" />
           <span>firstname</span><input name="firstname" type="text" />
            <span>lastname</span><input name="lastname" type="text" />
            <span>e_mail</span><input name="e_mail" type="text" />
            <span>code</span><input name="code" type="text" />
            <span>status</span><input name="status" type="text" />
            <span>submit</span><input type="submit" value="submit"/>
        </form>
        
        <?php require("foot.tpl");?>
    </body>
</html>


