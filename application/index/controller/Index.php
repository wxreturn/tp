<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Config;
use think\Url;
use think\Request;

class Index extends Controller
{
    
    public function index()
    {
        $data = [
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy'],
            ['uid'=>1, 'name'=>'wxretturn', 'address'=>'qyy']
        ];
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
//         return $this->fetch('bgm');
//        $data = Db::name('admin')->select();
//        $this->assign('data', $data);
//        return $this->fetch();
    }
    
    public function welcome()
    {
    	return 'welcome';
    }
    
    public function guest()
    {
    	return "you are guest";
    }
    
    public function menu()
    {
    	$this->assign("title", "后台模板");
    	return $this->fetch();
    }
    
    public function database()
    {
    	$this->assign('title', '数据库操作标题');
    	$data = Db::table('think_data')->select();
    	var_dump($data);
    	$this->assign('arr', $data);
    	// return Db('data')->getLastSql();
    	return $this->fetch();
    	
    }
    
    public function hello_world()
    {
        return "This is helo_world method()";
    }
    
    public function hello($id=100)
    {
//         echo Url::build('index/hello', 'id=123');
//         echo '<br/>';
//         return $id;
        $this->fetch('index');
    }

    
    public function first()
    {
        echo "first();<br/>";
    }
    
    public function second()
    {
        echo "second();<br/>";
    }
    
    public function third()
    {
        echo "third();<br/>";
    }
    
    public function data()
    {
        echo "data();<br/>";
    }
    
    public function doct()
    {
        echo "doct();<br/>";
    }
    
    public function downLoad()
    {
        // 要下载的文件名称
        $filePathName = 'G:\tp\downfile.txt';
        
        // 设置文件的类型
        header('Content-type:text/txt');
        // 设置文件名称
        header('Content-Disposition:attachment;filename=wxreturn.txt');
        // 设置文件的大小
        header('Content-Length:' . filesize($filePathName));
        // 将文件写入输出流
        echo file_get_contents($filePathName);
    }
    
    public function del()
    {
        $filePathName = ROOT_PATH . 'runtime\temp';
        $handle = opendir($filePathName);
        while( ($file = readdir($handle)) !== false)
        {
            if($file!='.' && $file!='..')
            {               
                $strFile = $filePathName . '/' .$file;
                if(file_exists($strFile))
                {
                    unlink($strFile);
                    echo "删除完成";
                }
            }
        }
        echo "操作完成";
    }
}
