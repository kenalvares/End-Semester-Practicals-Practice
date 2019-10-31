
const firstName = document.getElementById("firstName") // First Name Input
const lastName = document.getElementById("lastName") // Last Name Input
const emailId = document.getElementById("emailId") // Email Input
const submitBtn = document.getElementById("submit") // Submit Button
const errors = document.getElementById("errors") // Error Messages
// Everytime submit button is clicked, run form validation code
submitBtn.addEventListener("click", (e) => {
  validateForm(e)
});

// Form Validation
const validateForm = err => {
  let messages = ["Errors:"];

  if (/[0-9]/.test(firstName.value)) {
    messages.push("No numerals allowed in first name")
  }
  if (/[!@#$%^&*()-]/.test(firstName.value)) {
    messages.push("No special characters allowed in first name")
  }

  if (firstName.value.length > 30) {
    messages.push("First name is too long")
  }

  if (/[0-9]/.test(lastName.value)) {
    messages.push("No numerals allowed in last name")
  }

  if (/[!@#$%^&*()-]/.test(lastName.value)) {
    messages.push("No special characters allowed in last name")
  }

  if (lastName.value.length > 30) {
    messages.push("Last name is too long")
  }

  if (emailId.value.length > 30) {
    messages.push("Email is too long")
  }

  if (messages.length > 1) {
    err.preventDefault();
    errors.innerText = messages.join("\n");
  }
}