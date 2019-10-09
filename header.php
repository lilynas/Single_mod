<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('含关键词 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php if($this->options->favicon): ?>
    <link rel="icon" href="<?php $this->options->favicon() ?>" sizes="192x192"/>
<?php else: ?>
    <link rel="icon" href="<?php $this->options->themeUrl('img/icon.png'); ?>" sizes="192x192"/>
<?php endif; ?>
<?php if($this -> options -> cdn_set == '0'): ?>
    <link href="<?php $this->options->themeUrl('css/kico.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this->options->themeUrl('css/single.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>
    <script defer src="https://tuchuang-1251952583.file.myqcloud.com/release/js/all.js"></script>
<?php else: ?>
    <link href="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Single/css/kico.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Single/css/single.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<?php endif; ?>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
<?php if ($this->options->background): ?>
    <style>body:before{content: ''; background-image: url(<?php $this->options->background() ?>)}</style>
<?php endif; ?>
<?php if ($this->options->custom_css): ?>
    <style><?php $this->options->custom_css() ?></style>
<?php endif; ?>
    <meta property="og:site_name" content="<?php $this->options->title(); ?>">
    <meta property="og:title" content="<?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('含关键词 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        )); ?>"/>
<!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<![endif]-->
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
</head>
<body>
<header>
    <div class="head-title">
    <a href="<?php $this->options ->siteUrl(); ?>"><h4><?php $this->options->title() ?></h4></a>
    </div>
    <div class="toggle-btn"></div>
    <div class="light-btn"></div>
    <div class="search-btn"></div>
    <form class="head-search" method="post" action="">
        <input type="text" name="s" placeholder="搜索什么？">
    </form>
    <ul class="head-menu">
        <li><a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"> <i class="fas fa-home"></i>&nbsp;首页</a></li>
        <li><a href="<?php $this->options->siteUrl('member.php'); ?>"><i class="fas fa-user-circle"></i>&nbsp;会员中心</a></li>
        <li class="has-child">
            <a><i class="fas fa-list-ul"></i>&nbsp;分类</a>
            <ul class="sub-menu">
                <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
            </ul>
        </li>
      <li class="has-child">
            <a><i class="fas fa-heart"></i>&nbsp;赞赏一下！</a>
            <ul class="sub-menu">
              <a href="https://pay.nevous.com" target="_blank"><img src="https://tuchuang-1251952583.file.myqcloud.com/pic/nevous/qrcode.png" alt="pay.png" border="0" /></a>
        </ul>
      </li>
        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
</header>