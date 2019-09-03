<?php

namespace Yevhenii\LaravelEntity\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * List all locally installed packages.
 *
 * @author JeroenG
 **/
class CreateRepository extends GeneratorCommand {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entity:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create repository.';

    protected $type = 'Repository';

    protected function getStub()
    {
        return __DIR__ . '/stubs/repository.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Repositories';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')) . $this->type;
    }

    /**
     * Build the class with the given name.
     *
     * @param string $name
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceModel($stub)->replaceClass($stub, $name);
    }

    /**
     * @param $stub
     * @return mixed
     */
    protected function replaceModel(&$stub)
    {
        $stub = str_replace(
            ['DummyModel'],
            [$this->argument('name')],
            $stub);

        return $this;
    }
}
