$('#posalji').click(function()
{
    var akcija1 = $(this).val();//preuzima vrednost dugmica
    var akcija;

    if(akcija1 == 'RESET')
    {
        $('#id').val('');
        $('#ime').val('');
        $('#kategorija').val('');
        $('#brend').val('');
        $('#slika').va('');
        $('#cena').val('');
        $('#opis').val('');
        $('#kljucne').val('');
    }
    else
    {
        akcija = akcija1;//na ovaj nacin ne prosledjujemo reset kao vrednost dugmica,u svim ostalim slucajevima prosledjujemo
    }
    var id = $('#id').val();
    var ime = $('#ime').val();
    var kategorija = $('#kategorija').val();
    var brend = $('#brend').val();
    var slika = $('#slika').val();
    var cena = $('#cena').val();
    var opis = $('#opis').val();
    var kljucne = $('#kljucne').val();

    $.get("controller.php",{id:id,ime:ime,kategorija:kategorija,brend:brend,slika:slika,cena:cena,opis:opis,kljucne:kljucne},function(data){
        $('#span').html(data);
    });

});