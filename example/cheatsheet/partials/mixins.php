<section id="Mixins">

	<div class="doc-header">
		<h3>Mixins</h3>
		<p>Mixins...</p>
	</div>
	<div class="doc">
		<div class="half">
			<h4>Margin & Padding Mixin</h4>
			<p>
				Enable 1 line code for different direction margin & padding.
				<br>
				<code>@include margin($t,$r,$b,$l)</code>
			</p>
			<ol>
				<li>The direction is optional, just put those you need. example: <code>margin($t:1em,$b:3em)</code></li>
				<li>Use <code>@include margin-v</code> for vertical margin (top and bottom). Others options are <code>margin-h</code>, <code>padding-v</code>, <code>padding-h</code>.</li>
			</ol>
			
			<a class="btn alt margin_1">Top 1em, Btm 3em</a>
			<a class="btn alt margin_2">Margin: Top 3em, Btm 1em, Left 2em; Padding: Btm 10em</a>
			<a class="btn alt margin_3">Top 3em, Right 3em</a>
		</div>

		<div class="half">
			<h4>Size Mixin</h4>
			<p>
				Shorthand for height and width. <code>@include size($h,$w)</code>
				If width not defined, it will auto inherit height.
			</p>

			<div class="btn alt size_1">Height and width both 20em</div>
			<div class="btn alt size_2">Height 10em,width 20em</div>
			<div class="btn alt size_3">Height 5em,width 20em</div>
		</div>

		<div class="half">
			<h4>Position Mixin</h4>
			<p>
				Shorthand for position. First argurement is $p (position: absolute, relative, fixed), follow with $t, $r, $b, $l(top, left, bottom, right). Fixed will also work. I just dont want to messup the cheatsheet. <code>@include position($p, $t, $r, $b, $l)</code>
			</p>

			<div class="btn alt pos_1">Position absolute, bottom 1em</div>
			<div class="btn alt pos_2">Position relative, left 20em</div>
			<div class="btn alt pos_3">Position absolute, right 1em, top 0</div>
		</div>

		<div class="half-nested">
			<div class="full">
				<h4>List Margin</h4>
				<p>
					Due to list (ol & ul) margin left need to specify in few places, I made a mixin for it. <code>@include list-margin(2em);</code> It is usefull when the li icon is longer and need more space.
				</p>
			</div>
			<div class="half">
				<ul class="li_margin_1">
					<li>Default margin left custom list</li>
					<li>list</li>
				</ul>
			</div>
			<div class="half">
				<ul class="li_margin_2">
					<li>5em margin left custom list</li>
					<li>list</li>
				</ul>
			</div>
		</div>

		<div class="half">
			<h4>Darken Mixin</h4>
			<p>Make the background darker with :before. <code>@include darken($o,$c)</code> (Opacity, Color). But you can't directly add padding to it, add the padding to it's child. </p>

			<div class="block background-cover darken_1 pull-left">
				<p>Opacity 0.3 (Default)</p>
			</div>

			<div class="block background-cover darken_3 pull-left">
				<p>Opacity 0.6 with primary color</p>
			</div>
			
			<div class="block background-cover darken_4 pull-left">
				<p>Opacity 0.6 with primary color when hover</p>
			</div>
		</div>
	</div>
</section>