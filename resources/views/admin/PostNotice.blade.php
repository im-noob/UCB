@extends('admin.app')
@section('PostNotice')		
		<!-- MAIN -->
		<title>Post Notice </title>
		<div class="main">
			<!-- MAIN CONTENT:START -->
			<div class="container-fluid">
				<h3 class="page-title">Post Notice</h3>
				

				
				
				<div class="form-group">
					<label for="exampleInputEmail1">Post Title</label>
					<input type="text" class="form-control form-control-lg" id="postTitle" aria-describedby="TitleHelp" placeholder="Enter Title">
				</div>


				<div class="form-group">
					<label for="postType">Post Type</label>
					<select class="form-control form-control-lg" id="postType">
						<option value="1">News & Events</option>
						<option value="2">Appointments</option>
						<option value="3">Exam Update</option>
						<option value="4">Admission</option>
						<option value="5">Tender</option>
						<option value="6">Vacancies</option>
						<option value="7">Seminar</option>
					</select>
				</div>
				
				
				<h3>Post</h3>
				<div id = "textarea_div">
					<textarea id = "area2" name="area2" placeholder="" style="width: 100%; height: 12em;"></textarea>
				</div>

				<div class="row mt-4">
					<div class="col-sm-12">
						<button id="post" class="btn btn-primary btn-lg btn-block">Post</button>
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
					console.log(data.trim().length)

					if ($("#postTitle").val().trim().length == 0 ) {
						alert("Post Must Be a Title");
						return;
					}
					if (data.trim().length == 0 || data == "<br>") {
						alert("Empty Post can't be published!!");
						return;
					}else{

						let disc = prompt("Do you really wnat to publish? if yes type yes!",'NO');
						if(disc.toUpperCase() === "YES"){
							$postTitle = $("#postTitle").val();
							$postType = $("#postType").val();
							console.log($postTitle,$postType,data);
							savePost($postTitle,$postType,data);
						}else{
							alert("posting cancled");
						}
					}
					
				});


				// save post
				function savePost(postTitle,postType,postData){
					$.ajax({
						cache: false,
						type: "POST",
						data: {
							_token:  "{{ csrf_token() }}",
							title : postTitle,
							post_type: postType,
							post: postData,
						},
						url: "{{url('/')}}/savePost", 
						success: function(response){
							console.log(response)
							if (response.received) {
								if(response.successStatus){
									window.location.href = "{{url('/')}}/editNotice";
								}else{
									alert("Post Not Saved Due to Internal Error 500");
								}
							}else{
								alert("Looks like no Internet");
							}
						},
						error: function(xhr,status,error){
							console.log(xhr.responseJSON);
							console.log(status);
							console.log(error);
							alert("Opps!!! Somthing Went Wrong Try Again.");

						}
					});
					
				}

				
			});
			
			
		</script>
								
@endsection