<th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left" wire:click="setOrderBy('{{ $name }}')">{{$slot}}
@if($isActive)
    @if($orderDir === 'ASC')
        <i>A</i>
    @else
        <i>D</i>
    @endif
@endif
</th>