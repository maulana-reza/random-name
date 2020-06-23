<form method="get" action="/name">
    @csrf

<label for="title">Nama Hewan</label>

<input id="title" type="text" class="@error('title') is-invalid @enderror" name="name" value="{{ @$name }}">
<input type="submit" value="generate" name="submit">

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</form>