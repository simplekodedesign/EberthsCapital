
var body = document.getElementById("body")
var pop_up = document.getElementById("popup-services");
const services_buttons = document.getElementsByClassName("service-more")
const backButtons = document.getElementsByClassName("backButton")
const header = document.getElementById("header");
const inversores = document.getElementsByClassName("inversor")
const inversoresB= document.getElementById("inversores")
const socios = document.getElementsByClassName("socio")
const sociosB = document.getElementById("socios")
const analistas = document.getElementsByClassName("analista")
const analistasB = document.getElementById("analistas")
const team = document.getElementsByClassName("team")

window.addEventListener("load", function () {
  const SERVICES_LENGTH = services_buttons.length

  window.addEventListener("scroll", animateHeader)

  for (let i = 0; i < SERVICES_LENGTH; i++) {
    services_buttons[i].addEventListener("click", displayService)
    backButtons[i].addEventListener("click", unDisplayService)
  }

  inversoresB.addEventListener("click", function (){
    show(false, socios)
    show(false, analistas)
    show(true, inversores)
    for(element of team){
      element.classList.remove("active")
    }
    this.classList.add("active")
  })

  sociosB.addEventListener("click", function (){
    show(true, socios)
    show(false, analistas)
    show(false, inversores)
    for(element of team){
      element.classList.remove("active")
    }
    this.classList.add("active")
   })

   analistasB.addEventListener("click", function (){
    show(false, socios)
    show(true, analistas)
    show(false, inversores)

    for(element of team){
      element.classList.remove("active")
    }
    this.classList.add("active")
   })
})

function show(display, who){
  for(element of who){
    element.style.setProperty("display", display === true ? "flex" : "none")
    animate(element);
  }
}

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