const splash = document.querySelector(".splash");
document.addEventListener("DOMContentLoaded", (e) => {
    setTimeout(() => {
        splash.classList.add("display-none");
    }, 1700);
});

function ShowDiv() {
    document.getElementById("myDiv").style.display = "";
}
