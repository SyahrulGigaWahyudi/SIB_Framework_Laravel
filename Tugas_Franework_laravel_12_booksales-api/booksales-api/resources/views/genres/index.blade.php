<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Genre</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #e5e7eb; }
    </style>
</head>
<body>
    <h2>Data Genre</h2>
    <p><a href="/genres">Genre</a> | <a href="/authors">Author</a> | <a href="/books">Book</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['name'] }}</td>
            <td>{{ $genre['description'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>