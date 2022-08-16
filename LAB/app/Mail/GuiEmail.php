<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mailgun\Mailgun;


class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('giiabao2002@gmail.com', 'bao1')
        ->to('giibao2002@gmail.com', 'bao2')
        ->subject(("Test gửi mail")) // nạp tiêu đề thư
        // ->attach(public_path() ."#") // đính kèm file
        ->view('guimail'); // nạp view cho nội dung mail
    }
}
