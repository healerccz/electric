<?php
header("Content-Type:text/html;charset=utf-8");
$str = file_get_contents("php://input");

//$str = '{"illumination":70.00,"temperature":25,"humidity":15,"mq135":1.63,"mq2":1.75,"rainfall":1.64,"israin":1.71,"pressure":96572,"altitude":403.44,"voltage":1.68,"pitch":0.05,"roll":-179.85,"yaw":7.43,"speed":0.00,"direction":"......"}';
/*$pattern = '/{(.*?)}/';
preg_match ($pattern, $str ,$matches);

$s = str_replace('\\', '', $matches[0]);
$s = json_decode($s, true);*/
$s = json_decode($str, true);

$temperature = $s['temperature']; // 室内温度
$illumination = $s['illumination']; // 光照
$mq135 = $s['mq135'];   // mq135
$mq2 = $s['mq2'];   // mq2
$humidity = $s['humidity']; // 湿度
$isRain = $s['israin']; // 是否下雨
$rainfall = $s['rainfall']; //降雨量
$pressure = $s['pressure'];
$altitude = $s['altitude'];
$voltage = $s['voltage'];
$pitch = $s['pitch'];
$roll = $s['roll'];
$yaw = $s['yaw'];
$speed = $s['speed'];   // 风速
$direction = $s['direction'];

$redis = new Redis();
$redis->connect('127.0.0.1', 6379); //连接Redis
$redis->select(2);//选择数据库2

$redis->set("temperature", $temperature);
$redis->set("illumination", $illumination);
$redis->set("speed", $speed);
$redis->set("rainfall", $rainfall);
$redis->set("isRain", $isRain);
$redis->set("mq135", $mq135);
$redis->set("mq2", $mq2);
$redis->set("humidity", $humidity);
$redis->set("pressure", $pressure);
$redis->set("altitude", $altitude);
$redis->set("voltage", $voltage);
$redis->set("pitch", $pitch);
$redis->set("roll", $roll);
$redis->set("yaw", $yaw);
$redis->set("direction", $direction);