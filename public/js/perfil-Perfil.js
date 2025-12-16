const div = document.querySelector('div#Id_perfil');
const item = div.querySelectorAll('div.item');

item.forEach(obj => {
    obj.addEventListener('click', () => {
        obj.classList.
        add('glow-hover');
        const button = obj.querySelectorAll('button.btnAtualizar');
        const input = obj.getElementsByTagName('input');
        
        Array.from(input).forEach(inp => {
            inp.disabled = false;
            inp.classList.remove('text-secondary');
            inp.classList.add('text-white');
        })

        button.forEach(btn=> {
            btn.disabled = false;
            btn.classList.remove('text-secondary');
            btn.classList.add('text-white');
        })
        
    })
})