<div class="comment-container">
    @if($comments)
        @foreach($comments as $comment)
            <div class="comment-wrapper">
                <div class="comment-user_wrapper">
                    @if(!empty($comment->user->profile->img_url))
                    <img class="user-icon" src="{{ asset($comment->user->profile->img_url) }}" alt="">
                    @else
                    <img class="user-icon" src="{{ asset('storage/image/default.png') }}" alt="">
                    @endif
                    <div class="user-name">{{ $comment->user->name }}</div>
                    @if(Auth::id() == $comment->user_id)
                    <form class="comment-delete_form" action="/item/comment/delete/{{ $comment->id }}/{{ $item->id }}" method="post">
                        @csrf
                        <button class="user-comment_delete-button">削除する</button>
                    </form>
                    @endif
                </div>
                <div class="user-comment">{{ $comment->comment }}</div>
            </div>
        @endforeach
    @endif
</div>