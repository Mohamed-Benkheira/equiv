<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAC Request Accepted</title>
</head>

<body>
    <h1>BAC Request Accepted</h1>

    <p>Dear {{ $bacRequest->applicant->full_name }},</p>

    <p>{!! nl2br(e($emailMessage)) !!}</p>

    <p>Best regards,<br>Your Organization</p>
</body>

</html>
