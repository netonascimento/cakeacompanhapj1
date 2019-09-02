<?php
echo $this->Form->create($empresa, ['action' => 'salva']);
echo $this->Form->input('CNPJ');
echo $this->Form->input('RAZÃO SOCIAL');
echo $this->Form->button('Salvar');
echo $this->Form->end();

?>
