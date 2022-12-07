let leer_mas = document.getElementById("read")
let hidden = document.getElementById("hidden")

const toggleText = () => {
    hidden.classList.toggle("show")
    leer_mas.classList.toggle("show")
    
    if(hidden.classList.contains("show") ) {
        leer_mas.innerText = 'leer menos'
    } else {
        leer_mas.innerText = 'leer más'
    }
}

leer_mas.addEventListener('click', toggleText)