
var body = document.getElementById("body")
var pop_up = document.getElementById("popup-services");
var services_buttons = document.getElementsByClassName("service-more")
var backButtons = document.getElementsByClassName("backButton")
var header = document.getElementById("header");

window.addEventListener("load", function () {
  const SERVICES_LENGTH = services_buttons.length

  window.addEventListener("scroll", animateHeader)

  for (let i = 0; i < SERVICES_LENGTH; i++) {
    services_buttons[i].addEventListener("click", displayService)
    backButtons[i].addEventListener("click", unDisplayService)
  }
})

var animateHeader = () => {
  if (window.scrollY > 0) {
    header.classList.add("headerScrolled");
  } else {
    header.classList.remove("headerScrolled");
  }
}


function displayService () {
  const serviceToDisplay = this.getAttribute("service")
  let service = document.getElementById(serviceToDisplay)

  service.style.setProperty("display", "grid")

  service.parentElement.style.setProperty("transform", "translate(-100%, 0)")
  body.style.setProperty("overflow", "hidden")
}

function unDisplayService () {
  this.parentElement.parentElement.style.setProperty("transform", "translate(0, 0)")
  setTimeout(() => {
    this.parentElement.style.setProperty("display", "none")
  }, 500);
  body.style.setProperty("overflow", "auto")
}