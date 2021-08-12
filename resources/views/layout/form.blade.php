<div class="mb-3">
    <label for="inputSymbolCode" class="form-label">Символьный код</label>
    <input type="text" class="form-control" id="inputSymbolCode" placeholder="Введите символьный код, должно состоять только из латинских символов, цифр и символов тире и подчеркивания" name="symbol_code"
           @if(isset($article))
           value="{{old('symbol_code', $article->symbol_code)}}">
           @endif
</div>
<div class="mb-3">
    <label for="inputTitle" class="form-label">Название статьи</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Введите название статьи" name="title">
</div>
<div class="mb-3">
    <label for="inputDescription" class="form-label">Краткое описание статьи</label>
    <input type="text" class="form-control" id="inputDescription" placeholder="Введите краткое описание статьи" name="shot_description">
</div>
<div class="mb-3">
    <label for="inputBody" class="form-label">Текст статьи</label>
    <input type="text" class="form-control" id="inputBody" placeholder="Введите текст статьи" name="body">
</div>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
