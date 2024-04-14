<div>
    @if($activeView)
    <div wire:click="showCheckbox" class="sell-form_item-input {{ $activeView ? 'active' : '' }}"></div>
    @endif
    @if($activeCheckbox)
        <div class="sell-form_item-checkbox_container">
            @foreach($categories as $category)
            <label class="sell-form_item-checkbox_wrapper {{ $activeCheckbox ? 'active' : '' }}">
                <input class="sell-form_item-checkbox" type="checkbox" name="category_id[]" value="{{ $category->id }}" wire:model="selectedCategories">
                <div class="sell-form_item-checkbox_category">{{ $category->category }}</div>
            </label>
            @endforeach
        </div>
    @endif
</div>