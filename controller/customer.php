<?php
class Controller_Customer extends Controller{
        public $customer_id;
       
        public function __construct(){
            $this->customer_id=$_REQUEST['customer_id'];
            $customer=$this->model("Customer");
            $customer_info=$customer->getCustomerInfo($this->customer_id);
            $customer->close();
            $this->output=$customer_info;
            $template="customer.tpl";
            $this->render($template);
        }
        
        
        
          
}
