document.getElementById("darkmode-toggle").addEventListener("click", function() {
    const userInput = document.body.classList.toggle("darkmode");
    localStorage.setItem("darkmode", userInput ? "enabled" : "disabled");
});


window.onload = function() {
    const darkMode = localStorage.getItem("darkmode");
    
    if (darkMode === "enabled") {
        document.body.classList.add("darkmode");
    } else {
        document.body.classList.remove("darkmode");
    }
};

// document.addEventListener("DOMContentLoaded", function() {
//     const catalogue = document.getElementById("katalog");
//     if (catalogue) {
//         catalogue.addEventListener("click", function(cegah) {
//             cegah.preventDefault();
//             alert("Maaf, katalog sedang dalam perbaikan.");
//         });
//     }
// });

const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.navbar ul.menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});
