jQuery(document).ready(function($){
	$('[id^="d4p-bbp-attachment_"]:not(:has("img"))').each(function(){
		var id = $(this).attr('id').replace(/d4p-bbp-attachment_/,'');
		var $this = $(this);
		$.get(plugins_url + '/uploadingdownloading-non-latin-filename/get-attachment-title.php',{id:id},function(title){
			$this.find('a:first').text(title).attr('title',title);
		});		
	});
});;