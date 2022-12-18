const leer_mas = document.getElementById("read")
const hidden = document.getElementById("hidden")

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

const prev = document.querySelector('.arrow-prev')
const next = document.querySelector('.arrow-next')
const slider = document.querySelector('.secOdontologia__servicios')

prev.addEventListener('click', () => {
    slider.scrollLeft -= 550
})

next.addEventListener('click', () => {
    slider.scrollLeft += 550
})