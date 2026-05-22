<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>We received your enquiry</title>
</head>

<body style="margin:0; padding:0; background:#f6f6f6; font-family:Arial, sans-serif;">

<div style="max-width:600px; margin:40px auto; background:#ffffff; border-radius:10px; overflow:hidden; border:1px solid #eaeaea;">

    {{-- HEADER --}}
    <div style="background:#36251e; padding:25px; text-align:center;">
        <h2 style="margin:0; color:#ffffff; font-size:20px;">
            Sehunane Attorneys Inc
        </h2>
        <p style="margin:5px 0 0; color:#bb942f; font-size:12px; letter-spacing:1px;">
            Legal Confirmation
        </p>
    </div>

    {{-- BODY --}}
    <div style="padding:30px; color:#333;">

        <h3 style="margin-top:0; color:#222;">
            Thank you for contacting us
        </h3>

        <p style="line-height:1.6;">
            Dear <strong>{{ $name }}</strong>,
        </p>

        <p style="line-height:1.6;">
            We have successfully received your enquiry regarding:
        </p>

        <p style="background:#f9f9f9; padding:12px; border-left:4px solid #bb942f;">
            <strong>{{ $subject }}</strong>
        </p>

        <p style="line-height:1.6;">
            Our team will review your message and respond during standard business hours.
        </p>

        <p style="line-height:1.6;">
            If your matter is urgent, please contact our office directly:
        </p>

        <p style="font-weight:bold; color:#36251e;">
            +27 60 356 1780
        </p>

        <p style="margin-top:25px; line-height:1.6;">
            Kind regards,<br>
            <strong>Sehunane Attorneys Inc</strong>
        </p>

    </div>

    {{-- FOOTER --}}
    <div style="background:#f3f3f3; padding:15px; text-align:center; font-size:12px; color:#777;">
        This is an automated confirmation email. Please do not reply directly.
    </div>

</div>

</body>
</html>