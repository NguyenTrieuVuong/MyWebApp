let menutoggle = document.querySelector(".menutoggle");
let closemenu = document.querySelector(".close");
let sidebar = document.querySelector(".bg-sidebar");
let barhamburger = document.querySelector(".fa-bars");


// function for login and sign up

// function for login and sign up
menutoggle.addEventListener("click",function(){
    sidebar.classList.toggle("hidden-sidebar");
    menutoggle.classList.toggle("fa-rotate-270");
    sidebar.classList.remove("hidden-sidebar-mobile");
});

barhamburger.addEventListener("click",function(){
    sidebar.classList.remove("hidden-sidebar-mobile");
});

closemenu.addEventListener("click",function(){
    sidebar.classList.add("hidden-sidebar-mobile");
});
function confirmDelete1(id) {
    if (confirm("Bạn có muốn xóa không?")) {
        window.location.href = "remove_2.php?id=" + id;
    }
}
function confirmDelete2(id) {
    if (confirm("Bạn có muốn xóa không?")) {
        window.location.href = "remove.php?Id=" + id;
    }
}
function confirmDelete(id) {
    if (confirm("Bạn có muốn xóa không?")) {
        window.location.href = "remove_3.php?id=" + id;
    }
}
