<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $title;
    private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
         // コンストラクタでプロパティに値を格納
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body = $inputs['body'];
    }

    public function build()
    {
        // メールの設定
        return $this
            ->from('younghiromu112010ver2@gmail.com')
            ->subject('自動送信メール')
            ->view('mail')
            ->with([
            'email' => $this->email,
            'title' => $this->title,
            'body' => $this->body,
            ]);
    }
}
