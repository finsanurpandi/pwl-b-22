<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student IF B 22</h1>
    {{ $nama }}
    <?=$nama?>
    <?php echo $nama; ?>
    <br/>
    {{ $kelas }}
    <br/>
    {!! $prodi !!}
    <h3>Control Structure</h3>
    @if($kelas == 'IF B 22')
        Kelas IF B 22
    @else
        Bukan Kelas IF B 22
    @endif
    <br/>
    @foreach($alphabets as $alphabet)
        No. {{ $loop->iteration }}
        @if($loop->last)
            {{ $alphabet }}
        @else
            {{ $alphabet }},
        @endif
        <br/>
    @endforeach

    <form method="post" action="#">
        @csrf
        @method('PATCH')
    </form>

    @php
        $str = 'lorem ipsum dolor sit amet, consectetur adipis';
        echo $str;
    @endphp
</body>
</html>