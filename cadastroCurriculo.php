<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="curriculo.css">
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['botao'])){ 
                //coleta os dados
                if (isset($_POST["nome"])) { 
                    $nome = $_POST["nome"];
                } else {
                    $nome = "";
                }
            
                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                } else {
                    $email = "";
                }
                if (isset($_POST["cpf"])) {
                    $cpf = $_POST["cpf"];
                } else {
                    $cpf = "";
                }
                
                if (isset($_POST["data_nascimento"])) {
                    $data_nascimento = $_POST["data_nascimento"];
                } else {
                    $data_nascimento = "";
                }
        
                if (isset($_POST["estado"])) {
                    $estado = $_POST["estado"];
                } else {
                    $estado = "";
                }
        
                if (isset($_POST["pcd"])) {
                    $pcd = $_POST["pcd"];
                } else {
                    $pcd = "";
                }
                if (isset($_POST["instituicao"])) {
                    $instituicao = $_POST["instituicao"];
                } else {
                    $instituicao = "";
                }
                if (isset($_POST["curso"])) {
                    $curso = $_POST["curso"];
                } else {
                    $curso = "";
                }
                if (isset($_POST["data_inicio_curso"])) {
                    $data_inicio_curso = $_POST["data_inicio_curso"];
                } else {
                    $data_inicio_curso = "";
                }
                if (isset($_POST["data_final_curso"])) {
                    $data_final_curso = $_POST["data_final_curso"];
                } else {
                    $data_final_curso = "";
                }
                if (isset($_POST["cargo"])) {
                    $cargo = $_POST["cargo"];
                } else {
                    $cargo = "";
                }
                if (isset($_POST["empresa"])) {
                    $empresa = $_POST["empresa"];
                } else {
                    $empresa = "";
                }
                if (isset($_POST["data_inicio_emprego"])) {
                    $data_inicio_emprego = $_POST["data_inicio_emprego"];
                } else {
                    $data_inicio_emprego = "";
                }
                if (isset($_POST["data_final_emprego"])) {
                    $data_final_emprego = $_POST["data_final_emprego"];
                } else {
                    $data_final_emprego = "";
                }
                if (isset($_POST["atividades"])) {
                    $atividades = $_POST["atividades"];
                } else {
                    $atividades = "";
                }

                $curriculo = "curriculo.txt";
                $arquivo = fopen($curriculo, "w"); //Cria o arquivo ou abri se já existe

                if ($arquivo) { // Escreve o conteúdo no arquivo
                    fwrite($arquivo, "$nome; \n$email; \n$cpf; \n$data_nascimento; \n$estado; \n$pcd; \n$instituicao; \n$curso; \n$data_inicio_curso; \n$data_final_curso; \n$cargo; \n$empresa; \n$data_inicio_emprego; \n$data_final_emprego; \n$atividades");

                    fclose($arquivo);
                    echo "<div id='container'>";
                    echo "<h1>";
                    echo "Arquivo '$curriculo' criado com sucesso!<br><br>";
                    echo "</h1>";
                    echo "</div";
                } 
                else {
                    echo "Erro ao criar o arquivo.<br><br>";
                }
            }
            
            $texto = "";
            $arquivo = fopen("curriculo.txt", "r");

            while (!feof($arquivo)){
                $texto .= fgetc($arquivo);
            }
        }
    ?>
</body>
<?php
    fclose($arquivo);
    echo "<div id='caixa'>";
    echo "<p id = 'formulario'>";
    echo nl2br($texto);
    echo "</p>";
    echo "</div>";
?>
</html>

