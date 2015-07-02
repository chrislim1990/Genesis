<section id="Susy">
	
	<div class="doc-header">
		<h3>Susy</h3>
		<p>Genesis's grid is based on Susy.</p>
	</div>

	<div class="doc">
		<div class="half">
			<h4>Basic</h4>
			<ol>
				<li>Use <code>@include container</code> to make container</li>
				<li>Use <code>gutter()</code> for margin or padding if possible, for consitency sake.</li>
				<li>Multiply or divide it as you need. usage: <code>gutter()*5</code> </li>
			</ol>
		</div>
		<div class="half">
			<h4>Span</h4>
			<ol>
				<li>Use <code>@include span(4)</code> for 4 columns.</li>
				<li>Make placeholder and extend it instead of include it again and again, so you can add <code>@include below</code> inside. Easier responsive.</li>
				<li>For nested columns, use <code>@include span(2 of 9)</code>. 9 is total column in this case.</li>
			</ol>
		</div>
	</div>

</section>