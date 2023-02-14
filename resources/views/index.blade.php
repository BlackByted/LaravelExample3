<x-layout>

   @foreach ($data as $item)
    <article>
        <h1>{{$item->title}}</h1>
        <div>
            <div>
                <label>User</label>
                <a href="/user/{{$item->user_id}}">{{$item->user->name}}</a>
            </div>
            <div>
                <label>Status:</label>
                <a href="/status/{{$item->complet}}">
                    @if ($item->complet==0)
                        {{'incompleto'}}
                    @else
                        {{'completo'}}
                    @endif
                </a>
            </div>
        </div>
    </article>
   @endforeach
   {{$data->links()}}
</x-layout>
