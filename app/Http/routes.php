<?php

Route::get('dashboard','PagesController@dashboard');
Route::get('basic','PagesController@basic');

Route::get('mail_test', function()
{
    // 傳送給郵件view的變數資料
    $template_data = array(
        'name'=> 'Tako'
    );
    // 收件者資料
    $userinfo = array(
        'email'=>'nfs1atako@gmail.com',
        'subject'=>'歡迎使用 Laravel Mail!'
    );
    // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
    Mail::send('emails.test', $template_data, function($message) use ($userinfo)
    {
        $message->to('yianccc@gmail.com')->subject('歡迎使用 Laravel Mail!');
    });
    echo '完成寄送!!';
});

