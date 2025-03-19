<div>
<x-application-logo style="width: 100px; height: 100px;"></x-application-logo>

</div>
{{-- <x-dropdown-link>dropdown link</x-dropdown-link>
<x-input-label>input label</x-input-label>
<x-responsive-nav-link>responsive nav link</x-responsive-nav-link>
<x-secondary-button>secondary button</x-secondary-button>
<x-text-input>text input</x-text-input> --}}

<x-app-layout>
    <div class="note-container py-20">
        <a href="{{ route('note.create')}}" class="new-note-btn">
                    New note
        </a>
    <div class="notes">
        @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note->note, 30) }}
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="text-2xl p-10">{{ $notes->links()}}
        </div>
    </div>

</x-app-layout>



                                           {{-- BASIC MARKUP --}}
{{-- <x-layout>
    <div class="note-container">
            <a href="#" class="new-note-btn">
                        New note
            </a>
        <div class="notes">
            <div class="note">
                    <div class="note-body">
                                Lorem, ipssum.....
                    </div>
            <div class="note-buttons">
                    <a href="#" class="note-edit-button">View</a>
                    <a href="#" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">Delte</button>
                </div>
            </div>
        </div>
    </div>
</x-layout> --}}
