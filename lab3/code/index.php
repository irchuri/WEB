<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);

