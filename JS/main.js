var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

$(document).click((event) => {
  if (!$(event.target).closest("#insert-type").length) {
    console.log("worst");
    $(".dropping").css({ display: "none" });
  }
});

$(document).click((event) => {
  if (!$(event.target).closest("#insert-bestemming").length) {
    console.log("brood");
    $(".dropping2").css({ display: "none" });
  }
});

const options = document.querySelectorAll(".dropping li a");
const inputEen = document.querySelector("#insert-type");

options.forEach((option) => {
  option.addEventListener("click", () => {
    console.log("kaas");
    inputEen.value = option.innerHTML;
  });
});

const options2 = document.querySelectorAll(".dropping2 li a");
const inputTwo = document.querySelector("#insert-bestemming");

options2.forEach((option2) => {
  option2.addEventListener("click", () => {
    console.log("bitterbal");
    inputTwo.value = option2.innerHTML;
  });
});
