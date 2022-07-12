<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {

        // Forma mais convencional de criar um registro no banco
        /* $new_post = [
            'title' => 'Meu primeiro Post',
            'content' => 'Conteudo qualquer',
            'author' => 'Charles'
        ];*/


        // Outra forma não muito convencional
        $post = new Post();
        $post->title = 'Meu Quarto Post';
        $post->content = 'Mais Outro Conteudo ';
        $post->author = 'Pereira';

        $post->save();



        return $post;
    }

    // Forma de ler um registro no banco
    public function read(Request $r)
    {
        $post = new Post();
        //O Método 'find' mais o id dentro do parenteses busca um registros especifico, 
        $post = $post->find(4);

        return $post;
    }

    public function all(Request $r)
    {
        // Metodo simplificado de ler tds os registros

        $posts = Post::all();
        //para buscar todos os registros basta trocar para "all" e deixar o parentes vazio
        //$post = new Post();
        //$post = $post->all();

        return $posts;
    }
    //Forma de alterar algum dado especifico
    public function update(Request $request)
    {
        $post = Post::find(3);
        //Alterando o title
        $post->title = 'Meu Terceiro Post';
        //alterando o author
        $post->author = 'Gomes';
        //Método para salvar o registro
        $post->save();

        return $post;
    }
    //Forma de alterar mais completa de alterar dados
    public function up_all(Request $request)
    {
        //Alterar todos os registros em um dado especifico 
        //> que 0 (este valor representa a partir de onde quero alterar os registros)
        $post = Post::where("id", '>', 0)->update([
            'content' => 'Meu primeiro conteúdo alterado'
            //Caso queira auterar outro dado basta incluir 
        ]);
        return $post;
    }
    //Deletar registro especifico
    public function delete(Request $request)
    {
        //O Método 'find' mais o id dentro do parenteses busca um registros especifico,
        $post = Post::find(6);

        if ($post) {
            $post->delete();
            return $post;
        }

        return 'Esse Id não existe na base de dados.';
    }
}
