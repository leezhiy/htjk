<?php
namespace app\index\controller;
use think\Controller;

class Online extends Common
{
    //首页
    public function index()
    {
        return view('index');
    }

}