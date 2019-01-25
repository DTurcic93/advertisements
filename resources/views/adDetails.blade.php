<a href="/" style="margin: 20px;">Back</a>
<div style="border:3px solid black; margin: 20px; width:500px;">
    <h3>{{$ad->id}}:{{$ad->title}}</h3>
    <img style="margin:20px;" src="{{ asset("/img/$ad->picture")}}">    
    <p>{{$ad->details}}</p>
    <p>Price: {{$ad->price}} kn</p>  
    

    <a href="/delete/{{$ad->id}}" style="margin: 20 px;">Delete</a>
    <a href="/update/{{$ad->id}}" style="margin: 20 px;">Edits</a>
</div>


