
<form action="{{route('category.categoryupdate')}}"
      method='post'

      enctype='multipart/form-data'>
    @csrf
    <input type="hidden" name="id" value="{{$edit->id}}">
    <input type="text" name="name_ru" placeholder="name_ru" value="{{$edit->name}}">
    <input type="text" name="name_en" placeholder="name_en" value="{{$edit1->name}}">
    <br><br>

    <input type='submit' name='update' value='update'>
    <input type='submit' name='delete' value='delete'>
    <input name="img1" type="hidden" value="">
    <input name="img2" type="hidden" value="">

</form>
