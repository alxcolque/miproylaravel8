<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SugerenciaMailable extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    //public $subject = "Informacion de Sugerencia";
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nombre = $this->data['name'];
        return $this->subject("Informacion de Sugerencia jajaja")
            ->view('admin.pdf', compact(
                'nombre'
            ))
            /* ->attach($this->data['file']->getRealPath(),
            array(
                'as'=> 'a_file'.$this->data['a_file']->getClientOriginalExtension(),
            'mime'  => $this->data['a_file']->getMimeType()
           ) ) */;

    }
}
