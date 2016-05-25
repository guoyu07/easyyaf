<?php
/**
 * Redis 配置
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * 
 * @author taozy.wu<taozy.wu@qq.com>
 * @copyright taozy.wu<taozy.wu@qq.com>
 * @link http://www.github.com/taozywu
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
return  array('nodes' => array(
        array('master' => "192.168.20.95:6379", 'slave' => "192.168.20.95:6379"),
        array('master' => "192.168.20.95:6379", 'slave' => "192.168.20.95:6379"),

        ),
        'db' => 0
);
