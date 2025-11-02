<?php require_once '../function/verificarLogin.php'; ?>
<?php require_once '../function/myConnect.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-padrao text-center mt-5">Bem vindo a área de criação:</h1>
            <h3 class="text-padrao mb-5 mt-5">Aqui você poderá postar, editar e deletar seus própios posts no pitomba desings</h3>
            <div class="row text-padrao">
                <div class="col">
                    <h5>Este é o formulario de postagem, preencha com atenção!</h5>

                    <p class="display-6 text-center alert alert-secondary mt-2">Publicar um Post</p>
                    <form action="?page=status" enctype="multipart/form-data" method="post" class="form-control p-5">
                        <p class="lead">Formulário de cadastro de Post, preencha com atenção os campos.</p>
                        <div class="mb-2">
                            <input type="hidden" name="form" value='cadPost'>
                            <input type="hidden" name="idForm" value="postagem">
                        </div>
                        <div class="form-control">
                            <label for="subtitulo" class="form-label">Nome</label>
                            <input type="text" name="nomePost" id="" class="form-control">
                        </div>
                        <div class="form-control">
                            <label for="img" class="form-label">URL da imagem</label>
                            <input type="file" name="imgPost" id="" class="form-control">
                        </div>
                        <div class="form-control">
                            <label for="desc" class="form-label">Descrição</label>
                            <input type="text" name="descPost" id="" class="form-control">
                        </div>
                        <div class="form-control">
                            <label for="data" class="form-label">Data da publicação</label>
                            <input type="date" name="dataPost" id="" class="form-control">
                        </div>
                        <div class="#">
                            <input type="hidden" name="criadorPost" id="" class="form-control" value="<?php echo $_SESSION['nome'] ?>">
                        </div>

                        <div class="mt-2">
                            <button type="submit" class="btn btn-color">Cadastrar</button>
                        </div>
                    </form>
                </div>
                 <div class="row">
                                    <div class="col">
                    <h4>Minhas postagens!</h4>
                    <a href="?page=gestao" class="btn btn-color">Gerenciar postagens</a>
                     <?php 
    try {
        $sql = "SELECT * FROM tbpostagem WHERE criadorPost = '$_SESSION[nome]'";
        $qr = query($sql); 

        /**Estilizando dentro da função e executando o html */
            echo '
            <section class="container my-4">
                <div class="row justify-content-center">
            ';     
            while ($data = data($qr)) {
                echo '
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                        <div class="card bg-danger-subtle w-100">
                        <h5 class="card-title text-padrao-titulo">'.$data['nomePost'].'</h5>
                        <img src="../arquivos/'.$data['imgPost'].'" class="card-img-top rounded" alt="Imagem do post">
                        <div class="card-body">
                                <p class="card-text text-padrao">'.$data['descPost'].'</p>
                                <p class="card-text mt-2 text-padrao">'.$data['dataPost']. '  -Feito por: '.$data['criadorPost'].'</p>
                            </div>
                        </div>
                    </div>
                ';
            }        
            echo '
                </div>
            </section>
            ';
    } catch (Exception $erro) {
        return "<p class='alert alert-danger text-center mt-4'>Erro de SQL:" .$erro->getMessage(). "</p>";
      }
                     ?>
                </div>
                 </div>

        </div>
    </div>
</div>
</div>