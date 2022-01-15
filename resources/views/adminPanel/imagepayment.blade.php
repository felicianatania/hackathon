<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(!empty($imagepayment))
        <img src="{{ asset('storage/'.$imagepayment[0]->payment) }}" alt="No data">
    @else
        <h1>No Data</h1>
    @endif
</body>
</html>
