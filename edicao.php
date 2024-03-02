<?php 
    $id = $_GET["id"];
    $sql = "SELECT * FROM equipe WHERE id={$id}";
    $resultado = $conexao->query($sql);
    $funcionario = $resultado->fetch_object();

    $nomeFuncionario = $funcionario->nome;
    $cargoFuncionario = $funcionario->cargo;
    $admissaoFuncionario = $funcionario->admissao;
    $beneficiosFuncionario = $funcionario->beneficios;
?>

<div class="container p-5">
    <div class="container">
        <div class="container">
            <div class="col">
                <div class="card p-3">
                    <h1 style="color: #070A40;">Edição de cadastro: </h1>
                    <form action="?page=atuarNoBanco" method="post" class="mt-4">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                
                        <label for="nome" style="color: #070A40;">Nome: </label>
                        <input type="text" name="nome" placeholder="Digite o nome do(a) funcionário(a)" class="form-control mt-2 mb-3" value="<?php echo $nomeFuncionario; ?>">
                
                        <label for="cargo" style="color: #070A40;">Sobrenome: </label>
                        <input type="text" name="cargo" placeholder="Digite o seu cargo" class="form-control mt-2 mb-3" value="<?php echo $cargoFuncionario; ?>">
                
                        <label for="admissao" style="color: #070A40;">Data de admissão: </label>
                        <input type="date" name="admissao"  class="form-control mt-2 mb-3" value="<?php echo $admissaoFuncionario; ?>">
                
                        <label for="beneficios" style="color: #070A40;">Benefícios: </label>
                        <input type="text" name="beneficios" placeholder="Ex: VA, VT, Plano de saúde..." class="form-control mt-2 mb-3" value="<?php echo $beneficiosFuncionario; ?>"> <br>
                
                        <button type="submit" class="btn btn-success mb-5">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>