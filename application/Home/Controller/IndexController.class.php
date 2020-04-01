<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $open=M("states")->order('dateandtime desc')->find();

        if($open['state']==1){
            $url='http://localhost/emptybelt/index.php/Open/update';
            redirect($url,1,'系统已开启。。。');
        }elseif($open['state']==0){

            $result1=M("beltone")->order('dateandtime desc')->find();

            if($result1['empty']==1) {
                $state1 = '空皮带';
                $color1 = 'red';
                $this->assign('state1', $state1);
                $this->assign('color1', $color1);
            }elseif($result1['empty']==2) {
                $spv = M('beltone')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color1 = 'blue';
                $this->assign('state1', $spv);
                $this->assign('color1', $color1);
            }else{
                $state1 = '未检测';
                $color1 = 'black';
                $this->assign('state1', $state1);
                $this->assign('color1', $color1);
            }
            $result2=M("belttwo")->order('dateandtime desc')->find();
            if($result2['empty']==1) {
                $state2 = '空皮带';
                $color2 = 'red';
                $this->assign('state2', $state2);
                $this->assign('color2', $color2);
            }elseif($result2['empty']==2) {
                $spv = M('belttwo')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color2 = 'blue';
                $this->assign('state2', $spv);
                $this->assign('color2', $color2);
            }else{
                $state2 = '未检测';
                $color2 = 'black';
                $this->assign('state2', $state2);
                $this->assign('color2', $color2);
            }
            $result3=M("beltthree")->order('dateandtime desc')->find();
            if($result3['empty']==1) {
                $state3 = '空皮带';
                $color3 = 'red';
                $this->assign('state3', $state3);
                $this->assign('color3', $color3);
            }elseif($result3['empty']==2) {
                $spv = M('beltthree')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color3 = 'blue';
                $this->assign('state3', $spv);
                $this->assign('color3', $color3);
            }else{
                $state3 = '未检测';
                $color3 = 'black';
                $this->assign('state3', $state3);
                $this->assign('color3', $color3);
            }
            $result4=M("beltfour")->order('dateandtime desc')->find();
            if($result4['empty']==1) {
                $state4 = '空皮带';
                $color4 = 'red';
                $this->assign('state4', $state4);
                $this->assign('color4', $color4);
            }elseif($result4['empty']==2) {
                $spv = M('beltfour')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color4 = 'blue';
                $this->assign('state4', $spv);
                $this->assign('color4', $color4);
            }else{
                $state4 = '未检测';
                $color4 = 'black';
                $this->assign('state4', $state4);
                $this->assign('color4', $color4);
            }
            $result5=M("beltfive")->order('dateandtime desc')->find();
            if($result5['empty']==1) {
                $state5 = '空皮带';
                $color5 = 'red';
                $this->assign('state5', $state5);
                $this->assign('color5', $color5);
            }elseif($result5['empty']==2) {
                $spv = M('beltfive')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color5 = 'blue';
                $this->assign('state5', $spv);
                $this->assign('color5', $color5);
            }else{
                $state5 = '未检测';
                $color5 = 'black';
                $this->assign('state5', $state5);
                $this->assign('color5', $color5);
            }
            $result6=M("beltsix")->order('dateandtime desc')->find();
            if($result6['empty']==1) {
                $state6 = '空皮带';
                $color6 = 'red';
                $this->assign('state6', $state6);
                $this->assign('color6', $color6);
            }elseif($result6['empty']==2) {
                $spv = M('beltsix')->order('dateandtime desc')->find();
                $spv = $spv['spv'];
                $spv = round($spv,2);
                $color6 = 'blue';
                $this->assign('state6', $spv);
                $this->assign('color6', $color6);
            }else{
                $state6 = '未检测';
                $color6 = 'black';
                $this->assign('state6', $state6);
                $this->assign('color6', $color6);
            }
            $this->display();
        }else{
            echo '异常请联系管理员，或者关闭后重试。。。';
        }

    }

}