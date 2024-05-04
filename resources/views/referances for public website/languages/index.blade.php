<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>languages</title>
</head>
<body>
    
    <h1>Languages</h1>

    <table border="1">
        <tr>
            <th>Language name</th>
            <th>Abbr language</th>
            <th>Status</th>
            <th>Local</th>
            <th>Direction</th>
            <th>delete</th>
            <th>update</th>
        </tr>

            @isset($lang)
                @foreach($lang as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->abbr }}</td>
                        <td>{{ $item->active }} : {{ $item->getActive() }} </td>
                        <td>{{ $item->locale }}</td>
                        <td>{{ $item->direction }}</td>
                    </tr>
                @endforeach
            @endisset
    </table>

</body>
</html>