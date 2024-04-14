const registerForm = document.querySelector("#register-form"); 
const fnameInput = document.querySelector("#fname"); 
const lnameInput = document.querySelector("#lname");
const telInput = document.querySelector("#tel");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const cnfPasswordInput = document.querySelector("#cnfPassword");

const emailRegex= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

const fnameValue = fnameInput.value.trim();
const lnameValue = lnameInput.value.trim();
const telValue = telInput.value.trim();
const emailValue = emailInput.value.trim();
const passwordValue = passwordInput.value.trim();
const cnfPasswordValue = cnfPasswordInput.value.trim();


registerForm.addEventListener("submit", (event) => {
  event.preventDefault();

  if (!emailValue.match(emailRegex)){
    emailInput.setCustomValidity("A valid email address is required.")
  }

  if (!passwordValue.match(passwordRegex)) {
    passwordInput.setCustomValidity('Password must\n  ' +
        '      Have at least 8 characters long\n' +
        '      Contain at least one uppercase letter\n' +
        '      Contain at least one lowercase letter\n' +
        '      Contain at least one digit\n' );

  }

  if (passwordValue !== cnfPasswordValue){
    cnfPasswordInput.setCustomValidity('Passwords do not match.')
  }else cnfPasswordInput.setCustomValidity('')

  if (!fnameValue.match(/^[a-zA-Z]/))
    fnameInput.setCustomValidity("First name is required.");

  if (!lnameValue.match(/^[a-zA-Z]/))
    lnameInput.setCustomValidity("Last name is required.");

  if (!telValue.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im))
    telInput.setCustomValidity("Proper phone number is required.");

    localStorage.setItem('email',emailValue);


    // Submit form data to PHP script
  const formData = new FormData(registerForm)
    fetch("../actions/register_user_action.php", {
        method: "POST",
        body: formData,
    })
    .then((response) => {
        if (response.status === 200) {
          swal({
            title: "Success",
            text: "Check your email to complete registration.",
            type: "success",
            confirmButtonText: "Ok",
            // allowEscapeKey: true
          })
            window.location.href = "../login/confirmEmail.php";
        }
        else {
          swal({
            title: "Error!" + response.status,
            text: "Error occurred while registering",
            type: "error",
            confirmButtonText: "Ok",
            allowEscapeKey: true
          });
            window.location.href = "../login/register.php"
        }
    })
    .catch((_error) => {
      swal({
        title: "Error!",
        text: "Error occurred while registering. Try again.",
        type: "error",
        confirmButtonText: "Ok",
        allowEscapeKey: true
      });
      window.location.href = "../login/register.php"
    });
});