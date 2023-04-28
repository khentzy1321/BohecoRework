const inputs = document.querySelectorAll(".inp-field");


inputs.forEach((inp) =>{
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", ()=>{
        if(inp.value != "") return;
        inp.classList.remove("active");
    })
})

// const form = document.querySelector('.inp-field');
// const emailField = document.getElementById('email');
// const passwordField = document.getElementById('password');

// // Get the previous values entered by the user
// const previousEmail = localStorage.getItem('email');
// const previousPassword = localStorage.getItem('password');

// // Set the input field values to the previous values, if they exist
// emailField.value = previousEmail || '';
// passwordField.value = previousPassword || '';

// // Add "active" class to input fields when there is a previous value
// if (previousEmail) {
//   emailField.classList.add('active');
// }
// if (previousPassword) {
//   passwordField.classList.add('active');
// }
