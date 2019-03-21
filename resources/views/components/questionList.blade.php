<div class="uk-section uk-section-muted">
    <div class="uk-flex uk-flex-center">

        <div class="uk-margin-medium-top uk-width-xxlarge">

            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#" aria-expanded="true">急上昇</a></li>
                <li><a href="#">新着</a></li>
                <li><a href="#">まもなく終了</a></li>
                <li><a href="#">集計完了</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <ul id="hotQuestion" class="uk-list uk-list-divider">
                        @if(count($hot_questions))
                            @foreach($hot_questions as $question)
                                <li>
                                    <a href="Answer?url_hash={{ $question->url_hash }}">{{ $question->question_title }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                受付中のアンケートがありません
                            </li>
                        @endif
                    </ul>
                </li>
                <li>
                    <ul id="newQuestion" class="uk-list uk-list-divider">
                        @if(count($current_questions))
                            @foreach($current_questions as $question)
                                <li>
                                    <a href="Answer?url_hash={{ $question->url_hash }}">{{ $question->question_title }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                受付中のアンケートがありません
                            </li>
                        @endif
                    </ul>
                </li>
                <li>
                    <ul id="endSoonQuestion" class="uk-list uk-list-divider">
                        @if(count($endSoon_questions))
                            @foreach($endSoon_questions as $question)
                                <li>
                                    <a href="Answer?url_hash={{ $question->url_hash }}">{{ $question->question_title }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                集計が終了しているアンケートがありません
                            </li>
                        @endif
                    </ul>
                </li>
                <li>
                    <ul id="endQuestion" class="uk-list uk-list-divider">
                        @if(count($result_questions))
                            @foreach($result_questions as $question)
                                <li>
                                    <a href="Answer?url_hash={{ $question->url_hash }}">{{ $question->question_title }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                集計が終了しているアンケートがありません
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>

        </div>

    </div>
</div>