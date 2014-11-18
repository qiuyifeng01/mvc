<?php

class Controller_Order extends controller{
        private $order_id;
    
        public function __construct(){
            $this->order_id=$_REQUEST["order_id"];
            $order=$this->model("order");
            $order_info=$order->getOrderInfo($this->order_id);
            $order->close();
            
            $this->output=$order_info;
            $template="order.tpl";
            $this->render($template);
        }  
    
}
