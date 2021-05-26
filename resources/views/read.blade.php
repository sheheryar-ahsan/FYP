<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
</head>
<body>
        <table border="1">
            <tr>
                <td><h3>Read data</h3></td>
            </tr>
            @foreach ($obj as $n)
                <tr>
                    <td>
                        {{$n->email}}
                    </td>
                </tr>
            @endforeach

        </table>
</body>
</html>