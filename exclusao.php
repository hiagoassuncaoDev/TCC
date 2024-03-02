<?php 
    $id = $_GET["id"];
    $sql = "SELECT * FROM equipe
            WHERE id={$id};";
    $resultado = $conexao->query($sql);

    $quantidadeDeLinhas = $resultado->num_rows;

    if($quantidadeDeLinhas > 0){
        $funcionario = $resultado->fetch_assoc();
        echo 
            "<div class='container p-5'>
                <div class='container p-5'>
                    <div class='container'>
                        <div class='container'>
                            <div class=\"col\">
                                <div class=\"card p-4\">
                                    <h2 style='font-weight: bolder; font-style: italic; color:#070A40;'>Você tem certeza que deseja excluir esse cadastro?</h2>
                                    <br>
                                    <h2>Nome: {$funcionario['nome']}</h2>
                                    <h3>Cargo: {$funcionario['cargo']}</h3>
                                    <h4>RE: {$funcionario['id']}</h4>
                                    <p><strong>Admissão:</strong> {$funcionario['admissao']}</p>
                                    <p><strong>Benefícios:</strong> {$funcionario['beneficios']}</p>
                                    <p style='font-weight: 300; font-style: italic; color: red;'><strong>O número de RE uma vez deletado, não pode ser recupedado.</strong></p>
                                    <form action=\"?page=atuarNoBanco\" method=\"post\">
                                        <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                                        <input type=\"hidden\" name=\"id\" value=\"{$funcionario['id']}\">
                                        <button type=\"submit\" class=\"btn btn-success\" style='width: 65px'>Sim</button>
                                    </form>
                                    <button type=\"\"class=\"btn btn-danger mt-2 mb-5\" onclick=\"location.href='?page=verequipe'\" style='width: 65px; height: 38px;'>Não</button>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
    }else{
        echo "<p class=\"alert alert-danger mt-4\">Não foi possível encontrar este cadastro.</p>";
    }
?>