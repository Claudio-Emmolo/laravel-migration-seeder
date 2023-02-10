<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite('resources/js/app.js')
</head>
<body>

    <main>
        @forelse ($trainList as $train)
            <h2>
                {{$train->azienda}}
            </h2>
            <p>
                Stazione Partenza: {{$train->stazione_partenza}} || Stazione Arrivo: {{$train->stazione_arrivo}} 
            </p>
            <p>
                Orazio Partenza: {{$train->orario_partenza}} || Orario Arrivo: {{$train->orario_arrivo}} 
            </p>
            <p>
                Codice Treno:  {{$train->codice_treno}} <br>
                Numero Carozze: {{$train->numero_carozza}}
            </p>
            <p>
                @if ($train->in_orario)
                Il treno è in orario!                    
                @else
                Il treno è in ritardo!                    
                @endif
                <br>
                @if ($train->cancellato)
                Cancellato
                @endif
            </p>
        @empty
            <p>Nessun treno da mostrare</p>
        @endforelse
    </main>
    
</body>
</html>