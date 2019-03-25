<div class="uk-section uk-section-muted">
    <div class="uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-width-1-2@m">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{ $questionInfo->question_title }}</h3>
                        <p class="uk-text-meta uk-margin-remove-top">
                            by {{ $questionInfo->auther_name }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <p>{{ $questionInfo->question_detail }}</p>
            </div>
            <div class="uk-card-footer">
                <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                    <tr>
                        <th>選択肢</th>
                        <th>投票数</th>
                        <th>ユーザ数</th>
                        <th>分布</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($answerInfo as $answer)
                        <tr>
                            <td>
                                {{$answer->choice_text}}
                            </td>
                            <td>
                                {{$answer->votes}}
                            </td>
                            <td>
                                {{$answer->user_count}}
                            </td>
                            <td>
                                <span uk-icon="search" data-toggle="modal" data-target="#exampleModalCenter" onclick="getUserList( {{ $answer->choice_id }} )"></span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p class="uk-text-muted">締切日： {{ $questionInfo->limit }} </p>
            </div>
        </div>
    </div>
</div>