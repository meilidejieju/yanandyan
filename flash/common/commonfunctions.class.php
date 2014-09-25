<?php
/**
 * Created by YYY.
 * User: Administrator
 * Date: 14-7-20
 * Time: 下午8:01
 * 
 */
class commonfunctions{
    /*
     * 检查是否为空
     * */
     function checkEmpty($arr=array()){
         foreach($arr as $v){
             if(empty($v)){
                 return $v;
             }
         }
         return 'fill_success';
     }


}
 
?>