This code snippet demonstrates a common error in PHP related to using "==" instead of "===":

```php
<?php
$a = 1;
$b = "1";
if ($a == $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
?>
```

In this example, the comparison `$a == $b` evaluates to true because PHP's loose comparison (`==`) performs type juggling.  It converts the string "1" to an integer 1 before comparing. This can lead to unexpected results. 