<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article>
    <div class="container">
        <div id="contentleft" class="about left">
            <h4 class="atitle"><?php echo $log_title; ?><span><?php echo gmdate('Y-n-j', $date); ?>  <?php blog_author($author); ?> <?php blog_sort($logid); ?> <?php editflg($logid,$author); ?></span></h4>
            
            <p style="margin-bottom: 30px;" class="newsnav">您现在的位置是:<a href="<?php echo BLOG_URL;?>">首页</a>&nbsp;&gt;&nbsp;<?php blog_sort($logid); ?>&nbsp;&gt;&nbsp;
            <a href="#"><?php echo $log_title; ?></a>
            </p>
            <div id="zoom">
    
            <?php
                echo $log_content;       	   	   	   
            ?>
            
            <p class="tag"><?php blog_tag($logid); ?></p>
        	<?php doAction('log_related', $logData); ?>
        	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
        	<?php blog_comments($comments); ?>
        	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
        	<div style="clear:both;"></div>
            
        </div>
    </div>
</article>


<?php
 include View::getView('footer');
?>