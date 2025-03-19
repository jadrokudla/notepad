<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h4 class= "text-3xl py-10">NOTE: {{ $note->created_at }}</h4>
            <div class="note-buttons">
                <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note}}
            </div>
        </div>
    </div>
</x-app-layout>

