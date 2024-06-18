<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry - ClearWay Custom Clearance</title>
    <style>
        @media screen and (max-width: 600px) {
            .content {
                width: 100% !important;
                display: block !important;
                padding: 10px !important;
            }

            .header,
            .body,
            .footer {
                padding: 5px !important;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
</head>

<body style="font-family: 'Poppins', Arial, sans-serif">
    <div class="header"
        style="background-color: #345C72; padding: 30px; text-align: center; color: white; font-size: 16px;">
        <strong>New Inquiry - ClearWay Custom Clearance</strong>
    </div>
    <div class="body" style="padding: 5px; text-align: left; font-size: 14px; line-height: 0.8;">
        <table border="0" style="width:100%">
            <tbody>
                <tr>
                    <td>
                        <strong>Request For:</strong> {{ $data['inquiry'] }}
                    </td>
                    <td style="width:10%; padding:25px 0px;"></td>
                    <td>
                        <strong>Full Name:</strong> {{ $data['name'] }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Contact Number:</strong> {{ $data['number'] }}
                    </td>
                    <td style="width:20%; padding:25px 0px;"></td>
                    <td>
                        <strong>Email:</strong> {{ $data['email'] }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Message:</strong> {{ $data['message'] }}
                    </td>
                    <td style="width:20%; padding:25px 0px;"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer"
        style="background-color: #333333; padding: 30px; text-align: center; color: white; font-size: 14px;">
        Copyright &copy; 2025 | Clear Way Custom Clearance
    </div>
</body>

</html>
