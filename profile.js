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
				var html = '<p ><strong>Name: </strong><br><span id="name">' + response.login +'</span></p>';
				html += '<p><strong>About Me: </strong><br><span id="about">'+response.bio+'</span></p>';
				html += '<p><strong>Address: </strong><br><span id="location">'+response.location+'</span></p>';
				html += '<p><strong>Company: </strong><br><span id="company"></span></p>'+response.company+'</span></p>'
				html += '<p><strong>URL: </strong><br><span id="blog">'+response.blog+'</span></p>';

						//$('#name').text(response.login);
						//$('#about').text(response.bio);
						//$('#location').text(response.location);
						//$('#company').text(response.company);
						//$('#blog').text(response.blog);
						$("#pic").html('<img class="" src=' + response.avatar_url + '>');

						$('.modal-dialog').before(html);
					}
	});
