
{{--@dd(9)--}}
<form action="{{route('menus.menusupdate')}}"
      method='post'

      enctype='multipart/form-data'>
    @csrf
    <input type="hidden" name="id" value="{{$edit->id}}">

    <input type="text" name="title" placeholder="Title" value="{{$edit->title}}"><br>
    <input type="text" name="title_en" placeholder="Title-en" value="{{$edit1->title}}">

    <br><br>

    <input type='submit' name='update' value='update'>

    <br><br>


</form>



