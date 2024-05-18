<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middleware
{
    function __construct(){
        $this->CI =& get_instance();
    }
    /* Request Decrypt Data */
    public function decryptReqData()
    {
        if (FLOW_TYPE == 'DEV') {
            $cntn = trim(file_get_contents("php://input"));
            
            $decoded = json_decode($cntn,true);
            $data = $decoded;
            // print_r($data);exit;

        }elseif (FLOW_TYPE == 'PROD') {
            $inputData = $_POST['reqData'];
            
            $decryptData = $this->decryptReq($inputData);
            // $data = base64_decode(base64_decode(base64_decode($decryptData)));
            $data = rawurldecode(base64_decode(base64_decode(base64_decode($decryptData))));
        }
        
        return $data;
    }

    public function decryptReq($value='')
    {
    return $value;
    }
    /* encrypt response data */
    public function encryptResData($data='')
    {  
            // $this->logWriter('encryptResData',print_r($data,1),'ResponseData'.date('H'),'a+');
        // $this->logWriter('encryptResData',print_r($data,1),'common'.date('H'),'a+');
            // print_r($data);
            $value["data"] = $data;
        $value['msg'] = isset($value['msg']) ? $value['msg'] : "Success";
        $encryptData = $this->encryptRes($value);
        // print_r(json_encode($encryptData));exit;
        echo json_encode($encryptData);
    }

    public function encryptTableResData($data='')
    {  
            // $this->logWriter('encryptResData',print_r($data,1),'ResponseData'.date('H'),'a+');
        // $this->logWriter('encryptResData',print_r($data,1),'common'.date('H'),'a+');
            $value = $data;
        // $value['msg'] = isset($value['msg']) ? $value['msg'] : "Success";
        $encryptData = $this->encryptRes($value);
        echo json_encode($encryptData);
    }

    public function encryptRes($value='')
    {
        return $value;
    }

    function logWriter($funcName="radom",$data="helloWorld",$fileName="test",$mode = "a+") {
        $dirName = date('Y-m-d');
        // fopen(APPPATH.'/logs/QueryFile/'.$dirName."/asasa.txt","a+");
        // print_r(APPPATH.'logs\QueryFile\/'.$dirName.'\/'.$fileName.".txt");exit;
        if (!is_dir(APPPATH.'/logs/'.$dirName)) {
            mkdir(APPPATH.'/logs/'.$dirName);
            chmod(APPPATH.'/logs/'.$dirName, 0777);
        }
        $file = fopen(APPPATH.'logs/'.$dirName.'/'.$fileName.".txt",$mode);
        // chmod($filename.".txt", 0777);
        // print_r($file);
        fwrite($file, "\n".date('Y-m-d h:i:s')."\n"."functionName:".$funcName."\n".$data);
        // return 'Hello World';
    }
}

?>