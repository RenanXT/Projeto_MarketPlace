const form = document.querySelector('form#txtForm')
const detalhes = document.querySelector('div#detalhesId')
const btn = document.querySelector('button#btnVoltar')

detalhes.style.display = "none"
detalhes.style.opacity = 0
detalhes.style.transition = "opacity 0.5s ease"


form.addEventListener('submit', (e) => {
    e.preventDefault()
    const cards = document.querySelectorAll('div.card-produto')

    cards.forEach(card => {
        card.style.display = "none"
    })

    detalhes.style.display = "flex"


    setTimeout(() => {
        detalhes.style.opacity = 1
    }, 100)
})
btn.addEventListener('click', () => {
    detalhes.style.display = "none"
    detalhes.style.opacity = 0
    detalhes.style.transition = "opacity 0.5s ease"

    const cards = document.querySelectorAll('div.card-produto')

    cards.forEach(card => {
        card.style.display = "flex"
    })

})