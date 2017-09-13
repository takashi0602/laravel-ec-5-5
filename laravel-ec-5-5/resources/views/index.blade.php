<!DOCTYPE HTML>

<html lang="ja">
    <head>
        <meat charset="UTF-8"></meat>
        <title>Curry Curry Curry</title>

    </head>

    <body>
        {{--Wrapper--}}
        <div id="wrapper">

            {{--Header--}}
            <header id="header">
                <div class="inner">

                    {{--Logo--}}
                    <a href="/" class="logo">
                        {{--<span class="symbol"><img src="images/logo.svg" alt="" /></span>--}}
                        <span>OIC Market</span>
                    </a>

                    {{--Nav--}}
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>

            </header>

            {{--Menu--}}
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/detail?id=1">POTATOES</a></li>
                    <li><a href="/detail?id=2">CARROTS</a></li>
                    <li><a href="/detail?id=3">ONIONS</a></li>
                    <li><a href="/detail?id=4">CURRY POWDER</a></li>
                    <li><a href="/detail?id=5">MEET</a></li>
                    <li><a href="/cart">SHOPPING CART</a></li>
                </ul>
            </nav>

            {{--Main--}}
            <div id="main">
                <div class="inner">
                    <header>
                        <h1>Curry Curry Curry</h1>
                        <p>カレー愛好家のためのスーパーマーケット</p>
                        <a href="/cart" class="button" style="margin-bottom: 20px;">カートを見る</a>
                    </header>

                    <section class="tiles">

                        {{--@foreach($vegetables as $vegetable)--}}
                            {{--<article class="style{{ $vegetable->id }}">--}}
                    {{--<span class="image">--}}
                        {{--<img src="{{ $vegetable->img }}" alt=""/>--}}
                    {{--</span>--}}
                                {{--<a href="/detail?id={{ $vegetable->id }}">--}}
                                    {{--<h2>{{ $vegetable->name }}</h2>--}}
                                    {{--<div class="content">--}}
                                        {{--<p>{{ $vegetable->kana }}</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</article>--}}
                        {{--@endforeach--}}

                    </section>
                </div>
            </div>

            {{--Footer--}}
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h2>Get in touch</h2>
                        <form method="post" action="#">
                            <div class="field half first">
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="field half">
                                <input type="text" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Send" class="special">
                                </li>
                            </ul>
                        </form>
                    </section>

                    <section>
                        <h2>Follow</h2>
                        <ul class="icons">
                            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                            <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                    </section>
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer>






        </div>
    </body>
</html>