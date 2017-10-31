<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>试验田</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">开启导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AI EDU</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">项目</a></li>
                <li class="active"><a href="#">试验场 <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">发现 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">提问</a></li>
                        <li><a href="#">工作</a></li>
                        <li><a href="#">成员</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">认证</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">友情链接</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="问点什么呢">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">关于</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">我 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Charlie</a></li>
                        <li><a href="#">通知</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">2018 WEB技术试验场</h1>
        <p class="lead blog-description">前后端最新开发技术试验场，以及最佳实践。</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <h4>首页规划</h4>
            <pre>
首页三大区块，1 本项目目的区域，2 文档区域，3，解决的问题区域
【目的】
1。使用了最新的开发技术和流程进行开发。实验了各种新特性和新理念。
2。提供各种文档的快捷链接，方便国内开发者
3。提供各种新技术的试验文档。
4。创建讨论区，讨论一套真正开放和便捷的开发辅助站点。
</pre>
            <h4>重点项目</h4>
            <ol>
                <li>持续集成</li>
                <li>自动化测试</li>
                <li>文档自动分析</li>
                <li>系统日志</li>
                <li>分布式系统</li>
                <li>大数据接口</li>
                <li>人工智能接口</li>
                <li>IDE使用</li>
                <li>团队管理技巧</li>
                <li>源码管理技巧</li>
                <li>已有资源接入</li>
                <li>MAC合上也没有问题</li>
            </ol>
            <h4>日志</h4>
            <ol>
                <li>解决mac下没有安装xcode，但是在larave下npm install 时需要安装 xcode问题的方法 2017/10/31</li>
                <li>使用browersync后不自动同步的原因是，html中内容没有写在正确的地方，比如在html标签外输出了 <a
                            href="http://www.imooc.com/qadetail/191159?t=288847">链接</a></li>
                <li>默认的laravel增加了bootstrop-sass 的支持，可以直接用sass语法写样式了。 2017/10/31</li>
                <li>laravel 的 mix 工具包绝对是个前端好东西，封装了前端 webpake，sass，Grunt，Browsersync 等工具，神一样的存在。2017/10/31</li>
            </ol>
            <h4>phpstorm 2017 快捷键和甜点 [mac 系统]</h4>
            <ul>
                <li>查找文件 : 两次连击shift。</li>
                <li>格式化 : alt+command+l</li>
                <li>多行编辑 : 按住Alt键，再单击要编辑的位置。</li>
                <li>插入模版 : Settings>>Editor>>Live Templates $ENV_LOCALE$ date()</li>
                <li>删除空行 : command+r 选中 Match Case和Regex 搜索^\n  > 【Replace all】</li>
                <li>Ctrl + G : 跳到当前打开文件的行，输入格式（行数:列数）</li>
                <li>Ctrl + E : 打开最近编辑的文件列表</li>
                <li>Ctrl + P : 显示函数的参数信息</li>
                <li>Ctrl + Q : 快速打开函数的说明文档信息</li>
                <li>Ctrl + 鼠标滑过 : 显示函数的简单参数信息</li>
                <li>Ctrl + / : 注释或者取消注释选中的行</li>
                <li>Ctrl + Shift + / : 注释或者取消注释选中的代码块</li>
                <li>Ctrl + W : 选中光标所在的单词</li>
                <li>Ctrl + Shift + W : 反选中光标所在的单词</li>
                <li> Tab / Shift + Tab : 向右/向左缩进</li>
                <li>Ctrl + X : 剪切当前行或者当前选中的内容块</li>
                <li>Ctrl + C : 复制当前行或者当前选中的内容块</li>
                <li>Ctrl + V : 粘贴剪切板的内容到当前位置</li>
                <li>Ctrl + Shift + V : 从最近的剪切板选择内容粘贴到当前位置</li>
                <li>Ctrl + D : 复制粘贴当前行或者当前选中内容</li>
                <li>command + delete : 删除光标所在行</li>
                <li>Ctrl + Shift + J : 光标所在位置的下一行追加到本行末尾</li>
                <li>Ctrl + Enter : 自动拆分行，自动缩进（光标在代码行首）</li>
                <li>Shift + Enter : 自动新开下一行</li>
                <li>Ctrl + Shift + U : 自动转换光标所在单词或者选中内容的大小写</li>
                <li>Ctrl + Shift + ] / [ : 匹配代码块的首位结合地方</li>
                <li>Ctrl + Delete : 删除光标所在位置到单词末尾的内容</li>
                <li>Ctrl + Backspace : 删除光标所在位置到单词首位置的内容</li>
                <li>Ctrl + NumPad+/- : 展开或者收缩代码块</li>
                <li>Ctrl + Shift + NumPad+ : 展开所有代码块</li>
                <li>Ctrl + Shift + NumPad- : 收缩所有代码块</li>
                <li>Ctrl + F4 : 关闭当前文件</li>
                <li>Ctrl + F : 根据关键词查找</li>
                <li>F3 : 查找下一个位置</li>
                <li>Shift + F3 : 回到上一个查找位置</li>
                <li>Ctrl + R : 替换</li>
                <li>Ctrl + Shift + F : 在指定路径中查找</li>
                <li>Ctrl + Shift + R : 在指定路径中替换</li>
                <li>Alt + F7 : 项目中查找当前光标所在函数的使用情况</li>
                <li>Ctrl + F7 : 当前中查找当前光标所在函数的使用情况</li>
                <li>Ctrl + Shift + F7 : 高亮当前函数在当前文件的使用情况</li>
                <li>Ctrl + Alt + F7 : 展示当前函数在项目中的使用情况</li>
                <li>Ctrl + Shift + N : 根据关键词查找当前项目中的文件路径（常用）</li>
                <li>项目树形列表中选中情况下:</li>
                <li>F5 : 复制当前选中</li>
                <li>F6 : 移动当前选中</li>
                <li>Alt + Delete : 安全删除当前选中</li>
                <li>Shift + F6 : 重命名当前选中</li>
                <li>版本与历史</li>
                <li>Alt + BackQuote (`) : 快速打开版本管理</li>
                <li>Ctrl + K : 提交当前项目到版本管理</li>
                <li>Ctrl + T : 更新当前项目到版本管理</li>
                <li>Alt + Shift + C : 查看最近时间更改的情况</li>
            </ul>
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <h4>文档区 (2017/10/31)</h4>
            <ol>
                <li><a target="_blank" href="/laravel55/docs/laravel55/docs/5.5.html">Laravel 5.5</a></li>
                <li><a target="_blank" href="http://www.phpcomposer.com/">Composer</a></li>
                <li><a target="_blank" href="https://cn.vuejs.org/v2/guide/index.html">Vue</a></li>
                <li><a target="_blank" href="https://doc.react-china.org/">React</a></li>
                <li><a target="_blank" href="https://www.sass.hk/">Sass</a></li>
                <li><a target="_blank" href="http://v3.bootcss.com/">Bootstrap 3</a></li>
                <li><a target="_blank" href="http://www.gruntjs.net/">Grunt</a></li>
                <li><a target="_blank" href="https://doc.webpack-china.org/">Webpack</a></li>
                <li><a target="_blank" href="http://www.redis.net.cn/">Redis</a></li>
                <li><a target="_blank" href="http://git.oschina.net/progit/">Git</a></li>
                <li><a target="_blank" href="http://www.w3school.com.cn/tags/index.asp">HTML5</a></li>
                <li><a target="_blank" href="https://psr.phphub.org/">PHP7 规范</a></li>
                <li><a target="_blank" href="http://www.appinn.com/markdown/index.html">Markdown</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>