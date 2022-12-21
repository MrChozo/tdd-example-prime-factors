## What is TDD?

* Kent Beck wrote __the__ book
  * Agile Manifesto
  * Extreme Programming - variation of agile development
  * Ward Cunningham - works with him a lot, he started the first Wiki
  * SmallTalk - language, early MVC
  * xUnit - PhpUnit and loads more based on it
* Beck didn't invent it, just popularized it
* Been around since 1960s or before


## TDD Steps

1. Add a test
2. Run all tests. The new test should fail for expected reasons
3. Write the simplest code that passes the new test
4. All tests should now pass
5. Refactor as needed, using tests after each refactor to ensure that 
   functionality is preserved
   1. moving code to where it most logically belongs
   2. removing duplicate code
   3. making names self-documenting
   4. splitting methods into smaller pieces
   5. re-arranging inheritance hierarchies
6. Repeat


## PhpUnit Setup for plain PHP

* `composer require --dev phpunit/phpunit`
* create src and tests directories
* add autoload App:src section to composer.json


## Prime Factors

* [Laracasts: Code Katas with PHPUnit, lesson 3][prime factors kata] 
* Our task is to create a class that will accept a number as an input 
  and output an array of that number's prime factors
* what's a prime factor?
* prime numbers: divisible only by itself and 1
* 2, 3, 5, 7, 11, 13, 17, 19, 23...
* prime factors are the prime numbers that make up a non-prime number
* 8 -> 2, 2, 2  by doing:
  * 8 = 2 * 4
  * 8 = 2 * 2 * 2
* 100 -> 2, 2, 5, 5  by doing:
  * 100 = 2 * 50
  * 100 = 2 * 2 * 25
  * 100 = 2 * 2 * 5 * 5


## Formula

1. Is the number divisible by 2?
2. If true, then divide by 2. If false, increase prime number candidate 
   and try again.
3. Repeat.


## How to Start?

* Create a PrimeFactorsTest file for testing our class, PrimeFactors
* Method `it_generates_prime_factors_for_1()`
* Check for what it would do with the simplest input first, the number 1
* 1's special, it doesn't have any prime factors but also isn't a prime 
  number, so it should return an empty array
* Run test
* It fails
* Create the class and the `generate()` method
* Add `return [];` to method to make test pass


## More tests, naive solutions

* Copy first test as `it_generates_prime_factors_for_2()`
* Add `if ($int > 1) return [$int];`
* `it_generates_prime_factors_for_3()` is the same as "2"
* `it_generates_prime_factors_for_4()` is different, needs answer of 
  `[2, 2]` instead
* Review Formula section above
* Using it, it's reasonable to add a storage array, a hard-coded 
  modulus operator for 2, and while loop
* `... factors_for_3()` fails now though


## Fix it

* We forgot about "increase candidate" part of step 2 in formula
* Extract divisor (previously hard-coded 2) into a variable
* Nest `while` into another `while` as a conditional for deciding when 
  to increase divisor


## Refactor

* Refactor tests into one using a `@dataProvider`
* Refactor `while` loops into `for` loops, using our tests(!) along the way
* Add test data for 999








[prime factors kata]:https://laracasts.com/series/code-katas-with-phpunit/episodes/3










