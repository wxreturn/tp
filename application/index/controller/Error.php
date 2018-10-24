<?php
/**********************************************************                                                                  
 *  
 *  FileName:  Error.php
 *
 *  Author:  wxreturn
 *
 *  Version:  1.0
 *
 *  DateTime:  2018年10月4日 - 下午6:00:57
 *
 *  Description:  控模块类
 *
 **********************************************************/

namespace app\index\controller;

use think\Request;

class Error
{
    public function index(Request $request)
    {
        echo $controllerName = $request->controller();
        echo "Error controller index method;";
    }
}