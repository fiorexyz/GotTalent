@props(['user'])

<div class="card">
    <div class="card-header">
        <img src="{{ asset($user->image) }}" alt="">
    </div>
    <div class="card-content">
        <p>Name: {{ $user->name }}</p>
        <p>Age: {{ $user->age }}</p>
        <p>Talent: {{ $user->sub_category->type }}</p>
        <p>Proof of the talent: video (example)</p>
        <p>Email: {{ $user->email }}</p>
        <p>Organization: Superate {{ $user->superate }}</p>
        <br>
        <p> DESCRIPTION AND MOTIVATION</p>

        <br>
        <br>
        <div class="button">
            <button onclick="location.href='{{ url("/profile2/$user->id") }}'" type="button">more</button>

        </div>

    </div>
</div>
