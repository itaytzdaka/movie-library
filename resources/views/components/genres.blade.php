
@push('styles')
  @vite('resources/css/genres.css')
@endpush

@push('scripts')
  @vite('resources/js/genres.js')
@endpush


<form id="genre-form" method="get" action="{{ route('movies.index') }}">

    <div>
        @php $selected = (array)($selected ?? []); @endphp
        @foreach($genres as $g)
            <label class="genre-toggle">
            <input type="checkbox" class="genre-check" value="{{ $g->name }}" name="genre[]"
                @checked(in_array($g->name, $selected))>
                <span>{{ $g->name }}</span>
            </label>
        @endforeach
    </div>

</form>