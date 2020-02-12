<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repository:generate {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate repository contract and implementation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->callSilent('repository:make-model', ['name' => $this->argument('name')]);
        $this->callSilent('repository:make-intf', ['name' => $this->argument('name')]);
        $this->callSilent('repository:make-impl', ['name' => $this->argument('name')]);

        $this->info('Generate Success, please copy the code below to your Providers/RepositoryServiceProvider.php');
        $this->info(PHP_EOL);
        $this->info("'" . $this->argument('name') . "' => [");
        $this->info("\t\App\Repositories\Contracts\\" . $this->argument('name') . 'RepositoryInterface::class,');
        $this->info("\t\App\Repositories\Eloquents\\" . $this->argument('name') . 'Repository::class,');
        $this->info('],');
    }
}
