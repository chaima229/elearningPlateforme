<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}">Create New Course</a>
    <ul>
        @foreach($courses as $course)
            <li>{{ $course->title }} ({{ $course->status }})</li>
        @endforeach
    </ul>
</body>
</html>
