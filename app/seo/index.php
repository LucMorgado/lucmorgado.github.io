<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucas Morgado | SEO</title>
    <link rel="stylesheet" type="text/css" href="../../css/app.css">

    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body class="bg-dark">
    <div class="menu-lateral borda-app bg-light d-flex justify-content-between flex-column">        
        <header>    
            <div class="logo-app d-flex justify-content-center py-3">
                <img class="desktop" src="../../images/logo.svg">        
                <img class="mobile" src="../../images/logo-min.svg">        
            </div>
            <ul class="list-group">
            	<li class="list-group-item active" aria-current="true">
            		<a href="../seo/">            			
            	    	<span class="icone-app bg-primary text-dark text-center">SE</span>
            	    	<span class="desktop">SEO</span>
            		</a>
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

    <!-- PROGRAMA -->
    <div class="d-flex justify-content-between app">
        <div class="helper-center"></div>
        <section class="px-3">
            <h1 class="text-center text-white py-2">Auto SEO</h1>
            <form class="form d-flex justify-content-center flex-wrap" method="get">
            	<div class="input">
                    <input type="text" name="tit" id="text1" placeholder=" ">
                    <label class="label" for="text1"><span class="icone-form"></span>Titulo</label>
                </div>
                <div class="form-btn my-3 d-flex justify-content-center">
                    <button class="btn m-2 btn-primary">Gerar</button>
                </div>
            </form>
<?php if(isset($_GET['tit'])){ 
	$titulo = strtolower($_GET['tit']);

	$florkProfissao = ['desc' => 'Caneca profissão com o meme Flork troca', 
		'codigo' =>  'caneca flork troca, canecas divertidas, caneca flork,caneca flork profissão, caneca personalizada flork,troca'];
	$profissao = [
        'titulo'    =>  'Caneca troca',
        'desc' => 'Caneca personalizada de profissão troca', 
		'codigo' =>  'caneca troca, caneca profissão troca, caneca troca personalizada, caneca com foto e nome, caneca profissão, kit caneca e garrafa personalizada'];
	$noivado = ['desc' => 'Caneca Noivado floral troca', 
		'codigo' =>  'caneca troca, caneca Noivado floral troca, caneca troca personalizada, caneca com foto e nome, caneca Noivado floral, kit caneca e garrafa personalizada,caneca casamento,caneca noivado'];
	$extra = ['desc' => 'Caneca troca', 
		'codigo' =>  'caneca troca, caneca personalizada troca, caneca troca personalizada, caneca com foto e nome, kit caneca e garrafa personalizada'];
	$batismo = [
        'titulo'    =>  'Caneca troca',
        'desc'      =>  'Caneca personalizada de batismo troca', 
		'codigo'    =>  'caneca troca,caneca personalizada troca batismo, caneca troca, caneca cha revelação, caneca de batismo, caneca batismo,caneca troca'];
    $nascimento = [
        'titulo'    =>  'Caneca troca a Espera Acabou Menina',
        'desc'      =>  'Caneca personalizada de nascimento troca a espera acabou menina', 
        'codigo'    =>  'caneca troca,caneca personalizada troca nascimento, caneca troca a espera acabou menina, caneca cha revelação, caneca aviso de nascimento, caneca de nascimento, caneca nascimento,caneca troca a espera acabou menina'];
		
	$desc   =   $batismo['desc'];
    $codigo =   $batismo['codigo'];
	$nome =     $batismo['titulo'];
	
	$desc =   str_replace('troca', $titulo, $desc);
    $codigo = str_replace('troca', $titulo, $codigo);
	$nome = str_replace('troca', ucwords($titulo), $nome);


	?>
        <div class="d-flex justify-content-center">
                <table>
                    <tr>                        
                        <th>SEO</th>
                    </tr>
                    <tr>
                        <td onclick="copiarTexto(this)"><?php echo $nome; ?></td>                  
                    </tr>                    
                    <tr>
                        <td onclick="copiarTexto(this)"><?php echo ucfirst($desc); ?></td>                  
                    </tr> 
                    <tr>
                        <td onclick="copiarTexto(this)"><?php echo $codigo; ?></td>                  
                    </tr>                   
                </table>
            </div>
        </section>
    </div>

<?php } ?>
<script type="text/javascript">
	
function copiarTexto(elemento){ 
	var texto = elemento.innerHTML;
	navigator.clipboard.writeText(texto);
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){ 
        redimensionarMenu();

    });

     $(window).resize(function(){ 
         redimensionarMenu();
    });

function redimensionarMenu(){ 
    let hW = $(window).height();
    let wW = $(window).width();
    if(hW < 600) { 
        hW = 600;
    }
$('.menu-lateral').height(hW);
$('.helper-center').css("margin-left", $('.menu-lateral').width() + "px");
}

</script>
<script type="text/javascript" src="../js/anijs/dist/anijs-min.js"></script>
</body>

</html>