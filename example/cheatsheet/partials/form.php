<div id="Forms" class="row section">
	<div class="col-md-12 doc-header">

		<h3>Forms</h3>
		<p>Forms can be one of the biggest pains for web developers, but just use these dead simple styles and you should be good to go.</p>
		<br>

	</div>

	<form>
		<fieldset class="col-md-6">
			<label for="regularInput">Regular Input</label>
			<input type="text" id="regularInput">
		</fieldset>
		<fieldset class="col-md-6">
			<label for="regularInput">Regular Input</label>
			<input type="text" id="regularInput">
		</fieldset>
		<fieldset class="col-md-12">
			<label for="regularTextarea">Regular Textarea</label>
			<textarea id="regularTextarea"></textarea>
		</fieldset>

		<fieldset class="col-md-4">
			<label for="selectList">Select List</label>
			<select id="selectList">
				<option value="Option 1">Option 1</option>
				<option value="Option 2">Option 2</option>
				<option value="Option 3">Option 3</option>
				<option value="Option 4">Option 4</option>
			</select>
		</fieldset>

		<fieldset class="col-md-4">
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

		<fieldset class="col-md-4">
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

		<br>

		<fieldset class="col-md-12">
			<button type="submit" class="btn">Submit Form</button>
		</fieldset>

	</form>
</div>