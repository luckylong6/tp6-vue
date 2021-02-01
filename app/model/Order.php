<?php

namespace app\model;

use think\Model;

class Order extends Model {
    public function addOrder($param) {
        if(empty($param['uid'])) {
            return ['code' => 1, 'msg' => 'uid不能为空'];
        }
        if(empty($param['name'])) {
            return ['code' => 1, 'msg' => '姓名不能为空'];
        }
        $order_sn = date("YmdHis").rand(1000,9999);
        
        $data = [
            'order_sn' => $order_sn,
            'payment' => 10,
            'uid' => $param['uid'],
            'create_time' => time(),
        ];
        $res = $this->insert($data);
        if(!$res) {
            return ['code' => 1, 'msg' => '添加失败'];
        }
        return true;
    }
}