<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.AddWorker')</title>
    <link rel="stylesheet" href="{{ asset('addworker.css') }}" />
    <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <div class="header">
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main', ['lang' => App::getLocale()]) }}">@lang('lang.Main')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('addworker', ['lang' => App::getLocale()]) }}">@lang('lang.AddWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('addwork', ['lang' => App::getLocale()]) }}">@lang('lang.AddWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allworker', ['lang' => App::getLocale()]) }}">@lang('lang.AllWorker')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('allwork', ['lang' => App::getLocale()]) }}">@lang('lang.AllWork')</a></div>
        <div onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('sendemail', ['lang' => App::getLocale()]) }}">@lang('lang.SendEmail')</a></div>
    </div>
    <div>
        <h1>@lang('lang.AddWorker')</h1>
<div>
    <form method="POST" action="{{ route('addworker')}}" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="file" name="worker_photo" accept="image/png,image/jpeg">
        <button type="submit">Create worker</button>
    </form>
</div>
    </div>
</body>
</html>