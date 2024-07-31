<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class XacNhanDonHangMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $donhang,$pttt,$sanphams;
    public function __construct($donhang,$pttt,$sanphams)
    {
        $this->donhang = $donhang;
        $this->pttt = $pttt;
        $this->sanphams = $sanphams;
    }

    /**
     * Get the message envelope.
     */
    public function build(){
        return $this->view('clients.mail.hoadon')
        ->with(['donhang'=>$this->donhang,'pttt'=>$this->pttt,'sanphams'=>$this->sanphams])
        ->subject("Hóa đơn mua hàng của khách hàng");
    }
}
