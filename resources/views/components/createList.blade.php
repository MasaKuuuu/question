<div class="uk-section uk-section-muted">
    <div class="uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-width-1-2@m">
            @if($message)
            <div class="uk-text-warning uk-text-center uk-margin-small-top">{{ $message }}</div>
            @endif
            <div class="uk-margin">

                @if(count($questionsList))
                <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                    <tr>
                        <th class="uk-text-center"></th>
                        <th class="uk-text-center">タイトル</th>
                        <th class="uk-text-center">回答期限</th>
                        <th class="uk-text-center">ゲストの回答</th>
                        <th class="uk-text-center">公開レベル</th>
                        <th class="uk-text-center"></th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($questionsList as $question)
                        <tr>
                            <td class="uk-text-center">
                                @if($question->is_edit)
                                <a href="ReEdit?url_hash={{ $question->url_hash }}" class="uk-icon-link uk-text-bold uk-text-primary" uk-icon="pencil"></a>
                                @endif
                            </td>
                            <td>
                                <a href="ViewAnswer?url_hash={{ $question->url_hash }}">{{ $question->question_title }}</a>
                            </td>
                            <td class="uk-text-center">
                                {{ $question->limit }}
                            </td>
                            <td class="uk-text-center">
                                @if($question->is_anyone)
                                <span class="uk-label">許可</span>
                                @else
                                <span class="uk-label uk-label-warning">禁止</span>
                                @endif
                            </td>
                            <td class="uk-text-center">
                                @if($question->is_open_view)
                                <span class="uk-label">一般</span>
                                @else
                                <span class="uk-label uk-label-warning">限定</span>
                                @endif
                            </td>
                            <td class="uk-text-center">
                                <a href="Delete?questionId={{ $question->id }}" class="uk-icon-link uk-text-bold uk-text-danger" uk-icon="trash"></a>
                            </td>
                        </tr>
                    　　@endforeach

                    </tbody>
                </table>

                <div class="uk-text-center">
                {{ $questionsList->links('pagination::default') }}
                </div>

                @else
                <div>
                    まだ質問を投稿していません
                </div>
                @endif
            </div>
        </div>
    </div>
</div>