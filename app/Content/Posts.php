<?php
namespace App\Content;

use Carbon\Carbon;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\App;

class Posts extends Provider
{
    public function all()
    {
       return $this->cache('posts.all', function () {
            return $this->gather();
       });
    }

    public function paginate($perPage = 10, $pageName = 'page', $page = null)
    {
        return $this->cache('posts.paginate.'.request('page', 1), function () use ($perPage, $pageName, $page) {
            return $this->all()->simplePaginate($perPage, $pageName, $page);
        });
    }

    public function find($year, $slug)
    {
        return $this->all()->first(function ($post) use ($year, $slug) {
            return $post->date->year == $year && $post->slug == $slug;
        }, function () {
            abort(404);
        });
    }

    public function feed()
    {
        return $this->cache('posts.feed', function () {
            return $this->all()->map(function ($post) {
                return [
                    'id'        => $post->url,
                    'title'     => $post->title,
                    'updated'   => $post->date,
                    'summary'   => $post->content,
                    'link'      => $post->url,
                    'author'    => 'Jack Whiting',
                ];
            });
        });
    }

    private function gather()
    {
        $posts = $this->disk->files('posts');

        if (App::environment('local')) {
            $drafts = $this->disk->files('drafts');
            $posts = array_merge($posts, $drafts);
        }

        return collect($posts)
            ->filter(function ($path) {
                return ends_with($path, '.md');
            })
            ->map(function ($path) {
                if (str_contains($path, 'drafts')) {
                    $filename = str_after($path, 'drafts/');
                } else {
                    $filename = str_after($path, 'posts/');
                }
                
                [$date, $slug, $extension] = explode('.', $filename, 3);

                $date = Carbon::createFromFormat('Y-m-d', $date);
                $document = YamlFrontMatter::parse($this->disk->get($path));

                return (object) [
                    'path'      => $path,
                    'date'      => $date,
                    'created'   => $date->format('F d, Y'),
                    'slug'      => $slug,
                    'url'       => route('posts.show', [$date->format('Y'), $slug]),
                    'title'     => $document->title,
                    'subtitle'  => $document->subtitle,
                    'tags'      => $document->tags,
                    'content'   => markdown($document->body()),
                    'summary'   => markdown($document->excerpt ?? $document->body()),
                ];
            })
            ->sortByDesc('date');
    }
}