        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
    <script src="<?=base_url("assets")?>/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url("assets")?>/admin/js/hoe.js"></script>
    <?php if ($this->session->userdata('username')):?>
    	<script src="<?=base_url()?>assets/js/ng/angular.min2.js"></script>
    	<script src="<?=base_url()?>assets/js/ng/angular-ui-router.min.js"></script>
    	<script src="<?=base_url()?>assets/js/ng/dirPagination.js"></script>
    	<script src="<?=base_url()?>assets/js/ng/ui-bootstrap-tpls.js"></script>
    	<script src="<?=base_url()?>assets/admin/editor/summernote.min.js"></script>
    	<script src="<?=base_url()?>assets/js/ng/angular-summernote.min.js"></script>
    	<script src="<?=base_url("assets/js/jquery.form.js")?>"></script>
    	<script src="<?=base_url("assets/js/ng/custom.js")?>"></script>
    	<script src="<?=base_url("assets/admin/datepicker/bootstrap-datetimepicker.min.js")?>"></script>
    	<script src="<?=site_url('app/app_main')?>"></script>
    	<script src="<?=base_url("assets/admin/js/message.js")?>"></script>
    	<script>
    	$(document).ready(function() {
    	    $(document).on('click', '.panel-list li a, .profile-box a', function() {
    	        if ($(this).parent().hasClass('hoe-has-menu')) {
    	            return;
    	        }
    	        if ($('#hoeapp-wrapper').attr('hoe-device-type') === 'phone') {
    	            $('#hoeapp-wrapper').addClass('hoe-hide-lpanel');
    	        }
    	    });
    	});
    	</script>
	<?php endif;?>
	<style>
	.modal{
	    background: rgba(14, 14, 14, 0.81);
	}
	</style>
</body>
</html>
