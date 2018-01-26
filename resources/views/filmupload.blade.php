<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>





</head>


<body>

<form action="store" method="POST" enctype="multipart/form-data" >


    <label for="id">id</label>
    <input type="text" name="id" id="id"><br/>


    <label for="poster">poster</label>
    <input type="text" name="poster" id="poster"><br/>

    <label for="original_title">original_title</label>
    <input type="text" name="original_title" id="original_title"><br/>


    <label for="rate">rate</label>
    <input type="text" name="rate" id="rate"><br/>

    <label for="year">year</label>
    <input type="text" name="year" id="year"><br/>


    <label for="lenght">lenght</label>
    <input type="text" name="lenght" id="lenght"><br/>


    <label for="language">language</label>
    <input type="text" name="language" id="language"><br/>


    <label for="country">country</label>
    <input type="text" name="country" id="country"><br/>


    <label for="description">description</label>
    <input type="text" name="description" id="description"><br/>


    <label for="director">director</label>
    <input type="text" name="director" id="director"><br/>


    <label for="poster_picture">poster_picture</label>
    <input type="file" name="poster_picture" id="poster_picture"><br/>



    <input type="hidden" name="_token" value="{{csrf_token()}}">


    <input type="submit" value="Upload" name="submit"  id="Submit"><br/>






</form>





</body>
</html>