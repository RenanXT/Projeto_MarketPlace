const div = document.querySelector('#LogoSlide .slideImg');

div.innerHTML += div.innerHTML; // duplica conteúdo

let offset = 0;
const speed = 1; // pixels por frame
const totalWidth = Array.from(div.querySelectorAll('img'))
    .slice(0, div.querySelectorAll('img').length / 2)
    .reduce((sum, img) => sum + img.offsetWidth, 0);

function animate() {
    offset += speed;
    if (offset >= totalWidth) offset = 0;
    div.style.transform = `translateX(-${offset}px)`;
    requestAnimationFrame(animate);
}

animate();
