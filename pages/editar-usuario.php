<h1>Editar usuário</h1>
<?php 
  $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=usuario-action" method="POST">
  <input type="hidden" name="acao" value="editar" />
  <input type="hidden" name="id" value="<?php print $row->id; ?>" />
  <div class="mb-3">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" />
  </div>
  <div class="mb-3">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" />
  </div>
  <div class="mb-3">
    <label for="data_nasc">Data Nascimento:</label>
    <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc; ?>" />
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>