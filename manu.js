const links = document.querySelectorAll(".link");
links.forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    let targetele = item.getAttribute("data-link");
    let el = document.getElementById(targetele);
    el.scrollIntoView({ behavior: "smooth", block: "start" });
  });  
});
