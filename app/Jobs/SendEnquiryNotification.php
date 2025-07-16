<?php

namespace App\Jobs;

use App\Mail\EnquiryNotification;
use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendEnquiryNotification implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    protected $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function handle()
    {
        Mail::to('imappdeveoper1@gmail.com')->send(new EnquiryNotification($this->enquiry));
    }
}
