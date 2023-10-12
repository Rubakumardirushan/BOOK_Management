<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{ $book->author }}" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $book->price }}" required><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $book->stock }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
