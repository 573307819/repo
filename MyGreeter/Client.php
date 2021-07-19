<?php
/**
 * Class Client
 */
namespace MyGreeter;
class Client{
    public function __construct()
    {
       echo  $this->getGreeting();
    }
    /**
     * @content 实现不同的时间返回不同内容 Achieve different time to return different content
     * @return string
     */
    public function getGreeting(){
        $hour = $this->getTime();
        if ($hour >= 6 && $hour < 12){
            return "早上好";
        }elseif($hour >= 12 && $hour < 18){
            return "下午好";
        }else{
            return "晚上好";
        }
    }
    /**
     * @return int
     */
    private function getTime(){
        date_default_timezone_set('PRC');
        return date("H",time());
    }
}

new \MyGreeter\Client() ;