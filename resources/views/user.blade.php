<x-layout>
    <article>
        <h1>{{$user->name}}</h1>
        <div>
            <div>
                <label>Email:</label>
                <a>{{$user->email}}</a>
            </div>
            <div>
                <a href="/">Back</a>
            </div>
        </div>
    </article>
</x-layout>
