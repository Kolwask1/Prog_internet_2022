//const disp = document.getElementById("display");
const disp = document.querySelector("#display");
// Aqui eu seleciono todos o elementos que estão usando o Class Name
//const btns = document.getElementsByClassName("btn");
const btns = document.querySelectorAll(".btn");

function minhafuncao() {
     //Nesse ponto estou buscando no HTML um item que tem o id chamado display 
        alert("o valor do display é" + disp.innerHTML);
            //disp.inner.HTML = "alterei o conteudo"
}
console.log(btns)
Array.from(btns).forEach(btn => {
        //console.log(btn)
             btn.addEventListener("click",()=>{
        alert("Voce clicou no btn" + btn.dataset.valor);
        disp.innerHTML = btn.dataset.valor;
    })
});
