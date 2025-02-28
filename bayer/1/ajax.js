/**
  * Função para enviar os dados
  */

 function getDados(funcao, id) {
     // Declaração de Variáveis
     var result = document.getElementById(id);
     var xmlreq = new XMLHttpRequest();

     // Iniciar uma requisição
     xmlreq.open("GET", "https://localtintas.com.br/bayer/controle.php?funcao=" + funcao, true);
     xmlreq.setRequestHeader('Content-Type', 'application/xml');

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }