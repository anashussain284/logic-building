Here are the solutions for problems 16 to 25 without using any predefined PHP functions:

---

### **16. Generate Random Numbers**  
**Logic**: Use a custom random number generator algorithm (e.g., Linear Congruential Generator).  
```php
<?php
$seed = 12345; // Seed value for reproducibility
$a = 1103515245;
$c = 12345;
$m = 2147483648;

function custom_rand($min, $max) {
    global $seed, $a, $c, $m;
    $seed = ($a * $seed + $c) % $m;
    return $min + ($seed % ($max - $min + 1));
}

print custom_rand(1, 100); // Generate a random number between 1 and 100
?>
```

---

### **17. String Length**  
**Logic**: Count characters in a string using a loop.  
```php
<?php
$str = "hello";
$length = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $length++;
}

print $length;
?>
```

---

### **18. Sort an Array**  
**Logic**: Use bubble sort to sort an array manually.  
```php
<?php
$arr = [4, 2, 8, 1, 5];
$n = count($arr);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

for ($i = 0; $i < $n; $i++) {
    print $arr[$i] . " ";
}
?>
```

---

### **19. Merge Two Arrays**  
**Logic**: Loop through both arrays and combine them.  
```php
<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$merged = [];

for ($i = 0; isset($arr1[$i]); $i++) {
    $merged[] = $arr1[$i];
}
for ($i = 0; isset($arr2[$i]); $i++) {
    $merged[] = $arr2[$i];
}

for ($i = 0; isset($merged[$i]); $i++) {
    print $merged[$i] . " ";
}
?>
```

---

### **20. Remove Duplicates from an Array**  
**Logic**: Use nested loops to compare and exclude duplicates.  
```php
<?php
$arr = [1, 2, 2, 3, 4, 4, 5];
$unique = [];

for ($i = 0; isset($arr[$i]); $i++) {
    $found = false;
    for ($j = 0; isset($unique[$j]); $j++) {
        if ($arr[$i] == $unique[$j]) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $unique[] = $arr[$i];
    }
}

for ($i = 0; isset($unique[$i]); $i++) {
    print $unique[$i] . " ";
}
?>
```

---

### **21. File Reading**  
**Logic**: Read file contents character by character.  
```php
<?php
$filename = "example.txt"; // Create this file with sample content
$file = fopen($filename, "r");

if ($file) {
    while (!feof($file)) {
        $char = fgetc($file);
        if ($char !== false) {
            print $char;
        }
    }
    fclose($file);
} else {
    print "File not found.";
}
?>
```

---

### **22. Write to a File**  
**Logic**: Open a file and write character by character.  
```php
<?php
$filename = "output.txt";
$content = "Hello, PHP!";
$file = fopen($filename, "w");

if ($file) {
    for ($i = 0; isset($content[$i]); $i++) {
        fwrite($file, $content[$i]);
    }
    fclose($file);
    print "Content written to file.";
} else {
    print "Unable to open file.";
}
?>
```

---

### **23. Count Words in a String**  
**Logic**: Count words by identifying spaces and characters.  
```php
<?php
$str = "PHP is awesome";
$word_count = 0;
$is_word = false;

for ($i = 0; isset($str[$i]); $i++) {
    if ($str[$i] != ' ' && !$is_word) {
        $word_count++;
        $is_word = true;
    } elseif ($str[$i] == ' ') {
        $is_word = false;
    }
}

print $word_count;
?>
```

---

### **24. Temperature Conversion**  
**Logic**: Use formulas to convert between Celsius and Fahrenheit.  
```php
<?php
$temp_celsius = 25;
$temp_fahrenheit = $temp_celsius * 9 / 5 + 32;

print "Celsius to Fahrenheit: " . $temp_fahrenheit . "\n";

$temp_fahrenheit = 77;
$temp_celsius = ($temp_fahrenheit - 32) * 5 / 9;

print "Fahrenheit to Celsius: " . $temp_celsius;
?>
```

---

### **25. Simple Contact Form**  
**Logic**: Accept input and display it back without predefined PHP functions.  
```php
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

print "Name: " . $name . "<br>";
print "Email: " . $email . "<br>";
print "Message: " . $message . "<br>";
?>
```

---

Let me know if you'd like further explanations or enhancements for any specific solution!
