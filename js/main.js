/* =========== Show Navbar =========== */
let navbar = document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    user_settings.classList.remove('active');
}

let user_settings = document.querySelector('.user_settings')

document.querySelector('#user-btn').onclick = () =>{
    user_settings.classList.toggle('active');
    navbar.classList.remove('active');
}