﻿<?php
// 本类由系统自动生成，仅供测试用途
require_once './flash/common/commonfunctions.class.php';
class MainajaxAction extends Action {

  /*
   * ajax请求处理类
   * */
    public function Mainajax(){

    }

    /*
     * 提交笔记
     * */
    public function addArticle(){
        $aticle = D('article');
        $subject=$_POST['subject']?$_POST['subject']:(date('Y-m-d H:i:s').'日记');
        $content=$_POST['content'];
        $weather=$_POST['weather'];
        $author=$_POST['author']?$_POST['author']:'匿名';
        $data = array('subject'=>$subject,'content'=>$content,'weather'=>$weather,'time'=>time(),'author'=>$author);
        $last_id = $aticle->addArticle($data);
        echo '{"id":"'.$last_id.'","subject":"'.$subject.'"}';
    }
    /*
     * 获取文章内容
     * */
    function getArticle(){
        $aid=$_POST['aid'];
        $aticle = D('article');

        $info = $aticle-> getArticleDetail($aid);
        print_r($info);
     //   echo
    }


}