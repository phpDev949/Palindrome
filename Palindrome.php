<?php

class Palindrome
{
    /**
     * @param  string $str
     *
     * @return bool
     *
     * @throws Exception
     */
    private $value;

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
  $parser = new Palindrome();
  $node = $parser->isPalindrome($sequence[$i]);
  echo $sequence[$i] . ' = ' . ($node ? 'true' : 'false') . "\n"; 
}

/* RESULTS BELOW:
* Madam In Eden, I'm Adam = true
* Madam In Aden, I'm Adam = false
* A Man, A Plan, A Canal-Panama! = true
* A Man, A Plan, A Panal-Panama! = true
* Mr. Owl Ate My Metal Worm = true
* Mr. Owl Eight My Metal Worm = false
* Was It A Rat I Saw? = true
* Was It A Brat I Saw? = false
* 1279827348971238974 4789 32179843 7289721 = true
* 127A982734897123 M9744789B32179843 7289721 = false
*/

