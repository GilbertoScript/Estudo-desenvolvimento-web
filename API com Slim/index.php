<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require 'vendor/autoload.php';

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	] 
]);

/* Container dependency injection */
class Servico {

}

/* Container Pimple */
$container = $app->getContainer();
$container['servico'] = function(){
	return new Servico;
};

$app->get('/servico', function(Request $request, Response $response) {

	$servico = $this->get('servico');
	var_dump($servico);
	
} );

/* Controllers como serviço */
$container = $app->getContainer();
$container['Home'] = function(){
	return new MyApp\controllers\Home( new MyApp\View );
};
$app->get('/usuario', 'Home:index' );


$app->run();


/* Padrão PSR7 
$app->get('/postagens', function(Request $request, Response $response){

	/* Escreve no corpo da resposta utilizando o padrão PSR7 
	$response->getBody()->write("Listagem de postagens");

	return $response;

} );

/*
Tipos de requisição ou Verbos HTTP

get -> Recuperar recursos do servidor (Select)
post -> Criar dado no servidor (Insert)
put -> Atualizar dados no servidor (Update)
delete -> Deletar dados do servidor (Delete)

*/

/*
$app->delete('/usuarios/remove/{id}', function(Request $request, Response $response){

	$id = $request->getAttribute('id');
	
	/*
	Deletar do banco de dados com DELETE..
	....
	

	return $response->getBody()->write( "Sucesso ao deletar: " . $id );

} );

$app->put('/usuarios/atualiza', function(Request $request, Response $response){

	//Recupera post ($_POST)
	$post  = $request->getParsedBody();
	$id    = $post['id'];
	$nome  = $post['nome'];
	$email = $post['email'];

	/*
	Atualizar no banco de dados com UPDATE..
	....
	

	return $response->getBody()->write( "Sucesso ao atualizar: " . $id );

} );

$app->post('/usuarios/adiciona', function(Request $request, Response $response){

	//Recupera post ($_POST)
	$post  = $request->getParsedBody();
	$nome  = $post['nome'];
	$email = $post['email'];

	/*
	Salvar no banco de dados com INSERT INTO..
	....
	

	return $response->getBody()->write( "Sucesso" );

} );*/




/*
$app->get('/postagens2', function(){

	echo "Listagem de postagens";

} );

$app->get('/usuarios[/{id}]', function($request, $response){
	$id = $request->getAttribute('id');

	//Verificar se ID é valido e existe no BD

	echo "Listagem de usuarios ou ID: " . $id;

} );

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){
	
	$ano = $request->getAttribute('ano');
	$mes = $request->getAttribute('mes');

	//Verificar se ID é valido e existe no BD

	echo "Listagem de postagens Ano: " . $ano . " mes: " . $mes;

} );

$app->get('/lista/{itens:.*}', function($request, $response){
	
	$itens = $request->getAttribute('itens');

	//Verificar se ID é valido e existe no BD
	//echo $itens;
	var_dump(explode("/", $itens));

} );
*/

/* Nomear rotas 
$app->get('/blog/postagens/{id}', function($request, $response){
	echo "Listar postagem para um ID ";
})->setName("blog");

$app->get('/meusite', function($request, $response){
	
	$retorno = $this->get("router")->pathFor("blog", ["id" => "10" ] );

	echo $retorno;

});
*/

/* Agrupar rotas 
$app->group('/v5', function(){
	
	$this->get('/usuarios', function(){
		echo "Listagem de usuarios";
	} );

	$this->get('/postagens', function(){
		echo "Listagem de postagens";
	} );

} );

*/

