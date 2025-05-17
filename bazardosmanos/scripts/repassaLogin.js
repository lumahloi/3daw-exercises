$(function () {
  $("#login").click(function () {
    var usuario = $("#usuario").val();
    var senha = $("#senha").val();
    
    $.ajax({
      type: "POST",
      url: "../functions/autenticar.php",
      data: { usuario, senha },
      success: (status) => {
        location.reload();
      },
      error: (status, xhr, error) => {
        const modal = new bootstrap.Modal("#modal", {});
        $("#mensagemModal").html("Credenciais inválidas");
        console.log(status);
        console.log(xhr);
        console.log(error);
        modal.show();
      },
    });
  });
});
