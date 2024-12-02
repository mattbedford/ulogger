# Ulogger
### A logging utility for WordPress development.

## Installation
Download as a zip and install as a new plugin in your wordpress project (development/staging sites only please).


## Usage
The plugin lets you write to logs in 4 different ways.

| Method  | Logs to                                             |
|---------|-----------------------------------------------------|
| debug   | The standard WP debug.log (if enabled in wp-config) |
| file    | A text file in the root folder of your installation |
| console | The javascript console in devtools.                 |
| screen  | The screen: exactly as you get with doing `print_r` |

To use the tool it's really simple. `ulogger::[method]([your-stuff-to-log])`.


## Example usage
- Write something to the console on page load
```php
add_action('wp_header', function() {
    ulogger::console("The page has loaded from the server.");
})
```

- Write a bunch of stuff to our own file
```php

function your_awesome_function($some_variable) {

    // This will also produce a note in the console with the file path of the log file.
    $var_1 = $some_variable;
    $var_2 = ["big", "bad", "wolf"];    
    ulogger::file($var_1);
    ulogger::file($var_2);
    ulogger::file("All logged!");

}


```

- Write to the standard WP debug log file
```php

    add_action("init", "JustTesting");
    function JustTesting() {
    
        $var = [1,2,3,4,5];
        ulogger::debug($var);
    }

```

- Print stuff on the screen
```php

    ulogger::screen('This is like doing a <pre> + print_r + </pre>');

```
