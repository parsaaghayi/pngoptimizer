# pngoptimizer

You can use it to optimize your png files in best quality.
This package use <a href="https://pngquant.org/" target="_blank" rel="noopener noreferrer">pngquant</a>; so you must install it first.
You can optimize your images in any quality you want<br>
By default it will scan dir for finding png files in depth of 6 that you can change it very easy.<br>
Only in One Line :<br><br>
<code>
$statement->optimize($dir, $min_quality, $max_quality, $strip);
</code><br>
<br>example1:<br>
<pre>
require_once './vendor/autoload.php';
use Parsaaghayi\Pngoptimizer\PngOptimizer;
$test = new PngOptimizer;
$test->optimize('../test/images',65,80);
</pre>
This code will create an optimized version of your png file which the name is filename-fs8 in same directory<br>
Original Image (799KB):<br><br>
![Original Image 799KB](https://parsaaghayi.ir/github/pngoptimizer/favpng_pumpkin-cucurbita-vine-clip-art.png "Original Image 799KB")<br><br><br>
optimized Image (264KB):<br><br>
![optimized Image 264KB](https://parsaaghayi.ir/github/pngoptimizer/favpng_pumpkin-cucurbita-vine-clip-art-fs8.png "optimized Image 264KB")<br><br><br>

