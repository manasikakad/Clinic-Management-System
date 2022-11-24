<?php include("validation/header.php"); ?>

	<form id="formID" class="formular" method="post">
		<fieldset>
			<legend>
				Required!
			</legend>
			<label>
				<span>Field is required : </span>
				<input value="" class="validate[required] text-input" type="text" name="req" id="req" />
			</label>
            
			<label>
				<span>Favorite sport 1:</span>
				<select name="sport" id="sport" class="validate[required]">
					<option value="">Choose a sport</option>
					<option value="option1">Tennis</option>
					<option value="option2">Football</option>
					<option value="option3">Golf</option>
				</select>
			</label>
			<label>
				<span>Favorite sport 2:</span>
				<select name="sport2" id="sport2" multiple class="validate[required]">
					<option value="">Choose a sport</option>
					<option value="option1">Tennis</option>
					<option value="option2">Football</option>
					<option value="option3">Golf</option>
				</select>
			</label>
			<br/>
			validate[required]
		</fieldset>
			
		<fieldset>
			<legend>
				Custom
			</legend>
			<label>
				<p>Comes with many predifined regex (phone, url, ip, email..etc)</p>
				<a href="demoRegExp.html">[DEMO]</a>
				<br/>
				<span>Enter a URL : </span>
				<input value="http://" class="validate[required,custom[url]] text-input" type="text" name="url" id="url" />
				<br/>
				validate[required,custom[url]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Equals
			</legend>
			<label>
				<span>Password : </span>
				<input value="karnius" class="validate[required] text-input" type="password" name="password" id="password" />
			</label>
			<label>
				<span>Confirm password : </span>
				<input value="kaniusBAD" class="validate[required,equals[password]] text-input" type="password" name="password2" id="password2" />
				<br/>
				validate[required,equals[password]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Function
			</legend>
			<label>
				<span>Write 'HELLO' : </span>
				<input value="" class="validate[required,funcCall[checkHELLO]] text-input" type="text" id="lastname" name="lastname" />
				<br/>
				validate[required,funcCall[checkHELLO]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				MinSize
			</legend>
			<label>
				Minimum field size
				<br/>
				<input value="" class="validate[required,minSize[6]] text-input" type="text" name="minsize" id="minsize" />
				<br/>
				validate[required,minSize[6]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				MaxSize
			</legend>
			<label>
				Maximum field size, optional
				<br/>
				<input value="0123456789" class="validate[optional,maxSize[6]] text-input" type="text" name="maxsize" id="maxsize" />
				<br/>
				validate[maxSize[6]]<br/>
				note that the field is optional - it won't fail if it has no value
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Min
			</legend>
			<label>
				integer >= -5
				<br/>
				<input value="-7" class="validate[required,custom[integer],min[-5]] text-input" type="text" name="min" id="min" />
				<br/>
				validate[required,custom[integer],min[-5]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Max
			</legend>
			<label>
				integer ,50]
				<br/>
				<input value="55" class="validate[required,custom[integer],max[50]] text-input" type="text" name="max" id="max" />
				<br/>
				validate[required,custom[integer],max[50]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Past
			</legend>
			<label>
				Checks that the value is a date in the past
				<br/>
				<span>Please enter a date ealier than 2010/01/01</span>
				<input value="2009/06/30" class="validate[custom[date],past[2010/01/01]] text-input" type="text" name="past" id="past" />
				<br/>
				validate[custom[date],past[2010/01/01]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Future
			</legend>
			<label>
				Checks that the value is a date in the future
				<br/>
				<span>Please enter a date older than today's date</span>
				<input value="2011-01-" class="validate[custom[date],future[NOW]] text-input" type="text" name="future" id="future" />
				<br/>
				validate[custom[date],future[NOW]]
			</label>
		</fieldset>
			
		<fieldset>
			<legend>
				Group required
			</legend>
			<label>
				Checks if at least one of the input is not empty.
				<br/>
				<br/>
				<span>Please enter a credit card</span>
			</label>
			<input value="" class="validate[groupRequired[payments]] text-input" type="text" name="creditcard1" id="creditcard1" />
			<label><strong>OR</strong></label><br/>
			<label>Please enter a paypal acccount</label>
			<input value="" class="validate[groupRequired[payments],custom[email]] text-input" type="text" name="paypal" id="paypal" />
			<label><strong>OR</strong></label><br/>
			<label>Please enter a bank account</label>
			<input value="" class="validate[groupRequired[payments],custom[integer]] text-input" type="text" name="bank" id="bank" />
			<label><strong>OR</strong></label><br/>
			<label>Please  choose from select</label>
			<select class="validate[groupRequired[payments]] text-input" type="text" name="bank2" id="bank2">
				<option value="">Choose a payment option</option>
				<option value="Paypal">Paypal</option>
				<option value="Bank">Bank account</option>
			</select>
		</fieldset>
			
		<fieldset>
			<legend>
				Date Range<br />
			</legend>
			<label>
				Checks that the start date is before the end date
				Please enter an end date ealier than the start date<br /><br />
				<label for="date1">Start Date : </label>
				<input value="9/1/2009"  class="validate[dateRange[grp1]]" type="text" id="date1" />
			</label>
			<label>
				<label for="date2">End Date : </label>
				<input value="3/18/1985" class="validate[dateRange[grp1]]" type="text" id="date2" />
				<br/>
				validate[dateRange[grp1]]<br />
				Note* Both fields must have the same name
			</label>
		</fieldset>

		<fieldset>
			<legend>
				Date Time Range<br />
			</legend>
			<label>
				Checks that the start date and time are before the end date and time
				Please enter an end date ealier than the start date<br /><br />
				<label for="date1">Start Date Time: </label>
				<input value="9/1/2009 9:30:00 PM"  class="validate[dateTimeRange[grp2]]" type="text" id="datetime1" />
			</label>
			<label>
				<label for="date2">End Date Time: </label>
				<input value="9/1/2009 2:30:00 AM" class="validate[dateTimeRange[grp2]]" type="text" id="datetime2" />
				<br/>
				validate[dateTimeRange[grp2]<br />
				Note* Both fields must have the same name
			</label>
		</fieldset>

		<fieldset>
			<legend>
				Credit Card
			</legend>
			<label>
				Checks that the credit card number is at least theoretically valid, according the to the
				<a href="http://en.wikipedia.org/wiki/Luhn_algorithm">Luhn checksum algorithm</a>, but not
				whether the specific card number is active with a bank, etc.

				<br/>
				<br/>
				Since credit cards are often presented in different formats, spaces and
				hyphens (' ','-') are simply ignored.

				<br/>
				<br/>
				Examples:<br/>
				<ul>
					<li>4111 1111 1111 1111</li>
					<li>3737-321345-610004</li>
				</ul>
				<a href="http://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/credit_card_numbers.htm">More examples</a>
				<br/>
				<input value="" class="validate[required,creditCard] text-input" type="text" name="creditcard2" id="creditcard2" />
				<br/>
				validate[required,creditCard]
			</label>
		</fieldset>

		<fieldset>
			<legend>
				Checkbox
			</legend>
			<label>
				Check this <a href="demoCheckBox.html">[DEMO]</a>
			</label>
		</fieldset>
		<fieldset>
			<legend>
				Ajax
			</legend>
			<label>
				Check this <a href="demoAjaxSubmitPHP.html">[DEMO]</a>
			</label>
		</fieldset>
		<input class="submit" type="submit" value="Validate &amp; Send the form!"/><hr/>
	</form>
</body>
</html>
