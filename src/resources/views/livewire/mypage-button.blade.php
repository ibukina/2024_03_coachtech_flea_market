<div class="mypage-tag_container">
    <div class="mypage-tag_wrapper">
        <button wire:click="showSells" class="mypage-tag {{ $activeSells ? 'active' : '' }}">出品した商品</button>
        <button wire:click="showPurchases" class="mypage-tag {{ $activePurchases ? 'active' : '' }}">購入した商品</button>
    </div>
    <div class="item-wrapper">
    @if($activeSells)
        @foreach($sells as $sell)
        <div class="detail-form_wrapper">
            <form class="detail-form" action="/item/{{ $sell->id }}" method="get">
                @csrf
                <img class="detail-form_image" src="{{ asset($sell->img_url) }}" alt="">
                <button class="detail-form_button"></button>
            </form>
        </div>
        @endforeach
    @endif
    @if($activePurchases)
        @foreach($purchases as $purchase)
        <div class="detail-form_wrapper">
            <form class="detail-form" action="/item/{{ $purchase->item_id }}" method="get">
                @csrf
                <img class="detail-form_image" src="{{ asset($purchase->item->img_url) }}" alt="">
                <button class="detail-form_button"></button>
            </form>
        </div>
        @endforeach
    @endif
    </div>
</div>