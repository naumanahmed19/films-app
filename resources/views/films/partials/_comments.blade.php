<hr>
<h3>Write Comment</h3>
@include('films.partials._commentsForm')

<br>

@if($film->comments->count() > 0)
<h3>Comments ({{$film->comments->count()}})</h3>
<hr>
<ul class="media-list">
    @foreach($film->comments as $comment)
    <li class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="https://via.placeholder.com/60x60" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">{{$comment->name}}</h4>
            {{$comment->comment}}
        </div>
    </li>
    @endforeach
</ul>
@endif



