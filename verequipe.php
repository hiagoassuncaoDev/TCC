<h1 style="text-align: center; padding: 30px;">Nossos colaboradores:</h1>

<?php 
    $sql = "SELECT * FROM equipe";

    $resultado = $conexao->query($sql);

    $qtdLinhas = $resultado->num_rows;


    if($qtdLinhas > 0){
       while($funcionario = $resultado->fetch_assoc()){
        echo 
        "<div class='container'>
            <div class='container'>
                <div class='row'>
                    <div class='col mb-3'>
                        <div class='card mt-4'>
                            <div class='card-body'>
                                <h2>Nome: {$funcionario['nome']}</h2>
                                <h3>RE: {$funcionario['id']}</h3>
                                <h4>Cargo: {$funcionario['cargo']}</h4>
                                <p><strong>Data de admissão:</strong> {$funcionario['admissao']}</p>
                                <p><strong>Benefícios:</strong> {$funcionario['beneficios']}</p>
                                <button class=\"btn btn-success\" onclick=\"location.href='?page=edicao&id={$funcionario['id']}'\">Editar</button>
                                <button class='btn btn-danger' onclick=\"location.href='?page=exclusao&id={$funcionario['id']}'\">Excluir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
       } 
    }else{
        echo "<p class='alert alert-danger mt-4'>Não há colaboradores cadastrados no sistema.</p>";
    }

?>