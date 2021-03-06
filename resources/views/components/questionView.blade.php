<div class="uk-section uk-section-muted">
    <div class="uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-width-1-2@m">
            <div class="uk-card-header">
                <a class="uk-link-heading" target="_brank" href="https://twitter.com/{{ $questionInfo->name }}">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="{{ $questionInfo->thumbnail }}">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">{{ $questionInfo->question_title }}</h3>
                            <p class="uk-text-meta uk-margin-remove-top">
                                {{ $questionInfo->auther_name }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-card-body">
                <p>{{ $questionInfo->question_detail }}</p>
            </div>
            <div class="uk-card-footer">

                <ul class="uk-list uk-list-striped">
                    @foreach($choiceInfo as $choice)
                        <li>
                            {{ $choice->choice_text }}
                        </li>
                    @endforeach
                </ul>
                <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={{ $questionInfo->question_title }}&hashtags=quepon" data-size="large">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <p class="uk-text-muted">締切日： {{ $questionInfo->limit }} </p>
            </div>
        </div>
    </div>
</div>