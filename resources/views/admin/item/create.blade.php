<h1>商品入力</h1>
<a href="{{ route('admin.item.index') }}">商品一覧</a>

<form action="{{ route('admin.item.add')}}" method="post">
    

    <label for="">商品名</label>
    <input type="text" name="name">

    <div>
        <label for="">{{ __('Item Name') }}</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">{{ __('Item Code') }}</label>
        <input type="text" name="code">
    </div>
    <div>
        <label for="">{{ __('Price') }}</label>
        <input type="number" name="price">
    </div>



    <button>{{ __('Update') }}</button>
</form>