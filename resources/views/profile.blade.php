<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project X</title>

    <script src="https://kit.fontawesome.com/1cb9010670.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('template/styles/main.css') }}">
    @viteReactRefresh
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        @include('layouts.header')
        <section class="profile">
            <div class="profile-cover">
            </div>
            <div class="profile-detail-block">
                <div class="profile-detail-info">
                    <h1>
                        Mona Lisa
                    </h1>
                    <p>120 Connection</p>
                </div>
            </div>
            <div class="profile-picture"></div>
        </section>
        {{-- <div class="profile-tabs">
            <button class="active">Info</button>
            <button>Posts</button>
            <button>Pictures</button>
        </div> --}}
        <section class="posts">
            <button>Create</button>
            <h2>Posts</h2>
            <div>
            </div>
        </section>
        <section class="info">
            <div class="info-block">
                <h2>Intro</h2>
                <span></span>
                <ul class="info-list">
                    <li><i class="fa-solid fa-grip-vertical"></i>გამარჯობა, ჩემი სახელია ლუკა და მე ვცდილობ შევისწავლო HTML და CSS ...</li>
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i>თბილისი</li>
                    <li><i class="fa-solid fa-clock"></i>გაწევრიანდა 5 დღის წინ</li>
                </ul>
            </div>
        </section>

    </div>
</body>
</html>