<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat</title>
</head>
<body>
<h1>No Cat No Life</h1>
<table border ="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Life Expectancy</th>
            <th>Image url</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cats as $cat)
            <tr>
                <td>{{$cat->name}}</td>
                <td>{{$cat->breed}}</td>
                <td>{{$cat->age}}</td>
                <td>{{$cat->life_expectancy}}</td>
                <td>
                    <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" width="100">
                </td>
                <td>
                    
                </td>
            </tr>

        @empty
        <tr>
            <td colspan="6">No Cats Were Found :(</td>
        </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>