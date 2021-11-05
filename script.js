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

let addsub = document.getElementById('addsub');
addsub.onclick = function(event) {
    let target = event.target;
    if (target.closest('.icon-add')) {
        let iconAdd = target.closest('.icon-add');
        let quantity = iconAdd.nextElementSibling;
        quantity.value = Number(quantity.value) + 1;
    }
    if (target.closest('.icon-sub')) {
        let iconSub = target.closest('.icon-sub');
        let quantity = iconSub.previousElementSibling;
        if (Number(quantity.value) > 0) { 
            quantity.value = Number(quantity.value) - 1;
        }
    }
}


//footer
let heightOfWindow = document.documentElement.clientHeight;
let heightOfBody = document.body.clientHeight;
let footer = document.querySelector('footer');

if (heightOfBody <= heightOfWindow) {
    footer.classList.add('active');
}
