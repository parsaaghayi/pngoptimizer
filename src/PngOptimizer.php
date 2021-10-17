<?php   namespace Parsaaghayi\PngOptimizer;

class PngOptimizer
{
    public function optimize($dir, $min_quality = 65, $max_quality = 80, $strip = '--strip')
    {
        //$dir -> the path where there are your png files
        //the quality of your png files will be between min_quality and max_quality
        //$strip -> you can choose the method of strip which you want
        $time_start = microtime(true);
        //compress png files
        $files = glob("$dir/{,*/,*/*/,*/*/*/,*/*/*/*/,*/*/*/*/*/,*/*/*/*/*/*/}*.png", GLOB_BRACE);
        //Compression is done to a depth of 6
        foreach ($files as $file) {
            ob_flush();
            flush();
            if (!strpos($file, "-fs8.png")) { //If the compression had not been done before
                $command = "mogrify -quality 80 $file && pngquant --quality=$min_quality-$max_quality $strip $file";
                exec($command, $output, $result_code);
                echo "$file successfully compressed.<br>";
            }
        }
        ob_end_flush();
        exit;
    }
}
