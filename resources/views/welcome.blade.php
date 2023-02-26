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
        <header>
            <div class="header-block">
            </div>
        </header>
        <section>
            <div class="section-1 section-border"></div>
        </section>
        <section>
            <div class="section-2 section-border">
                <div class="chat-header">
                    <div class="chat-sub-left">
                        <div class="chat-avatar"></div>
                        <p>Name Surename <br><span>Last seen</span></p>
                        
                    </div>
                    <div class="chat-sub-right">
                        <a href=""><i class="fa fa-xmark"></i></a>
                        <a href=""><i class="fa fa-user"></i></a>
                        <a href=""><i class="fa fa-phone"></i></a>
                    </div>
                </div>
                <div id="chat-body"></div>
                <div class="chat-footer">
                    <form action='' method='post'>
                        <a href=""><i class="fa-solid fa-paperclip"></i></a>
                        <input type="text" name="message" placeholder="Type...">
                        <div class="chat-option-block">
                            {{-- <a href=""><i class="fa-solid fa-paper-plane"></i></a> --}}
                            <button><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>