<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReportesGastosEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(reporteGasto $id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.reporteGasto',[
            'reporte' => $this->id
        ]);
    }
}
