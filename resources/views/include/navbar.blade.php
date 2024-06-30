<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="bg-primary d-flex gap-4" style="width: 100%; height:50px">
    <header class="container-fluid">
        <div>
            <nav>
                <ul class="">
                    <a class="text-white mr-4" href="/" style="text-decoration:none"><i
                            class="bi bi-house"></i>&nbsp;Начало</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class = "text-white" href="/pages/clients" style="text-decoration:none"><i
                            class="bi bi-people"></i>&nbsp;Клиенти</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class = "text-white" href="/pages/contragents" style="text-decoration:none"><i
                            class="bi bi-person"></i>&nbsp;Контрагенти</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class = "text-white" href="/pages/tasks/create" style="text-decoration:none"><i class="bi bi-chat-right-text"></i>&nbsp;Задачи</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class = "text-white" href="/pages/tasks" style="text-decoration:none"><i class="bi bi-list-task"></i>&nbsp;Списък на задачи</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @auth
                        <div class="float-end ml-4">
                            <div style = "color:white">
                                <i class="bi bi-person-badge"></i>
                                <label>{{ Auth::user()->name }}</label>
                            </div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                style="text-decoration: none; color:white;">
                                {{ __('Изход') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home">{{ __('Профил') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div class="float-end ml-4"><a id="modal_trigger" href="{{ route('login') }}"
                                style="color:white; text-decoration:none; float:right;"><i
                                    class="bi bi-box-arrow-in-right"></i>
                                Вход</a></div>
                    @endguest

                </ul>
            </nav>
        </div>
    </header>
</div>
