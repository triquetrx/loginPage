function showpassw() {
  var x = document.getElementById("userPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}