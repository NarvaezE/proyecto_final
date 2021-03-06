const $email = document.getElementById("email");
const $password = document.getElementById("password");
const $loginForm = document.getElementById("loginForm");

$loginForm.addEventListener("submit", (event) => {
  event.preventDefault();
  // Expresiones regulares
  const data = new FormData();
  data.append("email", $email.value);
  data.append("password", $password.value);
  axios({
    method: "POST",
    url: "/api/v1/user/login.php",
    data,
    headers: {
      "Content-Type": "multipart/form-data",
    },
  })
    .then((response) => {
      if (response.status === 200) {
        location.href = "/perfil.php";
      } else {
        alert(response.data.message);
      }
    })
    .catch((error) => {
      if (error.response) {
        console.log(error.response);
        alert(error.response.data.message);
      }
    });
});
