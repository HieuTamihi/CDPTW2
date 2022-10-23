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