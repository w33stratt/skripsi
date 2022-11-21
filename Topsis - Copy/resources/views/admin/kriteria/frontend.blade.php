<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <<table>
        <tr>
            <th>ID</th>
            <th>Nama Image</th>
        </tr>
        <tr>
            @foreach($data['data'] as $item)
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['image_name'] }}</td>
            @endforeach 
        </tr>
    </table>
</body>
</html>