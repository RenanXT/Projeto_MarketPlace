const Header = document.querySelector('h1#Head')
const Text = document.querySelector('p#Text')
const button = document.querySelector('button#btnClick')
const img = document.querySelector('img.position-relative')

let categorias = []
let indice = 0

async function LoadCategory() {
    try {
        const response = await fetch('categorias.php')
        categorias = await response.json()

        if (categorias.length > 0) {
            ShowCategory()
        }

    } catch (error) {
        console.error("Erro ao carregar categoria", error)
    }
}

function ShowCategory() {
    Header.textContent = categorias[indice].header
    Text.textContent = categorias[indice].description
    img.src = categorias[indice].image
}

function SwitchCategory() {
    if (categorias.length === 0) return

    indice++
    if (indice >= categorias.length) {
        indice = 0
    }

    ShowCategory()
}

button.addEventListener('click', SwitchCategory)

LoadCategory()


const slides = document.querySelector('#LojasId');

if (slides) {

    slides.innerHTML += slides.innerHTML;
    let pos = 0;
    let speed = 20;
    let anim = null;


    function loop() {
        pos -= speed;
        if (Math.abs(pos) >= slides.scrollWidth / 2) {
            pos = 0;
        }
        slides.style.transform = `translateX(${pos}px)`;
        anim = requestAnimationFrame(loop);
    }

    loop();

    setTimeout(() => {
        function slowDown() {
            if (speed > 0.2) {
                speed *= 0.995;
                requestAnimationFrame(slowDown);
            }
            else {
                speed = 0;
                cancelAnimationFrame(anim);
            }
        }
        slowDown();
    }, 300);
}
