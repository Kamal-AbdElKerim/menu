<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
</head>
<body>
    <video width="320" height="240" controls>
        <source src="{{ $decodedUrl }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>
