<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class Formulario extends Component
{
    public $categorias, $tags;

    public $category_id='',$title,$content,$selected_tags=[];

    public $posts;

    //este metodo se ejecuta cuando se carga el componente
    // es ideal para recuperar la informacion de la base de datos
    public function mount(){
        // dd('prueba');
        $this->categorias= Category::all();
        $this->tags= Tag::all();
        $this->posts= Post::all();

    }

    public function save(){


        // // Crear un nuevo post utilizando un array asociativo explícito
        // $post = Post::create([
        //     'category_id' => $this->category_id, // Asigna el valor de la propiedad 'category_id' del objeto actual al campo 'category_id' del nuevo post
        //     'title' => $this->title,             // Asigna el valor de la propiedad 'title' del objeto actual al campo 'title' del nuevo post
        //     'content' => $this->content,         // Asigna el valor de la propiedad 'content' del objeto actual al campo 'content' del nuevo post
        // ]);
        
        // Crear un nuevo post utilizando el método 'only' para obtener un subconjunto de las propiedades del objeto actual
        $post = Post::create(
            $this->only('category_id', 'title', 'content') // Obtiene un array con solo las claves especificadas ('category_id', 'title', 'content') y sus respectivos valores del objeto actual
        );

        // esto se encarga de guardar los tags seleccionados
        $post->tag()->attach($this->selected_tags);

        $this->reset(['category_id','title','content','selected_tags']);

        $this->posts= Post::all();

        
    }

    public function render()
    {
        return view('livewire.formulario');
    }
}
