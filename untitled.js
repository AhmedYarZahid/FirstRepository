	$(document).ready(function(){
		$.ajax({
				    type:"get",
					url:"https://api.github.com/users/AhmedYarZahid",
					dataType:"json",
					success:function(response){
					myFunction(response);
				}
				});
		function myFunction(response){
				console.log(response);
						$('#name').text(response.login);
						$('#about').text(response.bio);
						$('#location').text(response.location);
						$('#company').text(response.company);
						$('#blog').text(response.blog);
						$("#pic").html('<img src=' + response.avatar_url + '>');
					}
	});
