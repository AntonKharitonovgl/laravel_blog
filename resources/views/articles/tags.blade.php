@foreach($tags as $tag)
<div class="bg-secondary text-white text-decoration-none">
<p> {{ $tag->name }} </p>
</div>
@endforeach
