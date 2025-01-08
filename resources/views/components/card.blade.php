{{-- @props(['color', 'bgColor' => 'white']) --}}

{{ dump($attributes) }}

<div class="card card-text-{{ $color }} card-bg-{{ $bgColor}}">

    <div class="card-header">{{ $title }}</div>
    @if ($slot->isEmpty())
        <p>Please provide some content</p>
    @else
        {{ $slot }}
    @endif

    <div class="card-footer">{{ $footer }}</div>
  
</div>