<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Posst
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;

    }
    public static function all()
    {
      return collect(File::files(resource_path("posts")))
            ->map(function ($file){
                return YamlFrontMatter::parseFile($file);
            })
             ->map(function (/*$file*/ $document) {
        //$document = YamlFrontMatter::parseFile($file);

                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            })
            ->sortByDesc('date');










     /*   $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
*/
        // return array_map(fn($file) => file->getContents(), $files);
    }
  public static function find($slug)
  {

    return static::all()->firstWhere('slug', $slug);


   /* if(!file_exists($path = resource_path("posts/{$slug}.html"))) {
        //return redirect('/');
        throw new ModelNotFoundException;
    }


   return cache()->remember("posts.{$slug}", 5, fn () => file_get_contents($path));
*/
  }
}
