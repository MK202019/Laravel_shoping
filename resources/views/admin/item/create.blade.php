<h1>商品入力</h1>
<a href="{{ route('admin.item.index') }}">商品一覧</a>

<form action="{{ route('admin.item.add')}}" method="post">
    <label for="">商品名</label>
    <input type="text" name="name">
    <button>更新</button>
</form>