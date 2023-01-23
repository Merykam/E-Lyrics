
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const Btn = document.getElementById('Btn');
const errorEmail = document.getElementById('errorEmail');
const errorPass1 = document.getElementById('errorPassword');


Btn.addEventListener("click", () => {
    var index = 0;

    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to create your account.";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
    }

    if (password1.value === "" || password1.value == null) {
        index++;
        password1.classList.add("is-invalid");
        errorPass1.innerHTML = "Enter a valid password !!";
    }else {
        password1.classList.remove("is-invalid")
        password1.classList.add("is-valid");
    }
 
    if (index == 0) {
       Btn.type = "submit";
     
    }

});