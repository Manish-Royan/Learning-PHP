# Rule of Variable

## 1. Start with a Dollar Sign ($): All variable names in PHP must start with a dollar sign ($).
```PHP
$variableName = "value";
```

## 2. Followed by a Letter or Underscore: The first character after the dollar sign must be a letter (a-z, A-Z) or an underscore (_). It cannot be a number.
```PHP
$varName  = "value"; // Valid
$_varName = "value"; // Valid
//$1varName = "value";   // Invalid, starts with a number
```

## 3. Subsequent Characters: After the initial letter or underscore, the variable name can include any combination of letters, numbers, and underscores.
```PHP
$varName1   = "value"; // Valid
$var_Name_2 = "value"; // Valid
```

## 4.Case Sensitivity: Variable names in PHP are case-sensitive, meaning $VarName and $varname would be considered different variables.
```PHP
$VarName = "value1";
$varname = "value2";

echo $VarName; // Outputs: value1
echo $varname; // Outputs: value2
```
## 5.Variable Naming Conventions
i. **Camel Case**: Common in PHP for naming variables.
```PHP    
$userName = "John";
```
ii. **Snake Case**: Sometimes used, especially in older codebases or for constants.
```PHP
$user_name = "John";
```
iii. **Meaningful Names**: Choose variable names that clearly describe their purpose.
```PHP
$totalAmount = 100.50;
```

## 6. Reserved Words: Avoid using PHP reserved words and predefined variable names as variable names to prevent conflicts.
```PHP
$function = "test"; // Not recommended, as function is a reserved word
```