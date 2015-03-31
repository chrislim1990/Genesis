<div id="Grid" class="row section">	
	<div class="col-md-12 doc-header">
		<h3>Grid</h3>
		<p>The grid default is 12 columns. Spaced using padding. Available breakpoint are <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code>. Available classes are <code>col-[breakpoint]-[num]</code>,<code>col-[breakpoint]-offset-[num]</code>. Wrap the columns in a row to cancel the first and last columns extra padding.</p>
		<br>
	</div>
	<div class="grid">

		<div class="col-md-1">.col-md-1</div>
		<div class="col-md-2">.col-md-2</div>
		<div class="col-md-3">.col-md-3</div>
		<div class="col-md-4 col-md-offset-2">.col-md-4 .col-md-offset-2</div>

		<div class="col-md-2 col-xs-6">.col-md-2 .col-xs-6</div>

		<div class="col-md-4 col-xs-6">.col-md-4 .col-xs-6</div>

		<div class="col-md-6 col-xs-12">
			<div class="row">
				<div class="col-md-8 col-xs-6"> <b>Nested:</b> .col-md-8 .col-xs-6</div>
				<div class="col-md-4 col-xs-6"> <b>Nested:</b> .col-md-4 .col-xs-6</div>
			</div>
		</div>
	</div>
</div>