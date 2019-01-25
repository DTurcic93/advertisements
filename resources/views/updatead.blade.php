<a href="/" style="margin: 20px;">Back</a>
<form action="/update" method='POST'>
    <input type="hidden" name="id" value="{{$ad->id}}">
    
    <label>Title</label>
    <input type="text" name="title" value="{{$ad->title}}">
    <br>

    <label>Details</label>
    <input type="text" name="details" value="{{$ad->details}}">
    <br>

    <label>Price</label>
    <input type="number" name="price" value="{{$ad->price}}">
    <br>

    <label>Picture</label>
    <input type="file" name="picture" value="{{$ad->picture}}">
    <br>


    <input type="submit" value="SaveEdit">
</form>