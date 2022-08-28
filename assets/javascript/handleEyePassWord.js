const eyeClose = document.querySelector(".eye-close");
const eyeOpen = document.querySelector(".eye-open");
const inputPassword = document.querySelector("#password");
const inputUserName = document.querySelector("#username");

eyeClose.addEventListener("click", () => {
  eyeClose.classList.add("hidden");
  eyeOpen.classList.remove("hidden");
  inputPassword.type = "text";
});
eyeOpen.addEventListener("click", () => {
  eyeOpen.classList.add("hidden");
  eyeClose.classList.remove("hidden");
  inputPassword.type = "password";
});
window.addEventListener("load", () => {
  inputUserName.focus();
});
