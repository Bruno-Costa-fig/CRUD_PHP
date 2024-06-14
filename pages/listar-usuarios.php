<h1>Listar usuários</h1>
<?php
$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if ($qtd > 0) {
  echo <<<HTML
     <table class='table table-hover table-striped'>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>Ações</th>
      </tr>
    HTML;
  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>" . $row->data_nasc . "</td>";
    print "<td>
              <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-action&acao=excluir&id=" . $row->id . "'}\" class='btn btn-danger'>Excluir</button>
          </td>";
    print "</tr>";
  }
  print "</table>";
} else {
  echo "<p class='alert'>Nenhum usuário cadastrado</p>";
}
?>