较之thinkphp,yii,ci,zf,larvale等,最终选择yaf!<br>
制定如下:<br>
针对中小型公司推荐框架 --- taoEasyyaf!<br>
针对大中型公司(web与service分离，分布mysql，分布redis，分布memcache...swoole...)推荐框架 -- taoHardyaf!<br>
针对移动端接口（支持rewrite/cli/restful）推荐框架 --taoApiyaf<br>
最后申明代码中很多有借鉴成分,感谢开源,感谢你!<br>


重要说明<br>
1.yaf里面除了lib和全局lib外，其他均只能使用自己的yaf命名空间。<br>
2.yaf的model部分可以支持多目录结构 例如 School_Student_V1_CatModel 对应的目录 =》 Models/Schoole/Student/V1/Cat.php<br>


<b>taoApiyaf说明</b><br>
此框架为主要提供接口服务的框架，支持cli，http访问的可自定义路由且支持restful风格多返回格式（json,html,jsonp,xml...）<br>


2015/11/12<br>
支持restful<br>
1.配置在config/route.php<br>
2.考虑到接口一般供给移动端使用，则会存在移动端版本各异的情况，则需要维护至少3个版本的api的处理。<br>

Models

    School                      // 模块
        Student.php             // 子模块
        V1
            Student.php         // V1 子模块
        V2
            Student.php         // V2 子模块
        Teacher
            Index.php
            V1
                Index.php

说明一点，所有子版本的的逻辑程序均会相应继承对应的上一级父程序。<br>


2015/11/11<br>
cli下访问<br>
view /data/program/php/bin/php ./apiyaf/public/index.php request_uri="/index/index" "env=dev&aaa=a&bbb=b"<br>
获取变量 直接$GLOBALS这样来获取。<br>

http下访问<br>
1.原生访问 /index/cat/show/id/1  => controllers/Cat.php/showAction => $this->getRequest()->getParam("id");<br>
2.restful访问<br>
array("get", "/cat/:id", "index", "cat", "show"), // --> /cat/1   <=> /index/cat/show/id/1<br>
array("get", "v1/school/getStudent", "index", "v1", "index"), // --> /v1/school/getStudent <=> /index/v1/index <br>


2015/09/15<br>
1.初始化yaf框架<br>
2.新增smarty模板视图<br>
3.新增类似Benchmark性能调试插件;同时优化该配置更智能更人性化<br>
