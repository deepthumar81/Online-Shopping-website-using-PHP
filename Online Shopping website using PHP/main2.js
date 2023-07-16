const form = document.getElementById('form');

const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

const checkInputs = () => {
    // Get values from the inputs
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

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
    const datePattern = /^(0?[1-9]|[12][0-9]|3[01])\/(0?[1-9]|1[0-2])\/\d{4}$/;
    if (!dateValue) {
        //Show error    
        //Add error class
        setErrorFor(date, 'Date cannot be blank');

    } else if (!dateValue.match(datePattern)) {
        //Add succes class
        setErrorFor(date, 'it have to contains a upper, lower and a number');
    } else {
        //Add succes class
        setSuccessFor(date);

        //Redirect to another page
        window.location.href = "welcom.php";
    }
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
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1, 3}\.[0-9]{1, 3}\.[0-9]{1, 3}\.[0-9]{1, 3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
