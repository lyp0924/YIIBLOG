<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
    
    $arr = explode(',',_g('indextop_sortop'));
    //print_r ($arr);
    $isin = in_array($sortid,$arr);
    if($isin){
        require_once View::getView('log_list(1)');
        exit();
    }

?>
<article>
    <div class="container">
        <?php if(blog_tool_ishome() == true):?>
        <div class="blog" data-scroll-reveal="enter top" >
            <?php echo sortop(3,'sortop');?>
        </div>
        <?php else:?>
            <?php if ($params[1]=='sort'){ ?>
                <h2 class="ctitle"><b><?php echo $sortName;?></b> <span><?php sortde($sortid);?></span></h2>
            <?php }elseif ($params[1]=='tag'){ ?>
                <h2 class="ctitle">包含标签 <b><?php echo urldecode($params[2]);?></b> 的所有文章</h2>
            			
            <?php }elseif($params[1]=='author'){ ?>
        		<h2 class="ctitle">作者 <b><?php echo blog_author($author);?></b> 的所有文章</h2>	
            <?php }elseif($params[1]=='keyword'){ ?>
                <h2 class="ctitle">搜索 <b><?php echo urldecode($params[2]);?></b> 的结果</h2>
            <?php }else{?><?php }?>
        <?php endif;?>
        
        <div class="rnav">
            <ul>
                <?php echo widget_sort('');?>
            </ul>
        </div>
        
        
        <?php doAction('index_loglist_top'); ?>
        <ul class="cbp_tmtimeline">
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
                <li>
                <time class="cbp_tmtime">
                    <span><?php echo gmdate('n', $value['date']); ?>-<?php echo gmdate('j', $value['date']); ?></span> 
                    <span><?php echo gmdate('Y', $value['date']); ?></span>
                </time>
                <div class="cbp_tmicon"></div>
                <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
                    <h2><?php topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:''); ?><?php echo $value['log_title']; ?></h2>
                    <p><span class="blogpic"><a href="<?php echo $value['log_url']; ?>"><img src="<?php echo $imgurl;?>"></a></span>
                    <?php echo subString(strip_tags($value['content']),0,130,"..."); ?></p>
                    <a href="<?php echo $value['log_url']; ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                </div>
                </li>
            <?php 
            endforeach;
            else:
            ?>
            	<h2>未找到</h2>
            	<p>抱歉，没有符合您查询条件的结果。</p>
            <?php endif;?>
        </ul>
    </div>
    <div class="page">
    	<?php echo $page_url;?>
    </div>
</article>
<?php
 include View::getView('footer');
?>