<?php echo $this->Html->link('Cadastrar Empresa', ['controller' => 'empresas', 'action' => 'novo']); ?>
<table>

<thead>
<tr>
<th>CNPJ</th>
<th>Razão Social</th>
<th>Agência</th>
<th>SR</th>
<th>Faturamento</th>
<th>Rating</th>
<th>Categorização</th>
<th>Detalhes</th>
</tr>
</thead>
<tbody>
<?php
foreach ($empresas as $empresa) { ?>
<tr>
<td><?= $empresa['CO_CNPJ'] ?></td>
<td><?= $empresa['NO_RAZAO_SOCIAL'] ?></td>
<td><?= $empresa['CO_AGENCIA_PRINC_RELACIONAMENTO'] ?></td>
<td><?= $empresa['CO_SR_RELACIONAMENTO'] ?></td>
<td><?= 'R$ ' . number_format(($empresa['VL_FATURAMENTO']), 2, ',' , '.') ?></td>
<td><?= $empresa['LT_RATING'] ?></td>
<td><?= $empresa['CATEGORIZACAO'] ?></td>
<td><a href="/empresas/show/<?= $empresa['CO_CNPJ'] ?>">Detalhar</a></td>
</tr>
<?php } ?>
</tbody>
</table>
