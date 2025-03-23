<h1>This is Home page</h1>
@foreach ([1,2,3,4,5,6,7,8,9,10] as $n )
  @continue($n==5)
    @break($n==9)
    <p>{{$n}}</p>

    
@endforeach