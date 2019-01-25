<html>
    <head >
    
    </head>
    <title>Advertisement</title>
    <body >
    <header style="background-color:lightgray;">
    <h1>WELCOME TO XYZ ADVERTISEMENT</h1>
    </header>
        <div style="margin: 20px;">
            <a href="/insert">AddNew</a>
        </div>

        @foreach($adverts as $ad)
        <div style="border:3px solid black; margin: 20 px; width:300px; ">
            <h3>{{$ad->id}}:{{$ad->title}}</h3>
            <img style="margin:20px;" src="{{ asset("/img/$ad->picture")}}"> 
            <p>{{$ad->details}}</p>
            <p>Price: {{$ad->price}} kn</p>

            <a href="/details/{{$ad->id}}" style="margin: 20px;">Details</a>
        </div>
        @endforeach
    </body>
</html>