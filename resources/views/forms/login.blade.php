<form method="POST" action="{{ route('auth.login') }}">
    <x-ui::button type="button" content="{{ __('Attempt') }}" />
</form>