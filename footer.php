<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer>
    <div class="buttons">
        <a class="to-top" href="#"></a>
    </div>
    <div class="wrap min">
<?php if($this -> options -> widget_set == '1'): ?>
        <section class="widget">
            <div class="row">
                <div class="col-m-4">
                    <h3 class="title-recent">最新文章：</h3>
                    <ul>
                        <?php $this -> widget('Widget_Contents_Post_Recent', 'pageSize=6') -> parse('<li><a href="{permalink}" target="_blank">{title}</a></li>'); ?>
                    </ul>
                </div>
                <div class="col-m-4">
                    <h3 class="title-date">时光机：</h3>
                    <ul>
                        <?php $this -> widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月&limit=6') -> parse('<li><a href="{permalink}" rel="nofollow" target="_blank">{date}</a></li>'); ?>
                    </ul>
                </div>
                <div class="col-m-4">
                    <h3 class="title-comments">最近评论：</h3>
                    <ul>
                        <?php $this -> widget('Widget_Comments_Recent', 'pageSize=6') -> to($comments); ?>
                        <?php while($comments -> next()): ?>
                            <li><?php $comments -> author(false); ?>: <a href="<?php $comments -> permalink(); ?>" rel="nofollow" target="_blank"><?php $comments -> excerpt(10, '...'); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </section>
<?php endif; ?>
        <section class="sub-footer">
          <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="知识共享许可协议" style="border-width:0" src="https://tuchuang-1251952583.file.myqcloud.com/2019/08/04/5d45b4119e8de.png" /></a><br /><p><i class="fab fa-creative-commons"></i>&nbsp;通过<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">BY-NC-SA 4.0</a>进行许可
      <br />      © <?php echo date('Y'); ?> <a href="<?php $this -> options -> siteUrl() ?>"><?php $this -> options -> title() ?></a>. All Rights Reserved. Theme By <a href="https://github.com/Dreamer-Paul/Single" target="_blank" rel="nofollow">Single</a>.&nbsp;|&nbsp;⭐可喜可贺！本站已经运行<?php getBuildTime(); ?>了！⭐</p> 
        </section>
    </div>
</footer>

<?php if($this -> options -> cdn_set == '0'): ?>
<script src="<?php $this->options->themeUrl('js/kico.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/single.js'); ?>"></script>

<?php else: ?>
<script src="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Single/js/kico.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Single/js/single.js"></script>
<?php endif; ?>
<script>var single = new Single_Theme({copyNotice: <?php if ($this->options->copy_notice == 1): ?>true<?php else: ?>false<?php endif; ?>, toggleNight: <?php if ($this->options->night_mode == 1): ?>true<?php else: ?>false<?php endif; ?>});</script>
<?php $this -> options -> custom_script() ?>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script>var scroll = new SmoothScroll('.to-top, .article-list a', {offset: 100});</script>
<?php $this -> footer(); ?>
<script type="text/javascript"> 
/* 鼠标特效 */
var a_idx = 0; 
jQuery(document).ready(function($) { 
    $("body").click(function(e) { 
        var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正" ,"法治", "爱国", "敬业", "诚信", "友善"); 
        var $i = $("<span/>").text(a[a_idx]); 
        a_idx = (a_idx + 1) % a.length; 
        var x = e.pageX, 
        y = e.pageY; 
        $i.css({ 
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999, 
            "top": y - 20, 
            "left": x, 
            "position": "absolute", 
            "font-weight": "bold", 
            "color": "#ff6651" 
        }); 
        $("body").append($i); 
        $i.animate({ 
            "top": y - 180, 
            "opacity": 0 
        }, 
        1500, 
        function() { 
            $i.remove(); 
        }); 
    }); 
}); 
</script>
</body>
</html>