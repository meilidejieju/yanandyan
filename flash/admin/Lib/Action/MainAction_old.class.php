<?php
// 本类由系统自动生成，仅供测试用途
if(!$_SESSION['admin_username']){
    echo '<script>window.location.href="'.BASE_URL.'/admin.php"</script>';
    exit;
}

class MainAction extends Action {

    /*
     * 视图输出类
     * */
    /*
     * 输出主界面
     * */
    public function Main(){
        $User=D('User');
        $session_arr=$User->getSession();
       // print_r($session_arr);
        if($session_arr[$User->session['admin_username']]){
            $this->assign('admin_username',$session_arr[$User->session['admin_username']]);
        }
        $Menu=D('Menu');
        $left_menu=$Menu->getLeftMenu(0);
        $left_menu_html=$Menu->getLeftMenuHtml($left_menu);
        $this->assign("left_menu",$left_menu_html);
        $this->display();
    }

    /*
     * 获得当前位置
     * */
    public function getPositon(){
        $this->assign("position",$_POST['position']);
    }
    /*
     * 网站设置
     * */
    public function webSet(){
        $this->getPositon();
        $this->display();
    }
    /*
     * 菜单设置
     * */
    public function setLeftMenu(){
        $this->getPositon();
        $Menu=D('Menu');
        $left_menu=$Menu->getLeftMenu(0);
        $leftmenu_set_html=$Menu->getLeftMenuSetHtml($left_menu);
        $this->assign("leftmenu_set_html",$leftmenu_set_html);
        $this->display();
    }




}