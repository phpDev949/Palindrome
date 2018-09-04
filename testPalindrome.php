<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class Palindrome
{
    /**
     * @param  string $str
     *
     * @return bool
     *
     * @throws Exception
     */
    public static function isPalindrome($str)
    {
        if (! is_string($str) || empty($str)) {
            throw new \Exception(
                sprintf('Bad input! Non-empty string expected! %s given', $str)
            );
        }
        $cleanedStr = strtolower(
            preg_replace("/[^a-zA-Z]+/", "", $str)
        );
        $strArray = str_split($cleanedStr);
        return $strArray === array_reverse($strArray);
    }
}
class PalindromeTest extends TestCase
{
    /**
     * @dataProvider palindromes
     */
    public function testIsPalindromeOnSuccess($str)
    {
        $this->assertTrue(Palindrome::isPalindrome($str));
    }
    /**
     * @dataProvider nonPalindromes
     */
    public function testIsPalindromeOnFailure($str)
    {
        $this->assertFalse(Palindrome::isPalindrome($str));
    }
    /**
     * @expectedException \Exception
     *
     * @dataProvider badData
     */
    public function testIsPalindromeWhenItThrowsAnException($str)
    {
        Palindrome::isPalindrome($str);
    }
    public function palindromes()
    {
        return [
            'palindrome_1' => ['12321'],
            'palindrome_2' => ['12421'],
        ];
    }
    public function nonPalindromes()
    {
        return [
            'non-palindrome_1' => ['String is not a palindrome'],
            'non-palindrome_2' => ['null'],
        ];
    }
    public function badData()
    {
        return [
            'bad_data_empty' => [''],
            'bad_data_null' => [null],
            'bad_data_-1'   => [-1]
        ];
    }
}

/* commandline to execute testing 
*  ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox --verbose testPalindrome.php
*/

$sequence[0] = "Madam In Eden, I'm Adam";
$sequence[1] = "Madam In Aden, I'm Adam";
$sequence[2] = 'A Man, A Plan, A Canal-Panama!';
$sequence[3] = 'A Man, A Plan, A Panal-Panama!';
$sequence[4] = 'Mr. Owl Ate My Metal Worm';
$sequence[5] = 'Mr. Owl Eight My Metal Worm';
$sequence[6] = 'Was It A Rat I Saw?';
$sequence[7] = 'Was It A Brat I Saw?';
$sequence[8] = '1279827348971238974 4789 32179843 7289721';
$sequence[9] = '127A982734897123 M9744789B32179843 7289721';

for ($i=0;$i<count($sequence);$i++) {
  echo $sequence[$i] . ' = ' . (Palindrome::isPalindrome($sequence[$i]) ? 'true' : 'false') . "\n";
}

