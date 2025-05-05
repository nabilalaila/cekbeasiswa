<button type="submit" class="btn btn-{{ $type ?? 'primary' }} btn-lg w-{{ $width ?? '100' }} {{ $class ?? '' }}" {{ $attributes }}>
    {{ $slot }}
</button>
