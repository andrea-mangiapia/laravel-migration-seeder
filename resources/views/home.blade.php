@extends('layouts.app')

@section('main_content')
<main>
    <h1>
        Offerte Viaggi
    </h1>
    <div>
        @foreach ($travels as $travel)
        
            <div>
                <div>
                    <strong>Destinazione:</strong> {{$travel->destination}}
                </div>
                <div>
                    <strong>Data inizio disponibilità:</strong> {{$travel->date}}
                </div>
                <div>
                    <strong>Durata del viaggio:</strong> {{$travel->duration}}
                </div>
                <div>
                    <strong>Descrizione:</strong> {{$travel->description}}
                </div>
                <div>
                    <strong>Disponibilità:</strong> {{$travel->availability}}
                </div>
                <div>
                    <strong>Prezzo:</strong> {{$travel->price}}
                </div>
                
            </div>
            <br>
            
        @endforeach
    </div>
</main>
    
@endsection