<h1>{{ $hello }}</h1> <br>

<ul>
    {{-- @foreach ($pelajaran as $pl)
        <li>{{ $pl }}</li>
    @endforeach --}}
    @forelse ($pelajaran as $pl)
        <li>{{ $pl }}</li>
    @empty
      <li>Tidak Ada Data</li>  
    @endforelse
</ul>