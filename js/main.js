$(document).ready(function(){
			$('#footerinfo').hide(500);
		
			$('#footerglyph').click(function(){
				$('#footerinfo').slideToggle(500);
			});
			
			$('body').css('display', 'none');
				$('body').fadeIn(500);
				  
				function newpage() {
					window.location = newLocation;
				}
				
				$('#manageclass').click(function(){
					event.preventDefault();
					newLocation = 'manage-class.html';
					$('body').fadeOut(500, newpage);
				});
				
				$('#takeattendance').click(function(){
					event.preventDefault();
					newLocation = 'take-attendance.html';
					$('body').fadeOut(500, newpage);
				});
				
				$('#generatereport').click(function(){
					event.preventDefault();
					newLocation = 'generate-report.html';
					$('body').fadeOut(500, newpage);
				});
			
			$('.wrapcol').mouseenter(function(){
				$(this).css('background-color', '#FFA500');
			});
			
			$('.wrapcol').mouseleave(function(){
				$(this).css('background-color', '#959595');
			});
			
				
				$(window).scroll(function() {
					if ($(this).scrollTop() > 100) {
						$('.go-top').fadeIn(200);
					} else {
						$('.go-top').fadeOut(200);
					}
				});
				
				// Animate the scroll to top
				$('.go-top').click(function(event) {
					event.preventDefault();
					
					$('html, body').animate({scrollTop: 0}, 300);
				});
		});