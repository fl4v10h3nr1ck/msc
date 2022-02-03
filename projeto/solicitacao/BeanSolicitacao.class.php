<?php

/** @AnotTabela(nome="pedidos", prefixo="pdd") */
final class BeanSolicitacao{


/**  @AnotCampo(nome="id_pedido",  tipo="int", ehId=true) */
public $id;

/** @AnotCampo(nome="solicitante") */
public $solicitante;

/** @AnotCampo(nome="empresa") */
public $empresa;

/** @AnotCampo(nome="descricao_empresa") */
public $descricao_empresa;

/** @AnotCampo(nome="outras_info_empresa") */
public $outras_info_empresa;

/** @AnotCampo(nome="telefone") */
public $telefone;

/** @AnotCampo(nome="email") */
public $email;

/** @AnotCampo(nome="cidade") */
public $cidade;

/** @AnotCampo(nome="uf") */
public $uf;

/** @AnotCampo(nome="descricao_projeto") */
public $descricao_projeto;

/** @AnotCampo(nome="info_complementares") */
public $info_complementares;

/** @AnotCampo(nome="solucoes") */
public $solucoes;

/** @AnotCampo(nome="data_pedido") */
public $data_pedido;




}
?>