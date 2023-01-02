const hamburguer = document.querySelector(".hamburguer");
const menuCentraliza = document.querySelector(".centraliza");

hamburguer.addEventListener("click", () => {
    menuCentraliza.classList.toggle("active");
    console.log("clicou");
})