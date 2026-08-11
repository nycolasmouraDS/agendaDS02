<h4>
    <?php
    /* Variáveis e Entrada */
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];
    $salario = $_POST['salario'];
    $experiencia = $_POST['experiencia_anterior'];

    /* Saída */
    echo "Nome do úsuario: ".$nome."<br>";
    echo "Idade do úsuario: ".$idade."<br>";
    echo "Profissão do úsuario: ".$profissao."<br>";
    echo "Salário do úsuario: ".$salario."<br>";
    echo "Experiência anterior: ".$experiencia."<br>";
    ?>

</h4>
<button onclick="window.location.href='http://localhost/agendaDS02/request.php'">
    Voltar ao formulário
</button>
