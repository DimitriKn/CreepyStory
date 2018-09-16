<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="/">Главная</a>&nbsp;
                @if (Auth::check())
                <a class="text-muted" href="/create">Добавить историю</a>
                @endif
            </div>

            <div class="col-4 text-center">

                <a class="blog-header-logo" href="/">Страшные Истории</a>

            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">

                @if (Auth::check())
                    <a class="nav-link ml-auto" href="#">{{Auth::user()->nickname}}</a>
                    <a class="nav-link " href="/logout">Выйти</a>
                @else
                <a class="btn btn-sm btn-outline-secondary" href="/login">Войти</a>
               <!-- <a class="btn btn-sm btn-outline-secondary" href="#">Регистрация</a> -->
                @endif
            </div>
        </div>
    </header>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="/select/Вампиры">ВАМПИРЫ</a>
            <a class="p-2 text-muted" href="/select/Демоны">ДЕМОНЫ</a>
            <a class="p-2 text-muted" href="/select/Зомби">ЗОМБИ</a>
            <a class="p-2 text-muted" href="/select/Монстры">МОНСТРЫ</a>
            <a class="p-2 text-muted" href="/select/Оборотни">ОБОРОТНИ</a>
            <a class="p-2 text-muted" href="/select/Призраки">ПРИЗРАКИ</a>
            <a class="p-2 text-muted" href="/select/Нло">НЛО</a>
            <a class="p-2 text-muted" href="/select/Необъяснимое">НЕОБЪЯСНИМОЕ</a>
            <a class="p-2 text-muted" href="/select/Гиблые места">ГИБЛЫЕ МЕСТА</a>
            <a class="p-2 text-muted" href="/select/Мистика">МИСТИКА</a>
            <a class="p-2 text-muted" href="/select/Двойники">ДВОЙНИКИ</a>

        </nav>
    </div>
</div>