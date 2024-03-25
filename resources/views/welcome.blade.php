<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <form action="{{ route('teacher.store') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="Insert the  Teacher's name">
        <button type="submit">Save</button>
    </form>
    <h1>Teacher's name are :</h1>
    @foreach ($teachers as $teacher)
        <h1>{{ $teacher->name }}</h1>
    @endforeach

    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="Insert the  student's name">

        <h1>chkon ghay9arih</h1>
        @foreach ($teachers as $teacher)
            <label for="">{{ $teacher->name }}</label>
            <input value="{{ $teacher->id }}" type="checkbox" name="teachers[]" id="">
        @endforeach
        <br> <br><br><br>
        <button type="submit">Save</button>
    </form>


    <h1>List of Teacher with students li kay9ariwhom</h1>
    @foreach ($teachers as $teacher)
        <h1>{{ $teacher->name }}</h1>
        <ul>
            @foreach ($teacher->students as $student)
                <li>{{ $student->name }}</li>
            @endforeach
        </ul>
    @endforeach

<br><br><br>

    <h1>List of students with teachers li kay9ariwhom</h1>

    @foreach ($students as $student)
    <h1>{{ $student->name }}</h1>
    <ul>
        @foreach ($student->teachers as $teacher)
            <li>{{ $teacher->name }}</li>
        @endforeach
    </ul>
@endforeach

</body>

</html>
