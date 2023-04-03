const toggle = document.getElementById("toggle");
const theme = window.localStorage.getItem("theme");
document.getElementById("toggle").style.backgroundColor = "transparent";
if (theme === "dark") document.body.classList.add("dark");
toggle.addEventListener("click", () => {
   document.body.classList.toggle("dark");
   if (theme === "dark") {
     window.localStorage.setItem("theme", "light");
   } else window.localStorage.setItem("theme", "dark");
});
document.getElementsByClassName('footer')[0].style.fontSize = '1.2vw';
