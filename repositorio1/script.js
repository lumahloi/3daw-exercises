$(function() {
    $("#btn-calcular").click(function() {
        var nome = $("#form-nome").val();
        var idade = $('input[name="form-idade"]:checked').val();
        var temDoencaPrevia = $('input[name="form-doenca"]:checked').val();
        const modal = new bootstrap.Modal('#modal', {});

        $.ajax({
            type: "POST",
            url: "server.php",
            data: { nome, temDoencaPrevia, idade },
            success: ( result ) => {
                $("#mensagemModal").html(nome + ", o valor do Seguro Saúde será de R$ " + result.valor + ".");
                modal.show()
            },
            error: ( xhr, status, error ) => {
                $("#mensagemModal").html("Não foi possível responder, tente novamente mais tarde.");
                console.log(xhr)
                console.log(status)
                console.log(error)
                modal.show()
            }
        })
    })
})