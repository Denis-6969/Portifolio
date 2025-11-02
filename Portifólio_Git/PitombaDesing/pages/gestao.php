<?php require_once "../function/verificarLogin.php"; ?>


<div class="container text-padrao">
    <a href="?page=criacao" class="btn btn-color btn-sm mt-1"><i class="bi bi-box-arrow-left"></i></a>
    <div class="row">
        <div class="col-6">
            <p class="display-6 text-center alert alert-danger mt-2">Apagar um Post</p>
            <form action="" method="post" class="form-control p-5">
                <p class="lead">Clique no botão e procure o item que deseja apagar!</p>
                <div class=" mb-2">
                    <input type="hidden" name="idForm" value="searchPostsDl">
                    <input type="hidden" name="usuario" value="<?php echo $_SESSION['nome']; ?>">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-color">Procurar</button>
                </div>
            </form>

            <!-- Tabela para mostrar os resultados -->
            <?php require './tab_most_result_posts.php'; ?>
        </div>
        <div class="col-6">
            <p class="display-6 text-center alert alert-primary mt-2">Atualizar um Post</p>
            <form action="" method="post" class="form-control p-5">
                <p class="lead">Clique no botão e procure o que deseja atualizar!</p>
                <div class="mb-2">
                    <input type="hidden" name="idForm" value="searchPostsUp">
                    <input type="hidden" name="usuario" value="<?php echo $_SESSION['nome']; ?>">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-color">Procurar</button>
                </div>
            </form>

            <!-- Tabela para mostrar os resultados -->
            <?php require './tab_most_result_update_post.php'; ?>
        </div>
    </div>
</div>