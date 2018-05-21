<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Link;
use App\Workspace;

class LinkToWorkspace extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'link:workspace';

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
     * @return mixed
     */
    public function handle()
    {
        $workspaces = Workspace::where('status', 1)->get();
        $links = Link::where('status', 0)->get();

        foreach ($workspaces as $workspace) {
            $source_ids = $workspace->sources->pluck('id')->toArray();
            foreach ($links as $link) {
                if (in_array($link->source_id, $source_ids)) {
                    $workspace->links()->attach($link->id, ['status' => 0]);
                }
            }
        }
    }
}
