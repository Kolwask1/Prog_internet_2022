const btns = document.querySelectorAll(".btn");

Array.from(btns).forEach(btn => {
    btn.addEventListener("click", () => {
        execucaoBtn(btn);
    })
})

let ultbtn = "";
function execucaoBtn(bt) {
    const display = document.querySelector("#display");
    switch (bt.dataset.tipo) {
        case "numero":
            display.innerHTML += bt.dataset.valor;
            ultbtn = bt.dataset.tipo;
            break;
        case "operacao":
            if (bt.dataset.valor != "eq" &&
                bt.dataset.valor != "clear" &&
                ultbtn != "operacao") {
                display.innerHTML += bt.dataset.valor;
                ultbtn = bt.dataset.valor;
            }
            if (bt.dataset.valor == "eq") {
                display.innerHTML = eval(display.innerHTML);
                ultbtn = "numero";
            }
            if (bt.dataset.valor == "clear") {
                display.innerHTML = "0";
                ultbtn = "numero";
            } 
                break;
        }
}