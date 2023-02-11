<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_1_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_1_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_2_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_2_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_3_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_3_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_4_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_4_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_5_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_5_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/D/D_6_full.JPG"><img src="<?= base_url(); ?>images/thumb/D/D_6_thumb.JPG" /></a></li>
<script>
$(".btn_thumb").click(function(){
	var url = $(this).attr('url');
	//alert(url);
	
	$("#fullview").attr('src',url);
	return false;
})
</script>