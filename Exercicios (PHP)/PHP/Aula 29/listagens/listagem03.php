<?php
require_once(__DIR__ . "/../common/cabecalho.php");
require_once(__DIR__ . "/../common/conexaobd.php");
//Aqui colocarei o corpo se precisar
$sql = "select
	p.pedido_id as numero_pedido,
	p.data as data_pedido,
    p.cliente_id as codigo_cliente,  
    c.nome as nome_cliente,
    sum(i.quantidade * i.valor) total_pedido
    from pedido as p
inner join pedido_item as i on i.pedido_id = p.pedido_id  
inner join cliente as c on c.cliente_id = p.cliente_id 
group by p.pedido_id, p.data, p.cliente_id , c.nome
order by p.data  , 5 desc, p.pedido_id
limit 10";
$stmt = $conn->prepare($sql);
$result = $stmt->execute();
?>
<div class="conteudo">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Numero do pedido </th>
        <th>Data do pedido</th>
        <th>Codigo do Cliente</th>
        <th>Nome do Cliente </th>
        <th>Total do pedido </th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result) {
        while ($pedido = $stmt->fetch(PDO::FETCH_OBJ)) {
          echo "<tr>";
          echo "  <td>" . $pedido->numero_pedido . "</td>";
          $data = date_create($pedido->data_pedido);
          echo "<td> " . date_format($data, "d/m/y H:i:s") . "</td>";
          
          echo "  <td>" . $pedido->codigo_cliente . "</td>";
          echo "  <td>" . $pedido->nome_cliente . "</td>";
          echo "  <td>" . number_format($pedido->total_pedido, 2, ",", ".") . "</td>";
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
</div>
<?php
require_once(__DIR__ . "/../common/rodape.php");
