<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Candidatos;
use Illuminate\Support\Facades\DB;

class quantidadeCandidatos extends Mailable
{
    use Queueable, SerializesModels;

    public $candidatos;
    public $count;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->candidatos = DB::table('candidatos')->get()->all();
        $this->count = DB::table('candidatos')->count();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'))
            ->subject('Vaga Desenvolvedor PHP')
            ->view('mail.email');


    }
}
