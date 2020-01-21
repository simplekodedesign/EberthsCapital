var body = document.getElementById("body")
var pop_up = document.getElementById("popup-servicesContainer")
const services_buttons = document.getElementsByClassName("service-more")
const backButtons = document.getElementsByClassName("backButton")
const header = document.getElementById("header");
const inversores = document.getElementsByClassName("inversor")
const inversoresB= document.getElementById("inversores")
const analistas = document.getElementsByClassName("analista")
const analistasB = document.getElementById("analistas")
const team = document.getElementsByClassName("team")
const headerButton = document.getElementById("navbar-icon")
var contactForm = document.getElementById("contactForm")
var email = document.getElementById("emailForm")
var nameToContact = document.getElementById("nameForm")
var message = document.getElementById("message")
var submitButton = document.getElementById("submitButton")
var biography = document.getElementsByClassName("biography")
var velas
var svg

window.addEventListener("load", function () {
  submitButton.addEventListener("click", submitForm)
  const SERVICES_LENGTH = services_buttons.length

  window.addEventListener("scroll", animateHeader)

  for (let i = 0; i < SERVICES_LENGTH; i++) {
    services_buttons[i].addEventListener("click", displayService)
    backButtons[i].addEventListener("click", unDisplayService)
  }

  svg = document.getElementsByTagName("object")

  window.addEventListener("scroll", () => {
    
    for(elementSVG of svg){
      svgAnimate(elementSVG)
    }
  })

  inversoresB.addEventListener("click", function (){
    // show(false, socios)
    show(false, analistas)
    show(true, inversores)
    for(element of team){
      element.classList.remove("active")
    }
    this.classList.add("active")
  })

   analistasB.addEventListener("click", function (){
    // show(false, socios)
    show(true, analistas)
    show(false, inversores)

    for(element of team){
      element.classList.remove("active")
    }
    this.classList.add("active")
   })

   for(element of biography){
      element.addEventListener("click", bio)
   }
})

function show(display, who){
  for(element of who){
    element.style.setProperty("display", display === true ? "flex" : "none")
    animate(element);
  }
}

function svgAnimate(svgDocument){
  let svg = svgDocument.contentDocument
  if(svgDocument.getBoundingClientRect().top < 400) {
    svg.getElementById("graph").classList.add("animate")
  }
}
    
const animateHeader = () => {
  if (window.scrollY > 0) {
    header.classList.add("headerScrolled");
  } else {
    header.classList.remove("headerScrolled");
  }
}

function bio(){
  let biography = this.parentElement.getElementsByClassName("bio")[0]
  let exitButton = this.parentElement.getElementsByClassName("exitButton")[0]
  biography.style.setProperty("opacity", "1")
  biography.style.setProperty("z-index", "2")
  exitButton.addEventListener("click", exitBio)
}

function exitBio () {
  let biography = this.parentElement
  biography.style.setProperty("opacity", "0")
  biography.style.setProperty("z-index", "-1")
}

function displayService () {
  
  pop_up.style.setProperty("display", "flex")

  pop_up.style.setProperty("transform", "translate(-100%, 0)")
  body.style.setProperty("overflow", "hidden")
}

function unDisplayService () {
  this.parentElement.style.setProperty("transform", "translate(0, 0)")
  // setTimeout(() => {
  //   this.parentElement.style.setProperty("display", "none")
  // }, 500);
  body.style.setProperty("overflow", "auto")
}

function submitForm (e) {
  e.preventDefault()
  let xhttp = new XMLHttpRequest()

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert("Correo enviado con éxito")
      clearForm()
      submitButton.removeEventListener("click", submitForm)
      contactForm.style.setProperty("opacity", "0")
      setTimeout(() => {
        contactForm.style.setProperty("display", "none")
      }, 500)
    }
  }

  xhttp.open("POST", "./mailerphp/mail.php", true)
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("name=" + nameToContact.value + "&email=" + email.value + "&message=" + message.value);
}

function clearForm () {
  nameToContact.value = ""
  email.value = ""
  message.value = ""
}