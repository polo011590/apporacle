
$(function() {
    $('#formreg').submit(function(event) {

        $('#capa_load').fadeIn("slow");

        $("body").css("overflow", "hidden");
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize()
        }).done(function(data) {
            $("body").css("overflow", "auto");
            $('#capa_load').fadeOut(1000);
            $('#result').fadeOut("slow");
            $('#result').fadeIn("slow");
            $('#result').html(data);

        }).fail(function(data) {
            $("body").css("overflow", "auto");
            $('#capa_load').slideUp(1000);
            alert(data);
        });

        event.preventDefault();

    });
});
