<table>
<thead>
<tr>
<th>Cód</th>
<th>Nome</th>
</tr>
</thead>
<tbody>
<?php foreach ($superintendencias as $superintendencia) { ?>
<tr>
<td><?= $superintendencia['id'] ?></td>
<td><?= $superintendencia['nome'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>
