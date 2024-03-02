<?php 
include("config.php");
$acaoASerFeita = $_POST["acao"];
switch($acaoASerFeita){
    case "cadastrar":
        $nome = $_POST["nome"];
        $cargo = $_POST["cargo"];
        $admissao = $_POST["admissao"];
        $beneficios = $_POST["beneficios"];

        $sql = "INSERT INTO equipe(id, nome, cargo, admissao, beneficios) 
                    VALUES('DEFAULT', '{$nome}','{$cargo}', '{$admissao}', '{$beneficios}');";

        $resultado = $conexao->query($sql);

        if($resultado){
            echo "<script>
                alert('Funcionário(a) cadastrado(a) com sucesso!')
                </script>";
            echo "<script>
                    location.href='?page=verequipe'
                </script>";
        }else{
            echo "<script>
                alert('Houve um erro ao cadastrar esse(a) funcionário(a). Tente novamente mais tarde!')
                </script>";
            echo "<script>
                    location.href='?page=verequipe'
                </script>";
        }
        break;
        case "editar":
            $nome = $_POST["nome"];
            $cargo = $_POST["cargo"];
            $admissao = $_POST["admissao"];
            $beneficios = $_POST["beneficios"];
            $id = $_POST["id"];

            $sql = "UPDATE equipe
            SET nome= '{$nome}',
                cargo= '{$cargo}',
                admissao= '{$admissao}',
                beneficios= '{$beneficios}'
                WHERE id={$id}";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo 
                "<script>
                    alert(\"Informações editadas com sucesso!\");
                </script>";
                echo 
                "<script>
                    location.href='?page=verequipe';
                </script>";
            }else {
                echo 
                "<script>
                    alert(\"Houve um erro ao tentar editar esse funcionário. Tente novamente mais tarde!\");
                </script>";
                echo 
                "<script>
                    location.href='?page=verequipe';
                </script>";
            }
            break;
            case "deletar":
                $id = $_POST["id"];
                $sql = "DELETE FROM equipe
                        WHERE id={$id}";
    
                $resultado = $conexao->query($sql);
    
                if($resultado){
                    echo
                    "<script>
                        alert(\"Cadastro deletado com sucesso!\");
                    </script>";
                    echo
                    "<script>
                        location.href=\"?page=verequipe\";
                    </script>";
                }else{
                    "<script>
                        alert(\"Houve um erro ao tentar deletar este cadastro. Tente novamente mais tarde.\");
                    </script>";
                    echo
                    "<script>
                        location.href=\"?page=verequipe\";
                    </script>";
                }
                break;
}

?>