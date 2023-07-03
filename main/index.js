// ---forlogin flip----

// const wrapper = document.querySelector('.wrapper');
// const loginLink = document.querySelector('.login-link');
// const registerLink = document.querySelector('.register-link');
// const btnpopup = document.querySelector('.btn-login');
// const iconClose = document.querySelector('.icon-close');

// registerLink.addEventListener('click', ()=> {
//     wrapper.classList.add('active');
// });

// loginLink.addEventListener('click', ()=> {
//     wrapper.classList.remove('active');
// });
// btnpopup.addEventListener('click', ()=> {
//     wrapper.classList.add('active-popup');
// });
// iconClose.addEventListener('click', ()=> {
//     wrapper.classList.remove('active-popup');
// });

// ----media screen---

var sidemenu = document.getElementById("sidemenu");
function openmenu(){
    sidemenu.style.right = "0";
}
function closemenu(){
    sidemenu.style.right = "-200px";
}

// ---ScrollReveal---

const sr = ScrollReveal ({
    distance: '70px',
    duration: 2700,
    reset: true
})

sr.reveal('.header-text',{delay:200, origin: 'bottom'});  
sr.reveal('.logo',{delay:200, origin: 'left'})
sr.reveal('#menu',{delay:200, origin: 'top'})
sr.reveal('.btn-login',{delay:200, origin: 'right'})
sr.reveal('.artist-list',{delay:200, origin: 'bottom'})
sr.reveal('.card',{delay:200, origin: 'bottom'})
sr.reveal('.about-col-1',{delay:200, origin: 'bottom'})
sr.reveal('.about-col-2',{delay:200, origin: 'bottom'})
sr.reveal('.hr',{delay:200, origin: 'bottom'})

//loader

var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
    loader.style.display = "none";
})

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}


//scroll to bottom to top

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100){
        toTop.classList.add("active");
    }else{
        toTop.classList.remove("active")
    }
})