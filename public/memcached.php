<?php
$memcache = new Memcached();
$memcache->addServer('localhost', 11211);
//print_r($memcache->getStats());
$data = 'MemcachedをPHPで使うテスト';

$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
foreach ($items as $k => $v) {
    $memcache->set($k, $v);
}
//var_dump($memcache->get(array('key1', 'key3')));
//var_dump($memcache->get('key2'));
//var_dump($memcache->get('key4'));

$v1 = 100;
$v2 = 'string';
$v3 = array(1, 2, 3);
$v4 = array('type' => 'reguler', 'color' => 'blue');

$memcache->set(1, $v1);
$memcache->set(2, $v2);
$memcache->set(3, $v3);
$memcache->set(4, $v4);

var_dump($memcache->get(1));
var_dump($memcache->get(2));
var_dump($memcache->get(3));
var_dump($memcache->get(4));

?>
