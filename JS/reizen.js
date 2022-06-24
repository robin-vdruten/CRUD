const reizensec = document.querySelector("#create-section");
const reizenform = document.querySelector("#formplek");
const formup = document.querySelector("#updatevlieg");

$(".edititem").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/reizen.php",
    data: form.serialize(),
    success: function (data) {
      $("#updatevlieg").append("<p>" + data + "</p>");
      reizensec.style.display = "flex";
      reizenform.style.display = "block";
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$("body").on("submit", ".updatereis", function (e) {
  e.preventDefault();
  var data = new FormData();

  var form_data = $("#updatereiz").serializeArray();
  $.each(form_data, function (key, input) {
    data.append(input.name, input.value);
  });

  var file_data = $('input[name="file_up"]')[0].files;
  for (var i = 0; i < file_data.length; i++) {
    data.append("file_up[]", file_data[i]);
  }

  $.ajax({
    type: "POST",
    url: "PHP/reizen.php",
    processData: false,
    contentType: false,
    data: data,
    success: function (data) {
      $("#updatevlieg").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$(".show").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/reizen.php",
    data: form.serialize(),
    success: function (data) {
      $("#updatevlieg").append("<p>" + data + "</p>");
      reizensec.style.display = "flex";
      reizenform.style.display = "block";
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$("body").on("submit", ".create", function (e) {
  e.preventDefault();
  var data = new FormData();

  var form_data = $("#create").serializeArray();
  $.each(form_data, function (key, input) {
    data.append(input.name, input.value);
  });

  var file_data = $('input[name="file_up"]')[0].files;
  for (var i = 0; i < file_data.length; i++) {
    data.append("file_up[]", file_data[i]);
  }

  console.log(data);

  $.ajax({
    type: "POST",
    url: "PHP/reizen.php",
    processData: false,
    contentType: false,
    data: data,
    success: function (data) {
      $("#updatevlieg").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

window.onclick = (event) => {
  if (event.target === reizensec) {
    reizensec.style.display = "none";
    reizenform.style.display = "none";
    location.reload();
    while (formup.firstChild) {
      formup.removeChild(formup.firstChild);
    }
  }
};
