<nav class="uk-background-primary uk-navbar uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo uk-text-bokd" href="/" style="color: #FFFFFF">QuePon</a>

    </div>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <span style="color: #FFFFFF" class="uk-icon uk-margin-small-right" uk-icon="icon: menu"></span>
                </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-nav-header">メニュー</li>
                        <li class="uk-active"><a href="/">ホーム</a></li>
                        @if(session('twitter_user_id'))
                            <li><a href="Create">新規作成</a></li>
                            <li><a href="ViewQuestionsList">閲覧</a></li>
                            <li><a href="#">設定</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="Logout">ログアウト</a></li>
                        @else
                            <li class="uk-nav-divider"></li>
                            <li><a href="OAuth"><span class="uk-margin-small-right" uk-icon="twitter"></span>ログイン</a></li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>

    </div>

</nav>