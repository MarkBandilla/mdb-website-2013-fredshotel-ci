<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_1_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_1_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_2_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_2_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_3_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_3_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_4_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_4_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_5_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_5_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/A/A_6_full.JPG"><img src="<?= base_url(); ?>images/thumb/A/A_6_thumb.JPG" /></a></li>
<script>
$(".btn_thumb").click(function(){
	var url = $(this).attr('url');
	//alert(url);
	
	$("#fullview").attr('src',url);
	return false;
})
</script>