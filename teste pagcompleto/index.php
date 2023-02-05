<?php
require("./config.php");
require("./integracao.php");

try {
  $LOJAS = IntegrarPagcompleto::get_lojas_com_pagcompleto();
  $PEDIDOS = IntegrarPagcompleto::get_pedidos($LOJAS);
  IntegrarPagcompleto::verifica_situacao_api($PEDIDOS);
  echo "Enviado!";
} catch (Throwable $th) {
  echo "Falha na conexão!";
}
