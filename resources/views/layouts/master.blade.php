<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/alert.css">
    <link href="{{ asset('dist\app.css') }}" type="text/css" rel="stylesheet" >
    <link href="{{ asset('dist\app.js') }}" type="text/css" rel="stylesheet" >
</head>
<body>
</select>
    <div class="container">  
            <div class="row">
                <div class="col-md-15 col-md-offset-6 text-right ">
                    <strong>{{ __('chooseLang.lang') }}: {{ __('chooseLang.choose') }}</strong>
                </div>
                <div id="select" class="col-md-7 mb-2 ">
                    <select class="form-control" name="forma" onchange="location = this.value;">
                        <option value="choose">Choose</option>
                        <option value="{{ route('changeLang', '?lang=en') }}">English</option>
                        <option value="{{ route('changeLang', '?lang=vn') }}">Vietnamese</option>
                        <option value="{{ route('changeLang', '?lang=jp') }}">Japanese</option>
                    </select>
                </div>
            </div>     
    </div>
    @yield('content') 
</body>
</html>
