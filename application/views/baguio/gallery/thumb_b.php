<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_1_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_1_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_2_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_2_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_3_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_3_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_4_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_4_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_5_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_5_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/B/B_6_full.JPG"><img src="<?= base_url(); ?>images/thumb/B/B_6_thumb.JPG" /></a></li>
<script>
$(".btn_thumb").click(function(){
	var url = $(this).attr('url');
	//alert(url);
	
	$("#fullview").attr('src',url);
	return false;
})
</script>