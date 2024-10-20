<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($reports as $report)
    {{$report['number']}}
    {{$report['description']}}
    {{$report['created_at']}}

    <form method="POST" action="{{route('reports.destroy', $report-> id)}}">
        @method('delete')
        @csrf
        <input type="submit" value="Удалить">
    </form>
    @endforeach

</body>

</html>