@extends('admin.layout.master')

@section( 'content')
    <div class="mb-3 mt-3">

       <form action="{{ route('series-epi.store').'?serie_id='.$serieEpisodes->id }}" method="POST">
            @csrf
            <input type="text" name="episode_no" class="btn btn-outline-dark" value={{ $episode_no }} />
            <input type="text" name="direct_link" class="btn btn-outline-dark w-50" placeholder="movie direct source" />
            <input type="submit" class="btn btn-dark" placeholder="Create Episode" />
       </form>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Embed Link</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>

            @foreach($serieEpisodes->serieEpisodeFun as $serieEpisode)
    
                <tr>
                    <td>
                        <form action="{{ route('series-epi.update',$serieEpisode->id).'?serie_id='.$serieEpisodes->serie_id }}" method="POST">
                            @method("PUT")
                            <input type="text" class="btn btn-outline-dark" value={{ $serieEpisode->eposide_no }} >
                            <input type="text" class="btn btn-outline-dark w-50" placeholder="movie direct source" />
                            <input type="submit" class="btn btn-dark" placeholder="Create Episode" />
                        </form>
                    </td>

                    <td>{{ $serieEpisode->embed_link }}</td>
                    <td>
                        <form onsubmit="return confirm('Sure for delete?')" class="d-inline" action="{{route('series-epi.destroy',$serieEpisode->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input type="submit" value="Delete" class="btn btn-sm btn-danger" />

                        </form>
                    </td>
                </tr>
            @endforeach


            {{-- @if (is_array($serieEpisodes->serieEpisodeFun) || is_object($serieEpisodes->serieEpisodeFun)) {
                @foreach($serieEpisodes->serieEpisodeFun as $serieEpisode)
    
                    <tr>
                        <td>
                            <form action="{{ route('series-epi.update',$serieEpisode->id).'?serie_id='.$serieEpisodes->serie_id }}" method="POST">
                                @method("PUT")
                                <input type="text" class="btn btn-outline-dark" value={{ $serieEpisode->episode_no }} />
                                <input type="text" class="btn btn-outline-dark w-50" placeholder="movie direct source" />
                                <input type="submit" class="btn btn-dark" placeholder="Create Episode" />
                            </form>
                        </td>

                        <td>{{ $d->embed_link }}</td>
                        <td>
                            <form onsubmit="return confirm('Sure for delete?')" class="d-inline" action="{{route('series-epi.destroy',$serieEpisode->id)}}" method="POST">
                                @csrf
                                @method("DELETE")

                                <input type="submit" value="Delete" class="btn btn-sm btn-danger" />

                            </form>
                        </td>
                    </tr>
                @endforeach
            }
            @endif --}}


        </tbody>
    </table>


@endsection