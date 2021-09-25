<h1>{{ env('APP_NAME') }}</h1>

<p>Welcome to {{ env('APP_NAME') }}!</p>
<p>
    <a href="{{ url('verify/' . $content->id . '/' . $content->remember_token) }}">Click here</a> to verify your email.
</p>