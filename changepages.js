function changePage() {
  location.href = document.getElementById("pulldown").value;
}

document.getElementById("goButton").addEventListener("click",changePage,false);