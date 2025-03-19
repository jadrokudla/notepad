<x-app-layout>
    <div class="note-container  single-note">
        <h1>Create new note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note">
            @csrf
            {{-- action urcuje adresu, kam sa udaje formulara odoslu --}}
        <textarea name="note" rows="10" class="note-body" placeholder="Enter your note"></textarea>
         <div class="note-buttons">
            <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            <button class="note-submit-button">Submmit</button>
         </div>
        </form>
    </div>
</x-app-layout>


