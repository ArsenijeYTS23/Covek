Ja sam covek, a ovo su neke moje karakteristike...<br>
bracni status: {{ $covek->brak->name }}<br>
deca: {{ $covek->deca->name }}<br>
godine: {{ $covek->godine->name }}<br>
mesto u kome zivim: {{ $covek->mesto->name }}<br>
muzika koju slusam: 
@foreach($covek->muzika as $m)
 @if ($loop->last)
 {{ $m->name }}<br>
 @break
 @endif
{{ $m->name }} i
@endforeach
moje obrazovanje: {{ $covek->obrazovanje->name }}<br>
politicko opredeljenje: {{ $covek->politika->name }}<br>
moja trenutna primanja: {{ $covek->primanja->name }} hiljada <br>
moja veroispovest: 
@if($covek->veroispovest->name=='ateista')
{{ '/' }}
@else 
{{$covek->veroispovest->name}}
@endif





