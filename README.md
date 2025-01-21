# PHP Loose Comparison Bug

This repository demonstrates a common error in PHP programming involving loose comparison (`==`) versus strict comparison (`===`).

Loose comparison allows type juggling, which can lead to unexpected behavior and bugs.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides the corrected version using strict comparison.

The issue arises when comparing values of different data types. Loose comparison may produce unexpected results because of automatic type conversions. Strict comparison prevents such surprises by checking both value and type. 