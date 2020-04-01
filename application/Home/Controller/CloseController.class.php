<?php
namespace Home\Controller;
use Think\Controller;
class CloseController extends Controller {
    public function index(){
        $result=M("idmanager")->select();
        for($x=0; $x<count($result); $x++){
            $pid=$result[$x]['pid'];
            exec("taskkill /pid $pid  -t  -f");
        }
        M("idmanager")->execute('truncate table idmanager');

        M("beltone")->execute('truncate table beltone');
        M("belttwo")->execute('truncate table belttwo');
        M("beltthree")->execute('truncate table beltthree');
        M("beltfour")->execute('truncate table beltfour');
        M("beltfive")->execute('truncate table beltfive');
        M("beltsix")->execute('truncate table beltsix');

        M("states")->where("id=1")->execute('update states set state=0 where id=1');

        $r=exec('cd C:/Users/lenovo/PycharmProjects/untitled/venv/emptyBelt/codePackage&&python removefiles.py');
        if($r==1){
            $url='http://localhost/emptybelt/index.php';
            redirect($url,1,'系统已关闭。。。');
        }else{
            echo '文件还未删干净，请手动删除。。。';
            $url='http://localhost/emptybelt/index.php';
            redirect($url,1,'系统已关闭。。。');
        }
    }

}