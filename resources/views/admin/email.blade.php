<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Enquiry Received</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="padding: 20px 0; background-color: #007bff;">
                <h1 style="color: #ffffff; margin: 0;">New Enquiry Notification</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 30px;">
                <table align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="padding: 30px;">
                            <h2 style="color: #333333; margin-top: 0;">You've received a new enquiry!</h2>

                            <table cellpadding="10" cellspacing="0" width="100%">
                                <tr>
                                    <td width="30%" style="background-color: #f9f9f9;"><strong>Name</strong></td>
                                    <td>{{ $enquiry->name }}</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #f9f9f9;"><strong>Email</strong></td>
                                    <td>{{ $enquiry->email }}</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #f9f9f9;"><strong>Contact</strong></td>
                                    <td>{{ $enquiry->contact }}</td>
                                </tr>
                                @if(!empty($enquiry->project))
                                <tr>
                                    <td style="background-color: #f9f9f9;"><strong>Project</strong></td>
                                    <td>{{ $enquiry->project }}</td>
                                </tr>
                                @endif
                                @if(!empty($enquiry->subject))
                                <tr>
                                    <td style="background-color: #f9f9f9;"><strong>Subject</strong></td>
                                    <td>{{ $enquiry->subject }}</td>
                                </tr>
                                @endif
                                @if(!empty($enquiry->message))
                                <tr>
                                    <td style="background-color: #f9f9f9;"><strong>Message</strong></td>
                                    <td>{{ $enquiry->message }}</td>
                                </tr>
                                @endif
                            </table>

                            <p style="margin-top: 30px;">Please respond to the enquiry at your earliest convenience.</p>

                            <p style="margin-top: 20px; font-size: 13px; color: #777;">
                                This email was generated automatically by your website. Do not reply to this message.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" style="padding: 20px; background-color: #007bff;">
                <p style="color: #ffffff; margin: 0;">&copy; {{ now()->year }} Your Company. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>
