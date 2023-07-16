const form = document.getElementById('form');

const username = document.getElementById('username');
const username2 = document.getElementById('username2');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('confirm');
const date = document.getElementById('date');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

const checkInputs = () => {
    // Get values from the inputs
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const username2Value = username2.value.trim();
    const dateValue = date.value.trim();



    if (!usernameValue) {
        //Show error    
        //Add error class
        setErrorFor(username, 'Username cannot be blank');
    } else {
        //Add succes class
        setSuccessFor(username);
    }

    if (!username2Value) {
        //Show error    
        //Add error class
        setErrorFor(username2, 'Username cannot be blank');
    } else {
        //Add succes class
        setSuccessFor(username2);
    }

    if (!emailValue) {
        //Show error    
        //Add error class
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        //Show error    
        //Add error class
        setErrorFor(email, 'Email is not valid');
    } else {
        //Add succes class
        setSuccessFor(email);
    }

    const re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!passwordValue) {
        //Show error    
        //Add error class
        setErrorFor(password, 'Password cannot be blank');
    } else if (passwordValue.length < 8) {
        //Add succes class
        setErrorFor(password, 'Password to short');
    } else if (!passwordValue.match(re)) {
        //Add succes class
        setErrorFor(password, 'it have to contains a upper, lower and a number');
    } else {
        //Add succes class
        setSuccessFor(password);
    }

    if (!password2Value) {
        //Show error    
        //Add error class
        setErrorFor(password2, 'write again your password');
    } else if (passwordValue !== password2Value) {
        //Add succes class
        setErrorFor(password2, 'does not match');
    } else {
        //Add succes class
        setSuccessFor(password2);
    }

    // if (!dateValue) {
    //     //Show error    
    //     //Add error class
    //     setErrorFor(date, 'date cannot be');
    // } else {
    //     //Add succes class
    //     setSuccessFor(date);
    // }

    //HomeWork mostrar un mensaje de exito al hacer click y todo este correcto
}

const setErrorFor = (input, message) => {
    const formControl = input.parentElement; //this is the .form-control
    const small = formControl.querySelector('small');

    //add error message inside small
    small.innerText = message;

    //add error class
    formControl.className = 'form-control error';
}

const setSuccessFor = (input) => {
    const formControl = input.parentElement; //this is the .form-control

    //add success class
    formControl.className = 'form-control success';
}

const isEmail = (email) => {
    //this checks if the email is valid
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}