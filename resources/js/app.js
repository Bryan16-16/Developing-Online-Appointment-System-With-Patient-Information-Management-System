import "./bootstrap";
//login & register show password
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");
const con_password = document.querySelector("#password-confirm");

togglePassword.addEventListener("click", function (e) {
    // toggle the type attribute
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    const typecon =
        con_password.getAttribute("type") === "password" ? "text" : "password";
    con_password.setAttribute("type", type);
});



