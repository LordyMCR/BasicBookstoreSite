/* 
    Clicking the submit button on pay.php will trigger the below 3 functions.
    Each function, if the argument results in true or false, will change the value of its corresponding hidden value.
    The PHP script on success.php will check whether all 3 function's hidden value is a 1 - if they are, the data will be sent to the database.
    If any of the hidden values are -1, an alert will appear on the screen stating which input is incorrect.
*/
const submitBtn = document.getElementById("submit");
submitBtn.addEventListener('click', cardCheck);
submitBtn.addEventListener('click', dateCheck);
submitBtn.addEventListener('click', cvvCheck);

function cardCheck() {
    const credInput = document.getElementById("cardNumber").value;
    credReg = /^(5[1-5][0-9]{14})$/;

    if (credReg.test(credInput)) {
        document.getElementById("cardValidate").value = 1;
    } else {
        document.getElementById("cardValidate").value = -1;
        alert("Invalid card number, try again.");
    }
}

function dateCheck() {
    const formMonth = document.getElementById("month").value;
    const formYear = document.getElementById("year").value;
    const date = new Date();
    const month = date.getMonth()+1;
    const year = date.getFullYear();
    /* 
        If today's year is greater than the inputted year OR
        if today's year is equal to the inputted year AND today's month is greater than tha inputted month,
        the inputted card date is expired as it is before today's date
    */
    if (year > formYear || (year == formYear && month > formMonth)) {
        document.getElementById("dateValidate").value = -1;
        alert("Card date expired, try again.");
    } else {
        document.getElementById("dateValidate").value = 1;
    }
}

function cvvCheck() {
    const cvvInput = document.getElementById("cvv").value;
    cvvReg = /^[0-9]{3,4}$/;

    if (cvvReg.test(cvvInput)) {
        document.getElementById("cvvValidate").value = 1;
    } else {
        document.getElementById("cvvValidate").value = -1;
        alert("Invalid CVV number, try again.");
    }
}