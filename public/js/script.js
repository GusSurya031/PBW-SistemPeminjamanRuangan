const menuButton = document.getElementById("menuButton");
const listNavigation = document.getElementById("listNavigation");

menuButton.addEventListener("click", () => {
  listNavigation.classList.toggle("hidden");
});

listNavigation.addEventListener("click", () => {
  listNavigation.classList.toggle("hidden");
});
