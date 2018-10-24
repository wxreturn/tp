<?php
/**********************************************************                                                                  
 *  
 *  FileName:  index.php
 *
 *  Author:  wxreturn
 *
 *  Version:  1.0
 *
 *  DateTime:  2018年9月30日 - 上午11:00:01
 *
 *  Description:  PHP语法测试文件
 *
 **********************************************************/



// $user = 'root';
// $pass = '';
// $handle = new PDO('mysql:host=localhost;dbname=wxreturn', $user, $pass);
// $res = $handle->query('select * from think_data');
// foreach($res as $v)
// {
//     echo $v['id'] . '=>' . $v['data'];
//     echo '<br/>';
// }


// $i = 90; 

// function test()
// {
//     echo $GLOBALS['i'];
// }

// test();


// define('APP', 'Love');
// defined('APP') and define('APP', 'wxreturn');
// echo APP;


// class Father
// {
//     public function __construct()
//     {
//         echo "Father:__construct()";
//     }
//     public function display()
//     {
//         echo "Father:display()";
//     }
// }

// class Child extends Father
// {
//     public function __construct()
//     {
//         parent::__construct();
//         echo "Child:__construct()";
//     }
// }


// $c = new Child();
// $c->display();



// 如何实现PHP的注入

// class Request
// {
//     public function url()
//     {
//         return "http://www.tp.com";
//     }
// }

// class Test
// {
//     public function index()
//     {
//         // echo $request->url();
        
//         echo "有参数调用";
//     }
    
//     public function data()
//     {
        
//     }
// }



// class App
// {
//     public static function run()
//     {
//         $t = new Test();
//         $q = new Request();
//         $t->index($q);
//     }
// }

// App::run();



// 方法注入

// class Request
// {
//     protected static $map = [];
    
//     public static function Hook($method, $func)
//     {
//         self::$map = [
//             $method=>$func
//         ];
//     }
    
//     private static $instance = null;
    
//     public static function Instance()
//     {
//         if(self::$instance == null)
//         {
//             self::$instance = new Request();
//         }
//         return self::$instance;
//     }
    
//     public function __call($method, $args)
//     {
//         call_user_func(self::$map[$method]);
//     }
// }



// function callbackfunction()
// {
//     echo "I am call back function";    
// }

// Request::Hook('newfunc', 'callbackfunction');
// Request::Instance()->newfunc();



// 动态实例化类对象

/**
 * 
 * 如何实现类似于thinkphp5的request注入功能
 * 
 * 1、对于Request必须使用单例模式避免每次调用都产生一个Request对象
 * 2、对于App类来说，可以通过解析控制器与方法来获取类名与方法名称，使
 * 用PHP个性化语法 new $className()与$obj->$method()即可实现类
 * 与方法的调用
 * 3、Request方法的注入，在入口文件实例化一个Request对象，然后每次调
 * 用控制器中的方法的时候就可以将Request对象传递给调用方法，即使调用方
 * 法中没有参数PHP的语法也仍然是可以实现调用的
 *
 */
// class test
// {
//     public function __construct()
//     {
//         echo "test construct()";
//     }
    
//     public function data(Request $request)
//     {
        
//         echo "test data();";
//         $request->write();
//     }
// }


// class Request
// {
//     private static $instance = null;
    
//     public static function instance()
//     {
//         if (self::$instance == null)
//         {
//             self::$instance  = new Request();
//         }
//         return self::$instance;
//     }
    
//     private function __construct()
//     {
        
//     }
    
//     public function write()
//     {
//         echo "request write url ... ";
//     }
    
// }

// $className = 'test';
// $method = 'data';
// $q = Request::instance();
// $c = new $className();
// $c->$method($q);



// class Test
// {
//     public function index()
//     {
//         echo "hello World!";
//     }
// }


// $t = new Test();
// $t->index("hello worlds");

// class WxReflectionTest
// {
//     public function index()
//     {
//         echo "Hello World!";
//     }
    
//     public function __construct()
//     {
        
//     }
// }

// $wf = new \ReflectionClass('WxReflectionTest');
// if($wf->hasMethod('index') == true)
// {
//     // $wf->getMethod('index').invoke();
//     $temp = $wf->getMethod('index');
//     $temp->invoke(new WxReflectionTest());
// }
// else
// {
//     echo "havent";
// }




// 函数指针与回调函数的使用方法

// function add($a, $b)
// {
//     return $a + $b;
// }

// function sub($a, $b)
// {
//     return $a - $b;
// }



 

// function wx_callback($str, $c)
// {
//     $c(strtoupper($str));
// }

// wx_callback('helloworld',function($t){
//     echo substr($t, 0, 3);
// });


