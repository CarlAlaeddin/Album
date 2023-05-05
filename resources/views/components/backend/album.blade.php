<div class="col">
    <div class="card shadow-sm">
        <img class="img-fluid" src="{{ asset('/images/album'.'/'.$album->image) }}" alt="{{ \Illuminate\Support\Str::limit($album->description,20) }}"  style="min-height: 300px;max-height: 300px">
        <div class="card-body">
            <p class="card-text" style="min-height: 100px">{{ \Illuminate\Support\Str::limit($album->description) }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('album.show',$album->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                    <a href="{{ route('album.edit',$album->slug) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-body-secondary">{{ $album->created_at->format('Y-M-d | H:m:s') }}</small>
            </div>
        </div>
    </div>
</div>
