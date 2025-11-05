
@push('styles')
  @vite('resources/css/genres.css')
@endpush

@push('scripts')
  @vite('resources/js/genres.js')
@endpush


<form id="genre-form" method="get" action="{{ route('movies.index') }}">

    <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:6px;">
        @php $selected = (array)($selected ?? []); @endphp
        @foreach($genres as $g)
            <label style="display:inline-flex;gap:6px;align-items:center;">
            <input type="checkbox" class="genre-check" value="{{ $g->name }}" name="genre[]"
                @checked(in_array($g->name, $selected))>
            {{ $g->name }}
            </label>
        @endforeach
        @if($selected)
            <a href="{{ route('movies.index') }}" style="margin-left:8px;">Clear</a>
        @endif
    </div>

</form>