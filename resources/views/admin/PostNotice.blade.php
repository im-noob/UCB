@extends('admin.app')
@section('PostNotice')		
		<!-- MAIN -->
		<title>Post Notice </title>
		<div class="main">
			<!-- MAIN CONTENT:START -->
			<div class="container-fluid">
				<h3 class="page-title">Post Notice</h3>
				
				<form id = "textarea_div">
					<textarea id = "area2" name="area2" placeholder="" style="width: 100%; height: 50%"></textarea>
				</form>

				<div class="row">
					<div class="col-sm-12">
						<button id="post" class="btn btn-success btn-lg">Post</button>
					</div>
				</div>

			</div>
			<!-- MAIN CONTENT:END -->

		</div>
		<!-- END MAIN -->
		<script type="text/javascript" src="{{url('/')}}/js/nicEdit-latest.js"></script> 
	    <script type="text/javascript">
			//<![CDATA[
			  bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('area2');			        
			  });
			  //]]>
		</script>
		<script>
			$(function(){
				$('#post').click(function(){
					console.log("Clicked on post");
					var data = $("div.nicEdit-main").html();
					alert(data);
				});

				
			});
			
			
		</script>
								
@endsection