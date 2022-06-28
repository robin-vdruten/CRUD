const recensiesec = document.querySelector("#createrecensie");
const recensieform = document.querySelector("#formplek");
const formrecen = document.querySelector("#updaterecen");

$(".showrecensie").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/booking.php",
    data: form.serialize(),
    success: function (data) {
      $("#updaterecen").append("<p>" + data + "</p>");
      recensiesec.style.display = "flex";
      recensieform.style.display = "block";
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$("body").on("submit", ".createrecensie", function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/booking.php",
    data: form.serialize(),
    success: function (data) {
      $("#updaterecen").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

window.onclick = (event) => {
  if (event.target === recensiesec) {
    recensiesec.style.display = "none";
    recensieform.style.display = "none";
    location.reload();
    while (formrecen.firstChild) {
      formrecen.removeChild(formrecen.firstChild);
    }
  }
};
