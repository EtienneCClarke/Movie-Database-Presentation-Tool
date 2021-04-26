
var loginBtn = document.getElementById('login-toggle');
var loginContainer = document.getElementById('login-container');

loginBtn.onclick = function() {

    if(loginContainer.style.top == "-500px") {
        loginContainer.style.top = "50%";
    } else {
        loginContainer.style.top = "-500px";
    }

}