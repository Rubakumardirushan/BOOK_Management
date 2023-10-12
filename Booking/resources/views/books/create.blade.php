<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add a Book</h1>
    <form method="post" action="/books/store">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" required><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
