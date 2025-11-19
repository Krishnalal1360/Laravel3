<form action="{{ route('post.update', 1) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Update</button>
</form>