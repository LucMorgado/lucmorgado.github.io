    //inicialização
    let turn = false, gameOver;
    let jogadas = 9;
    let table = new Array(9);
    iniciarJogo()

function iniciarJogo(){ 
    $('#jogadores').fadeOut();
    $('#jogadores').addClass("hide");
    $('#table').fadeIn();
    gameOver = false
    turn = 'x';
    $('#msg').text('Vez do ' + turn);
}

//escutar jogadas
$('.box').click(function(){ 
    //verificar se esta preenchido
    let box = parseInt(this.dataset.a);
    if(table[box] == undefined && !gameOver){ 
        table[box] = turn;//registrar jogada
        jogadas--;
        $("#"+this.id).addClass("ic-player-" + turn); //desenhar jogada 
        if(ganhou()){
           $('#msg').text(turn + " venceu o jogo");
           $('#gameOver').removeClass('hide');
           gameOver = true;
        }else if(jogadas <= 0 ){
            $('#msg').text("Deu velha");
           $('#gameOver').removeClass('hide');
           gameOver = true;
        }else{ 
            if(turn == 'x'){  turn = 'o';}else{ turn = 'x';} //trocar a vez
            $('#msg').text('Vez do ' + turn);
        }
    }     
});

function ganhou(){ 
    if(table[0] == table[1] && table[1] == table[2] && table[1] != undefined ||
           table[3] == table[4] && table[4] == table[5] && table[4] != undefined ||
           table[6] == table[7] && table[7] == table[8] && table[7] != undefined ||
           table[0] == table[3] && table[3] == table[6] && table[3] != undefined ||
           table[1] == table[4] && table[4] == table[7] && table[4] != undefined ||
           table[2] == table[5] && table[5] == table[8] && table[5] != undefined ||
           table[0] == table[4] && table[4] == table[8] && table[4] != undefined ||
           table[2] == table[4] && table[4] == table[6] && table[4] != undefined ){ 
        return true;
    }else{ 
        return false;
    }
}

$('#play-again').click(function(){
    $('.box').removeClass('ic-player-x');
    $('.box').removeClass('ic-player-o');
    table = new Array(9);
    jogadas = 9;
    $('#gameOver').addClass('hide');
    iniciarJogo();
});