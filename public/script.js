
const menuItems = document.querySelectorAll('.menu-item h1');
const abonnementButton = document.querySelector('.abonnement');
function handleMouseEnter(event) {
    event.target.style.transform = 'translateY(-1px)';
}
function handleMouseLeave(event) {

    event.target.style.transform = 'translateY(0px)';
}
menuItems.forEach(item => {
    item.addEventListener('mouseenter', handleMouseEnter);
    item.addEventListener('mouseleave', handleMouseLeave);
});
abonnementButton.addEventListener('mouseenter', handleMouseEnter);
abonnementButton.addEventListener('mouseleave', handleMouseLeave);




    function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}


    function toggleDropdown() {
    const dropdown = document.getElementById("categorieDropdown");
    dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
}

    function redirigerCategorie(categorie) {
    const estAbonne = false;

    if (!estAbonne) {
    window.location.href = "Abonnement.php";
} else {

    window.location.href = "categorie-" + categorie + ".php";
}
}

    window.addEventListener("click", function (event) {
    const dropdown = document.getElementById("categorieDropdown");
    if (!event.target.closest(".dropdown-categorie")) {
    dropdown.style.display = "none";
}
});
function toggleThemeDropdown() {
    const dropdown = document.getElementById('themeDropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}
function redirigerTheme(theme) {
    window.location.href = 'theme.html?theme=' + theme;
}
document.addEventListener('click', function(event) {
    const themeMenu = document.getElementById('themeDropdown');
    const themeButton = document.querySelector('.dropdown-theme h1');

    const categorieMenu = document.getElementById('categorieDropdown');
    const categorieButton = document.querySelector('.dropdown-categorie h1');

    if (!themeButton.contains(event.target) && !themeMenu.contains(event.target)) {
        themeMenu.style.display = 'none';
    }

    if (!categorieButton.contains(event.target) && !categorieMenu.contains(event.target)) {
        categorieMenu.style.display = 'none';
    }
});




