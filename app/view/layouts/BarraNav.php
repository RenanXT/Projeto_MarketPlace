<nav id="sidebar" class="blurNav shadow rounded-2">
    <ul class="d-flex flex-column p-3 gap-2 list-unstyled fs-4 w-100 ">
        <img class="mobileIcon" src="<?php echo '../public/img/logo.png'; ?>" alt="">
        <li class="nav-item"><a href="index.php?pagina=inicio" class="nav-link text-white fw-bold">Início</a>
        </li>
        <li class="nav-item"><a href="index.php?pagina=carrinho" class="nav-link text-white fw-bold">Carrinho</a>
        </li>
        <li class="nav-item"><a href="index.php?pagina=produtos" class="nav-link text-white fw-bold">Produtos</a>
        </li>
        <li class="nav-item"><a href="index.php?pagina=perfil" class="nav-link text-white fw-bold">Perfil</a>
        </li>
        <li class="nav-item"><a href="index.php?pagina=notificacoes" class="nav-link text-white fw-bold">Notificações</a>
        </li>
        <li class="nav-item"><a class="nav-link text-white fw-bold">Suporte</a>
        </li>
        <li class="nav-item"><a href="index.php?pagina=sair" class="nav-link text-white fw-bold">Sair</a>
        </li>
    </ul>
</nav>

<script>
    const nav = document.querySelector('nav#sidebar')
    const navList = nav.querySelector('ul')
    const navLi = navList.querySelectorAll('li')
    const img = nav.querySelector('img')
    const body = document.body


    function changeScreen() {
        let screenWidth = window.innerWidth
        console.log('Largura da tela: ', screenWidth)

        if (screenWidth <= 683) {
            changeNavView(true)
        } else {
            changeNavView(false)
        }
    }

    function changeNavView(isMobile) {
        if (isMobile) {
            nav.classList.remove('sidebar-desktop')
            nav.classList.add('sidebar-mobile')
            img.classList.remove('desktopIcon')
            img.classList.add('mobileIcon')
            body.classList.add('flex-column')
            body.classList.remove('flex-row')



            navLi.forEach(li => li.style.visibility = "hidden")

        } else {
            nav.classList.remove('sidebar-mobile')
            nav.classList.add('sidebar-desktop')
            img.classList.remove('mobileIcon')
            img.classList.add('desktopIcon')
            body.classList.add('flex-row')
            body.classList.remove('flex-column')


            navLi.forEach(li => li.style.visibility = "visible")
        }
    }

    changeScreen()

    window.addEventListener('resize', changeScreen)
    console.log('foi')
</script>