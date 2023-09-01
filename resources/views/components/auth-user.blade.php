@role('admin')
    {{ auth()->user()->getNickname() }}
    <x-verified-icon type="admin" />
    @elserole('operator')
    {{ auth()->user()->getNickname() }}
    <x-verified-icon type="operator" />
@else
    @if (auth()->user()->has_verified == 1)
        {{ auth()->user()->getNickname() }}
        <x-verified-icon type="registrant" />
    @else
        {{ auth()->user()->getNickname() }}
    @endif
@endrole
