const menuBtn = document.getElementById("menu-btn");
const SideBar = document.getElementById("SideBar");

let isVisible = false;

menuBtn.addEventListener("click", () => {
  if (isVisible) {
    SideBar.classList.add("translate-x-[50rem]");
    isVisible = false;
  } else {
    SideBar.classList.remove("translate-x-[50rem]");
    isVisible = true;
  }
});
window.addEventListener("click", (e) => {
  if (e.target.id == "home-btn") {
    window.location = "../pages/index.html";
  }
});
