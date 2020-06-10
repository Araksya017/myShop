<form action="{{route('menus.menusinsert')}}"
      method='post'

      enctype='multipart/form-data'>
@csrf

<input type="text" name="title" placeholder="Title"><br><br>

<input type="text" name="title_en" placeholder="Title_en"><br><br>

    <input type='submit' name='submit' value='submit'>
    <br><br>

</form>
<table>
@foreach($select as $item)
    <tr>
        <td>{{$item->title}}</td>


        <td><a href="{{route('menus.menusedit',['id'=>$item->id])}}">edit</a> </td>

        <td><a href="{{route('menus.menusdelete',['id'=>$item->id])}}">delete</a> </td>




    </tr>
    @endforeach
    </table>
