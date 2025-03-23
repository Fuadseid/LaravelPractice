<h1>My name is {!!Str::upper($name)!!} {{$surname}}</h1><br>
<h1>Year {{$year}}</h1>

@foreach ($hobbies as $h)
<p>{{$h}}</p><br>
    
@endforeach

<div @class([
    'Et'=>$country=='Ethiopia',
])
style="width: 100px; color:white; height: 100px;">
<span @style(
    [
        'background-color:green'=>$country=='Ethiopia',
    ]
)>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, est optio. Natus</span> <span
@style(
    [
        'background-color:yellow'=>$country=='Ethiopia',
    ]
)> fugiat placeat dolor tempore fugit perferendis iure explicabo quia incidunt quae, cum </span> <span
@style(
    [
        'background-color:red'=>$country=='Ethiopia',
    ]
)
> quis, temporibus libero beatae recusandae. Quis.</span>
</div>