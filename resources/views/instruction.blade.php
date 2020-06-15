

@extends('layouts.layout')
@section('study')
<div class="container">
<div style="padding: 50px;">
<div class="">
<form action="/study" method="POST">
@csrf
<blockquote style="font-size: 12px;">
<h1>Auf den folgenden Seiten wirst du verschiedene Produkte sehen.</h1>
<br><br>
<h1>Für jedes Produkt bewertest du die eine Lieferzeit von 2 Tagen, 1 Woche, 2 Wochen und 1 Monat. Zudem wirst du die Nützlichkeit der Produkte bewerten.</h1>
<br><br>
<br><br>
<br><br>

</blockquote>

      <div class="form-group row">
        <div class="col-sm-10">
          <a class="btn-lg btn-primary" href="/grill">Weiter</a>
        </div>
      </div>
    </form>
    </div>
    </div>
    </div>
  </div>
  
</div>


@endsection