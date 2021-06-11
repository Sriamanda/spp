<div id="upload">
	<?php
	echo form_open_multipart('gambar') . "\n";  
	echo form_upload('user_file')  . "\n";
	echo form_submit('upload' , 'upload'). "\n";
	echo from_close();
	 ?>

</div>