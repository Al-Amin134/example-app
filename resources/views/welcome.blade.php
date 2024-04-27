@php
    $fruits = ['mango','orange','jack fruits','pine apple', 'lemon'];
@endphp



@include('page.header',['name'=>$fruits])
<h1>This is the welcome page</h1>

@include('page.footer')

