<?php /* Smarty version Smarty-3.1.7, created on 2016-05-25 23:11:57
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\modules\index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:223275745bee66385e5-69474461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0285767299c4fe40acca69e5716a88550f1eac6' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\modules\\index\\login.html',
      1 => 1464188902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223275745bee66385e5-69474461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5745bee664416',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745bee664416')) {function content_5745bee664416($_smarty_tpl) {?>
<div class="wrapper site-header clearfix">
    <div class="float-left site-logo">
        <a href="http://www.haodian8.com/"><img id="logo-img" alt="" src="/img/logo@2x.png" width="76" height="21"></a>
    </div>
    <div class="float-right site-account">
            <div class="float-left site-login"><a class="white" href="http://www.haodian8.com/account/login?returnurl=%2faccount%2flogin%3freturnurl%3d%252f" style="height: 46px;">登录</a></div>
    <div class="float-right site-register"><a class="white" href="http://www.haodian8.com/account/register?returnurl=%2faccount%2flogin%3freturnurl%3d%252f" style="height: 46px;">注册</a></div>

    </div>
    <div class="float-left site-nav">
        <ul class="list-inline">
            <li class="site-nav-item"><a href="http://www.haodian8.com/shop/selected">精选好店</a></li>
            <li class="site-nav-item"><a href="http://www.haodian8.com/shop/hot">热门</a></li>
            <li class="site-nav-item site-nav-item-mega">
                <a href="javascript:void(0);">
                    全部店铺<i class="iconfont"> </i>
                </a>
                <div class="mega-nav">
                    <ul class="list-block">
                        <li class="title">美丽着装</li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7011211">女装</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6851886">女鞋</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6373911">内衣</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7170536">配饰</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat5895936">大小箱包</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6692561">男装</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6533236">男鞋</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat5417961">爱美丽</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat5577286">爱运动</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6055261">家有宝贝</a></li>
                    </ul>
                    <ul class="list-block">
                        <li class="title">多彩生活</li>
                        <li><a href="http://www.haodian8.com/shop/all/cat6214586">居家生活</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat5258636">吃很重要</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7329861">手机数码</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat5736611">大电器</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7648511">家具家饰</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat8285811">家纺</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7967161">园艺绿植</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7807836">工艺陶瓷</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat7489186">文娱</a></li>
                        <li><a href="http://www.haodian8.com/shop/all/cat8126486">营养保健</a></li>
                    </ul>
                </div>
            </li>
            <li class="site-nav-item"><a href="http://www.haodian8.com/product/list">单品</a></li>
            <li class="site-nav-item mobile-search-icon"><a href="javascript:void(0);"><i class="iconfont">  </i></a></li>
        </ul>
    </div>
    <div class="float-left site-search">
        <span><i class="iconfont">  </i><input readonly="readonly" type="text" placeholder="点击搜索..."></span>
    </div>

</div>




<!-- 登录 -->
<form action="http://www.haodian8.com/account/login?returnurl=%2f" method="post" novalidate="novalidate">    <div class="wrapper page-account">
        <h1>- 登录 好店8 -</h1>
        <div class="page-account-content">
            <div class="page-account-content-left float-left">
                <table style="margin-top:25px;">
                    <tbody><tr>
                        <td>
                            <input class="txt" data-val="true" data-val-required="请输入用户名" id="UserName" name="UserName" placeholder="用户名 或 Email" type="text" value="">
                            <span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="txt" data-val="true" data-val-required="请输入密码" id="Password" name="Password" placeholder="密码" type="password">
                            <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="check-box" data-val="true" data-val-required="记住登录状态? 字段是必需的。" id="RememberMe" name="RememberMe" type="checkbox" value="true"><input name="RememberMe" type="hidden" value="false">
                            <label class="tip" for="RememberMe">记住登录状态?</label>
                            <span class="field-validation-valid" data-valmsg-for="RememberMe" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="txt btn-submit btn-submit-mini" type="submit" value="登录">&nbsp;&nbsp;<a href="http://www.haodian8.com/account/forgetpassword">忘记密码？</a>
                        </td>
                    </tr>
                </tbody></table>
                
            </div>
            <div class="page-account-content-right float-right">
                <a class="first" href="https://oauth.taobao.com/authorize?response_type=code&amp;client_id=21565374&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=taobao"><i class="iconfont taobao"></i>使用淘宝账号登录</a><a href="https://api.weibo.com/oauth2/authorize?response_type=code&amp;client_id=1051430212&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=sinaweibo"><i class="iconfont weibo"></i>使用微博账号登录</a><a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&amp;client_id=100478530&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=qq"><i class="iconfont qq"></i>使用QQ账号登录</a>
            </div>
        </div>
        <div class="page-account-more">
            <p>
                需要注册一个站内账号吗？<a href="http://www.haodian8.com/account/register">请注册</a>
            </p>
        </div>
    </div>
</form>

 <div class="search-box">

    <h3 class="clearfix">搜索商品：</h3>
<form action="http://www.haodian8.com/product/list/0" method="get"><input class="txt" id="s" name="s" placeholder="输入搜索关键字..." type="text" value=""><input id="r" name="r" type="hidden" value="0">        <button class="btn-search btn-submit"><i class="iconfont">  </i></button>
</form>
    <h3 class="clearfix h3-hot-keyword">热搜关键字：</h3>
    <div class="hot-keyword">
        <ul class="list-inline">
            <li><a href="http://www.haodian8.com/product/list?s=%E8%BF%9E%E8%A1%A3%E8%A3%99&amp;r=0">连衣裙</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E8%83%8C%E5%B8%A6%E8%A3%99&amp;r=0">背带裙</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E5%90%8A%E5%B8%A6&amp;r=0">吊带</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E7%9F%AD%E8%A3%A4%E5%A5%B3&amp;r=0">短裤 女</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=t%E6%81%A4%E5%A5%B3&amp;r=0">t恤 女</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E7%89%9B%E4%BB%94%E8%A3%A4%E5%A5%B3&amp;r=0">牛仔裤 女</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E5%B0%8F%E7%99%BD%E9%9E%8B&amp;r=0">小白鞋</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E4%BD%8E%E5%B8%AE%E9%9E%8B&amp;r=0">低帮鞋</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=t%E6%81%A4%20%E7%94%B7&amp;r=0">T恤 男</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E6%89%8B%E6%9C%BA%E5%A3%B3&amp;r=0">手机壳</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E4%B8%89%E5%8F%AA%E6%9D%BE%E9%BC%A0&amp;r=0">三只松鼠</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E6%B2%99%E5%8F%91&amp;r=0">沙发</a></li>
            <li><a href="http://www.haodian8.com/product/list?s=%E5%AE%9E%E6%9C%A8&amp;r=0">实木</a></li>
        </ul>
    </div>
    <h3 class="clearfix">搜索店铺：</h3>
<form action="http://www.haodian8.com/dian" method="get"><input class="txt" id="q" name="q" placeholder="输入搜索关键字..." type="text" value="">        <button class="btn-search btn-submit"><i class="iconfont">  </i></button>
</form>
</div>
<div class="grid grid-pad footer">
    <div class="col-1-2">
        <p>© 2016 <a class="gray" href="http://www.haodian8.com/">haodian8.com</a> <a class="gray" href="http://www.haodian8.com/dian">好多店铺</a> 沪ICP备09012068号</p>
    </div>
    <div class="col-1-2 footer-contact">
        <p>联系我们：<span id="contact-email">hi@haodian8.com</span></p>
    </div>
</div>



<script src="/img/site"></script>



<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>