const registerForm = document.querySelector("#register-form"); 
const fnameInput = document.querySelector("#fname"); 
const lnameInput = document.querySelector("#lname");
const telInput = document.querySelector("#tel");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const cnfPasswordInput = document.querySelector("#cnfPassword");

registerForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const fnameValue = fnameInput.value;
  const lnameValue = lnameInput.value;
  const telValue = telInput.value;
  const emailValue = emailInput.value;
  const passwordValue = passwordInput.value;
  const cnfPasswordValue = cnfPasswordInput.value;

  // Validate fname
  if (fnameValue === "") {
    alert("First name is required.");
    return;
  }

  // Validate lname
  if (lnameValue === "") {
    alert("Last name is required.");
    return;
  }

  // Validate dob
  if (telValue === "") {
    alert("Date of birth is required.");
    return;
  }

  // Email validation
  if (emailValue === "") {
    alert("Email is required.");
    return;
  }

  if (!emailValue.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
    alert("Invalid email address.");
    return;
  }

  // Validate password
  if (passwordValue === "") {
    alert("Password is required.");
    return;
  }

  if (!passwordValue.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/)) {
    alert("Invalid password. Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
    return;
  }

  // Validate confirm password
  if (cnfPasswordValue === "") {
    alert("Confirm password is required.");
    return;
  }

  if (passwordValue !== cnfPasswordValue) {
    alert("Passwords do not match.");
    return;
  }

  // Submit form data to PHP script
  const formData = new FormData(registerForm)
    fetch("../actions/register_user_action.php", {
        method: "POST",
        body: formData,
    })
    .then((response) => {
        if (response.status === 200) {
           // alert("Registration successful. You can now log in.");
            window.location.href = "../login/login.php";
        }
        else {
            alert("error="+response.status);
            // alert("Error occurred while registering.");
        }
    })
    .catch((_error) => {
        alert("Error occurred while registering. Please try again.");
    });
});