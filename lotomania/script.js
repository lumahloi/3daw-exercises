$(function() {
    $("#btn-gerar").click(function() {
        var quantidade = $("#form-quantidade").val();
        var limite = $("#form-limite").val();

        $.ajax({
            type: "GET",
            url: "./server.php",
            data: { quantidade, limite },
            success: function(result){
                console.log(result);
                $("#view-nums").empty();
                $.each(result, function(index, value) {
                    $("#view-nums").append('<p>' + value + '</p>');
                });
            },
            error: function(xhr, status, error) {
                console.log(xhr);
            }
        });
    });

    $("#form-limite").change(mudarInputs());
    $("#form-quantidade").change(mudarInputs());

    function mudarInputs(){
        $("#form-limite").val("");;
        $("#form-quantidade").val("");;
    }
});