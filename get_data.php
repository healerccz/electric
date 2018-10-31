<?php
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header("Content-Type:text/html;charset=utf-8");

$redis = new Redis();
$redis->connect('127.0.0.1', 6379); //连接Redis
$redis->select(2);//选择数据库2

/*echo json_encode([
    'temperature' => $redis->get("temperature"),
    'illumination' => $redis->get("illumination"),
    'speed' => $redis->get("speed"),
    'direction' => $redis->get("direction"),
    'rainfall' => $redis->get("rainfall"),
    'isRain' => $redis->get("isRain"),
    'mq135' => $redis->get("mq135"),
    'mq2' => $redis->get("mq2"),
    'humidity' => $redis->get("humidity"),
    'pressure' => $redis->get("pressure"),
    'altitude' => $redis->get("altitude"),
    'voltage' => $redis->get("voltage"),
    'pitch' => $redis->get("pitch"),
    'roll' => $redis->get("roll"),
    'yaw' => $redis->get("yaw"),
]);*/
echo json_encode([
    'temperature' . ':'.$redis->get("temperature"),
    'illumination' . ':'. $redis->get("illumination"),
    'speed' . ':'. $redis->get("speed"),
    'direction' . ':'. $redis->get("direction"),
    'rainfall' . ':'. $redis->get("rainfall"),
    'isRain' . ':'. $redis->get("isRain"),
    'mq135' . ':'. $redis->get("mq135"),
    'mq2' . ':'. $redis->get("mq2"),
    'humidity' . ':'. $redis->get("humidity"),
    'pressure' . ':'. $redis->get("pressure"),
    'altitude' . ':'. $redis->get("altitude"),
    'voltage' . ':'. $redis->get("voltage"),
    'pitch' . ':'. $redis->get("pitch"),
    'roll' . ':'. $redis->get("roll"),
    'yaw' . ':'. $redis->get("yaw"),
]);