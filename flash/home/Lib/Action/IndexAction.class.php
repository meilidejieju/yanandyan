<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $Weather=D('getWeather');
        $obj_data=$Weather->baiduApi();
      //  var_dump($obj_data);
        $weather_info=$obj_data->results[0]->weather_data[0]->weather;
        $dayPictureUrl=$obj_data->results[0]->weather_data[0]->dayPictureUrl;
        $temperature = $obj_data->results[0]->weather_data[0]->temperature;
        $wind = $obj_data->results[0]->weather_data[0]->wind;

        //获取背景图片
        $BG=M('blog_index_config');
        $index_img = $BG->where("type='index_bgimg' and uid =1 and display = 1")->field('value')->find();

        if(!strstr($index_img['value'],'http')){
            $index_img=BASE_URL.$index_img['value'];
        }else{
            $index_img=$index_img['value'];
        }

        //获取音乐
        $music_arr=$BG->where("type='index_bgmusic' and uid =1 and display = 1")->select();
        $music_arr_need=array();
    //    print_r($music_arr);
        foreach ($music_arr as $k=>$v){
            if(!strstr($v['value'],'http')){
                $v['value']=BASE_URL.$v['value'];
                $v['index']=$k;
            }
            $music_arr_need[]=$v;
        }
   // print_r($music_arr_need);

        //获取文章列表
        $article = D('article');
        $article_list = $article->getArticle('');

        $assign_array=array('weather_info'=>$weather_info,
            'dayPictureUrl'=>$dayPictureUrl,
            'temperature'=>$temperature,
            'wind'=>$wind,
            'html_title'=>'MYLOG',
            'index_bgimg'=>$index_img,
            'musiclist'=>$music_arr_need,
            'article_list'=>$article_list
        );

        $this->assign($assign_array);

        $this->display("index");
    }
    function test(){
       echo  $_POST['simple-editor'];
    }
//    function showArticle(){
//        $aid = $_GET['aid'];
//        $article = D('article');
//        $article_list = $article->getArticleDetail($aid);
//
//
//
//    }



//    public function set(){
//        $assign_array=array(
//            'html_title'=>'设置'
//        );
//        $this->assign($assign_array);
//        $this->display("set");
//    }


}