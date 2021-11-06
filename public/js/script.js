let arrowDown = document.querySelector('.fa-chevron-down');
let userdesc = document.querySelector('.user-desc');
arrowDown.onclick = function() {
    userdesc.classList.toggle('active');
}

let login = document.getElementById('login');
let user = document.getElementById('user');
login.onclick = function() {
    user.classList.add('active');
    login.classList.add('active');
}

