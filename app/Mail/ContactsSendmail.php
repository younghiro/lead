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

    private $lastName;
    private $firstName;
    private $lastNameKana;
    private $firstNameKana;
    private $email;
    private $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
         // コンストラクタでプロパティに値を格納
        $this->lastName = $inputs['lastName'];
        $this->firstName = $inputs['firstName'];
        $this->lastNameKana = $inputs['lastNameKana'];
        $this->firstNameKana = $inputs['firstNameKana'];
        $this->email = $inputs['email'];
        $this->content = $inputs['content'];
    }

    public function build()
    {
        // メールの設定
        return $this
            ->from('younghiromu112010ver2@gmail.com')
            ->subject('【株式会社リード】お問い合わせありがとうございます。')
            ->view('mail')
            ->with([
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'lastNameKana' => $this->lastNameKana,
            'firstNameKana' => $this->firstNameKana,
            'email' => $this->email,
            'content' => $this->content,
            ]);
    }
}
