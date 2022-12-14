<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $rand = rand(10000 , 10032132132);
        $update = user::find(1);
        $update->name = $rand;
        $update->save();
    }
}
