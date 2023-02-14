<!--
Comparing multiple possible conditions
Multiple values that may require the same code
-->


{{-- @switch($name)
    @case('Ahmad')
        <h2>Name is Ahmad</h2>;
    @break

    @case('Dave')
        <h2>Name is Dave</h2>;
    @break

    @case('Mike')
        <h2>Name is MIke</h2>;
    @break

    @default
    <h2>No matching name</h2>;
@endswitch --}}

{{-- @for($i = 0; $i < 5; $i++)
<h2>numer is: {{ $i }}</h2>
@endfor; --}}

{{-- @foreach ($names as $name)
    <h2>Name is {{ $name }}</h2>    

@endforeach --}}

{{-- for else runs if it can, but there is a check for an empty variable that runs if its empty --}}
{{-- @forelse ($names as $name)
 <h2>The name is {{ $name }}</h2>   
@empty
    <h2>There are no names!</h2>
@endforelse --}}