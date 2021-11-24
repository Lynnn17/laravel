
{{-- nyeluk file/halaman full e --}}
 @extends('layout.contoh')
{{-- session e --}}
@section('container')
@foreach ($posts as $post)
<article>
<h2>
   <a href="/posts/{{ $post['slug'] }}">{{ $post["title"] }}</a>
</h2>
<h5>By : {{$post["author"]}}</h5>
<p>{{$post["body"]}}</p>
</article>
@endforeach
    
@endsection
 