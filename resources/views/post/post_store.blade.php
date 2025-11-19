<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <button type="submit">Save</button>
</form>