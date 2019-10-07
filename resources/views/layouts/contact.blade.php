<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        span {
            font-weight: bold;
        }
        table {
            width:100%;
        }
        .message {
            padding: 20px 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fafafa;
        }
    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <p><span>From:</span>&nbsp;{{ $data['name'] }}
                                            <br />
                                        <span>Email:</span>&nbsp;{{ $data['email'] }}
                                            <br />
                                        <span>Contact&nbsp;Reason:</span>&nbsp;{{ $data['subject'] }}
                                            <br />
                                        <span>Message:</span>&nbsp;</p>
                                        <p class="message">{!! nl2br(e($data['message'])) !!}</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>