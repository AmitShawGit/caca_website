window.addEventListener('scroll',function(){
    let navbar = document.querySelector(".navbars");
    if(window.pageYOffset >=40){
        navbar.classList.add('sticky');
    }
    else{
        navbar.classList.remove('sticky');
    }
});