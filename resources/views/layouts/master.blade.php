<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
</select>
    <div class="container">  
            <div class="row">
                <div class="col-md-15 col-md-offset-6 text-right ">
                    <strong>Select Language: </strong>
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
