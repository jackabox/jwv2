<?php
namespace App\Content;

use Carbon\Carbon;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Posts extends Provider
{
    public function all()
    {
        return $this->cache('posts.all', function () {
            return $this->gather();
        });
    }

    private function gather()
    {
        return collect($this->disk->files('posts'))
            ->filter(function ($path) {
                return ends_with($path, '.md');
            })
            ->map(function ($path) {
                $filename = str_after($path, 'posts/');
                [$date, $slug, $extension] = explode('.', $filename, 3);
                $date = Carbon::createFromFormat('Y-m-d', $date);
                $document = YamlFrontMatter::parse($this->disk->get($path));
                return (object) [
                    'path' => $path,
                    'date' => $date,
                    'slug' => $slug,
                    'url' => route('posts.show', [$date->format('Y'), $slug]),
                    'title' => $document->title,
                    'subtitle' => $document->subtitle,
                    'contents' => $document->body(),
                    'summary' => $document->summary ?? $document->body(),
                ];
            })
            ->sortByDesc('date');
    }
}