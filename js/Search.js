document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const studentList = document.querySelector(".student_list tbody");

    searchButton.addEventListener("click", performSearch);
    searchInput.addEventListener("keyup", function (event) {
        if (event.key === "Enter") {
            performSearch();
        }
    });

    function performSearch() {
        const searchQuery = searchInput.value.toLowerCase();

        const students = document.querySelectorAll(".student_list tbody tr");

        students.forEach(function (student) {
            const name = student.querySelector("td:nth-child(2)").textContent.toLowerCase();
            const email = student.querySelector("td:nth-child(3)").textContent.toLowerCase();

            if (name.includes(searchQuery) || email.includes(searchQuery)) {
                student.style.display = "";
            } else {
                student.style.display = "none";
            }
        });
    }
});
