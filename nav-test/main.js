const menuBtn = document.querySelector(".menu-btn");
let menuOpen = false;
menuBtn.addEventListener("click", () => {
  if (!menuOpen) {
    menuBtn.classList.add("open");
    menuOpen = true;
  } else {
    menuBtn.classList.remove("open");
    menuOpen = false;
  }
});

// const list = document.querySelectorAll(".list");
// function activeLink() {
//   list.forEach((item) => item.classList.remove("active"));
//   this.classList.add("active");
// }
// list.forEach((item) => item.addEventListener("click", activeLink));
