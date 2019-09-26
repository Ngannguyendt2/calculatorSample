<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/index">
    @csrf
    Number 1:<input type="number" name="num1"><br>
    <select name="operator">
        <option value="+">Add</option>
        <option value="-">Sub</option>
        <option value="*">Mul</option>
        <option value="/">Div</option>
    </select><br>
    Number 2:<input type="number" name="num2"><br>
    <button type="submit">Calculator</button>
@if(!empty(request('num2')))
        Kết quả: {{ $result }}
    @endif
</form>
</body>
</html>
