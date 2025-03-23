<div class="p-4">
    @if (! Auth::user())
        <h1>Basic User</h1>
    @else
        <h1>User {{ Auth::user()?->email }}</h1>
    @endif
</div>
