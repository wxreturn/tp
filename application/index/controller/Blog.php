<?php
/**********************************************************                                                                  
 *  
 *  FileName:  Blog.php
 *
 *  Author:  wxreturn
 *
 *  Version:  1.0
 *
 *  DateTime:  2018年10月6日 - 下午2:24:23
 *
 *  Description:  博客控制器
 *
 **********************************************************/

namespace app\index\controller;

use think\Controller;
use think\Db;

class Blog extends Controller
{
    private $tableName = 'admin';
    
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'title' => "wx's blog",
            'content' => "this is my blog of content"
        ];
        
        $this->assign($data);
        
        $datas = Db::name($this->tableName)->select();
        $this->assign('datas', $datas);
        
        
        wxp($datas);
        return $this->fetch();
    }
    
    public function read($id=1)
    {
        return $id;
    }
    
    public function archive($year=2018, $month=1)
    {
        return $year . ', ' . $month;
    }
    
   

}
