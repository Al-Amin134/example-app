{{"Hello" }}
@php
    $name = '';
@endphp
<br><br>
{{ $name }}

<br><br>
{!! '<h1>The name of our country is Bangladesh.</h1>' !!}
<br><br>

{{-- conditional statement --}}

@if ($name=='Al-Amin')
<h1>
{{ $name }}
</h1>

@elseif($name=='Al-Amin1')
{{ $name }}
@else 
{!! '<h1> the name is not valid </h1>'!!}
@endif

<br><br>

{{-- switch case --}}

@switch($name)
    @case('maimuna')
    <h1>
    {{ $name }}
    {{ " is the owner of this property" }}
 </h1>
        @break

    @default
    {{ ' maimuna is not the owner of this property' }}
        
@endswitch
<br><br>

{{-- isset function for blade templates --}}

@isset($name)
{{ 'Yes the name is not an empty product' }}
    
@endisset
<br><br>
{{-- empty function for blade templates --}}

@empty($name)
    {{ 'There is no variable used in this palce' }}
@endempty

{{-- Looping --}}

{{-- for loop --}}
<br>

@php
    $names = ['Al-Amin','kajol','babu','maimuna'];
    $total = count($names);
@endphp
 @for($i=0;$i<$total;$i++)
 {{ $names[$i] }} <br>
 @endfor

 <br><br>

 {{-- FOR EACH LOOP --}}
 @foreach ($names as  $name)
{{ $name }}
<br>
 @endforeach

 {{-- WHILE LOOP --}}
{{-- {{ 'Using while loop' }}
 @php
     $i=0;
 @endphp
 @while ($i<$total)
    {{$names[$i]  }}
    $i++;
 @endwhile --}}

 {{-- Foreach and some shortcuts --}}
 @php
     $user_names = ['Shakib','Tamim','Mushfiq','Mahmudullah','Masrafee'];
 @endphp

<ul>   
 @foreach ($user_names as $name)
    @if($loop->first) 
    <li style="color: purple">{{ $name }}</li>
    @elseif ($loop->last)
    <li style="color: red">{{ $name }}</li>
    @else
   <li> {{ $name }} </li>
    @endif
 @endforeach
</ul>
     