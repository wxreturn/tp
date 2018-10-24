<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------


// 应用公共文件
function wxp($value, $bArr = false)
{
    
	echo '<pre>';
	if ($bArr == true)
	{
	    var_dump($value);
	}
	else 
	{
	    print_r($value);
	}
	echo '</pre>';
}

// \think\Loader::addNamespace('wxreturn','./public/test/');
\think\Loader::import('fset', EXTEND_PATH);

// \think\Route::rule([
//                 'hello/:id' => ['index/hello',['id'=>'\d{4}']],
//             ],'','GET',['ext'=>'html'],['id'=>'\d+']);








