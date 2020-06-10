<form action="{{route('language.languageinsert')}}"
      method='post'

      enctype='multipart/form-data'>
    @csrf

    <input type="text" name="name" placeholder="Product name"><br><br>

    <input type='submit' name='submit' value='submit'>
    <br><br>
    <input type='submit' name='delete' value='delete'>
</form>


