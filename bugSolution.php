To avoid this type of error, explicitly check and convert strings before performing arithmetic operations. Always use functions such as `is_numeric()` to verify that a string contains a valid number before attempting numerical operations.

Here's how to improve the previous examples:
```php
$stringNum = "10abc";
$intNum = 5;

if (is_numeric($stringNum)) {
  $result = (int)$stringNum + $intNum; // Explicit conversion
} else {
  $result = "Error: Not a valid number";
}
echo $result; // Output: Error: Not a valid number

$stringNum = "10";
$intNum = 5;

if (is_numeric($stringNum)) {
  $result = (int)$stringNum + $intNum;
} else {
  $result = "Error: Not a valid number";
}
echo $result; //Output: 15
```
This approach ensures that only valid numerical strings participate in arithmetic calculations, making the code more robust and less prone to unexpected behavior.