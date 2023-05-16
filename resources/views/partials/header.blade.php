<header>
    <nav class="container">
         <div class="nav-left">
             <img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
         </div>
         <div class="nav-center">
             <ul>
                @foreach($links as $link)
                <li>{{$link}}</li>
                @endforeach
             </ul>
         </div>
         <div class="nav-right">
             <input type="text" name="" id="" placeholder="search">
             <i class="fa-solid fa-magnifying-glass"></i>
         </div>
    </nav>
 </header>