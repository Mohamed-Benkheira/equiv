<!DOCTYPE html>
<html>

<head>
    <title>License Request Status</title>
</head>

<body>
    <h1>License Request Status Update</h1>

    <p>Dear {{ $licenseRequest->applicant->full_name }},</p>

    @if ($status === 'accepted')
        <p>Congratulations! Your request has been <strong>accepted</strong>.</p>
        <p>{{ $message }}</p>
        @if (isset($attachment))
            <p>Please find the attached document for your Bac Equivalence certificate.</p>
        @endif
    @elseif ($status === 'declined')
        <p>We regret to inform you that your request has been <strong>declined</strong>for the Equivalence certificate.
            for more info check with our support</p>
        <p>{!! nl2br(e($emailMessage)) !!}</p>
    @endif

    <p>Thank you for your understanding.</p>
    <p>Best regards,</p>
    <p>Equivalnce Team</p>
</body>

</html>
