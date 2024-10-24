<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EvaluasiLelangNotification extends Notification
{
    use Queueable;

    protected $pesan;

    public function __construct($pesan)
    {
        $this->pesan = $pesan;
    }

    public function via($notifiable)
    {
        return ['mail']; // atau 'database' jika menggunakan notifikasi berbasis database
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Anda telah menerima evaluasi terkait permohonan lelang.')
                    ->line($this->pesan)
                    ->line('Terima kasih.');
    }
}
