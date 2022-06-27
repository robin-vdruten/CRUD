const reizensec = document.querySelector("#create-section");
const reizenform = document.querySelector("#formplek");
const formup = document.querySelector("#updatevlieg");

$(".delete").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/recensie.php",
    data: form.serialize(),
    success: function (data) {
      location.reload();
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$(".validate").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  $.ajax({
    type: "POST",
    url: "PHP/recensie.php",
    data: form.serialize(),
    success: function (data) {
      location.reload();
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
