function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('retype_password').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}
function check_pass_login() {
    if (document.getElementById('emailaddress').value==''&& 
            document.getElementById('password_login').value=='') {
        document.getElementById('button_login').disabled = true;
    } else {
        document.getElementById('button_login').disabled = false;
    }
};



