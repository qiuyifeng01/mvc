<?php
class Controller_Product extends controller{
        private $product_id;
    
        public function __construct(){
                    $product=$this->model("Product");
            
            if(isset($_REQUEST['product_id']) && is_numeric($_REQUEST['product_id'])){
                    $product_id=$_REQUEST['product_id'];
                    $this->product_id=$product_id;
                    $product_info=$product->getProductInfo($this->product_id);
                    $this->output=$product_info;
                    
                    $template="product.tpl";
                    $this->render($template);    
            }
            
            if(isset($_REQUEST['product_list']) ){
                    $products_info=$product->getProducts();
                    $this->output=$products_info;
                    
                    $template="product_list.tpl";                                    
                    $this->render($template);
            }
                    $product->close();
            
        }  
    
}
