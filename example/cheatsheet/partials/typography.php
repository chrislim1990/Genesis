<div id="Typography" class="row section">
	<div class="col-md-12 doc-header">
		<h3>Typography</h3>
		<p>The typography of Skeleton is designed to create a strong hierarchy with basic styles. </p>
	</div>
	<div class="clearfix">
		<div class="col-md-6">
			<h1>h1 - This is a very large header.</h1>
			<h2>h2 - This is a large header.</h2>
			<h3>h3 - This is a medium header.</h3>
			<p class="h4">h4 - This is a moderate header.</p>
			<h5>h5 - This is a small header.</h5>
			<h6>h6 - This is a tiny header.</h6>
		</div>
		<div class="col-md-6">
			<h1 class="alt">h1 - This is a very large header.</h1>
			<h2 class="alt">h2 - This is a large header.</h2>
			<h3 class="alt">h3 - This is a medium header.</h3>
			<p class="h4 alt">h4 - This is a moderate header.</p>
			<h5 class="alt">h5 - This is a small header.</h5>
			<h6 class="alt">h6 - This is a tiny header.</h6>
		</div>
	</div>
	<br>
	<div class="col-md-4">
		<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
		<br>
		<h4>Text Alignments</h4>
		<hr>
		<h5>Left Aligned Text</h5>
		<p class="text-left"> Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. </p>
		<br>
		<h5>Right Aligned Text</h5>
		<p class="text-right"> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. </p>
		<br>
		<h5>Center Aligned Text</h5>
		<p class="text-center"> Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
		<br>
		<h5>Justify Aligned Text</h5>
		<p class="text-justify"> Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
		<br>
		<br>
		<h4>Code</h4>
		<p>For example, to close your browser hit <code>Cmd</code> + <code>Q</code></p>
	</div>

	<div class="col-md-4">

		<h4>Lists</h4>
		<hr>
		<h5>Unordered</h5>
		<p>A list of items in which the order does not explicitly matter.</p>

		<ul class="disc">
			<li>List item with a much longer description or more content.</li>
			<li>List item</li>
			<li>List item
				<ul>
					<li>Nested List Item</li>
					<li>Nested List Item</li>
					<li>Nested List Item</li>
				</ul>
			</li>
			<li>List item</li>
			<li>List item</li>
			<li>List item</li>
		</ul>

		<br>

		<h5>Ordered</h5>
		<p>A list of items in which the order does explicitly matter.</p>

		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ol>

		<br>

		<h5>Custom List</h5>
		<p>
			A list of items with custom icon. Add <code>custom</code> class to the ul. Then change the <code>li:before</code> to the prefer fa unicode. Refer to <a href="#List Margin">List Margin</a> mixin to see how to alter the margin left.
		</p>

		<style type="text/css">
			.custom.beer li:before{content:'\f0fc';}
		</style>

		<ul class="custom beer">
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>


	</div>
	<div class="col-md-4">
	</div>
</div>