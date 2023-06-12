<?php

namespace Gohari\RepositoryPattern;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeRepositoryCommand extends Command {
    protected $signature = 'make:repository {name}';
    public function handle() {
        $name = $this->argument('name');
    
        $path = __DIR__ . '/Repositories/' . $name .'/'. $name . 'Repository.php';
    
        if (file_exists($path)) {
            $this->error('The repository already exists. ;)');
            return;
        }
    
        $this->info('Just a moment for creating repository...');
    
        $content = str_replace('{name}', $name, file_get_contents(__DIR__ . '/stubs/Repository.php'));
    
        file_put_contents($path, $content);
    
        $this->info('Congragulation, Repository created successfully :D');
        $this->info('Now, Please register in RepositoryPatternServiceProvider.php file :)');
    }
}