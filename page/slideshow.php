<!--Slider auto switch-->
<div class="slideshow-container" style="margin-top: -60px">

	<div class="mySlides fade">
	  <img src = "/doan1/img/slideshow1.png" alt="danh mục sản phẩm" style="width:100%">  
	</div>
	
	<div class="mySlides fade">
	  <img src = "/doan1/img/slideshow2.png" alt="danh mục sản phẩm" style="width:100%">  
	</div>
	
	<div class="mySlides fade">
	  <img src = "/doan1/img/slideshow3.png" alt="danh mục sản phẩm" style="width:100%"> 
	</div>

	<div class="mySlides fade">
		<img src = "/doan1/img/slideshow4.png" alt="danh mục sản phẩm" style="width:100%">
	</div>

	<div class="mySlides fade">
		<img src = "/doan1/img/slideshow5.png" alt="danh mục sản phẩm" style="width:100%">	
	</div>
</div>
	<br>
	
	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

<!--------------------------------------------------------JavaScript của slideshow------------------------------------------------->
<script>
	let slideIndex = 0;
	showSlides();
	function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>