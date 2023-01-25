let email = document.getElementsByClassName("email");
// let burgerIcon = document.querySelector(".burger-icon");
// let burgerLines = document.querySelector("span.burger");

/**
 * enregistrer l'e-mail dans le clipboard
 */
function copyEmail() {
    navigator.clipboard.writeText("elsa.thievet@hotmail.com");
};

/**
 * affiche la div contenant le message "copié !"
 */
function copiedEmail(){
  let copied = document.querySelector(".copie");
  copied.style.display ="inline";
  
  setTimeout( function() {
      copied.style.display = "none";
  }, 2000);

};

email[0].addEventListener("click", (e) => {
  copyEmail();
  copiedEmail();
});


// let ul = document.querySelector('ul')

// let bool = true;

// burgerIcon.addEventListener('click', function(e) {
//   if (bool) {
   
//   burgerLines.classList.add('open');
//   ul.classList.add('visible');
//   bool = false;
//   } else if (!bool){
//     burgerLines.classList.remove('open');
//     ul.classList.remove('visible');
//     bool = true;
//   }
// })