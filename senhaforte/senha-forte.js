$(function () {
  // elementos valid / invalid
  var loginCharQtValid = $("#LoginAoMenos6Ok");
  var loginCharQtInvalid = $("#LoginAoMenos6Nok");

  var loginCharTypeValid = $("#LoginApenasLetrasOk");
  var loginCharTypeInvalid = $("#LoginApenasLetrasNok");

  var passCharQtValid = $("#SenhaAoMenos8Ok");
  var passCharQtInvalid = $("#SenhaAoMenos8Nok");

  var passCapsValid = $("#SenhaAoMenosUmaMaiusculaOk");
  var passCapsInvalid = $("#SenhaAoMenosUmaMaiusculaNok");

  var passDigitValid = $("#SenhaAoMenosUmDigitoOk");
  var passDigitInvalid = $("#SenhaAoMenosUmDigitoNok");

  var passEqualValid = $("#SenhaRepetidaIgualOk");
  var passEqualInvalid = $("#SenhaRepetidaIgualNok");

  //elementos input
  var login = $("#login");
  var pass = $("#novaSenha");
  var repeatPass = $("#repitaSenha");

  login.on("change", function () {
    characterQtCheck(login.val(), 6)
      ? setIcons_1(loginCharQtValid, loginCharQtInvalid)
      : setIcons_2(loginCharQtValid, loginCharQtInvalid);
    charactersCheck(login.val(), "only_letters")
      ? setIcons_1(loginCharTypeValid, loginCharTypeInvalid)
      : setIcons_2(loginCharTypeValid, loginCharTypeInvalid);
  });

  pass.on("change", function () {
    characterQtCheck(pass.val(), 8)
      ? setIcons_1(passCharQtValid, passCharQtInvalid)
      : setIcons_2(passCharQtValid, passCharQtInvalid);
    charactersCheck(pass.val(), "at_least_one_uppercase_letter")
      ? setIcons_2(passCapsValid, passCapsInvalid)
      : setIcons_1(passCapsValid, passCapsInvalid);
    charactersCheck(pass.val(), "at_least_one_number")
      ? setIcons_1(passDigitValid, passDigitInvalid)
      : setIcons_2(passDigitValid, passDigitInvalid);
    equalCheck(pass.val(), repeatPass.val())
      ? setIcons_1(passEqualValid, passEqualInvalid)
      : setIcons_2(passEqualValid, passEqualInvalid);
  });

  repeatPass.on("change", function () {
    equalCheck(pass.val(), repeatPass.val())
      ? setIcons_1(passEqualValid, passEqualInvalid)
      : setIcons_2(passEqualValid, passEqualInvalid);
  });

  $("#criarConta").click(function () {
    new bootstrap.Modal($('#modal')).show();

    if (
      loginCharQtValid.css("display") == "inline" &&
      loginCharTypeValid.css("display") == "inline" &&
      passCharQtValid.css("display") == "inline" &&
      passCapsValid.css("display") == "inline" &&
      passDigitValid.css("display") == "inline" &&
      passEqualValid.css("display") == "inline"
    ) {
      $("#mensagemModal").html("Conta criada com sucesso!");
    } else {
      $("#mensagemModal").html("Não foi possível criar sua conta. Confira os requisitos e tente novamente.");
    }
    modal.show();
  });

  function setIcons_2(valid, invalid) {
    valid.css({ display: "none" });
    invalid.css({ display: "inline" });
  }

  function setIcons_1(valid, invalid) {
    valid.css({ display: "inline" });
    invalid.css({ display: "none" });
  }

  function equalCheck(string_1, string_2) {
    return string_1 == string_2;
  }

  function charactersCheck(string, type) {
    switch (type) {
      case "only_letters":
        return /^[A-Za-z]+$/.test(string);
      case "at_least_one_uppercase_letter":
        return string == string.toLowerCase();
      case "at_least_one_number":
        return /\d/.test(string);
    }
  }

  function characterQtCheck(string, quantity) {
    return string.length >= quantity ? true : false;
  }
});
