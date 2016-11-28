function posaljiZahtev()
{
	var rec = $('#search').val();
	$.get('controller.php',{rec:rec},function(odgovorServera){

		$('#odgovorS').html(odgovorServera);
	});
}

   