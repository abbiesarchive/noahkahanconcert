<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Registration is Successful</title>
</head>
<body style="margin:0;padding:0;background:#f6f0df;font-family:Arial,Helvetica,sans-serif;color:#1f2a1f;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f6f0df;padding:32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="560" cellpadding="0" cellspacing="0" style="max-width:560px;width:100%;background:#fffdf6;border:1px solid #e3dcc6;">
                    <tr>
                        <td style="background:#304b38;padding:28px 32px;color:#f6f0df;">
                            <div style="font-size:11px;letter-spacing:2px;text-transform:uppercase;color:#e7ac53;">Northern Light Co.</div>
                            <div style="font-family:Georgia,serif;font-size:28px;margin-top:8px;">Stick Season Summer Tour</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <p style="font-size:18px;margin:0 0 12px;">Hi {{ $userName }},</p>
                            <p style="font-size:15px;line-height:1.6;margin:0 0 24px;">Your registration is successful. Your spot under the pines is saved. Here are your details:</p>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-top:1px solid #e3dcc6;">
                                <tr>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:12px;color:#687064;text-transform:uppercase;letter-spacing:1px;width:35%;">Name</td>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:15px;font-weight:bold;">{{ $userName }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:12px;color:#687064;text-transform:uppercase;letter-spacing:1px;">Concert ticket</td>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:15px;font-weight:bold;">{{ $ticketQuantity }} × {{ $ticketType }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:12px;color:#687064;text-transform:uppercase;letter-spacing:1px;">Schedule</td>
                                    <td style="padding:14px 0;border-bottom:1px solid #e3dcc6;font-size:15px;font-weight:bold;">{{ $concertSchedule }}</td>
                                </tr>
                            </table>
                            <p style="font-size:13px;color:#687064;line-height:1.6;margin:24px 0 0;">Please keep this email and show it at gate 03 on the day. See you there!</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
