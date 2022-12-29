<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <h1><a href="./">Giovanni Manara</a></h1>

        <h2>Sono un <span>full stack</span> web developer junior</h2>

        <nav id="navbar" class="navbar">
            <ul>
                <?php
                $menu_items = DB::table('menu_items')
                    ->orderBy('position', 'asc')
                    ->get();
                ?>
                @foreach ($menu_items as $menu_item)
                    @if ($menu_item->position == 1)
                        <li><a class="nav-link active" href="{{ $menu_item->url }}">{{ ucfirst($menu_item->label) }}</a>
                        </li>
                    @else
                        <li><a class="nav-link" href="{{ $menu_item->url }}">{{ ucfirst($menu_item->label) }}</a></li>
                    @endif
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <?php
            $socials = DB::table('aggiungi_socials')
                ->orderBy('position', 'asc')
                ->limit(2)
                ->get();
            ?>
            @foreach ($socials as $social)
                <a href="{{ $social->url }}" class="{{ $social->class }}"><i class="bi bi-{{ $social->class }}"
                        target="_blank" title="clicca per aprire la pagina social"></i></a>
            @endforeach
        </div>

    </div>
</header><!-- End Header -->
