{* Example: Display a variable directly *}
<p>Hello {$firstName}</p>

<div>
	<h2> Search Builder Demo Layout</h2>
	<form class="crm-container">
		<select class="crm-form-select">
			<option value="contact" class="crm-form-select">Contact</option>
	 	</select>

	 	<select class="crm-form-select">
			<option value="Get" class="crm-form-select">GET</option>
	 	</select>
	 	{html_options name=yournameforit class="crm-form-select" options=$fields}
	</form>

	<br>
	 <button class="crm-form-select" type="button" onclick="submit()">Submit</button>
</div>
{literal}
<script>
	get_contacts();
</script>
{/literal}

