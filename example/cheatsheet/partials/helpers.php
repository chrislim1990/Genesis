<div id="Helpers" class="row section">
	
	<div class="col-md-12 doc-header">
		<h3>Helpers</h3>
		<p>Some helpers to save time</p>
	</div>

	<div class="col-md-12">
		<h4>Background Cover</h4>
		<p>Add <code>background-cover</code> class to the div</p>
		
		<div class="block">
			<p>Without background-cover</p>
		</div>

		<div class="background-cover block">
			<p>With background-cover</p>
		</div>
	</div>

	<div class="col-md-12">
		<h4>Darken Background</h4>
		<p>
			Add <code>darken</code> class to the div. Default is 0.3 opacity, #222 color. To alter it, refer to <a href="#Darken Mixin">Darken</a> Mixin.
		</p>

		<div class="darken background-cover block">
			<p>0.3 opacity, #222</p>
		</div>
	</div>

	<div class="col-md-12">
		<h4>Inline List</h4>
		<p>Just add the <code>inline-list</code> to the ul</p>

		<ul class="inline-list">
			<li><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
			<li><a href="#">Link 5</a></li>
		</ul>
	</div>
	
	<div class="col-md-12">

		<h4>Vertical Align</h4>
		<p>
			Added <code>valign</code> class to the parent, then wrap the child in
			<code>div</code> will do. Add <code>bottom</code> to vertical align bottom.
		</p>

		<div class="row">
			<div class="valign bottom col-md-4 row">
				<div class="col-md-4">
					<div class="block"></div>
				</div>
				<div class="col-md-8">
					<p>Vertical Align Bottom</p>
				</div>
			</div>

			<div class="valign col-md-4 row">
				<div class="col-md-4">
					<div class="block"></div>
				</div>
				<div class="col-md-8">
					<p>Vertical Align with a much longer description or more content.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="valign block">
					<div class="col-md-12">
						<p class="h4">Hi there</p>
						<p>Vertical Align with image background</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="col-md-12">
		<h4 >Flex Video</h4>
		<p>Embed video with 100% width while maintaining the proportion.</p>
		<div class="row">
			<div class="col-md-6">
				<p>16:9 aspect ratio</p>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/qOw44VFNk8Y" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<p>4:3 aspect ratio</p>
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/qOw44VFNk8Y" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<h4>Animate</h4>
		<p>Add the class <code>animate</code> to whatever you want. Or you can use mixin <code>@include transition($property, $time)</code></p>

		<a href="" class="btn alt animate animate_sample">With Animate</a>
		<a href="" class="btn alt animate_sample">Without Animate</a>
		<a href="" class="btn alt animate_sample custom">With <b>transition(padding,1000ms)</b></a>
	</div>

	<div class="col-md-12">
		<h4>Icons</h4>
		<p>
			Add class <code>icons</code> to the wrapper. Optionaly add class <code>round</code> class to the <code>icons</code> wrapper to make all the icons round. if only want certain icon round, add <code>round</code> class to the <code>i</code> tag.
		</p>

		<div class="row">
			<div class="col-md-4">
				<h5>Square Icons (Default)</h5>
				<div class="icons">
					<i class="fa fa-car"></i>
					<i class="fa fa-car"></i>
				</div>
			</div>
			<div class="col-md-4">
				<h5>Round Icons</h5>
				<div class="icons round">
					<i class="fa fa-car"></i>
					<i class="fa fa-car"></i>
				</div>
			</div>
			<div class="col-md-4">
				<h5>Mixed Icons</h5>
				<div class="icons">
					<i class="fa fa-car"></i>
					<i class="fa fa-car round"></i>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<h4>Reset</h4>
		<p>Reset margin and padding to 0. usage: <code>@extend %reset;</code></p>
	</div>
</div>