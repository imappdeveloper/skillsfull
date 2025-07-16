use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Enquiry;

class EnquiryNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Enquiry Received'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'admin.email' // Your email Blade file path
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
