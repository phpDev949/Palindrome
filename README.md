# Palindrome

class Palindrome with TestUnit

command-line> php Palindrome.php

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


# Need to install phpunit: https://phpunit.de/getting-started/phpunit-7.html
# Need to mkdir src (can leave empty)
> ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox --verbose testPalindrome.php

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
* PHPUnit 7.3.3 by Sebastian Bergmann and contributors.

* Runtime:       PHP 7.2.9

* Palindrome
*  ✔ Is palindrome on success data set "palindrome_1" [33.89 ms]
*  ✔ Is palindrome on success data set "palindrome_2" [0.16 ms]
*  ✔ Is palindrome on failure data set "non-palindrome_1" [0.46 ms]
*  ✔ Is palindrome on failure data set "non-palindrome_2" [0.12 ms*]
*  ✔ Is palindrome when it throws an exception data set "bad_data_empty" [7.31 ms]
*  ✔ Is palindrome when it throws an exception data set "bad_data_* null" [0.29 ms]
* ✔ Is palindrome when it throws an exception data set "bad_data_-1" [0.23 ms* * * * * * * *]

* Time: 293 ms, Memory: 4.00MB

* OK (7 tests, 7 assertions)
*/
