<?php
// 本类由系统自动生成，仅供测试用途
class MainajaxAction extends Action {

  /*
   * ajax请求处理类
   * */
    public function Mainajax(){

    }
    /*
     * 菜单设置ajax请求
     * */
    public function setLeftmenu(){
        $Menu=D('Menu');
        $Menu->action_content=$this->base_config['action_content'];
        $Menu->html_content=$this->base_config['html_content'];
        $Menu->setMenu($_POST['type'],$_POST['mid'],$_POST['cat_name'],$_POST['link'],time());
    }



}