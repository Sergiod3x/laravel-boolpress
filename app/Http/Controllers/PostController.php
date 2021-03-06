<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allPosts =  Post::all(); //leggo il database attraverso il model
        if(!Auth::check()){
            return redirect()->route('login');
        }
        return view("posts.index", compact ('allPosts'));
        
    }
 
    /**
     * Show the form for creating a new resource.
     *Mostra un form vuoto per popolare tutti i dati del nostro modello
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *Riceve tutti i dati dsl form(dopo il submit) e salva i dati nel database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'text' => 'required|unique:posts|max:50',
        ]);

        $data = $request->all();//restituisce tutti i dati del form in un array associativo
        $newPost = new Post;

        $this->filAndSavePost($newPost, $data);  //creo una funzione per caricare e salvare i dati in data
        // $newPost->text = $data['text'];
        // $newPost->save();
        
        return redirect()->route('post.show', $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) //autowire io do un id e lui recupera l'oggetto corrispondente dal db
    {
        return view('posts.edit', compact('post'));
        // dd($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $this->filAndSavePost($post, $data); 

        return redirect()->route('post.show', $post->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    private function filAndSavePost($post, $data){
        $post->text = $data['text'];
        $post->save();
    
    }
}

