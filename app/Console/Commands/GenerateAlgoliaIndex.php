<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class GenerateAlgoliaIndex extends Command
{
    protected $signature = 'algolia:generate';
    protected $description = 'Génère un index JSON pour Algolia à partir des fichiers de vue Markdown';

    public function handle()
    {
        $viewsPath = resource_path('views/docs'); // Chemin des fichiers Markdown
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsPath));
        $algoliaData = [];

        foreach ($files as $file) {
            if ($file->isDir() || $file->getExtension() !== 'md') {
                continue;
            }

            $content = file_get_contents($file->getRealPath());
            preg_match_all('/^(#+)\s*(.*)$/m', $content, $matches, PREG_SET_ORDER);

            $relativePath = Str::after($file->getPathname(), $viewsPath . '/');
            $urlPath = Str::replaceFirst('.md', '', $relativePath);
            $url = url("/docs/{$urlPath}");

            $record = [
                'objectID' => sprintf('%u', crc32($file->getRealPath())),
                'url' => $url,
                'content' => substr(strip_tags($content), 0, 8000) // Limite le contenu à 8000 caractères
            ];

            $levels = [];
            foreach ($matches as $match) {
                $level = 'lvl' . strlen($match[1]);
                if (!isset($levels[$level])) {
                    $levels[$level] = '';
                }
                $levels[$level] .= strip_tags($match[2]) . ' '; // Concatène les titres du même niveau
            }

            foreach ($levels as $level => $text) {
                $record[$level] = trim($text);
            }

            if (strlen(json_encode($record)) <= 10000) {
                $algoliaData[] = $record;
            }
        }

        $jsonData = json_encode($algoliaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents('algolia_index.json', $jsonData);

        $this->info('Index Algolia généré avec succès.');
    }
}
