<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAC Request Accepted</title>
</head>

<body>
    <h1>License Request Accepted</h1>

    <p>Dear {{ $licenseRequest->applicant->full_name }},</p>

    <p>{!! nl2br(e($emailMessage)) !!}</p>

    <p>Best regards,<br><span class="fst-italic">EQUIVALENCE</span></p>
</body>

</html>
