<?php

/** @AnotTabela(nome="contatos", prefixo="ctt") */
final class BeanContato{


/**  @AnotCampo(nome="id_contato",  tipo="int", ehId=true) */
public $id;

/** @AnotCampo(nome="nome") */
public $nome;

/** @AnotCampo(nome="empresa") */
public $empresa;

/** @AnotCampo(nome="email") */
public $email;

/** @AnotCampo(nome="msg") */
public $msg;

/** @AnotCampo(nome="data") */
public $data;


}
?>