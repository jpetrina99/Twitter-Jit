<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#"> {{--- $user['name'] ---}}
                            </a></h5>
                    </div>
                </div>
                <div>
                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                        @method("delete")
                        @csrf
                        <button>X</button>
                    </form>
                    <a href="{{ route('post.show', $post->id) }}">VIEW</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="fs-6 fw-light text-muted">
                {{$post->content}}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                        </span> {{$post->likes}} </a>
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                        {{$post->created_at}} </span>
                </div>
            </div>
            {{---

            @foreach ($comms as $comm)
                @include("inc.post-card-comments")
            @endforeach
            ---}}

        </div>
    </div>
</div>
