<?php

namespace App\Console\Commands;

use Validator;
use App\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will generate a new user';

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
        $email = $this->ask('User email address');
        $password = str_random(8);

        if(!$this->validateEmail($email)) {
            $this->error('Email address is invalid');
            return;
        }

        $this->comment('Email Address:'. $email);
        $this->comment('Password:'. $password);
        if(! $this->confirm('Are you sure you want to create this user?')) {
            return;
        }

        User::create([
            'name' => $email,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->info('The user with the address of '. $email .' has been created successfully.');
    }

    public function validateEmail($email)
    {
        $data = ['email' => $email];
        $rules = ['email' => 'required|email'];
        $validator = Validator::make($data, $rules);

        return $validator->fails() == true ? false : true;
    }
}
