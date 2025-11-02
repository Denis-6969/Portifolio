<?php require_once '../function/verificarLogin.php'; ?>

<p class="display-6 text-center alert alert-light mt-2">Cadastrar um Usuário</p>
<form action="?tela=status" method="post" class="form-control p-5">
  <p class="lead">Formulário de cadastro de Usuário, preencha com atenção os campos.</p>
  <div class="mb-2">
    <input type="hidden" name="form" value='cadUsuario'>
    <input type="hidden" name="idForm" value="cadastro">
  </div>
  <div class="form-control">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nomeUsuario" id="" class="form-control">
  </div>
  <div class="form-control">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="emailUsuario" id="" class="form-control">
  </div>
  <div class="form-control">
    <label for="desc" class="form-label">Senha</label>
    <input type="password" name="senhaUsuario" id="" class="form-control">
  </div>
  <div class="form-control">
    <label for="tipoUsuario" class="form-label">Tipo Usuário</label>
    <select name="tipoUsuario" id="tipoUsuario" class="form-select">
      <option value="Admin">Admin</option>
      <option value="Usuario">Usuario</option>
    </select>
  </div>

  <div class="mt-2">
    <button type="submit" class="btn btn-color">Cadastrar</button>
  </div>
</form>