# Servidor API Simples Exemplo

## Introdução

<img src="https://img.shields.io/badge/php-marvel-green?style=flat&logo=php" style="margin-right:10px"><img src="https://img.shields.io/badge/version-0.0.1--alpha-red?style=flat" style="margin-right:10px"><img src="https://img.shields.io/badge/license-MIT-yellowgreen?style=flat" style="margin-right:10px"><br>

Este servidor é apenas um exemplo de como trabalhar com rotas utilizando Model e Controller.
Servidor utilizando PS-4

## Exemplo do Código que você encontrará

Trecho da classe Marvel Controller

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

    public static function index()
    {
        echo (new Marvel)->findAll();
    }

    public static function show($id)
    {
        echo json_encode((new Marvel)->findById($id));
    }

    public static function getComics($id)
    {
        echo json_encode((new Marvel)->findById($id)['comics']) ?? null;
    }

## Instalação

<strong> O projeto deve ser executado em um ambiente apache (httpd)</strong>, pois utiliza recursos de <i>Rewrite</i> de rotas.

Clone o projeto na pasta 'www' ( linux/mac <code>var/www/</code>) ou 'htdocs' (<code>C:/xampp/htdocs</code>windows).<br>

<code>git clone https://github.com/matheushe/marvel.git</code> <br>

Tenha certeza que o gerenciador de dependência <i>Composer</i> esteja instalado corretamente, digite o comando <code>composer</code> e caso retorne a mensagem de comando não reconhecido, busque na <a href="https://getcomposer.org/download/">documentação oficial</a> o melhor meio de instalar este gerenciador para seu sistema operacional.
Ao ter certeza que o <i>composer</i> esta instalado corretamente execute o comando <code>composer install</code> para instalar as dependências do projeto.

Execute as chamadas via GET das seguintes URL

<ul>
<li><code>/v1/public/characters</code></li>
<li><code>/v1/public/characters/{id}</code></li>
<li><code>/v1/public/characters/{id}/comics</code></li>
<li><code>/v1/public/characters/{id}/events</code></li>
<li><code>/v1/public/characters/{id}/series</code></li>
<li><code>/v1/public/characters/{id}/stories</code></li>
</ul>

Em cada chamada terá resultados específicos, uma listagem geral, uma listagem filtrada por <i>id</i> e atributos como comics, events e outros, se consumam estes recursos e caso tenha bom coração, ajude a melhorar este repositório.
🙃 🙂 