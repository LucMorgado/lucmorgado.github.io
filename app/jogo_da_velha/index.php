<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucas Morgado | Jogo da Velha</title>
    <link rel="stylesheet" type="text/css" href="../../css/app.css">

    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body class="bg-dark">
    <!-- MENU -->
    <div class="menu-lateral borda-app bg-light d-flex justify-content-between flex-column">        
        <header>    
            <div class="logo-app d-flex justify-content-center py-3">
                <img class="desktop" src="../../images/logo.svg">        
                <img class="mobile" src="../../images/logo-min.svg">        
            </div>
            <ul class="list-group">
                <li class="list-group-item " aria-current="true">
                    <span class="icone-app bg-primary text-dark text-center">PA</span>
                    <a href="../../app/" class="desktop">Padrões</a>
                </li>
                <li class="list-group-item active">
                    <span class="icone-app bg-primary text-dark text-center">SI</span>
                    <a href="../jogo_da_velha/" class="desktop">Jogo da Velha</a>
                </li>
                <li class="list-group-item">
                    <span class="icone-app bg-primary text-dark text-center">SI</span>
                    <a href="../seo/" class="desktop">Auto SEO</a>
                </li>
            </ul>
        </header>
        <footer class="pb-3 d-flex justify-content-center flex-column">    
           <p class="text-center text-primary m-0 p-2 desktop">Lucas Morgado</p>
           <div class="d-flex justify-content-center social container">
               <div class="icone-social bg-secondary rounded m-1">
                   <a href="https://github.com/LucMorgado">
                       <img src="../../images/github-white.svg">
                   </a>
               </div>
               <div class="icone-social bg-secondary rounded m-1">
                   <a href="https://www.behance.net/lucasmorgado">
                       <img src="../../images/behance.svg">
                   </a>
               </div>
               <div class="icone-social bg-secondary rounded m-1">
                   <a href="mailto:LucMorgado@outlook.com">
                       <img src="../../images/mail.svg">
                   </a>
               </div>
           </div>
        </footer>
    </div>
    <!-- FIM DO MENU -->

    <!-- PROGRAMA -->
    <div class="d-flex justify-content-between app">
        <div class="helper-center"></div>
        <section class="px-3">
            <h1 class="text-center text-white py-2">Jogo da Velha</h1>
            <h2 id="msg" class="text-center text-secondary">Digite os nomes</h2>
            <div id="jogadores" class="form d-flex justify-content-center flex-wrap hide" >
            	<div class="input">
                    <input type="text" name="playerOne" id="text1" placeholder=" " value="creusieni">
                    <label class="label" for="text1"><span class="icone-form"></span>Nome do Jogador 1</label>
                </div>
                <div class="input">
                    <input type="text" name="playerTwo" id="text2" value="lucas" placeholder=" ">
                    <label class="label" for="text2"><span class="icone-form"></span>Nome do Jogador 2</label>
                </div>
                <div class="form-btn my-3 d-flex justify-content-center">
                    <button id="play" class="btn m-2 btn-primary">Jogar</button>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
                <div id="table" class="ic-table-jv">
                    <div id="box00" data-a="0" class="box"></div>
                    <div id="box01" data-a="1" class="box"></div>
                    <div id="box02" data-a="2" class="box"></div>
                    <div id="box10" data-a="3" class="box"></div>
                    <div id="box11" data-a="4" class="box"></div>
                    <div id="box12" data-a="5" class="box"></div>
                    <div id="box20" data-a="6" class="box"></div>
                    <div id="box21" data-a="7" class="box"></div>
                    <div id="box22" data-a="8" class="box"></div>
                </div>
            </div>
            <div class="d-flex justify-content-center hide" id="gameOver">
                <button id="play-again" class="btn m-2 btn-primary">Jogar Novamente</button>
            </div>
            <h3 id="tabela" class="text-white"></h3>
        </section>
    </div>
    <!-- SCRIPT JOGO DA VELHA -->
    <script src="../../js/jogodavelha.js" type="text/javascript"></script>
    <!-- FIM DO PROGRAMA -->

<!-- SCRIPT JOGO DA VELHA -->
<script src="../../js/jogodavelha.js" type="text/javascript"></script>

<!-- BOOTSTRAP E ANIJS -->   
<script src="../../js/app.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/anijs/dist/anijs-min.js"></script>
</body>
</html>