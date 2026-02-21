<form action="{{ route('books.destroy', $book->id) }}"
method="POST">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
