
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="row p-5">
                        <h1 class="text-center mt-5">Cadastro de funcionários.</h1>
                        <form action="?page=atuarNoBanco" method="post" class="mt-4">
                            <input type="hidden" name="acao" value="cadastrar">
                            <div class="mb-3">
                                <label for="nome" class="mb-2">Nome: </label>
                                <input type="text" name="nome" class="form-control " required placeholder="Digite o nome completo do(a) funcionário(a)">
                            </div>
                            <div class="mb-3">
                                <label for="cargo" class="mb-2">Cargo: </label>
                                <input type="text" name="cargo" class="form-control " required placeholder="Digite o seu cargo">
                            </div>
                            <div class="mb-3">
                                <label for="admissao" class="mb-2">Data de admissão: </label>
                                <input type="date" name="admissao" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="beneficios" class="mb-2">Benefícios: </label>
                                <input type="text" name="beneficios" class="form-control" required placeholder="Ex: VA, VT, Plano de saúde...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-5">Cadastrar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>