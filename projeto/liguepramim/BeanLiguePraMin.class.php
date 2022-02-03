<?php

/** @AnotTabela(nome="ligue_para_mim", prefixo="lpm") */
final class BeanLiguePraMin{


/**  @AnotCampo(nome="id_ligue_para_mim",  tipo="int", ehId=true) */
public $id;

/** @AnotCampo(nome="nome") */
public $nome;

/** @AnotCampo(nome="telefone") */
public $telefone;

/** @AnotCampo(nome="email") */
public $email;

/** @AnotCampo(nome="status") */
public $status;

/** @AnotCampo(nome="data") */
public $data;


}
?>