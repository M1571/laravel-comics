<div class="container header">

    <nav>
      <ul>
        <a href="/">
          <img id="logo" src="{{asset('img/dc-logo.png')}}" alt="">
        </a>
        <a class="listItems {{Request::route()->getName() == 'characters' ? 'attiva':'disattiva'}}">CHARACTERS</a>
        <a class="listItems {{Request::route()->getName() == 'home' ? 'attiva':'disattiva'}}" href="{{route('home')}}">COMICS</a>
        <a class="listItems {{Request::route()->getName() == 'movies' ? 'attiva':'disattiva'}}">MOVIES</a>
        <a class="listItems {{Request::route()->getName() == 'tv' ? 'attiva':'disattiva'}}">TV</a>
        <a class="listItems {{Request::route()->getName() == 'games' ? 'attiva':'disattiva'}}">GAMES</a>
        <a class="listItems {{Request::route()->getName() == 'collectibles' ? 'attiva':'disattiva'}}">COLLECTIBLES</a>
        <a class="listItems {{Request::route()->getName() == 'videos' ? 'attiva':'disattiva'}}">VIDEOS</a>
        <a class="listItems {{Request::route()->getName() == 'fans' ? 'attiva':'disattiva'}}">FANS</a>
        <a class="listItems {{Request::route()->getName() == 'news' ? 'attiva':'disattiva'}}">NEWS</a>
        <a class="listItems {{Request::route()->getName() == 'shop' ? 'attiva':'disattiva'}}">SHOP</a>
      </ul>
    </nav>
  
  </div>