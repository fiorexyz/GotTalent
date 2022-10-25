@props(['user'])

<div class="card">
    <div class="card-header">
        <img src="{{ asset($user->image) }}" alt="">
    </div>
    <div class="card-content">
    <br>
        <p> Student's name: {{ $user->name }}</p><br>
        <p> Student's age: {{ $user->age }}</p><br>
        <p> Student's talent: {{ $user->sub_category->type }}</p><br>
        <p> Proof of the talent: video (example)</p><br>
        <p> Student's email: {{ $user->email }}</p><br>
        <p> Organization: ¡Supérate! {{ $user->superate }}</p><br>
        <br>
        

        <br>
        <br>
        <div class="button">
            <button onclick="location.href='{{ url("/profile2/$user->id") }}'" type="button">more</button>

        </div>

    </div>
</div>
