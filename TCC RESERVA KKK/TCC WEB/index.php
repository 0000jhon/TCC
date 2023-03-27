<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">;

    <script asyun src="index2.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

body{
    background: var(--bg);
}

section{
    padding:2rem 7%;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}

.header{
    background: var(--bg);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:1.5rem 7%;
    border-bottom: var(--border);
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
}

.header .logo img{
    height: 10rem;
    
}

.header .navbar a{
    margin:0 1rem;
    font-size: 1.6rem;
    color:#fff;
}

.header .navbar a:hover{
    color:var(--main-color);
    border-bottom: .1rem solid var(--main-color);
    padding-bottom: .5rem;
}

.header .icons div{
    color:red;
    cursor: pointer;
    font-size: 2.5rem;
    margin-left: 2rem;
}

.header .icons div:hover{
    color:var(--main-color);
}

#menu-btn{
    display: none;
}

.header .search-form{
    position: absolute;
    top:115%; right: 7%;
    background: #fff;
    width: 50rem;
    height: 5rem;
    display: flex;
    align-items: center;
    transform: scaleY(0);
    transform-origin: top;
}

.header .search-form.active{
    transform: scaleY(1);
}

.header .search-form input{
    height: 100%;
    width: 100%;
    font-size: 1.6rem;
    color:var(--black);
    padding:1rem;
    text-transform: none;
}

.header .search-form label{
    cursor: pointer;
    font-size: 2.2rem;
    margin-right: 1.5rem;
    color:var(--black);
}

.header .search-form label:hover{
    color:var(--main-color);
}

.header .cart-items-container{
    position: absolute;
    top:100%; right: -100%;
    height: calc(100vh - 9.5rem);
    width: 35rem;
    background: #fff;
    padding:0 1.5rem;
}

.header .cart-items-container.active{
    right: 0;
}

.header .cart-items-container .cart-item{
    position: relative;
    margin:2rem 0;
    display: flex;
    align-items: center;
    gap:1.5rem;
}

.header .cart-items-container .cart-item .fa-times{
    position: absolute;
    top:1rem; right: 1rem;
    font-size: 2rem;
    cursor: pointer;
    color: var(--black);
}

.header .cart-items-container .cart-item .fa-times:hover{
    color:var(--main-color);
}

.header .cart-items-container .cart-item img{
    height: 7rem;
}

.header .cart-items-container .cart-item .content h3{
    font-size: 2rem;
    color:var(--black);
    padding-bottom: .5rem;
}

.header .cart-items-container .cart-item .content .price{
    font-size: 1.5rem;
    color:var(--main-color);
}

.header .cart-items-container .btn{
    width: 100%;
    text-align: center;
}

.home{
    min-height: 90vh;
    display: flex;
    align-items: center;
    background:url(image.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}

.home .content{
    max-width: 60rem;
}

.home .content h3{
    font-size: 6rem;
    text-transform: uppercase;
    color:#fff;
}

.home .content p{
    font-size: 2rem;
    font-weight: lighter;
    line-height: 1.8;
    padding:1rem 0;
    color:#eee;
}

.about .row{
    display: flex;
    align-items: center;
    background:var(--black);
    flex-wrap: wrap;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    height: auto;
    display: flex;
    max-width: 100%;
}
.about .row .content{
    flex:1 1 45rem;
    padding:2rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#fff;
}

.about .row .content p{
    font-size: 1.6rem;
    color:#ccc;
    padding:1rem 0;
    line-height: 1.8;
}

.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.menu .box-container .box{
    padding:5rem;
    text-align: center;
    border:var(--border);    
}

.menu .box-container .box img{
    height: 10rem;
}

.menu .box-container .box h3{
    color: #fff;
    font-size: 2rem;
    padding:1rem 0;
}

.menu .box-container .box .price{
    color: #fff;
    font-size: 2.5rem;
    padding:.5rem 0;
}

.menu .box-container .box .price span{
    font-size: 1.5rem;
    text-decoration: line-through;
    font-weight: lighter;
}

.menu .box-container .box:hover{
    background:#fff;
}

.menu .box-container .box:hover > *{
    color:var(--black);
}

.products .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.products .box-container .box{
    text-align: center;
    border:var(--border);
    padding: 2rem;
}

.products .box-container .box .icons a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border:var(--border);
    color:#fff;
    margin:.3rem;
}

.products .box-container .box .icons a:hover{
    background:var(--main-color);
}

.products .box-container .box .image{
    padding: 2.5rem 0;
}

.products .box-container .box .image img{
    height: 25rem;
}

.products .box-container .box .content h3{
    color:#fff;
    font-size: 2.5rem;
}

.products .box-container .box .content .stars{
    padding: 1.5rem;
}

.products .box-container .box .content .stars i{
    font-size: 1.7rem;
    color: var(--main-color);
}

.products .box-container .box .content .price{
    color:#fff;
    font-size: 2.5rem;
}

.products .box-container .box .content .price span{
    text-decoration: line-through;
    font-weight: lighter;
    font-size: 1.5rem;
}

.review .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.review .box-container .box{
    border:var(--border);
    text-align: center;
    padding:3rem 2rem;
}

.review .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:#ccc;
    padding:2rem 0;
}

.review .box-container .box .user{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}

.review .box-container .box h3{
    padding:1rem 0;
    font-size: 2rem;
    color:#fff;
}

.review .box-container .box .stars i{
    font-size: 1.5rem;
    color:var(--main-color);
}

.contact .row{
    display: flex;
    background:var(--black);
    flex-wrap: wrap;
    gap:1rem;
}

.contact .row .map{
    flex:1 1 45rem;
    width: 100%;
    object-fit: cover;
}

.contact .row form{
    flex:1 1 45rem;
    padding:5rem 2rem;
   
}

.contact .row form h3{
    text-transform: uppercase;
    font-size: 3.5rem;
    color:#fff;
}

.contact .row form .inputBox{
    display: flex;
    align-items: center;
    margin-top: 2rem;
    margin-bottom: 2rem;
    background:var(--bg);
    border:var(--border);
}

.contact .row form .inputBox span{
    color:#fff;
    font-size: 2rem;
    padding-left: 2rem;
}

.contact .row form .inputBox input{
    width: 100%;
    padding:2rem;
    font-size: 1.7rem;
    color:#fff;
    text-transform: none;
    background:none;
}

.footer{
    background:var(--black);
    text-align: center;
}

.footer .share{
    padding:1rem 0;
}

.footer .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:#fff;
    border:var(--border);
    margin:.3rem;
    border-radius: 50%;
}

.footer .share a:hover{
    background-color: var(--main-color);
}

.footer .links{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
    gap:1rem;
}

.footer .links a{
    padding:.7rem 2rem;
    color:#fff;
    border:var(--border);
    font-size: 2rem;
}

.footer .links a:hover{
    background:var(--main-color);
}

.footer .credit{
    font-size: 2rem;
    color:#fff;
    font-weight: lighter;
    padding:1.5rem;
}

.footer .credit span{
    color:var(--main-color);
}

/* media queries  */
@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:1.5rem 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .navbar{
        position: absolute;
        top:100%; right: -100%;
        background: #fff;
        width: 30rem;
        height: calc(100vh - 9.5rem);
    }

    .header .navbar.active{
        right:0;
    }

    .header .navbar a{
        color:var(--black);
        display: block;
        margin:1.5rem;
        padding:.5rem;
        font-size: 2rem;
    }

    .header .search-form{
        width: 90%;
        right: 2rem;
    }

    .home{
        background-position: left;
        justify-content: center;
        text-align: center;
    }

    .home .content h3{
        font-size: 4.5rem;
    }

    .home .content p{
        font-size: 1.5rem;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

}
        </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="design2.png" alt="jhon">
    </a>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produtos</a>
        <a href="#review">Analise</a>
        <a href="#contact">contatos</a>
        <a href="http://localhost:8080/TCC%20RESERVA%20KKK/HOME/">login</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="Digite uma pesquisa do site">  
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B30192/MALBEC-DES-COL-X-100ml-B30192_conceito2.jpg" alt="">
            <div class="content">
                <h3>Malbeck x</h3>
                <div class="price">$169,00</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="https://m.media-amazon.com/images/I/51DMrR8+jOL._AC_SX679_.jpg" alt="">
            <div class="content">
                <h3>Florata Red Colônia</h3>
                <div class="price">$149,90</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B73287/QUASAR-BRAVE_B73287_conceito_.jpg" alt="">
            <div class="content">
                <h3>Quasar Drop XY</h3>
                <div class="price">$134,90</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="https://planetaneon.com.br/wp-content/uploads/2020/02/malbec-tradicional.jpg" alt="">
            <div class="content">
                <h3>Malbeck Tradicional </h3>
                <div class="price">$200,00</div>
            </div>
        </div>
        <h1> total: $653,80 </h1>
        <a href="#" class="btn">Pagar conta </a>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Perfume. Por que usar?</h3>
        <p>Uma pessoa que não usa perfume é só alguém que ainda não descobriu o cheiro que a define.</p>
        <a href="#" class="btn">Comprer Agora</a>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span>Sobre</span> Nós </h1>

    <div class="row">

        <div class="image">
            <img src="https://img.freepik.com/fotos-premium/perfume-para-homem-frasco-de-vidro-preto-sobre-fundo-escuro-metalico_84738-4845.jpg" alt="Sobre">
        </div>

        <div class="content">
            <h3>O qué faz nossa Perfumaria especial?</h3>
            <p>Nossa loja pode lhe agradar não só no cheiro mas em todos os apectos de sua vida e claro melhor com cheiro de um perfume especialmente para você.</p>
            <p>Dinheiro não compra felicidade, mas compra perfume, O que é mesma coisa, Então ta esperando o quê ?</p>
            <a href="#" class="btn">Compre Agora</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> Nosso <span>Menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://http2.mlstatic.com/D_NQ_NP_903694-MLB53733221779_022023-O.jpg" alt="menu">
            <h3>Malbec Gold Desodorante</h3>
            <div class="price">$209,90 <span>250,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_1800,c_limit/e_trim/v1/imagens/product/B73743/40b4178c-cf71-43ef-9d3d-111fdf957ea7-malbec-magnetic-desodorante-colonia-100-ml.png" alt="menu">
            <h3>Malbec Magnetic Desodorante</h3>
            <div class="price">$200,00 <span>230,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_1800,c_limit/e_trim/v1/imagens/products/B77506/B77506---Quasar-Drop-XY-Desodorante-Colonia-100ml_conceito.jpg" alt="menu">
            <h3>Quasar Drop XY Desodorante</h3>
            <div class="price">$134,90 <span>150,90</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B73287/QUASAR-BRAVE_B73287_conceito_.jpg" alt="menu">
            <h3>Quasar Brave Desodorante</h3>
            <div class="price">$140,90<span>160,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B46898/ZAAD-EDP-EXPEDITION-95ml_B46898_conceito2.jpg" alt="menu">
            <h3>Zaad Expedition Parfum</h3>
            <div class="price">$284,90 <span>300,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://cf.shopee.com.br/file/72c485231cdc09ccfc7200e11439115e" alt="menu">
            <h3>Zaad Santal PARFUN</h3>
            <div class="price">$284,00 <span>299,90</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B83529/Blend_Cardamom_Eau_Parfum_B83529_conceito2.jpg" alt="menu">
            <h3>The Blend Cardamom Parfum</h3>
            <div class="price">$290,00 <span>310,90</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://m.media-amazon.com/images/I/51DMrR8+jOL._AC_SX679_.jpg" alt="menu">
            <h3>Floratta Red Colônia</h3>
            <div class="price">$149,90 <span>170,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_1800,c_limit/e_trim/v1/imagens/product/B70899/eeea5a4f-a38b-4905-ac4e-c3d012bc294a-elysee-nuit-eau-de-parfum-50ml.png" alt="menu">
            <h3>Elysée Nuit Eau Parfum</h3>
            <div class="price">$269,90 <span>299,90</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

        <div class="box">
            <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B48621/Floratta_Fleur_Eclipse_B48621_conceito.jpg" alt="menu">
            <h3>Floratta Fleur d' Éclipse</h3>
            <div class="price">$130,90 <span>160,00</span></div>
            <a href="#" class="btn">Add Carrinho</a>
        </div>

    </div>

</section>


<section class="products" id="products">

    <h1 class="heading"> Nosso <span>Produtos</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="https://planetaneon.com.br/wp-content/uploads/2020/02/malbec-tradicional.jpg" alt="produtos">
            </div>
            <div class="content">
                <h3>Malbec Tradicional Original</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$200,00 <span>$220,90</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/products/B30192/MALBEC-DES-COL-X-100ml-B30192_conceito2.jpg" alt="produtos">
            </div>
            <div class="content">
                <h3>Malbec X</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$169,90 <span>$200,00</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="https://http2.mlstatic.com/D_NQ_NP_918392-MLB31365746750_072019-W.jpg" alt="produtos">
            </div>
            <div class="content">
                <h3>Malbec Black </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$209,90 <span>$250,00</span></div>
            </div>
        </div>

    </div>

</section>



<section class="review" id="review">

    <h1 class="heading"> Analise dos <span>Clientes</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="ava-2.jpg" alt="" width="250px" class="quote">
            <p>Parabens Pelos trabalho de vocês  perfumes estou gostando muito, as fragrância são muito boas irei compra mais.</p>
            <img src="ava-2.jpg" class="user" alt="">
            <h3>João Otávio</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="ava-3.jpg" alt="" width="250px" class="quote">
            <p>Excelente perfumes da loja, estão agradando muito eu e meu marido os perfumes são otimos atende a nossa expectativa .</p>
            <img src="ava-3.jpg" class="user" alt="">
            <h3>João Manoel</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="gui.jpg" alt="gui"  width="250px" class="quote">
            <p>Os perfume são de muita qualidade e não decepcionar o cliente, fora que os cheiros são muito Parabens pelo trabalho de vocês continue assim  .</p>
            <img src="gui.jpg"  width="250px" class="user" alt="">
            <h3>Guilherme Bernades</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contatos</span> </h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.80267025564!2d-46.94027168452204!3d-19.592952932977497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b036e13e46e799%3A0x21e9cc8f2ae0571!2sEmporium%20Perfumes!5e0!3m2!1spt-BR!2sbr!4v1678296075504!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>Entar em Contato</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Nome">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Telefone">
            </div>
            <input type="submit" value="Enviar Pedido   " class="btn">
        </form>

    </div>

</section>


<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/oboticario/?locale=pt_BR" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/oBoticario" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/perfumariao/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produtos</a>
        <a href="#review">Analise</a>
        <a href="#contact">Contatos</a>
        <a href="http://localhost:8080/TCC%20RESERVA%20KKK/HOME/">Login</a>
    </div>

    <div class="credit">Obrigado <span>Por visitar</span> Este site</div>

</section>

<script async src="index.js"></script>

</body>
</html>