<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen;

class SendOtpMail extends Mailable
{
  use Queueable, SerializesModels;

  public $otp_code;

  public function __construct($otp_code)
  {
    $this->otp_code = $otp_code;
  }

  public function envelope(): Envelope
  {
      return new Envelope(
        subject: 'Kode OTP',
      );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
      return new Content(
        view: 'auth.send-otp',
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
