

@extends('layouts.layout')
@section('study')
<div class="container">
<div style="padding: 50px;">
<div class="">
<form action="/study" method="POST">
@csrf
<h1>Herzlich willkommen</h1>
<blockquote style="font-size: 12px;">
Liebe Teilnehmerin, lieber Teilnehmer,

herzlichen Dank für Ihre Bereitschaft, an unserer kurzen Studie teilzunehmen.
Die Studie wird vom Arbeitsbereich Angewandte Sozialpsychologie und Konsumentenverhaltensforschung der Universität Wien durchgeführt. 
<br><br>
In dieser Studie beschäftigen wir uns mit der Bewertung von Produkten und deren Lieferzeiten.
<br><br>
Es ist für uns wichtig, dass Sie alle Fragen beantworten. Wenn Sie sich bei einer Frage nicht ganz sicher sind, kreuzen Sie einfach das Feld an, das am ehesten zutrifft. Es geht um Ihre persönliche Einschätzung, es gibt keine richtigen oder falschen Antworten.
<br><br>
Die Studie dient ausschließlich wissenschaftlichen Zwecken. Die Befragung wird vom Institut für Angewandte Psychologie: Arbeit, Bildung, Wirtschaft der Universität Wien durchgeführt. Alle Informationen, die wir von Ihnen erhalten, werden vertraulich behandelt und anonymisiert ausgewertet, sodass keine Rückschlüsse auf Ihre Person möglich sind.
<br><br>
Im Rahmen der Studie werden Ihre Daten kodiert, d.h. im Falle der Abfrage von persönlichen Daten (z.B. Name; IP-Adresse; etc.), werden diese strikt von den Untersuchungsdaten (z.B. Fragebogendaten) getrennt. Durch diese Kodierung wird im Rahmen der wissenschaftlichen Auswertung kein Unbefugter Ihre persönlichen Daten erhalten. Nach Beendigung der Untersuchung werden alle Daten gelöscht, die einen Bezug zu Ihrer Person erlauben. Die Daten werden nicht an Personen weitergegeben, die an der Studie nicht beteiligt sind. In eine mögliche Veröffentlichung der Resultate der Untersuchung gehen die Daten anonymisiert ein. Wir sichern Ihnen zu, dass alle von uns erhobenen Daten entsprechend dem Datenschutzgesetz geschützt werden.

</blockquote>
  <hr>
  <div class="row">
    <div class="col">
        <div class="form-group row">
        <div class="mx-sm-12">
          <input type="age" class="form-control"name="age" id="inputEmail3" placeholder="Alter">
        </div>
      </div>
      <div style="color:red;">{{ $errors->first('age') }}</div>
      <fieldset class="form-group">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-check">
              <div>Ich identifiziere mich am ehest mit...</div>
              <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="female">
              <label class="form-check-label" for="gridRadios1">
                Weiblich
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="male">
              <label class="form-check-label" for="gridRadios2">
                Männlich
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="divers">
              <label class="form-check-label" for="gridRadios3">
                Divers
              </label>
            </div>
            <div style="color:red;">{{ $errors->first('gender') }}</div>
          </div>
        </div>
      </fieldset>
      <p style="font-size: 12px;">
      Mit dem Klicken des “Weiter”-Buttons, bestätigen Sie, die Einleitung gelesen zu haben, und willigen ein, an dieser Studie teilzunehmen:

"Ich bin damit einverstanden, dass meine Angaben ausschließlich für wissenschaftliche Zwecke am Institut für Angewandte Psychologie: Arbeit, Bildung, Wirtschaft aufbewahrt und ausgewertet werden. Nach Beendigung des Forschungsvorhabens werden alle Daten gelöscht, die einen Bezug zu meiner Person erlauben."

Vielen Dank für Ihre Teilnahme an der Studie!

      </p>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Weiter</button>
        </div>
      </div>
    </form>
    </div>
    </div>
    </div>
  </div>
  
</div>


@endsection