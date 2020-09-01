@extends('layouts.app')

@section('title','Index Sayfası')
@section('content')

    @php
    $sayi = 5;
    @endphp
{{------------------IF/UNLESS/EMPTY/ISSET/SWITCHCASE----------------}}
{{--    @php--}}
{{--    $sayi = 6;--}}
{{--    @endphp--}}

{{--    @if($sayi>5)--}}
{{--        Sayı 5'ten Büyük--}}
{{--        @elseif($sayi < 5)--}}
{{--            Sayı 5'ten Küçük--}}
{{--        @else--}}
{{--            Sayı 5'e Eşit--}}
{{--    @endif--}}
{{--    @php($sayi=3232342415135123)--}}

{{--    {{$sayi==5 ? '5 e Eşit':'Değil'}}--}}


{{--    @unless($sayi)--}}
{{--        ok false--}}
{{--    @endunless--}}

{{--    @isset($sayi)--}}
{{--        Tanımlı--}}
{{--        @endisset--}}

{{--    @empty($sayi)--}}
{{--        Boş--}}
{{--    @endempty--}}

{{--@switch($sayi)--}}

{{--    @case(0)--}}
{{--        Sayı 0'a Eşit--}}
{{--    @break--}}
{{--    @case(1)--}}
{{--        Sayı 1'a Eşit--}}
{{--    @break--}}

{{--    @case(2)--}}
{{--        Sayı 2'a Eşit--}}
{{--    @break--}}

{{--    @case(3)--}}
{{--        Sayı 3'a Eşit--}}
{{--    @break--}}
{{--    @default--}}
{{--        Sayı Aralığında Değil--}}
{{--    @break--}}
{{--@endswitch--}}
{{---------------------------FOR/FOREACH/WHILE/FORELSE----------------------------}}
{{--    @for($i = 0; $i<=10; $i++)--}}
{{--        {{$i}}--}}
{{--        @br--}}
{{--    @endfor--}}
{{--@php($dizi= ['php','bootstrap', 'js'])--}}
{{--@foreach($dizi as $key)--}}
{{--    {{$key}}--}}
{{--@endforeach--}}
{{--    <?php $deger = 0; ?>--}}
{{--@while($deger < 10)--}}
{{--    {{$deger}}--}}
{{--    @php($deger++)--}}
{{--@endwhile--}}
@php($dizi= ['php','bootstrap', 'js'])
@forelse($dizi as $key)
    <li>{{$key}}</li>
    @empty
    Eleman Bulunamadı
@endforelse
{{--    DÖNGÜ ÖZELLİKLERİ--}}
    <ul>
    @foreach($dizi as $key)
        <li>{{$loop->iteration}}{{$key}}</li>1,2,3,4,5,6
        <li>{{$loop->index}}{{$key}}</li>0,1,2,3,4,5,6
        <li>{{$loop->remaining}}{{$key}}</li>4,3,2,1,0
        <li>{{$loop->count}}{{$key}}</li>4,4,4,4
    @endforeach
    </ul>
