<?php
$this->registerCssFile('/static/css/technology/teacDetail.css');
?>
<article class="blogs">
    <div class="index_about">
        <h2 class="c_titile"><?=$articleModle->title?></h2>
        <p class="box_c"><span class="d_time">发布时间：<?=$articleModle->create_time?></span><span>编辑：张强</span><span><a href="javascript:;"></a></span></p>
        <ul class="infos">
	        <?=$articleModle->articleExtend->content?>
        </ul>
        <div class="keybq">
            <p><span>关键字词</span>：<?=$articleModle->keywords?></p>

        </div>
        <div class="ad"> </div>
        <div class="nextinfo">
<!--            <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>-->
<!--            <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>-->
        </div>
<!--        <div class="otherlink">-->
<!--            <h2>相关文章</h2>-->
<!--            <ul>-->
<!--                <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>-->
<!--                <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>-->
<!--                <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>-->
<!--                <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>-->
<!--                <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>-->
<!--                <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
    <aside class="right">
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
        </script>
        <!-- Baidu Button END -->
        <div class="blank"></div>
        <div class="news">
	        <?php
	        if( isset( $newArticleList ) && is_array( $newArticleList ) ):
		        ?>
                <h3>
                    <p>最新<span>文章</span></p>
                </h3>
                <ul class="rank">
			        <?php
			        foreach ( $newArticleList as $list ):
				        ?>
                        <li><a href="/blog/blog/detail?article_id=<?= $list->id ?>" title="<?= $list->title ?>"
                               ><?= $list->title ?></a></li>
			        <?php endforeach; ?>
                </ul>
	        <?php endif; ?>
<!--            <h3 class="ph">-->
<!--                <p>点击<span>排行</span></p>-->
<!--            </h3>-->
<!--            <ul class="paih">-->
<!--                <li><a href="/" title="Column 三栏布局 个人网站模板" >Column 三栏布局 个人网站模板</a></li>-->
<!--                <li><a href="/" title="withlove for you 个人网站模板" >with love for you 个人网站模板</a></li>-->
<!--                <li><a href="/" title="免费收录网站搜索引擎登录口大全" >免费收录网站搜索引擎登录口大全</a></li>-->
<!--                <li><a href="/" title="做网站到底需要什么?" >做网站到底需要什么?</a></li>-->
<!--                <li><a href="/" title="企业做网站具体流程步骤" >企业做网站具体流程步骤</a></li>-->
<!--            </ul>-->
        </div>
        <div class="visitors">
<!--            <h3>-->
<!--                <p>最近访客</p>-->
<!--            </h3>-->
<!--            <ul>-->
<!--            </ul>-->
        </div>
    </aside>
</article>
