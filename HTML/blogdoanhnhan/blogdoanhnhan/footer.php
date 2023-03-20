	<?php global $themeSettings;?>




		<footer class="footer text-center" style="background-color: <?php echo @$themeSettings['Option']['value']['color']; ?>; height: auto; padding: 10px;">
			<p class="pt-2" style="color: white"><span><?php echo @$themeSettings['Option']['value']['titleLearn']; ?></span> </p>
		</footer>
	



		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/all.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/owl.carousel.min.js"></script>


		<script>
			filterSelection("all")
			function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all") c = "nature";
				for (i = 0; i < x.length; i++) {
					w3RemoveClass(x[i], "show");
					if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
				}
			}

			function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
				}
			}

			function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
						arr1.splice(arr1.indexOf(arr2[i]), 1);     
					}
				}
				element.className = arr1.join(" ");
			}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace("active", "");
		this.className += "active";
	});
}
</script>

<script type="text/javascript">
			$(document).ready(function(){
				$(window).scroll(function(event){
					var pos_body = $('html,body').scrollTop();
					if (pos_body>20) {
						$('.menu').addClass('co-dinh-menu');
					}
					else{
						$('.menu').removeClass('co-dinh-menu');
					}
				});
			}); 
		</script>

		


	<?php echo @$themeSettings['Option']['value']['messenger']; ?>

	</body>
	</html>