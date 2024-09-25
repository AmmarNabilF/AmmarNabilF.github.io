document.getElementById("darkmode-toggle").addEventListener("click", function() {
    let userInput = prompt("Masukkan tema, dark atau light mode: ");

    if (userInput === "dark") {
        localStorage.setItem("darkmode", "enabled");
        document.body.classList.add("darkmode");
    } else if (userInput === "light") {
        localStorage.setItem("darkmode", "disabled");
        document.body.classList.remove("darkmode");
    } else {
        alert("Inputan salah! Harap masukkan 'dark' atau 'light' mode.");
    }
});


window.onload = function() {
    const darkMode = localStorage.getItem("darkmode");
    
    if (darkMode === "enabled") {
        document.body.classList.add("darkmode");
    } else {
        document.body.classList.remove("darkmode");
    }
};

document.addEventListener("DOMContentLoaded", function() {
    const catalogue = document.getElementById("katalog");
    if (catalogue) {
        catalogue.addEventListener("click", function(cegah) {
            cegah.preventDefault();
            alert("Maaf, katalog sedang dalam perbaikan.");
        });
    }
});

const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.navbar ul.menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});
