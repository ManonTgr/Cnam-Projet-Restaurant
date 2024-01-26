 
@extends('base')

@php

$heures = {

  // créneaux du midi
  '12:00:00' => '12:00',
  '12:30:00' => '12:30',
  '13:00:00' => '13:00',
  '13:30:00' => '13:30',

  // créneaux du soir

  '20:00:00' => '20:00',
  '20:30:00' => '20:30',
  '21:00:00' => '21:00',
  '21:30:00' => '21:30',
}
@endphp

@section('content')
<section>
    <h2>Réservation</h2>
    <form action="{{ route('main.reservation.store')}}" method="post"> 
      @csrf
        <div>
          <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="" min="3" max="100" value ="{{ old('nom')}}" not-required>
          @error('nom')
          <div class="invalid-feedback"> {{ $message}}</div>
          @enderror <!-- texte sur une seule ligne-->
        </div>
        <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couvert" id="couverts" min="1" max="16"value ="{{ old('couvert')}}" not-required>
            @error('couvert')
            <div class="invalid-feedback">{{ $message}}</div>
          @enderror <!-- texte sur une seule ligne-->
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="heure">Heure</label>
            {{-- <input type="time" name="heure" id="heure" not-required> <!-- texte sur une seule ligne--> --}}
            <select name="heure" id="heure" not-required>
              {{-- créneau du midi --}}
              <option value="12:00:00">12:00</option>
              <option value="12:30:00">12:30</option>
              <option value="13:00:00">13:00</option>
              <option value="13:30:00">13:30</option>
              <option value="12:00:00">12:00</option>
              {{-- créneau du soir --}}
              <option value="20:00:00">20:00</option>
              <option value="20:30:00">20:30</option>
              <option value="21:00:00">21:00</option>
            </select>
            @error('heure')
            <div class="invalid-feedback">{{ $message}}</div>
          @enderror
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" value ="{{ old('jour')}}" not-required> 
            <!-- texte sur une seule ligne-->
               
          @error('jour')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
        </div>
        @enderror
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value ="{{ old('telephone')}}"not-required> 
            
          @error('telephone')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
          </div>
          @enderror
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="commentaire"></label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10">{{ old('commentaire') }}</textarea>
             <!-- texte sur une seule ligne-->
             @error('commentaire')
             <div class="invalid-feedback">{{ $message}}</div>
             @enderror
          </div>
          <div>
            <button type="submit"> Réserver</button>
    </form>
</section>
@endsection