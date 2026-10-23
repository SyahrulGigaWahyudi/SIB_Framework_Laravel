<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Author</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #e5e7eb; }
    </style>
</head>
<body>
    <h2>Data Author</h2>
    <p><a href="/genres">Genre</a> | <a href="/authors">Author</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Bio</th>
        </tr>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author['id'] }}</td>
            <td>{{ $author['name'] }}</td>
            <td>{{ $author['photo'] }}</td>
            <td>{{ $author['bio'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>