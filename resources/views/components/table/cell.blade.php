@if($header)
    <th scope="col" class="px-6 py-3" {{ $attributes }}>{{ $slot }}</th>
@else
    <td class="px-6 py-4" {{ $attributes }}>{{ $slot }}</td>
@endif
