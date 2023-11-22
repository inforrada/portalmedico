<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $mensaje;

    public $nombrevista;

    public $mostrarSueldo;
    public $tries = 4;

    public $delay = 15;
    public $timeout = 1200;
    public $retryAfter = 90;

    /**
     * Create a new message instance.
     */
    public function __construct($nombre, $correo, $mensaje, $seguridad = null)
    {
        //
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
        if (Auth::user()->email == $this->correo) {
            $mostrarSueldo = true;
        }
        else {
            $mostrarSueldo = false;
        }
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contacto desde la web',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->nombrevista;
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
