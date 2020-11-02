<?php

define('HOME', 'http://localhost/manutencaolira_suporte-tecnico-em-Informatica');
define('THEME', 'themes');

define('INCLUDE_PATH', HOME . '/themes');
define('REQUIRE_PATH', THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Manutenção Lira | Suporte Técnico em Informática!';
$pg_sitekit = INCLUDE_PATH . 'img/sitekit';

$pg_title = $pg_name;
$pg_desc = 'Criado por Cristovão Lira Braga no ano de 2017, fundador da empresa Manutenção Lira - Suporte Técnico em Informática que presta serviço na área de consertos em equipamentos de informática.';
$pg_image = $pg_sitekit . '/index.png';
$pg_url = HOME;

