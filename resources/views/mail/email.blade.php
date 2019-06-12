<h3>Vaga Para Desenvolvedor PHP - RITS</h3>
<p>Até o momento {{$count}} pessoas se candidataram a vaga.</p>
<p>Confira a lista completa dos candidatos:</p>
<ul>
    @foreach ($candidatos as $candidato)
        <li>{{$candidato->nome}}</li>
    @endforeach
</ul>




