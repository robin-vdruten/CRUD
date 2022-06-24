$("#resetpassword").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "../PHP/mailer.php",
    data: form.serialize(),
    success: function (data) {
      $("#errorreset").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});
