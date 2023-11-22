<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="js/menu.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">    
    <link rel="icon" href="images/logo.png" type="image/png">

    <title>ㅤRestaurante Vegan</title>
</head>
<body>  
<header>
        <div class="interface" id="home">
            <div class="logo">
                <a href="#home"><img src="images/logo.png"></a>
            </div>
            <nav class="menu-desktop">
                <ul>
                    <li><a href="#topo-do-site">Início</a></li>
                    <li><a href="#pagamentos">Pagamentos</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#cardápio">Cardápio</a></li>
                </ul>
            </nav>
            <div class="btn-contato">
                <a href="login.php">
                    <button>Seja Membro</button>
                </a>
            </div>
    
            <div class="btn-abrir-menu" id="btn-menu">
                <i class="bi bi-list"></i>
            </div>

            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar">
                    <i class="bi bi-x"></i> 
                </div>

                <nav>
                    <ul>
                        <li><a href="#topo-do-site">Início</a></li>
                        <li><a href="#pagamentos">Pagamentos</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#cardápio">Cardápio</a></li>
                        <li><a href="login.php">Seja Membro</a></li>
                    </ul>
                </nav>
            </div>

            <div class="ovl-menu" id="ovl-menu"></div>

        </div>
    </header>
    <main>
        <section class="topo-do-site" id="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>O MELHOR DA CULINÁRIA VEGANA DA <span>REGIÃO.</span></h1>
                        <p>Os melhores pratos, sobremesas e bebidas veganas agora na Região do Lagos!</p>
                        <p>Venha conhecer o nosso Restaurante e aproveite!</p>
                        <div class="btn-contato">
                            <a href="#">
                                <button>Seja Membro</button>
                            </a>
                        </div>
                    </div>
                    <div class="img-topo-site">
                        <img src="images/comida-vegana.png" alt="pessoa">
                    </div>
                </div>
            </div>
        </section>

        <section class="especialidades" id="pagamentos">
            <div class="interface">
                <h2 class="titulo">OPÇÕES DE <span>PAGAMENTOS.</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-credit-card-2-front-fill"></i>
                        <h3>Cartão</h3>
                        <p>Aceitamos pagamentos com cartão de débito e crédito. Ao realizar uma compra, você pode inserir seu cartão na máquina de pagamento e digitar sua senha ou fornecer a autenticação biométrica para concluir a transação. Aceitamos cartões das principais bandeiras, como Visa, Mastercard, American Express, entre outras.</p>
                    </div>
                    
                    <div class="especialidades-box">
                        <i class="bi bi-cash-coin"></i>
                        <h3>Dinheiro ou PIX</h3>
                        <p>Aceitamos pagamentos em dinheiro ou PIX. Ao realizar uma compra, é necessário ter o valor exato ou troco disponível. Nossos caixas estão preparados para fornecer o troco correto, garantindo uma transação tranquila.</p>
                    </div>

                    <div class="especialidades-box">
                        <i class="bi bi-gift-fill"></i>
                        <h3>Gift Card</h3>
                        <p>Aceitamos gift cards como forma de pagamento. Se você tem um gift card de nossa marca ou de um parceiro, basta apresentá-lo no momento do pagamento. Verificaremos o saldo disponível e deduziremos o valor da sua compra. Caso o valor do gift card seja superior ao total da compra, o saldo restante será mantido para futuras transações.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sobre" id="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/foto.png" alt="">
                    </div>
                    <div class="txt-sobre">
                        <h2>SOBRE O NOSSO <span>RESTAURANTE: VEGAN.</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse excepturi corporis nulla impedit, nostrum molestiae fugiat eum non cumque atque laboriosam dolor voluptatum dolorum omnis perferendis aliquam rerum vel.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cum enim sequi minima earum magnam, odit sapiente nam maiores impedit ad reiciendis voluptates? Aperiam, dolore quibusdam soluta neque dignissimos est.</p>
                        <div class="btn-social">
                            <a href="#"><button><i class="bi bi-facebook"></i></button></a>
                            <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                            <a href="#"><button><i class="bi bi-geo-alt-fill"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio" id="cardápio">
            <div class="interface">
                <h2 class="titulo">NOSSO <span>CARDÁPIO.</span></h2>
                <div class="flex">

                    <div class="img-port" style="background-image: url(images/comidas.png);">
                    <div class="overlay">Comidas</div>
                    </div>

                    <div class="img-port" style="background-image: url(images/bebidas.png);">
                    <div class="overlay">Bebidas</div>
                    </div>

                    <div class="img-port" style="background-image: url(images/sobremesas.png);">
                    <div class="overlay">Sobremesas</div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                    <a href="#home"><img src="images/logo.png"></a>
                    </div>

                    <div class="btn-social">
                        <a href="#"><button><i class="bi bi-facebook"></i></button></a>
                        <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                        <a href="#"><button><i class="bi bi-geo-alt-fill"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="line-footer borda">
                <p><i class="bi bi-envelope-fill"></i><a href="mailto:contato@vegan.com.br"> contato@vegan.com.br</a></p>
            </div>
        </div>
    </footer>
    
</body>
</html>
