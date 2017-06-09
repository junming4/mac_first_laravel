#mac laravel 第一个测试
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
    1)、安装全文索引这个东西，laravel/scout
      安装Elasticsearch
      `scout`本身不支持Elasticsearch.php 需要安装其他插件整合一下
        composer require elasticsearch/elasticsearch
        composer require tamayo/laravel-scout-elastic
        并且引入数据
#加入中文数据
    svn export https://github.com/caouecs/Laravel-lang/trunk/src/zh-CN resources/lang/zh-CN 
#现在先测试功能以后在进行，剥离这一块的模型
