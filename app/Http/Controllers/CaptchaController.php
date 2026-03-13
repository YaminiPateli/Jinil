<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaptchaController extends Controller
{
    public function image(Request $request)
    {
        $length = 5;
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= mt_rand(0, 9);
        }

        session(['captcha_code' => $code]);

        $width = 120; $height = 40;
        $image = imagecreatetruecolor($width, $height);

        $bg = imagecolorallocate($image, 255, 255, 255);
        $textColor = imagecolorallocate($image, 20, 50, 90);
        $noiseColor = imagecolorallocate($image, 150, 150, 150);

        imagefilledrectangle($image, 0, 0, $width, $height, $bg);

        for ($i=0; $i<6; $i++) {
            imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noiseColor);
        }

        for ($i=0; $i<200; $i++) {
            imagesetpixel($image, mt_rand(0,$width), mt_rand(0,$height), $noiseColor);
        }

        $x=10; $y=8; $font=5;
        for ($i=0;$i<strlen($code);$i++){
            $yc = $y + mt_rand(-2,4);
            imagestring($image, $font, $x, $yc, $code[$i], $textColor);
            $x += 18 + mt_rand(-2,4);
        }

        ob_start();
        imagepng($image);
        $pngData = ob_get_clean();
        imagedestroy($image);

        if ($request->ajax()) {
            // Return base64 for JS
            return response()->json([
                'image' => 'data:image/png;base64,'.base64_encode($pngData),
                'code'  => $code
            ]);
        }

        return response($pngData, 200)->header('Content-Type', 'image/png')
            ->header('Cache-Control','no-cache, no-store, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','0');
    }
}
