<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Music App')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Music App">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
