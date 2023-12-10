const btnMenu = document.getElementsByClassName("nav-sub");
const listMenu = document.getElementsByClassName("nav-sub-item__list");
btnMenu.on= function () {
  if (listMenu.className === "open") {
    listMenu.className = "";
  } else {
    listMenu.className = "open"
  }
}
