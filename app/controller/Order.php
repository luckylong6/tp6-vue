<?php
namespace app\controller;

use app\model\Order as orderModel;
use think\cache\driver\Redis;
use think\facade\Cache;

class Order extends Common {
    public function showOrder() {
        // if($this->request->isAjax()) {
        //     $param = $this->request->param();
        //     $orderModel = new orderModel();
            
        //     $res = $orderModel->addOrder($param);
        //     if($res !== true) {
        //         return json(['code' => 1, 'msg' => $res['msg']]);
        //     }
        //     return json(['code' => 200, 'msg' => '添加成功']);
        // }
        // phpinfo();exit;
        $redis = new Redis();
        $redis->set('test', "hello");
        $result = $redis->get('test');
        var_dump($result);die;
        return view();
    }

    
    public function testVue4() {
        return view();
    }
}