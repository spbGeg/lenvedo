@section('aside')
<div class="col-4 aside">
<h4>Добавление закладки</h4>
   {{--вывод уведомлений--}}
@show
   <form action="{{ route('url-add-form') }}" method="post">
       @csrf
    <div class="url-add__input form-group">
        <p><label for="url-add">Введите URL для добавления закладки</label></p>
        <input type="text" name="url" placeholder="http://example.com" id="url">




            <button class="btn btn-success" type="submit"> Добавить закладку</button>

    </div>


    </form>
</div>

