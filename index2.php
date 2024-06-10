<?php
    require "views/usuarios/usuario-verifica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Band Management</title>
    <style> 

:root {
    --color-base-gray-100: hsl(0, 0%, 96%);
    --color-base-gray-300: hsl(240, 6%, 58%);   
}
body {
    font-family: "Roboto", sans-serif;
    margin: 0;
}

.logo {
    width: 40px;
    height: 40px;
    object-fit: cover;
}

#app {
    display: grid; 
    grid-template-rows: max-content 1fr max-content;
    height: 100vh;
}

.container {
    padding: 16px 32px;
    width: min(1120px, 100%);
    margin: 0 auto;
}

main {
    overflow-y: scroll;
    background-color: var(--color-base-gray-100);
}

main h1 {
    padding-top: 16px;
    margin-left: 16px;
    font-size: 24px;
    color: black;
}

.gallery {
    margin-top: 32px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.item {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
}

.item img {
    max-width: 100%;
    height: auto; 
    aspect-ratio: 16/9;
    object-fit: contain; 
    transition-property: transform, filter;
    transition-duration: 300ms;
    transition-delay: 0.5ms;
    transition-timing-function: ease-in-out;
    display: block;
}

.item img:hover {
    filter: hue-rotate(7deg) contrast(101%) saturate(200%);
    transform: scale(1.01);
}

.details {
    padding: 22px;
    background-color: white;
    z-index: 1;
    position: relative;
    color: black; 
}

.details h2 {
    font-size: 18px;
    color: black; 
}

.details a {
    text-decoration: none; 
    color: black; 
}

.details a:hover {
    text-decoration: underline; 
}

.tags {
    margin-top: 12px; 
}

.tags span {
    padding: 6px;
    background-color: #d3d3d3;
    border-radius: 15px;
    line-height: 0;
    font-size: 10px;
    text-transform: uppercase;
}

footer p {
    text-align: center;
    padding: 1.6px;
    font-weight: 600;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 32px;
    color: var(--color-base-gray-300);
    --startY: -100%;
    animation: move .2s;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

footer {
    --startY: -100%;
    animation: move .2s;
}

@keyframes move {
    from {
        transform: translateY(var(--startY));
    }
}

.item {
    --delay: .4s;
    animation: appear .4s var(--delay) backwards;
}

@keyframes appear {
    0% {
        opacity: 0;
        transform: scale(0.7);
    }
    50% {
        transform: scale(1.2);
    }
}

.button {
    appearance: button;
    background-color: #000;
    background-image: none;
    border: 1px solid #000;
    border-radius: 4px;
    box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
    margin: 0 5px 10px 0;
    overflow: visible;
    padding: 12px 40px;
    text-align: center;
    text-transform: none;
    touch-action: manipulation;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    white-space: nowrap;
}

.button:focus {
    text-decoration: none;
}

.button:hover {
    text-decoration: none;
}

.button:active {
    box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
    outline: 0;
}

.button:not([disabled]):active {
    box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
    transform: translate(2px, 2px);
}

@media (min-width: 768px) {
    .button {
        padding: 12px 50px;
    }
}



    </style>
</head>
<body>
    <div id="app">
    <header>
        <nav>
        <img class="logo" src="./assets/hand.png" alt=" ">
                    <a class="button" href="views/usuarios/usuario-logout.php">Logout</a></li>
        </nav>
    </header>

    <main> 
    <h1>Band Management</h1>
        <section class="gallery">
                    <figure class="item">
                    <img src="./assets/guitar.jpg" alt="">

                        <figcaption class="details">
                            <h2><a class="btnPage" href="views/integrantes/integrantes-listar.php">Lista de Integrantes </a></h2>
                            <div class="tags">
                                <span>Músicos</span>
                            </div>
                        </figcaption>
                    </figure>

                    <figure class="item">
                        <img src="./assets/band.jpg" alt="">

                        <figcaption class="details">
                            <h2><a class="btnPage" href="views/bandas/bandas-listar.php">Lista das Bandas</a></h2>
                            <div class="tags">
                                <span>Bandas</span>
                            </div>
                        </figcaption>
                    </figure>

                    <figure class="item">
                        <img src="./assets/style.jpg" alt="">

                        <figcaption class="details">
                            <h2><a class="btnPage" href="views/estilos/estilos-listar.php">Lista dos Estilos Músicais</a></h2>
                            <div class="tags">
                                <span>Estilos</span>
                            </div>
                        </figcaption>
                    </figure>

                    <figure class="item">
                        <img src="./assets/spider.jpg" alt="">

                        <figcaption class="details">
                            <h2><a class="btnPage" href="aboutme.html" target="_blank">Sobre mim</a></h2>
                            <div class="tags">
                                <span>Estilos</span>
                            </div>
                        </figcaption>
                    </figure>

        </section>
        </div>
        </main>

</body>
</html>