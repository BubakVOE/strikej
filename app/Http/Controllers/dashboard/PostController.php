<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\Galerie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;



class PostController extends Controller
{


    public function create()
    {
        return view('dashboard.post.create');
    }

    public function store(Request $request)
    {
        {
            if($request->hasFile("cover")){
                $file=$request->file("cover");
                $imageName=time().'-'.$file->getClientOriginalName();
                $file->move(\public_path("posts/thumbNail"),$imageName);
    
                $post =new Post([

                    'car' => $request->input('car'),
                    'type' => $request->input('type'),
                    'description' => $request->input('description'),
                    "cover" =>$imageName,

                    "title" =>$request->title,
                    "author" =>$request->author,
                    "body" =>$request->body,
                ]);
               $post->save();
            }
    
                if($request->hasFile("images")){
                    $files=$request->file("images");
                    foreach($files as $file){
                        $imageName=time().'-'.$file->getClientOriginalName();
                        $request['post_id']=$post->id;
                        $request['image']=$imageName;
                        $file->move(\public_path("posts/images"),$imageName);
                        Galerie::create($request->all());
    
                    }
                }
    
                return redirect("/dashboard");
    
        }
    }

    public function show(Post $post)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('dashboard.post.edit', [
            'post' => $post,
        ]);
    }
// update
    public function update(Request $request, $id)
    {
        $post=Post::findOrFail($id);
        
        if($request->hasFile("cover")){
            if (File::exists("cover/".$post->cover)) {
                File::delete("cover/".$post->cover);
            }
            $file=$request->file("cover");
            $post->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("posts/thumbNail"),$post->cover);
            $request['cover']=$post->cover;
        }
   
           $post->update([
               "car" =>$request->car,
               "type"=>$request->type,
               "description"=>$request->description,
               "cover"=>$post->cover,
           ]);
   
           if($request->hasFile("images")){
               $files=$request->file("images");
               foreach($files as $file){
                   $imageName=time().'_'.$file->getClientOriginalName();
                   $request["post_id"]=$id;
                   $request["image"]=$imageName;
                   $file->move(\public_path("posts/images"),$imageName);
                   Galerie::create($request->all());
   
               }
           }
   
           return redirect("/dashboard");
    }
// delete imagies
    public function deleteimage($id)
    {
        $images=Galerie::findOrFail($id);

        if (File::exists("posts/images/".$images->image))
        {
           File::delete("posts/images/".$images->image);
        }

       Galerie::find($id)->delete();
       return back();
   }
// delete thumbnail
    public function deletecover($id)
    {
        $cover=Post::findOrFail($id)->cover;
        
        if (File::exists("posts/cover/".$cover)) 
        {
            File::delete("posts/cover/".$cover);
        }
    return back();
    }





    public function destroy($id)
    {
        $posts=Post::findOrFail($id);

        if (File::exists("cover/".$posts->cover)) {
            File::delete("cover/".$posts->cover);
        }
        $images=Galerie::where("post_id",$posts->id)->get();
        foreach($images as $image){
        if (File::exists("images/".$image->image)) {
           File::delete("images/".$image->image);
       }
        }
        $posts->delete();
        return back();


   }

}
