// const Jacob = document.getElementsByTagName('header');
// const clickIn = document.getElementById('click');


// function nav() {
//     jacob.classList.add('show');

// }

// function nav_out() {
//     jacob.classList.remove('show');
// }

// clickIn.addEventListener('click', jacob);
const container = document.getElementById('container');
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

    form.addEventListener('submit', (e) =>{
        e.preventDefault();
        
        checkInputs();
    });

    function checkInputs() {
        // get the value of inputs

        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        const password2Value = password2.value.trim();

        if(usernameValue === ''){
            // show error
            // add error class
            setErrorFor(username, 'username cannot be blank');
        }
        else{
            // add success class
            setSuccessFor(username);
        }

        if(emailValue === ''){
            setErrorFor(email, 'email cannot be blank');
        }
        else if(!isEmail(emailValue)){
            setErrorFor(email, 'invalid email');
        } 
        else {
            setSuccessFor(email);
        }

        if(passwordValue === ''){
            // show error
            // add error class
            setErrorFor(password, 'input a password');
        }
        else if (!char (passwordValue)){
            setErrorFor(password, 'password must contain char');
        }
        else{
            // add success class
            setSuccessFor(password);
        }

        if (password2Value === ''){
            setErrorFor(password2, 'password cannot be blank');
        }
        else if (password2Value !== passwordValue){
            setErrorFor(password2, 'passwords does not match');
        }
        else{
            setSuccessFor(password2);
        }

        // show a success message
        if (input === setSuccessFor){
            
        }
    }

    function setErrorFor(input, message){
        const formControl = input.parentElement; //.form-control
        const small = formControl.querySelector('small');

        // add error message inside small
        small.innerText = message;

        // add the error class
        formControl.className = 'form-control error';
    }

function setSuccessFor(input){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

        // add error message inside small
        small.innerText = '';
     formControl.className = 'form-control success';
}
function isEmail(email){
return test(email);
}
