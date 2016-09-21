<?php if (!defined('THINK_PATH')) exit();?>var_dump(exception 'Think\Exception' with message '1062:Duplicate entry 'a' for key 'username'
 [ SQL语句 ] : INSERT INTO `user` (`username`,`password`) VALUES ('a','')' in F:\project\TJUNSA-CTF\Application\Runtime\common~runtime.php:1
Stack trace:
#0 F:\project\TJUNSA-CTF\ThinkPHP\Library\Think\Db\Driver.class.php(350): E('1062:Duplicate ...')
#1 F:\project\TJUNSA-CTF\ThinkPHP\Library\Think\Db\Driver.class.php(237): Think\Db\Driver->error()
#2 F:\project\TJUNSA-CTF\ThinkPHP\Library\Think\Db\Driver.class.php(824): Think\Db\Driver->execute('INSERT INTO `us...', false)
#3 F:\project\TJUNSA-CTF\ThinkPHP\Library\Think\Model.class.php(320): Think\Db\Driver->insert(Array, Array, false)
#4 F:\project\TJUNSA-CTF\Application\Home\Controller\IndexController.class.php(13): Think\Model->add()
#5 [internal function]: Home\Controller\IndexController->register()
#6 F:\project\TJUNSA-CTF\Application\Runtime\common~runtime.php(1): ReflectionMethod->invoke(Object(Home\Controller\IndexController))
#7 F:\project\TJUNSA-CTF\Application\Runtime\common~runtime.php(1): Think\App::invokeAction(Object(Home\Controller\IndexController), 'register')
#8 F:\project\TJUNSA-CTF\Application\Runtime\common~runtime.php(1): Think\App::exec()
#9 F:\project\TJUNSA-CTF\ThinkPHP\Library\Think\Think.class.php(120): Think\App::run()
#10 F:\project\TJUNSA-CTF\ThinkPHP\ThinkPHP.php(97): Think\Think::start()
#11 F:\project\TJUNSA-CTF\index.php(24): require('F:\\project\\TJUN...')
#12 {main})