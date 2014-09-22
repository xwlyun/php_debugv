<?php
/**
 * 使用cookie来标示测试版/线上版
 * @xwl 2014-09-22
 * 1、访问地址：http://127.0.0.1/debugv/index.php?v=1 （v=1有对应的分支，在getDebugV方法中设定）
 * 2、cookie中会存放‘debug_v’等于1 （‘debug_v’键名自定义）
 * 3、再次访问：http://127.0.0.1/debugv/index.php
 * 4、读取cookie中的‘debug_v’的值，找到对应v=1的分支路径 branch1
 * 5、引用的文件路径：branch1/index.php
 */
include_once('function.php');

include_once(getDebugV('index'));