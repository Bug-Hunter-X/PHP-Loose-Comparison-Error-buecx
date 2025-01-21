The solution involves using the strict comparison operator (`===`) instead of the loose comparison operator (`==`). Strict comparison only returns true if both values are equal and have the same type.

```php
<?php
$a = 1;
$b = "1";
if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
?>
```

This corrected code will print "Not equal" because `$a` is an integer and `$b` is a string, and they are not strictly equal.