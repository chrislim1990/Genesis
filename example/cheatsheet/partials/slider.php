<div id="Slider" class="row section">
	<div class="col-md-12 doc-header">
		<h3>Slider</h3>
		<p>
			<ul>
				<li><b>Require simpleslider.js.</b></li>
				<li>Dont add col-md class next to the slider class. Slider class has width 100%, so it wont work. Wrap the slider in col-md class div instead.</li>
				<li>Slide by default has background-cover class.</li>
				<li>It is advise to use id to initialize the plugin, so each slider will be unique. </li>
				<li>Alternate Indicator - extend this class ".slider-indicator.alt" with slideposition id.</li>
				<li>Multiple slider - change the slideTrackerID option when intialize the plugin, else you will have repeated slideposition bullet.</li>
			</ul>
			<a href="http://simpleslider.bitlabs.nl">Simpleslider Repo</a>
		</p>
		<br>
		<h4>Slider Control</h4>
		<p>
			Copy the <code>#slidercontrol code block</code> inside the <code>.slider div</code> for the left right button. You need to turn off the swipe function(which is on by default) and some extra javascript below.
		</p>
		<br>
		<h4>Focus Point</h4>
		<p>
			<ol>
				<li>Import 'focuspoint' <b>before</b> 'simple-slider' in sass </li>
				<li>Add 'focuspoint' class to the 'slide' div</li>
				<li>Grab photo's data focus from <a href="http://jonom.github.io/jquery-focuspoint/demos/helper/index.html">here</a></li>
				<li>Instead of background image, move the image into 'img' and put inside the 'slide' div</li>
				<li>Load the plugin js file and initialize the plugin</li>
			</ol>
			<a href="https://github.com/jonom/jquery-focuspoint">Focuspoint Repo</a>
		</p>
		<p>

		</p>
	</div>
	<div id="slider-sample" class="row">
		<div class="col-md-6">
			<div id="slider" class='slider'>
				<div class='darken slide valign bottom' style="background-image:url(https://unsplash.it/g/570/375?image=588)">
					<div class='slide-content'>
						<h3 class="text-white">Vertical Aligned Bottom</h3>
						<p class="text-white">".valign" & ".darken" work well with ".slide".</p>
					</div>
				</div>
				<div class='slide' style="background-image:url(https://unsplash.it/570/375)">
					<div class='slide-content'>
						<h3 class="text-white">Background Cover</h3>
						<p class="text-white">".slide" by default is ".background-cover" enabled.</p>
					</div>
				</div>

				<div id="slidercontrol">
					<div class="prev">e</div>
					<div class="next">d</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-lg-6">
			<div id="focuspoint" class="slider">
				<div class="slide focuspoint" data-focus-x="-0.53" data-focus-y="0.02" data-focus-w="1050" data-focus-h="697">
					<img src="https://unsplash.it/1050?image=605">
				</div>
				<div class="slide focuspoint" data-focus-x="0.17" data-focus-y="-0.11" data-focus-w="1050" data-focus-h="700">
					<img src="https://unsplash.it/1050?image=619">
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#slider").simpleSlider({
			swipe: false
		});

		// Initialize for custom functions
		var slider = $("#slider").data("simpleslider");

		// Slider control
		$("#slidercontrol .prev").bind( "click", function() { slider.prevSlide(); });
		$("#slidercontrol .next").bind( "click", function() { slider.nextSlide(); });

		// Add active to current slide
		$("#slider .slide[data-index='0']").addClass('active');

		$("#slider").on("beforeSliding", function(event){
			var prevSlide = event.prevSlide;
			var newSlide = event.newSlide;
			$("#slider .slide[data-index='"+prevSlide+"']").removeClass('active');
			$("#slider .slide[data-index='"+newSlide+"']").addClass('active');
		});

		$("#focuspoint").simpleSlider({
			slideTrackerID: 'fp-slideposition'
		});

		$('.focuspoint').focusPoint();


	});
</script>