<section id="Forms">
	<div class="doc-header">
		<h3>Forms</h3>
		<p>Forms can be one of the biggest pains for web developers, but just use these dead simple styles and you should be good to go.</p>
		<br>
	</div>

	<form>
		<div class="half-nested">
			<fieldset class="third">
				<label for="regularInput">Regular Input</label>
				<input type="text" id="regularInput">
			</fieldset>
			<fieldset class="third">
				<label for="telInput">Tel Sample</label>
				<input placeholder="tel*" type="tel" id="telInput">
			</fieldset>
			<fieldset class="third">
				<label for="emailInput">Email Sample</label>
				<input placeholder="email*" type="email" id="emailInput">
			</fieldset>

			<fieldset class="full">
				<label for="regularTextarea">Regular Textarea</label>
				<textarea id="regularTextarea"></textarea>
			</fieldset>
		</div>
		<div class="half-nested">
			<fieldset class="third">
				<label for="selectList">Select List</label>
				<select id="selectList">
					<option value="Option 1">Option 1</option>
					<option value="Option 2">Option 2</option>
					<option value="Option 3">Option 3</option>
					<option value="Option 4">Option 4</option>
				</select>
			</fieldset>

			<fieldset class="third">
				<legend>Checkboxes</legend>
				<label for="regularCheckbox">
					<input type="checkbox" id="regularCheckbox" value="checkbox 1">
					<span>Regular Checkbox</span>
				</label>
				<label for="secondRegularCheckbox">
					<input type="checkbox" id="secondRegularCheckbox" value="checkbox 2">
					<span>Regular Checkbox</span>
				</label>
			</fieldset>

			<fieldset class="third">
				<legend>Radio Buttons</legend>
				<label for="regularRadio">
					<input type="radio" name="radios" id="regularRadio" value="radio 1">
					<span>Regular Radio</span>
				</label>
				<label for="secondRegularRadio">
					<input type="radio" name="radios" id="secondRegularRadio" value="radio 2">
					<span>Regular Radio</span>
				</label>
			</fieldset>
			<fieldset class="full">
				<button type="submit" class="btn">Submit Form</button>
			</fieldset>
		</div>

	</form>
</section>