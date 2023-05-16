<footer>
    <div class="container-wrapper">

        <div class="container">
            <div id="list-container">
                @foreach($footer_lists as $item)
                <div>
                    <h2>{{ $item['titolo'] }}</h2>
                    <ul>
                        @foreach($item['links'] as $link)
                        <li>
                            <a href="#">{{ $link }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

            </div>
            <div id="img-container">
                <img src="/img/dc-logo-bg.png" alt="">
            </div>

        </div>
    </div>
</footer>