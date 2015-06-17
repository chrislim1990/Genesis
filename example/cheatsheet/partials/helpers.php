<section id="Helpers">
	
	<div class="doc-header">
		<h3>Helpers</h3>
		<p>Some helpers to save time</p>
	</div>

	<div class="doc">
		<div class="half">
			<h4>Background Cover</h4>
			<p>Add <code>background-cover</code> class to the div</p>

			<div class="block">
				<p>Without background-cover</p>
			</div>

			<div class="background-cover block">
				<p>With background-cover</p>
			</div>
		</div>

		<div class="half">
			<h4>Darken Background</h4>
			<p>
				Add <code>darken</code> class to the div. Default is 0.3 opacity, #222 color. To alter it, refer to <a href="#Darken Mixin">Darken</a> Mixin.
			</p>

			<div class="darken background-cover block">
				<p>0.3 opacity, #222</p>
			</div>
		</div>

		<div class="half-nested">
			<div class="full">
				<h4>Vertical Align</h4>
				<p>
					Added <code>valign</code> class to the parent, then wrap the child in
					<code>div</code> will do. Add <code>bottom</code> to vertical align bottom.
				</p>
			</div>

			<div class="valign half">
				<div class="block"></div>
				<div>
					<p>Vertical Align with a much longer description or more content.</p>
				</div>
			</div>

			<div class="half">
				<div class="valign block">
					<div>
						<p>Vertical Align with background</p>
					</div>
				</div>
			</div>
		</div>

		<div class="half-nested">
			<div class="full">
				<h4 >Flex Video</h4>
				<p>Embed video with 100% width while maintaining the proportion.</p>
			</div>
			<div class="half">
				<p>16:9 aspect ratio</p>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/qOw44VFNk8Y" allowfullscreen></iframe>
				</div>
			</div>
			<div class="half">
				<p>4:3 aspect ratio</p>
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/qOw44VFNk8Y" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="half">
			<h4>Animate</h4>
			<p>Add the class <code>animate</code> to whatever you want. Or you can use mixin <code>@include transition($property, $time)</code>. It is advise to use select property instead of all.</p>

			<a href="" class="btn alt animate animate_sample">With Animate</a>
			<a href="" class="btn alt animate_sample">Without Animate</a>
			<a href="" class="btn alt animate_sample custom">With <b>transition(padding,1000ms)</b></a>
		</div>

		<div class="half">
			<h4>Reset</h4>
			<p>Reset margin and padding to 0. usage: <code>@extend %reset;</code></p>
		</div>

		<div class="half">
			<h4>Border Placeholder</h4>
<p>Ranging from <code>%border</code> until <code>%border-bottom</code>, it will add 1px solid border color border in the direction you specify.</p>
		</div>

	</div>
</section>