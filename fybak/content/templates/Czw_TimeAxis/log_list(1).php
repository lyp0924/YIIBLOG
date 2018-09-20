<?php 
/**
 * 站点图文列表模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 

?>
<article>
<div class="container">
    <h2 class="ctitle"><b><?php echo $sortName;?></b> <span><?php sortde($sortid);?></span></h2>
    <div class="rnav">
        <ul>
            <?php echo widget_sort('');?>
        </ul>
    </div>
    <div class="blog" data-scroll-reveal="enter top" >
        <?php 
        if (!empty($logs)):
        foreach($logs as $value): 
        ?>
        <?php
    	if(getThumbnailqwe($value['logid'])){
    		$imgurl = getThumbnailqwe($value['logid']);
    	}elseif(pic_thumb($value['excerpt'])){
    		$imgurl = pic_thumb($value['excerpt']);
    	}else{
    		$imgurl = TEMPLATE_URL.'images/random/'.rand(4,8).'.jpg';
    	}
        ?>
            <figure>
            <ul>
              <a href="<?php echo $value['log_url']; ?>"><img src="<?php echo $imgurl;?>"><span>查看文章</span></a>
            </ul>
            <p><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></p>
            <figcaption><?php echo subString(strip_tags($value['content']),0,130,"..."); ?></figcaption>
            </figure>
        <?php 
        endforeach;
        else:
        ?>
        	<h2>未找到</h2>
        	<p>抱歉，没有符合您查询条件的结果。</p>
        <?php endif;?>
    </div>
    <div class="page"><?php echo $page_url;?></div>
</div>

</article>
<style>
/* blog */
.blog { margin: 30px 20px; overflow: hidden }
.blog figure { background: #ececec; border: #FFF 10px solid; width: 270px; height: 425px; float: left; margin: 0 8px 20px; overflow: hidden }
.blog figure img { display: block; margin: auto; height: 256px; overflow: hidden; }
.blog figure p { font-size: 14px; text-shadow: #fff 1px 1px 0px; line-height: 26px; text-align: center; font-weight: bold }
.blog figure p a { color: #226039; }
.blog figure figcaption { padding: 10px; line-height: 22px; color: #666; }
.blog figure ul { background: url(../images/yu.png) no-repeat center; overflow: hidden; height: 256px; margin-bottom: 20px }
.blog figure ul span { opacity: 0 }
.blog figure ul:hover span { opacity: 1 }
.blog figure ul a { position: relative; display: block }
.blog figure ul span { position: absolute; left: 0px; top: 0px; background: rgba(0,0,0,0.5) url(../images/yu.png) no-repeat center 10px; color: #FFF; display: block; width: 100%; height: 100%; line-height: 256px; text-align: center; -webkit-transition: all 0.5s; -moz-transition: all 0.5s; -o-transition: all 0.5s; -ms-transition: all 0.5s; text-decoration: underline }
</style>
<?php
 include View::getView('footer');
?>