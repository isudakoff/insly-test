# Developer Test

## My Comments for answers

After you copy repository run this command:
```bash
$ docker-compose -f /<path_to_repository_root>/docker-compose.yml up -d
```

Then open your browser [http://127.0.0.1:8080](http://127.0.0.1:8080)

### Task 1 answer

```php
<?php

$name = ['I', 'l', 'y', 'a'];

foreach ($name as $char) {
    echo $char;
}

?>
```

### Task 3 comment

Run this command to create tables, and select employee data
```bash
$ docker-compose exec -T insly_db mysql insly3_2 -u insly -psecret < src/3/sql/answer.sql
```


-------------------------------------


## Original tasks

## TASK 1 - Name

```
01110000 01110010 01101001 01101110 01110100 00100000 01101111 01110101
01110100 00100000 01111001 01101111 01110101 01110010 00100000 01101110
01100001 01101101 01100101 00100000 01110111 01101001 01110100 01101000
00100000 01101111 01101110 01100101 00100000 01101111 01100110 00100000
01110000 01101000 01110000 00100000 01101100 01101111 01101111 01110000
01110011
```


## TASK 2 - Calculator

Write a simple car insurance calculator which will output price of the policy using vanilla PHP and JavaScript:

1. Create HTML form with fields:
  * Estimated value of the car (100 - 100 000 EUR)
  * Tax percentage (0 - 100%)
  * Number of instalments (count of payments in which client wants to pay for the policy (1 – 12))
  * Calculate button

2. Build calculator logic in PHP using OOP:
  * Base price of policy is 11% from entered car value, except every Friday 15-20 o’clock (user time) when it is 13%
  * Commission is added to base price (17%)
  * Tax is added to base price (user entered)
  * Calculate different payments separately (if number of payments are larger than 1)
  * Installment sums must match total policy sum- pay attention to cases where sum does not divide equally
  * Output is rounded to two decimal places

3. Final output (price matrix):
  * Base price
  * Price with commission and tax (every instalment separately)
  * Tax amount (separately with every instalment)
  * Grand totals (sum of all instalments): Price with commission and tax, total tax sum.
  * Example with 2 instalments:


## TASK 3 - Store employee data

1. Create a database structure to store employee information. The information stored is as follows:
- Name
- Birthdate
- ID code / SSN
- Is a current employee (yes/no)
- Contact information (e-mail, phone, address)

The following information in English, Spanish and French:
- Introduction
- Previous work experience
- Education information Log info:
- Who and when created the entry
- Who and when last modified the data

The information should be presented as an .sql file which can be imported into a MySQL database without errors.
Write example query to get 1-person data in all languages
Add test data for one customer into database
