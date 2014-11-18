<?php

class System_Log{
        public $log_file;
        public $log_number;
        
        public static function record($message){
            date_default_timezone_set("Asia/Shanghai");
            $files =new DirectoryIterator(DOCLOG);
            $files_name=Array();
            foreach($files as $file ){
                $file_name=$file->getFilename();
                if($file_name!="." && $file_name!="..")
                $files_name[]=$file_name;
            }
            sort($files_name);
            $len=count($files_name);
            $log_file=$files_name[$len-1];
            $log_number=$len-1;
            $filename=DOCLOG.$log_file;
            
            if(!(is_file($filename))){
                die("logs file does not exist");
            }
            $file_size=filesize($filename);
            if($file_size>=10000){
                $filename=DOCLOG."log_".$len.".txt";
            }
            $log_file=$filename;
            $handle=fopen($log_file,"a+");
            fwrite($handle,PHP_EOL.Date("Y_m_d h:i:s")." ".$message);
            fclose($handle);
        }   
        
}
