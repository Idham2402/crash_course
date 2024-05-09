<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeowMeowWompWomp</title>
</head>
<body>
    <h1>Add New Meow</h1>
    <form action="{{ route('cats.store') }}" method="post">
        @csrf
    <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br>
        <label for="breed">Breed</label>
        <input type="text" name="breed" id="breed" value="">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="">
        <br>
        <label for="life_expectancy">Life Expectancy</label>
        <input type="number" name="life_expectancy" id="life_expectancy" value="">
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>