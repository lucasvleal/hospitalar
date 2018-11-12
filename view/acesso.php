<?php require 'header.php'; ?>

     <!-- Container -->
     <div class="containerMeu ">
        <div class="row">
            <!-- Coluna da esquerda -->
            <div class="col-md-6">
                <h1>Login</h1>
                <div class="boxAcesso ">
                    <form method="POST" action="../controller/acesso.php">
                        <div class="form-group">
                            <label class="meuLabel" for="inputEmailLogin">Email</label>
                            <input name="login" type="email" class="form-control" id="inputEmailLogin" aria-describedby="emailHelp" placeholder="exemplo@hospitalar.com">
                            </div>
                            <div class="form-group">
                            <label class="meuLabel" for="inputSenhaLogin">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputSenhaLogin" placeholder="******">
                        </div>

                        <div class="d-flex justify-content-center">                        
                            <button type="submit" class="btn">Logar</button>
                        </div>
                        <div class="d-flex justify-content-center">
                        <?php require '../loginface/face.php';?>                      
                            <a href = "<?php echo $login_url; ?>" class="btn" style="width: 200px; margin-top: 10px;">Login com Facebook</a>
                        </div>
                        

                    </form>
                </div>
            </div>
            <!-- /Coluna da esquerda -->
            
            <!-- Coluna da direita -->
            <div class="col-md-6 rowDireita">
                <span class="ntc">Não tem uma conta? &nbsp;</span><h1 style="display: inline;">Cadastre-se</h1>
                <div class="boxAcesso boxCadastro">
                    <form action="../controller/cadastro.php" method="POST">
                        <div class="form-group">
                            <label class="meuLabel" for="inputEmailCadastro">Email <span style="color: red;">*</span></label>
                            <input  name="email" type="email" class="form-control" id="inputEmailCadastro" aria-describedby="emailHelp" placeholder="exemplo@hospitalar.com">
                        </div>
                        <div class="form-group">
                            <label class="meuLabel" for="inputSenhaCadastro">Senha <span style="color: red;">*</span></label>
                            <input  name="senha" type="password" class="form-control" id="inputSenhaCadastro" placeholder="******">
                        </div>
                        <div class="form-group">
                                <label class="meuLabel" for="inputNomeCadastro">Nome completo <span style="color: red;">*</span></label>
                                <input  name="nome" type="text" class="form-control" id="inputNomeCadastro" aria-describedby="emailHelp" placeholder="Lucas Viani Leal">
                            </div>
                        <div class="form-group">
                            <label class="meuLabel" for="inputCPFCadastro">CPF <span style="color: red;">*</span></label>
                            <input  name="cpf" type="text" class="form-control" id="inputCPFCadastro" aria-describedby="emailHelp" placeholder="777.777.777-77">
                        </div>
                        <div class="form-group">
                            <label class="meuLabel" for="inputNascCadastro">Data de Nascimento <span style="color: red;">*</span></label>
                            <input  name="nasc" type="text" class="form-control" id="inputNascCadastro" aria-describedby="emailHelp" placeholder="27/03/1998">
                        </div>
                        <div class="form-group">
                            <label class="meuLabel" for="inputSexoCadastro">Sexo <span style="color: red;">*</span></label>
                            <select name="sexo" class="form-control" id="inputSexoCadastro">
                              <option disabled>Escolha...</option>
                              <option>Masculino</option>
                              <option>Feminino</option>
                              <option>Outro</option>                              
                            </select>
                        </div>
                        <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>

                        <div class="d-flex justify-content-center">                        
                            <button type="submit" class="btn">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Coluna da direita -->
        </div>
     </div>
     <!-- /Container -->

<?php require 'footer.php'; ?>