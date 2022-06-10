const loginButton = document.querySelector("#logintab");
const signupButton = document.querySelector("#registertab");
const divlogin = document.querySelector("#login");
const divsignup = document.querySelector("#register");

loginButton.addEventListener("click", (e) => {
  e.preventDefault();
  divsignup.style.display = "none";
  divlogin.style.display = "block";
  loginButton.classList.add("active");
  signupButton.classList.remove("active");
});

signupButton.addEventListener("click", (e) => {
  e.preventDefault("signup");
  divsignup.style.display = "block";
  divlogin.style.display = "none";
  signupButton.classList.add("active");
  loginButton.classList.remove("active");
});

$("#register-submit").submit(function (e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  var form = $(this);

  console.log(form.serialize());

  $.ajax({
    type: "POST",
    url: "PHP/register.php",
    data: form.serialize(),
    success: function (data) {
      $("#error").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});

$("#login-submit").submit(function (e) {
  e.preventDefault();

  var form = $(this);

  console.log(form.serialize());

  $.ajax({
    type: "POST",
    url: "PHP/login.php",
    data: form.serialize(), // serializes the form's elements.
    success: function (data) {
      $("#error").append("<p>" + data + "</p>");
    },
    fail: function (xhr, textStatus, errorThrown) {
      alert("request failed");
    },
  });
});
