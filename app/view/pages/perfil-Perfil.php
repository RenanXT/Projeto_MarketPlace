 <div id="Id_perfil" class="tagID d-flex flex-column">
                    <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">SEUS DADOS</h2>
                    <div class="item d-flex flex-column w-90 p-5 m-2 gap-2 bg-content border border-dark rounded-3">
                        <form class="FormId" action="" method="POST">
                            <div class="d-flex flex-wrap w-100 gap-3" method="POST" action="">
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-75"
                                    value="E-Mail:Nome: <?php echo $Usuario['nome'] . ' ' . $Usuario['sobrenome']; ?>"
                                    disabled>
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover"
                                    type="button" disabled>Atualizar</button>
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                    value="E-Mail: <?php echo $Usuario['email']; ?>" disabled>
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                    value="Apelido: <?php echo $Usuario['nome_social']; ?>" disabled>
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                    value="CPF/CNPJ: <?php echo $Usuario['cpf_cnpj']; ?>" disabled>
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                    value="Telefone: <?php echo $Usuario['telefone']; ?>" disabled>
                            </div>
                        </form>
                    </div>
                    <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">ENDEREÇOS</h2>

                    <div class="item d-flex flex-column w-90 p-5 gap-3 m-2 bg-content border border-dark rounded-3">
                        <form class="FormId" action="" method="POST">
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="Endereço 1: Coronel Pedro Marcondes, 34 - Flamboyant" disabled>
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="Endereço 1: Coronel Pedro Marcondes, 34 - Flamboyant" disabled>
                            <span class="d-flex gap-2 mt-2">
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover"
                                    type="button" disabled>+</button>
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold w-25  glow-hover"
                                    type="button" disabled>Editar</button>
                            </span>
                        </form>
                    </div>
                </div>