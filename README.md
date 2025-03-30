# -OOP-Object-Methods-Access-Modifiers-this-Constructor
# Collatz Conjecture (3x+1) - PHP OOP Implementation

## Description
This project implements the Collatz conjecture (3x+1 problem) using object-oriented programming (OOP) in PHP. The main class, `Collatz`, provides methods for calculating the sequence for a given number and analyzing a range of numbers to gather statistics.

## Files
- `collatz.php` - Contains the `Collatz` class responsible for calculations.
- `index.php` - Runs the program and outputs results.

## Features
- **Object-Oriented Approach**: Uses a class to encapsulate logic.
- **Constructor**: Initializes the starting number.
- **Method for Calculation**: Computes the 3x+1 sequence for a single number.
- **Interval Analysis**: Finds numbers with the most/least iterations and highest reached value within a given range.

## Usage
1. Ensure you have PHP installed.
2. Place `collatz.php` and `index.php` in the same directory.
3. Run the script:
   ```sh
   php index.php
   ```

## Example Output
```
Number with the maximum number of iterations: 27 (Iterations: 111)
Number with the minimum number of iterations: 32 (Iterations: 5)
Number with the highest reached value: 97 (Maximum value: 9232)
```

## Requirements
- PHP 7.4 or later

## Author
Your Name
