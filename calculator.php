<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle_calculator.php?source=calculator.html" method="post">
    <select name="quantity">
    <option value="">Select a quantity</option>
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        </select>
        <div align="left"><input type = "submit" name="submit" value="Total!">
        </div>
        <input type="hidden" name="price" value="19.95" />
        <input type="hidden" name="taxrate" value=".05" />
        
</body>
</html>