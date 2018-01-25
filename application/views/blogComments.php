<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <title>Johnny的博客 - SYSIT个人博客</title>
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" href="assets/css/space2011.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.css" media="screen">
	<script type="text/javascript" src="assets/js/jquery-1.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery_002.js"></script>
	<script type="text/javascript" src="assets/js/oschina.js"></script>

	<style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
	<div id="OSC_Banner">
		<div id="OSC_Slogon"><?php $user = $this->session->userdata('user');
			if(isset($user)){
				echo $user->username."'s Blog";
			}?></div>
		<div id="OSC_Channels">
			<ul>
				<li><a href="#" class="project"><?php if(isset($user)){echo $user->mood;}?></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
		<div id="VisitorInfo">
			当前访客身份：
			<?php
			if(isset($user)){
				echo $user->username;
				?>
				<a href='user/logout'>退出</a>
			<?php }else{?>
				游客 [ <a href="user/login">登录</a> | <a href="user/reg">注册</a> ]
			<?php }?>
			<span id="OSC_Notification">
			<a href="inbox.htm" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
					</span>
		</div>
		<div id="SearchBar">
    		<form action="#">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content">
<div id="AdminScreen">
    <div id="AdminPath">
        <a href="index_logined.htm">返回我的首页</a>&nbsp;»
    	<span id="AdminTitle">管理首页</span>
    </div>
    <div id="AdminMenu"><ul>
	<li class="caption">个人信息管理		
		<ol>
			<li><a href="inbox.htm">站内留言(0/1)</a></li>
			<li><a href="profile.htm">编辑个人资料</a></li>
			<li><a href="chpwd.htm">修改登录密码</a></li>
			<li><a href="userSettings.htm">网页个性设置</a></li>
		</ol>
	</li>		
</ul>
<ul>
	<li class="caption">博客管理	
		<ol>
			<li><a href="welcome/newBlog">发表博客</a></li>
			<li><a href="welcome/blog_catalog">博客设置/分类管理</a></li>
			<li><a href="welcome/blogs">文章管理</a></li>
			<li class="current"><a href="welcome/blog_comments">博客评论管理</a></li>
		</ol>
	</li>
</ul>
</div>
    <div id="AdminContent">
<div class="MainForm BlogCommentManage">
  <h3>共有 3 篇博客评论，每页显示 20 个，共 1 页</h3>
  <ul>
	  <?php foreach ($result as $item) {?>
		<li id="cmt_24027_154693_261665734" class="row_1">
		<span class="portrait"><a href="#" target="_blank"><img src="assets/images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>
		<span class="comment">
		<div class="user"><b><?php echo $item->username?></b> 评论了 <a href="welcome/blog_detail?id=<?php echo $item->article_id?>" target="_blank"><?php echo $item->title?></a></div>
		<div class="content"><p><?php echo $item->content?></p></div>
		<div class="opts">
			<span style="float:right;">
			<a href="javascript:delete_c_by_id(24027,154693,261665734)">删除</a> |
			<a href="javascript:delete_c_by_user(154693)">删除此人所有评论</a>
			</span>
			<?php echo $item->post_date?>
		</div>
		</span>
		<div class="clear"></div>
	</li>
<?php }?>
	  </ul>
</div>
<script type="text/javascript">

</script></div>
	<div class="clear"></div>
</div>

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>


</body></html>