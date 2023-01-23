


var Add=document.getElementsByClassName('Add')[0];
const modal_body = document.querySelector('.modal-body');
const another_modal_body = document.querySelector('.another-modal-body');
console.log(Add);

Add.addEventListener("click",Addinputs);
function Addinputs(){
    another_modal_body.append(modal_body.cloneNode(true));


    


   
}

//Validation lyrics


const Name = document.getElementById('name');
const title = document.getElementById('title');
const date = document.getElementById('date');
const lyrics = document.getElementById('lyrics');
const Btn = document.getElementById('Btn');
const errorName = document.getElementById('errorName');
const errortitle = document.getElementById('errortitle');
const errordate = document.getElementById('errordate');
const errorlyrics = document.getElementById('errorlyrics');


Btn.addEventListener("click", () => {
    var index = 0;
    if (Name.value === "" || Name.value == null) {
        index++;
        Name.classList.add("is-invalid");
        errorName.innerHTML = "Name is required to create your account.";
    } else {
        Name.classList.remove("is-invalid")
        Name.classList.add("is-valid");
    }
    if (title.value === "" || title.value == null) {
        index++;
        title.classList.add("is-invalid");
        errortitle.innerHTML = "Title is required to create your account.";
    } else {
        title.classList.remove("is-invalid")
        title.classList.add("is-valid");
    }
    if (date.value === "" || date.value == null) {
        index++;
        date.classList.add("is-invalid");
        errordate.innerHTML = "Date is required to create your account.";
    } else {
        date.classList.remove("is-invalid")
        date.classList.add("is-valid");
    }
    if (lyrics.value === "" || lyrics.value == null) {
        index++;
        lyrics.classList.add("is-invalid");
        errorlyrics.innerHTML = "Lyrics is required to create your account.";
    } else {
        lyrics.classList.remove("is-invalid")
        lyrics.classList.add("is-valid");
    }

   
    if (index == 0) {
       Btn.type = "submit";
     
    }

});






