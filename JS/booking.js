const reizensec = document.querySelector("#create-section");
const reizenform = document.querySelector("#formplek");
const formup = document.querySelector("#updatevlieg");

$(".annuleren").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/bookingreis.php",
    data: form.serialize(),
    success: function (data) {
      location.reload();
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$(".book").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  console.log("test");
  $.ajax({
    type: "POST",
    url: "PHP/booking.php",
    data: form.serialize(),
    success: function (data) {
      $("#book").append(data);
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
