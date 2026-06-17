//blank line is required
app.controller('ctrl_blog',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	$scope.loader=function(){
		$http.get("blog/view_data").success(function(data){
			
			$scope.datadb=data;
		})
	}
	$('#DOB1').datepicker({
		format: 'dd/mm/yyyy',
		autoclose: true
	}).on('change changeDate', function() {
		$scope.$apply(function() {
			$scope.x = $scope.x || {};
			$scope.x.date = $('#DOB1').val();
		});
	});
	
	$scope.loader();
	$scope.filter_new();
	
	$scope.update_call=function(y){
		$scope.x=y;
		$scope.showSeo=true;
	}
	$scope.slugify=function(){
		if(!$scope.x || !$scope.x.title) return;
		if(!$scope.x.slug){
			var str = $scope.x.title.toLowerCase();
			str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ');
			str = str.replace(/^\s+|\s+$/gm,'');
			$scope.x.slug = str.replace(/\s+/g, '-');
		}
	}
	
	$scope.filter_new=function(){
		$scope.x={};
		
		var d = new Date();
		var dateStr = ("0" + d.getDate()).slice(-2) + "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + d.getFullYear();
		var timeStr = ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2);
		
		$scope.x.date = dateStr;
		$scope.x.time = timeStr;
		$scope.showSeo=false;
		
		setTimeout(function() {
			$('#DOB1').val(dateStr).datepicker('update');
		}, 100);
	}
	
	$scope.options = {
		    height: 100,
		    toolbar: [
		               ['style', ['style','bold', 'italic', 'underline']],
      		           ['fontname', ['fontname']],
      		           ['fontsize', ['fontsize']],
      		           ['color', ['color']],
      		           ['table',['table']],
      		           [ 'insert', [ 'link' ]],
      	               ["view", ["codeview"]]
		        ]
		  };
	
	
	$scope.save_data=function(y){
		$('#form1').ajaxForm({
			type: "POST",
			url: "blog/save_data",
			beforeSend: function()
			{
				$('#submitbtn').attr('disabled',true);
				$('#webprogress').css('display','inline');
			},
			success: function(data){
				data = (data || '').toString().trim();
				console.log(data);
				if(data=="1")
				{
					$scope.loader();
					messages("success", "Success!","blog Saved Successfully", 3000);
					$scope.filter_new();
				}
				else if(data=="0")
				{
					messages("warning", "Info!","No Data Affected", 3000);
				}
				else
				{
					messages("danger", "Warning!",data, 4000);
				}
				$('#webprogress').css('display','none');
				$('#submitbtn').attr('disabled',false);
			}
		});
	}
	$scope.delete_data=function(id)
	{
		if(confirm("Deleting Blog may hamper your data associated with it."))
		{
			if(confirm("Are you Sure to DELETE ??"))
			{
				$http.get("blog/delete_data?id="+id).success(function(data){
					data = (data || '').toString().trim();
					console.log(data);
					if(data=="1")
					{
						messages("success", "Success!","blog Deleted Successfully", 3000);
					}
					else
					{
						messages("danger", "Warning!","blog not Deleted", 4000);
					}
					$scope.loader();
				})
			}
		}
	}
	
});
