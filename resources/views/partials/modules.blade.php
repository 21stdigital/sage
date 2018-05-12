<div class="{{ $class or '' }} Modules">
  @foreach ($modules as $module)
    @if (isset($module['type']) && $module['type'])
      @include('modules.' . $module['type'], array_merge($module, ['class' => 'Modules__Module']))
    @endif
  @endforeach
</div>
