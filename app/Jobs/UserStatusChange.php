<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserStatusChange implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
      $user_id= User::where('status',1)->pluck('id');
      foreach($user_id as $id){
        User::where('id',$id)->update(['status'=>0]);
      }
      
    }
}
