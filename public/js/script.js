//SIGN UP
let select_employ = document.getElementById("select_employ");
let select_cus = document.getElementById("select_cus");
let color_text_em = document.getElementById("color-text-em");
let color_text_cus = document.getElementById("color-text-cus");
function employ() {
    select_employ.style.background = "#404040";
    select_cus.style.background = "#fff";
    color_text_em.style.color = "#fff";
    color_text_cus.style.color = "#000";
}
function cus() {
    select_cus.style.background = "#404040";
    select_employ.style.background = "#fff";
    color_text_cus.style.color = "#fff";
    color_text_em.style.color = "#000";
}
//Change password when login
const show_pass = document.querySelector('#show_pass');
const password = document.querySelector('#password');
const hide_pass = document.querySelector('#hide_pass');

const show_new = document.querySelector('#show_new');
const new_password = document.querySelector('#new_password');
const hide_new = document.querySelector('#hide_new');

const show_confirm = document.querySelector('#show_confirm');
const confirm_password = document.querySelector('#confirm_password');
const hide_confirm = document.querySelector('#hide_confirm');

//Show old password 
show_pass.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    hide_pass.style.display = "block";
    show_pass.style.display = "none ";
});
//hide old password
hide_pass.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'text' ? 'password' : 'text';
    password.setAttribute('type', type);
    hide_pass.style.display = "none";
    show_pass.style.display = "block";

});
//Show new password 
show_new.addEventListener('click', function (e) {
    // toggle the type attribute
    const type_new = new_password.getAttribute('type') === 'password' ? 'text' : 'password';
    new_password.setAttribute('type', type_new);
    hide_new.style.display = "block";
    show_new.style.display = "none ";
});
//hide new password
hide_new.addEventListener('click', function (e) {
    // toggle the type attribute
    const type_new = new_password.getAttribute('type') === 'text' ? 'password' : 'text';
    new_password.setAttribute('type', type_new);
    hide_new.style.display = "none";
    show_new.style.display = "block";
});
//Show confirm password 
show_confirm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type_confirm = confirm_password.getAttribute('type') === 'password' ? 'text' : 'password';
    confirm_password.setAttribute('type', type_confirm);
    hide_confirm.style.display = "block";
    show_confirm.style.display = "none ";
});
//hide confirm password
hide_confirm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type_confirm = confirm_password.getAttribute('type') === 'text' ? 'password' : 'text';
    confirm_password.setAttribute('type', type_confirm);
    hide_confirm.style.display = "none";
    show_confirm.style.display = "block";
});