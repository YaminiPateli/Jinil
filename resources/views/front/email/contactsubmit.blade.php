
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailer</title>
    
      <style>
         @media (max-width: 480px) {
 
             .padding-set1
            {
                padding:  0 10px !important;
            }
 
            .padding-set2
            {
                padding:  0 10px 20px 10px !important;
            }
        }
    </style>
</head>
<body style="margin: 0 auto;">
    <div style="max-width: 600px; margin: 0 auto;">
        <div>
            <img style="width: 100%;" src="{{ asset('public/front/images/banner.jpg') }}" alt="banner">
        </div>
      
        <div class="padding-set1" style="padding: 0 50px;">
            <h1 style="color: #284D99;font-weight: 600;font-size: 20px; font-family:  'Inter', sans-serif;">Thank You for Your Enquiry.</h1>
            <p style="font-weight: 400;font-size: 14px;line-height: 20px;color: #444444; font-family:  'Inter', sans-serif;">Thank you for reaching out to us. We’ve received your enquiry and one of our team members will get back to you shortly with the information you need. </p>
            <p style="font-weight: 400;font-size: 14px;line-height: 20px;color: #444444; font-family:  'Inter', sans-serif;">We appreciate your interest in HMFT and look forward to assisting you.</p>
        </div>
        
        <div class="padding-set2" style="padding: 0 50px 20px 50px;text-align: center;">
            <hr style="border-top: 1px solid #DDDDDD;">
            <p style="font-weight: 400;font-size: 14px;line-height: 20px;color: #444444; font-family:  'Inter', sans-serif;">If you have any urgent questions, feel free to contact us</p>
            <div style="display: flex;justify-content: center;margin-top: 5px;">
                <ul style="margin: 0;padding: 0;display: flex;">
                    <li style="list-style: none; border-right: 2px solid #888888; padding-right: 7px;">
                        <a href="mailto:info@hmft.in" style="display: align-items: center;font-weight: 400;font-size: 14px;text-decoration: none;color: #444444;font-family:  'Inter', sans-serif;">
                           <span class="margin-top:3px"><img src="{{ asset('public/front/images/email.png') }}" alt="email"></span>
                          <span style="padding-left: 5px;">info@hmft.in</span>
                        </a>
                    </li>
                  
                    <li style="list-style: none;padding-left: 7px;">
                        <a href="tel:+912266276800" style="display: flex; align-items: center;font-weight: 400;font-size: 14px;text-decoration: none;color: #444444;font-family:  'Inter', sans-serif;">
                           <span class="margin-top:3px"><img src="{{ asset('public/front/images/phone.png') }}" alt="phone"></span>
                          <span style="padding-left: 5px;"> +91 22 6627 6800</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="background-color: #284D99; padding: 6px 0;text-align: center;">
            <p style="font-size: 14px;font-weight: 400;color: #FFFFFF;font-family:  'Inter', sans-serif;">© Copyright 2026 Heavy Metal Fine Tubes Pvt. Ltd. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
