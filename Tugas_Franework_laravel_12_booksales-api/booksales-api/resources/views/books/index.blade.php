<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Book</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #e5e7eb; }
    </style>
</head>
<body>
    <h2>Data Book</h2>
    <p><a href="/genres">Genre</a> | <a href="/authors">Author</a> | <a href="/books">Book</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Cover Photo</th>
            <th>Genre</th>
            <th>Author</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ number_format($book->price, 0, ',', '.') }}</td>
            <td>{{ $book->stock }}</td>
            <td>{{ $book->cover_photo }}</td>
            <td>{{ $book->genre->name }}</td>
            <td>{{ $book->author->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>