<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\quantidadeCandidatos;

class enviarEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:enviar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'O comando envia um email com os candidatos inscritos.';

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
        Mail::to(env('MAIL_USERNAME'))->send(new quantidadeCandidatos());
    }
}
