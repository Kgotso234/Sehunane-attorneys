<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; padding: 30px;">

    <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; overflow: hidden; border: 1px solid #eaeaea;">

        {{-- HEADER --}}
        <div style="background: #36251e; padding: 20px 30px;">
            <h2 style="color: #ffffff; margin: 0; font-size: 20px;">
                New Contact Inquiry
            </h2>
            <p style="color: #bb942f; margin: 5px 0 0; font-size: 12px; letter-spacing: 1px;">
                Sehunane Attorneys Inc
            </p>
        </div>

        {{-- BODY --}}
        <div style="padding: 30px;">

            <p style="margin-bottom: 20px; color: #333;">
                You have received a new message from your website contact form.
            </p>

            {{-- DETAILS --}}
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px;">

                <tr>
                    <td style="padding: 10px 0; color: #888; width: 120px;">Name</td>
                    <td style="padding: 10px 0; color: #222; font-weight: bold;">
                        {{ $data['name'] }}
                    </td>
                </tr>

                <tr>
                    <td style="padding: 10px 0; color: #888;">Email</td>
                    <td style="padding: 10px 0;">
                        <a href="mailto:{{ $data['email'] }}" style="color: #36251e; font-weight: bold;">
                            {{ $data['email'] }}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 10px 0; color: #888;">Phone</td>
                    <td style="padding: 10px 0; color: #222;">
                        {{ $data['phone'] ?? 'Not provided' }}
                    </td>
                </tr>

            </table>

            {{-- MESSAGE --}}
            <div style="background: #f9f9f9; padding: 15px; border-radius: 8px; border-left: 4px solid #bb942f;">
                <p style="margin: 0; color: #333; line-height: 1.6;">
                    {{ $data['message'] }}
                </p>
            </div>

        </div>

        {{-- FOOTER --}}
        <div style="padding: 15px 30px; background: #f3f3f3; font-size: 12px; color: #777;">
            This message was sent from the Sehunane Attorneys Inc website contact form.
        </div>

    </div>

</body>
</html>