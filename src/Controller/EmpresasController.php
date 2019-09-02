<?php

namespace App\Controller;

use Cake\Controller\Controller;
use cake\ORM\TableRegistry;


class EmpresasController extends Controller
{

    public function index(){

        $empresasTable = Tableregistry::get('empresas');

        $empresas = $empresasTable->find('all')->where(['VL_FATURAMENTO >=' => 500000000]);//->where(['VL_FATURAMENTO >=' => 500000000]);

        $this->set('empresas', $empresas);
    }

    public function novo()
    {
        $empresasTable = TableRegistry::get('empresas');
        $empresa = $empresasTable->newEntity();
        $this->set('empresa', $empresa);
    }
}
