<?php 
##user is liuyangyang
require_once dirname(__FILE__) . '/../../common/basetest.php';
class Case_1411822041 extends BaseTest {
protected function get_id(){
return "1411822041";
}
protected function get_title(){
return "uploadFile_校验";
}
protected function execute(){
$postParam={"ver":"2","pd":"map","im":"2","os":"android","datafile":"./casemng/case/offline/20130913100335_861133029533301_XOoGY2L6NDvVw_E3BUS2pe8lB2Lur+3aL7AaN8LHXakeM_2.dat"};
$postParam=json_decode($postParam,true);
$data=http_send("http://10.99.33.39:8202/ulog/public/up.php",$postParam);
$res="{\"errno\":0}";
$this->assert_json(__LINE__,$data,$res);
}
}
