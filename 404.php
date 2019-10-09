<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
    <div class="wrap">
        <div class="error-page">
            <h2>404</h2>
            <p>找不到页面啦！</p>
         <h3>点击<a href="<?php $this->options->siteUrl(); ?>">这里</a>回到首页</h3>
            <img src="<?php $this->options->themeUrl('img/404.png'); ?>"/>
          </br>
        </div>
    </div>
</main>

<?php $this->need('footer.php'); ?>