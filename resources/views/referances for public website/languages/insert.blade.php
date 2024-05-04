<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>languages</title>
</head>
<body>
    
    <h1>Add Languages</h1>
    Total Languages : {{ App\Models\languages::count() }}
    <br>
    <form action="{{ Route('lang.insert') }}" method="POST">
        @csrf
        abbr lang : <input type="text" name="abbr">
        <br>
        locale : <input type="text" name="locale">
        <br>
        language name : <input type="text" name="name">
        <br>
        <select name="direction">
            <option value="ltr">Left to Right</option>
            <option value="rtl">Right to Left</option>
        </select>
        <br>
        Active ? <input type="checkbox" checked name="active" value="1">
        <br>
        <input type="submit" value="save">
    </form>


</body>
</html>