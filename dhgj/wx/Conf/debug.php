<?php

return  array(
    'LOG_RECORD'=>true,  // 进行日志记录
    'LOG_EXCEPTION_RECORD'  => true,    // 是否记录异常信息日志
    'LOG_LEVEL'       =>   'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',  // 允许记录的日志级别
    'DB_FIELDS_CACHE'=> false, // 字段缓存信息
    'APP_FILE_CASE'  =>   true, // 是否检查文件的大小写 对Windows平台有效
    'TMPL_CACHE_ON'    => false,        // 是否开启模板编译缓存,设为false则每次都会重新编译
    'TMPL_STRIP_SPACE'      => false,       // 是否去除模板文件里面的html空格与换行
    'SHOW_ERROR_MSG'        => true,    // 显示错误信息
	'SHOW_RUN_TIME' => false,
    'SHOW_PAGE_TRACE' => true,
);