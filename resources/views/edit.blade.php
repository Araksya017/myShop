
{{--@dd($edit)--}}

<form action="{{route('product.productedit')}}"
      method='post'

       enctype='multipart/form-data'>
    @csrf
   <input type="hidden" name="id" value="{{$edit->id}}">
    <img src="/images/{{$edit->img}}" >
    <input type="text" name="title" placeholder="Title" value="{{$edit->title}}"><br>
    <input type="text" name="title_en" placeholder="Title-en" value="{{$edit1->title}}">

    <br><br>
    <h4>Product`s Description</h4><br>
    <textarea name="description" > {{$edit->description}} </textarea><br>
    <textarea name="description_en" > {{$edit1->description}} </textarea>
    <br><br>
    <input type="number" name="price" placeholder="Price" value="{{$edit->price}}">
    <br><br>
    <input type='file' name='img' placeholder="Photo">
    <br><br>
    <input type='number' name='sale' placeholder="Sale" value="{{$edit->sale}}">
    <br><br>
    <input type='number' name='count' placeholder="Count" value="{{$edit->count}}">
    <br><br>
   <!-- <input type='checkbox' name='best'  value="{{$edit->best}}">The Best
    <br><br>
    <input type='checkbox' name='popular' value="{{$edit->popular}}">The most popular
    <br><br>--->
    <br><br>
    <input type='number' name='product_number' placeholder="Product number"value="{{$edit->product_number}}" >
    <br><br>

    <input type='submit' name='update' value='update'>

    <br><br>
{{--    <a href="{{route('product.productdelete',['id'=>$edit->id])}}"><input type='button' name='delete' value='delete'></a>--}}

    <input name="img" type="hidden"  value="{{$edit->img}}">

</form>
