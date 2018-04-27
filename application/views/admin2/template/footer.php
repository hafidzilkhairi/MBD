</div>
</div>
</div>
<!--footer-->
<div class="footer">
	<p>&copy;
		<?php echo date('Y'); ?> Kuriak. All Rights Reserved | Design by
		<a href="https://w3layouts.com/" target="_blank">w3layouts</a>
	</p>
</div>
<!--//footer-->

<!-- side nav js -->
<script src='<?php echo $this->config->base_url(); ?>resource/admin/js/SidebarNav.min.js' type='text/javascript'></script>
<script>
	$('.sidebar-menu').SidebarNav()

</script>
<!-- //side nav js -->

<!-- Classie -->
<!-- for toggle left push menu script -->
<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/classie.js"></script>
<script>
	var menuLeft = document.getElementById('cbp-spmenu-s1'),
		showLeftPush = document.getElementById('showLeftPush'),
		body = document.body;

	showLeftPush.onclick = function () {
		classie.toggle(this, 'active');
		classie.toggle(body, 'cbp-spmenu-push-toright');
		classie.toggle(menuLeft, 'cbp-spmenu-open');
		disableOther('showLeftPush');
	};

	function disableOther(button) {
		if (button !== 'showLeftPush') {
			classie.toggle(showLeftPush, 'disabled');
		}
	}

</script>
<!-- //Classie -->
<!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/scripts.js"></script>
<!--//scrolling js-->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/bootstrap.js">


</script>
</body>

</html>
