<!DOCTYPE  html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta content="text/html">
        <title>product_info</title>
    </head>
    <body>
        <?php require "head.tpl";?>
        <?php
                var_dump($output);     
        ;?>
        
        <?php 
        if(isset($_SESSION['products_page_total']) && is_numeric($_SESSION["products_page_total"])){
            $page_total=$_SESSION['products_page_total'];
        }
        
        for($i=1;$i<=$page_total;$i++){
            echo '<a href="index.php?route=product&product_list&page_list=1&page_index='.$i.'" style="margin-left:10px;float:left;">'.$i.'</a>';
        }
        
        // require "page.tpl";
        ?>
        <?php require "foot.tpl";?>
    </body>
</html>


