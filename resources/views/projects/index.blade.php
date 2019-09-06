<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Projects</h2>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>