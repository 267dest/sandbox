    @extends('layouts.main')

    @section('content')
            <h1>Show page</h1>

            <p>ID: {{ $id }} </p>
            <p>Name: {{ $name }}</p>

            @if ($id > 100)
                <p> {{ $id }} > 100</p>
            @endif

            @unless ( $id> 100)
                <p>{{$id}} <=100</p>
            @endunless

            @isset($records)
                <p>มีตัวแปร $records ให้ใช้งาน</p>
            @endisset

            @empty($array)
                <p>ตรวจสอบแล้วเป้น Arr ว่างสตริงว่างหรือเป็นค่า null</p>
            @endempty
    @endsection
