<?php

namespace App\Console\Commands;

use App\Challenge;
use App\Mail\ChallengeEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailChallenge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:challenge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command sends a challenge email daily to recepients.';

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
        $users = User::all();
        $challenge = Challenge::where('sent', 0)->first();
        foreach ($users as $user){

            if ($challenge){
                $email = new ChallengeEmail(new Challenge($challenge->toArray()));
                Mail::to($user->email, $user->fullName())->send($email);
                $this->info("Email sent to " . $user->email . " successfully");
                $challenge->where('id', $challenge->id)->update(array('sent'=>1));
            }else{
                $this->info("Nothing to send");
            }
        }






    }
}
