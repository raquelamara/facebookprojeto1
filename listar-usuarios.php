<?php





$sql = "SELECT * FROM usuarios_facebook";

$res = $conexao->query($sql);

$qtd = $res->num_rows;
?>

<h1>Listar Usuários</h1>
    if($qtd > 0){
    print "<table class='table table-hover table-strupped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-Mail</th>";
    print "<th>Acões</th>";
    print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" 
                    <button onclick="location.href=?page=editar&id=".$row->id, class='btn btn-success'>Editar</button>
                    <button onclick="
                    if(confirm('Tem certeza que deseja excluir?'))
                    {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}"
                    class='btn btn-danger'>Excluir</button>
                "</td>";
        print "</tr>";
    }
    print "</table>";
}else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}




