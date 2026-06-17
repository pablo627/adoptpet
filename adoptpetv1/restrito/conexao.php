<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "adoptpetv1";

// Cria conexão
$conn = mysqli_connect($server, $user, $pass, $bd);

// Verifica se conectou com sucesso
if ($conn) {
    // Alerta temporário para você saber que deu certo. 
    // Pode apagar ou comentar esta linha depois!
    echo "<div style='background: #d4edda; color: #155724; padding: 10px; margin: 10px 0;'>Conexão realizada com sucesso com o banco '$bd'!</div>";
} else {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Funções globais (deixadas fora do if/else para que fiquem sempre disponíveis)
function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
            $texto
          </div>";
}

function mostra_data($datanasc) {
    $d = explode('-', $datanasc);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}
?>