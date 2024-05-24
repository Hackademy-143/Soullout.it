<form action="{{route('setLocale', $lang)}}" class="d-inline" method="POST">
    @csrf
    <button class="btn p-1" type="submit">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="22" height="22" alt="">
    </button>
</form>