<!DOCTYPE html>
<html>
<head>
    <title>G2D DESCRIPTION</title>
</head>
<body>
    <h1>My Description</h1>
    <ul>
        @foreach ($adDescriptions as $adDescription)
            <a href="#">
                <img src="{{ asset( $adDescription ) }}" alt="image"></a>
        @endforeach
    </ul>
</body>
</html>
