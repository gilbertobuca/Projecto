<?php
const toggleButton = document.getElementById("toggle-mode");
const body = document.body;

// Verifica o modo salvo no localStorage
if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark-mode");
}

toggleButton.addEventListener("click", () => {
    body.classList.toggle("dark-mode");

    // Salva a preferência no localStorage
    if (body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});

?>