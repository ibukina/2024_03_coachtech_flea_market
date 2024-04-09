<div class="content-item">
    <div class="content-item_tag-wrapper">
        <button wire:click="showItems" class="content-item_tag {{ $activeItems ? 'active' : '' }}">おすすめ</button>
        <button wire:click="showLikes" class="content-item_tag {{ $activeLikes ? 'active' : '' }}">マイリスト</button>
    </div>
    <div class="item-wrapper">
        @if($activeItems)
            @foreach($items as $item)
                <div class="detail-form_wrapper">
                    <form class="detail-form" action="/item/{{ $item->id }}" method="get">
                        @csrf
                        <img class="detail-form_image" src="{{ asset($item->img_url) }}" alt="">
                        <button class="detail-form_button"></button>
                    </form>
                </div>
            @endforeach
        @endif
        @if($activeLikes)
            @foreach($likes as $like)
                <div class="detail-form_wrapper">
                    <form class="detail-form" action="/item/{{ $like->item->id }}" method="get">
                        @csrf
                        <img class="detail-form_image" src="{{ asset($like->item->img_url) }}" alt="">
                        <button class="detail-form_button"></button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</div>
