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