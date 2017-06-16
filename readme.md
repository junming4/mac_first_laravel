#make easy to use laravel 
#redis 和 cache 去操作redis 区别
    
            //测试通过，redis 操作方式，不用填写时间
            echo Redis::set('name','woooo');
            echo Redis::get('name');
    
            //cache 方式操作,需要填写分钟日期，否则无法保存到redis中
            if(!Cache::has('name')){
                Cache::put('name','test',10);
            }
            return Cache::get('name');
#这里实现这个东西主要是为了，方便自己以后构建后台和使用
    _1)_、安装全文索引这个东西，laravel/scout
      安装Elasticsearch
      `scout`本身不支持Elasticsearch.php 需要安装其他插件整合一下
        composer require elasticsearch/elasticsearch
        composer require tamayo/laravel-scout-elastic
        并且引入数据
#加入中文数据
    svn export https://github.com/caouecs/Laravel-lang/trunk/src/zh-CN resources/lang/zh-CN
#加入表注释插件
     zedisdog/laravel-schema-extend
#现在先测试功能以后在进行，剥离这一块的模型
    npm install
    npm run dev 
    
#添加自定义函数
        在 "psr-4"后面加
        "files": [
            "App/Helpers/functions.php"
        ]
       这里需要，运行一下composer
       composer dump-autoload 
#让观察者多一个目录出来：
        ##app/Observers
        ##目前文件： app/Observers/UserObserver.php【
        ##需要在app/Providers/EventServiceProvider.php】添加文件：User::observe(new UserObserver());
# 安装mongodb 插件jenssegers/laravel-mongodb
       https://github.com/jenssegers/laravel-mongodb****
       存在一个案例：
       app/Models/TestMongo.php
# 安装 队列插件 vladimir-yuldashev/laravel-queue-rabbitmq:5.4
    
# 安装 队列表：
    php make:job TestJob 目录在 job中
    php artisan queue:table
#创建加权限后台分支:addRole 2017/05/16   
    