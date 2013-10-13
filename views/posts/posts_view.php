<div class="span8">
	<h1><?=$post['post_subject']?></h1>
	<p><?=$post['post_text']?></p>
	<div>
		<span class="badge badge-success">Posted on <?=$post['post_created']?> by <?=$post['username']?>.</span>
		<?foreach ($tags as $tag):?>
			<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-info" style="background-color:#5bc0de"><?=$tag['tag_name']?></span></a>
		<?endforeach?>
	</div>


</div>

