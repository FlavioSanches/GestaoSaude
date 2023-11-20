document.addEventListener("DOMContentLoaded", function () {
    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const contentItems = document.querySelectorAll(".content-item");

    sidebarItems.forEach((item) => {
        item.addEventListener("click", () => {
            const contentId = item.getAttribute("data-content");
            contentItems.forEach((content) => {
                content.style.display = "none";
            });
            document.getElementById(contentId).style.display = "block";
        });
    });
});

//BARRA DE PESQUISA
function performSearch() {
    var searchTerm = document.getElementById('search-input').value;
    var selectedFilter = document.getElementById('filter-select').value;

    alert('Pesquisando por: ' + searchTerm + ' com filtro: ' + selectedFilter);
}
