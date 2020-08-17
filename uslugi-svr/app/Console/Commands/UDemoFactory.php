<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;
use App\UServiceCategory;
use App\UService;
use App\UServiceRequest;

class UDemoFactory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'udemo:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run database seeding with Uslugi-Demo dataset';

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
        factory(UServiceRequest::class, 4)->create();
    }
}
