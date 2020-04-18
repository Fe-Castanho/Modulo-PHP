<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>
    <?php 
    // variável = $ + nome da variavel
    $titulo = "Primeira aula de PHP"
    ?>

    <h1>
        <?php 
                echo $titulo;
        ?>
    </h1>

    <hr>
    <h1>Condicionais</h1>

    <p>IF / ELSE</p>

    <?php 
        $idadeEleitor = 16;

        if ($idadeEleitor >=16 && $idadeEleitor <18 || $idadeEleitor >70) {
            echo "Voto Facultativo";  
        } elseif ($idadeEleitor >= 18 && $idadeEleitor <= 70) {
            echo "Voto Obrigatório";
        } else {
            echo "Não Vota";
        }
    ?>

    <?php 
        function podeVotar($idadeEleitor){
            if ($idadeEleitor >=16 && $idadeEleitor <18 || $idadeEleitor >70) {
                return "Voto Facultativo";  
            } elseif ($idadeEleitor >= 18 && $idadeEleitor <= 70) {
                return "Voto Obrigatório";
            } else {
                return "Não Vota";
            }
        }

    ?>
    <br> <?php echo podeVotar(17)?>
</body>
</html>

<hr>
<p>SWITCH CASE</p>

<?php 
    function validarNumero($i){
        switch ($i) {
            case 0:
                echo "$i igual 0";
                break;
            case 1:
                echo "$i igual 1";
                break;
            case 2:
                echo "$i igual 2";
                break;
            default:
                echo "Qualquer número maior que 2";
            break;
        }
}
?>

R: Criamos uma função validaNumero que recebe um  parâmetro, sendo solicitado que retorne uma resposta entre 0 e 2 ou qualquer número maior que 2, tivemos: <br> <?php echo validarNumero(4) ?>


<?php 
    function generoInformado ($genero){
        switch ($genero) {
            case 'masculino';
            return " Gênero informado é Maculino";
            break;
        case 'feminino';
            return " Genero informado é Feminino";
            break;
        default:
            return " Pessoa se classifica com outro gênero";
            break;
        }
    }
     

?>

<br> <?php echo generoInformado(feminino) ?>

<hr>
<h1>Arrays</h1>

<p>Array Simples</p>

<?php 
    $animais =[];

    $animais = ["Leão", "Girafa", "Cachorro", "Gato"];

    echo "<pre>";
        var_dump($animais);
    echo "</pre>";

?>

<p>Array Associativo</p>

<?php 
    $usuario =[
        "nome" => "Felipe",
        "email" => "felipeccmoraes@gmail.com",
        "senha" => "123456"
    ];
    
    echo "<pre>";
        var_dump($usuario);
    echo "</pre>";
  
    echo "O nome do usuario é " . $usuario["nome"];
?>

<p>Array de Arrays</p>

<?php 
    $listaDeUsuarios = [
        "usuario1" => [
            "nome" => "Felipe",
            "email" => "felipeccmoraes@gmail.com",
            "senha" => "123456"
        ],
        "usuario2" => [
            "nome" => "Renato",
            "email" => "renato@gmail.com",
            "senha" => "123456"
        ],
    ];

    echo "Nome do usuário1 é " . $listaDeUsuarios ["usuario1"]["nome"] . " e o usuario2 é " . $listaDeUsuarios ["usuario2"]["nome"] "."
?>