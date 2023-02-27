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
            <div class="section-1 section-border">
                <div class="contact-header">
                    <h3 class="contact-header-title ">
                        Contacts
                    </h3>
                    <div class="contact-header-options">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="contact-body">
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-avatar"></div>
                        <p class="contact-user-info ">Mona Lisa <span><i class="fa fa-eye"></i>7:26 PM</span></p>
                        <p class="contact-user-text">
                            Wir haben zimlich viele gemeinsamkeiten
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="section-2 section-border">
                <div class="chat-header">
                    <div class="chat-sub-left">
                        <div class="chat-avatar"></div>
                        <p>Mona Lisa <br><span>Last seen 40 minutes ago</span></p>
                    </div>
                    <div class="chat-sub-right">
                        <a href=""><i class="fa fa-xmark"></i></a>
                        <a href=""><i class="fa fa-user"></i></a>
                        <a href=""><i class="fa fa-phone"></i></a>
                    </div>
                </div>
                <div id="chat-body"></div>
                <div id="chat-footer"></div>
            </div>
        </section>
    </div>
</body>
</html>