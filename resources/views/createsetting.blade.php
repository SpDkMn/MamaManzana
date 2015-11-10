<form enctype="multipart/form-data" method="post" autocomplete="off">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type='text' name='title' >
	<input type='text' name='keywords' >
	<input type='text' name='description' >
	<input name="logo" type="file" />
	<input name="favicon" type="file" />
	<input name="footer" type="file" />
	<input type='text' name='email_order' >
	<input type='text' name='phrase' >
	<button type="submit">Subir</button>
</fom>
