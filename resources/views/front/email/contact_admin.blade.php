<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting">
    <title>Emailer</title>
    <style>
        @media (max-width: 480px) {
            .contact-link a {
                font-size: 12px !important;
                white-space: nowrap !important;
            }

            .text-center td
            {
                padding: 24px 48px 58px 24px !important;
            }
        }
    </style>
</head>

<body style="margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">
    <center>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:600px; margin:0 auto;">
            <tr>
                <td style="background-color: #C12729; height: 10px;"></td>
            </tr>
            <tr>
                <td style="text-align: center; padding: 24px 0;">
                    <img src="https://intelliworkz.co.in/flexibellow/images/emailer/logo.png" alt="logo" style="max-width:150px; height:auto;">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://intelliworkz.co.in/flexibellow/images/emailer/banner.png" alt="banner" style="width: 100%; height: auto; display: block;">
                </td>
            </tr>
            <tr class="text-center">
                <td style="padding: 37px 48px 37px 48px; font-family: 'Rubik', sans-serif; color: #333333;">
                    <h2 style=" font-size: 18px;">Hi Team,</h2>
                    <p style=" font-size: 14px; line-height: 20px;">
                        A new enquiry has been submitted through the Enquire Now form. Please find the details below:
                    </p>
                    <table style="border-radius: 5px;border: 1px solid #DDD;border-spacing: 0px;overflow: hidden;color: #333;font-family:  'Rubik', sans-serif;font-size: 14px;font-weight: 400;line-height: 22px;vertical-align: middle;">
                        
                        <tbody>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Name :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['name'] }}</td>
                            </tr>
                            
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Email :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_name'] }}</td>
                            </tr>
                             <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Contact :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['contact'] }}</td>
                            </tr>
                            
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Email :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['email'] }}</td>
                            </tr>
                            
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Message :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['message'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
           
            <tr>
                <td align="center" style="padding:5px; border-top: 1px solid #DDDDDD;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-spacing:0; border-collapse:collapse;">
                        <tr>
                            <td align="center" colspan="2" style="padding-bottom:10px; width: 600px;">
                                <p style="font-size:14px; line-height: 20px; font-family:'Rubik', sans-serif; color:#333;margin: 0; width: 600px;">
                                    If you have any urgent questions, feel free to contact us
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="contact-link"  align="center" style="border-right:1px solid #888888; padding:5px; text-align:center; white-space:nowrap;" >
                                <a href="mailto:info@hmft.in" style="display:inline-block; text-decoration:none; color:#333; font-family:'Rubik', sans-serif; font-size:14px; white-space:nowrap;">
                                    <img src="https://intelliworkz.co.in/flexibellow/images/emailer/email_vector.png" alt="email" style="max-width:16px; vertical-align:middle; margin-right:5px;">
                                    info@hmft.in
                                </a>
                            </td>
                            <td class="contact-link" align="center" style="padding:5px; text-align:center; white-space:nowrap;">
                                <a href="tel:+971556440625" style="display:inline-block; text-decoration:none; color:#333; font-family:'Rubik', sans-serif; font-size:14px; white-space:nowrap;">
                                    <img src="https://intelliworkz.co.in/flexibellow/images/emailer/call_vector.png" alt="phone" style="max-width:16px; vertical-align:middle; margin-right:5px;">
                                    +971 556 440 625
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="background-color: #C12729; text-align: center; padding:8px;">
                    <p style=" font-size:12px; color:#FFFFFF; font-family:'Rubik', sans-serif; margin: 0;">
                        © Copyright 2026 Heavy Metal Fine Tubes Pvt. Ltd. All rights reserved.
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>