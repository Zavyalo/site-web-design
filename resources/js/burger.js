
const btnShowMenuPanel = document.querySelector("#btn-show-burger-panel");
if(btnShowMenuPanel) {
    const menuPanel = document.querySelector("#menu__burger");
    console.log(menuPanel);
    btnShowMenuPanel.addEventListener("click", () => {
        menuPanel.classList.add("show-burger-panel");
    })


    const btnCloseMenuPanel = document.querySelector("#btn-close-burger-panel");
    btnCloseMenuPanel.addEventListener("click", () => {
        menuPanel.classList.remove("show-burger-panel");
    })
}

