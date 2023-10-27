<x-layout>
    <div class="container">
        <h1>Episodes</h1>

        <form class="mb-3" action="/show-season" method="POST">
            @csrf
            <label class="form-label" for="season">Season: </label>
            <select class="form-select" name="season" id="">
                @foreach ($series as $season)
                    <option value="{{ $season }}">{{ $season }}</option>
                @endforeach
            </select>
            <input class="btn btn-primary" type="submit" value="Show">
        </form>

        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <x-card :episode="$episode"></x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

