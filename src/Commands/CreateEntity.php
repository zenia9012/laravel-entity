<?php

namespace Yevhenii\LaravelEntity\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

/**
 * List all locally installed packages.
 *
 * @author JeroenG
 **/
class CreateEntity extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entity {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create model, controller, migration, repository.';

    public function handle()
    {
        $name = $this->getNameInput();
        $this->call('entity:repository', ['name' => $name]);
        $this->call('make:model', ['name' => 'Model\\' . $name]);
        $this->call('make:controller', ['name' => $name . 'Controller']);
        $this->call('make:migration', ['name' => 'create' . '' . Str::plural($name) . '_table']);
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return Str::ucfirst(trim($this->argument('name')));
    }
}
