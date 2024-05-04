<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>languages</title>
</head>
<body>
    


    <h1>Add slider</h1>
    Total data : {{ App\Models\slider::count() }}
    <br>

    <table border="1">
        <tr>
            <th>translation_lang</th>
            <th>translation_of</th>
            <th>slug</th>
            <th>title</th>
            <th>desc</th>
        </tr>

        @foreach ($slider as $item)
            <tr>
                <td>{{ $item->translation_lang }}</td>    
                <td>{{ $item->translation_of }}</td>    
                <td>{{ $item->slug }}</td>    
                <td>{{ $item->title }}</td>    
                <td>{{ $item->desc }}</td>    
            </tr>            
        @endforeach

    </table>


    <br>
    <hr>
    <hr>


    {{--  if i want to make edit --}}
    <table border="1"> 
        <tr>
            <th>translation_lang</th>
            <th>translation_of</th>
            <th>slug</th>
            <th>title</th>
            <th>desc</th>
        </tr>

        @foreach ($slider_relation->sliders as $item)
            <tr>
                <td>{{ $item->translation_lang }}</td>    
                <td>{{ $item->translation_of }}</td>    
                <td>{{ $item->slug }}</td>    
                <td>{{ $item->title }}</td>    
                <td>{{ $item->desc }}</td>    
            </tr>            
        @endforeach

    </table>
    


    {{-- {{ get_Languages() }} --}}


</body>
</html>