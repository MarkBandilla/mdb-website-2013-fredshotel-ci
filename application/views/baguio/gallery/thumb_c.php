<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/C/C_1_full.JPG"><img src="<?= base_url(); ?>images/thumb/C/C_1_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/C/C_2_full.JPG"><img src="<?= base_url(); ?>images/thumb/C/C_2_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/C/C_3_full.JPG"><img src="<?= base_url(); ?>images/thumb/C/C_3_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/C/C_4_full.JPG"><img src="<?= base_url(); ?>images/thumb/C/C_4_thumb.JPG" /></a></li>
<li><a href="" class="btn_thumb" url="<?= base_url(); ?>images/full/C/C_5_full.JPG"><img src="<?= base_url(); ?>images/thumb/C/C_5_thumb.JPG" /></a></li>

<script>
$(".btn_thumb").click(function(){
	var url = $(this).attr('url');
	//alert(url);
	
	$("#fullview").attr('src',url);
	return false;
})
</script>