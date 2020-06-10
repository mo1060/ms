

@extends('layouts.layout')
@section('grill')
<form action="/grill" method="POST">
            @csrf
        <div class="container" align="center">
    
        <div class="row" style="padding: 20px 0px 0px 0px">
            <div class="col-sm-12 col-md-12 col-lg-6">
            <h4>Gasgrill</h4>
            <img src="./assets/productimages/grill.jpg" class="img-fluid" width="450px" alt="Responsive image">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
    
            <ul class="list-group">
          <!-- Lieferzeit 2 tage  -->
          <div class="row">
            <div class="col-sm">
            <h4 style="padding: 10px 0px 0px 0px">Wie empfindest du eine Lieferzeit von...</h4>
            <h5>2 Tagen:</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="slidecontainer">
                        <div>
                        <fieldset>
                        <span class="leftlabel">Sehr kurz</span>
                        <input type="range" min="1" max="100" value="1" name="two_day_delivery" class="slider" id="myRange">
                        <span class="rightlabel">Viel zu lang</span>
                        </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-sm" style="display: inline">
                    <span>Ich würde warten, wenn ich das Produkt brauchen würde.</span>
                    <span style="color:red;">{{ $errors->first('two_days_wait') }}</span>

                    <br>
                        <label for="my_radio_button_id1">Ja</label>
                        <input type="radio" value="yes" name="two_days_wait" id="my_radio_button_id1" />
                        <label for="my_radio_button_id2">Nein</label>
                        <input type="radio" value="no" name="two_days_wait" id="my_radio_button_id2" />
                    </div>
            </div>



            <ul class="list-group">
          <!-- Lieferzeit 2 tage  -->
          <div class="row">
            <div class="col-sm">
            <h5>1 Woche:</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="slidecontainer">
                        <div>
                        <fieldset>
                        <span class="leftlabel">Sehr kurz</span>
                        <input type="range" min="1" max="100" value="1" name="one_week_delivery" class="slider" id="myRange">
                        <span class="rightlabel">Viel zu lang</span>
                        </fieldset>
                        </div>
                    </div>
                </div>
            </div>


        <div class="row">
                    <div class="col-sm" style="display: inline">
                    <span>Ich würde warten, wenn ich das Produkt brauchen würde.</span>
                    <span style="color:red;">{{ $errors->first('one_week_wait') }}</span>

                    <br>
                        <label for="my_radio_button_id1">Ja</label>
                        <input type="radio" value="yes" name="one_week_wait" id="my_radio_button_id1" />
                        <label for="my_radio_button_id2">Nein</label>
                        <input type="radio" value="no" name="one_week_wait" id="my_radio_button_id2" />
                    </div>
            </div>



            <ul class="list-group">
          <!-- Lieferzeit 2 tage  -->
          <div class="row">
            <div class="col-sm">
            <h5>2 Wochen:</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="slidecontainer">
                        <div>
                        <fieldset>
                        <span class="leftlabel">Sehr kurz</span>
                        <input type="range" min="1" max="100" value="1" name="two_week_delivery" class="slider" id="myRange">
                        <span class="rightlabel">Viel zu lang</span>
                        </fieldset>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                    <div class="col-sm" style="display: inline">
                    <span>Ich würde warten, wenn ich das Produkt brauchen würde.</span>
                    <span style="color:red;">{{ $errors->first('two_week_wait') }}</span>
                    <br>
                        <label for="my_radio_button_id1">Ja</label>
                        <input type="radio" value="yes" name="two_week_wait" id="my_radio_button_id1" />
                        <label for="my_radio_button_id2">Nein</label>
                        <input type="radio" value="no" name="two_week_wait" id="my_radio_button_id2" />
                    </div>
            </div>

            <ul class="list-group">
          <!-- Lieferzeit 2 tage  -->
          <div class="row">
            <div class="col-sm">
            <h5>1 Monat:</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="slidecontainer">
                        <div>
                        <fieldset>
                        <span class="leftlabel">Sehr kurz</span>
                        <input type="range" min="1" max="100" value="1" name="one_month_delivery" class="slider" id="myRange">
                        <span class="rightlabel">Viel zu lang</span>
                        </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-sm" style="display: inline">
                    <span>Ich würde warten, wenn ich das Produkt brauchen würde.</span>
                    <span style="color:red;">{{ $errors->first('one_month_wait') }}</span>
                    <br>
                        <label for="my_radio_button_id1">Ja</label>
                        <input type="radio" value="yes" name="one_month_wait" id="my_radio_button_id1" />
                        <label for="my_radio_button_id2">Nein</label>
                        <input type="radio" value="no" name="one_month_wait" id="my_radio_button_id2" />
                    </div>
            </div>

        <!-- would you buy?
        <div class="row" style="padding-top: 30px">
            <div class="col-sm" align="left-align">
            <h5>Wenn du dieses Produkt brauchen würdest, würdest du es dann kaufen?</h5>
            <div style="color:red;">{{ $errors->first('buy') }}</div>
            </div>
        </div>
        <li class="list-group-item">
        <div class="row">
                    <div class="col-sm">
                    <div id="checkboxes">
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id1">Ja</label>
                        <input type="radio" value="yes" name="buy" id="my_radio_button_id1" />
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id2">Nein</label>
                        <input type="radio" value="no" name="buy" id="my_radio_button_id2" />
                    </div>
            
                    </div>
                    </div>
            </div>
            </li>  -->

        <!-- how useful does the product seem to you? -->
        <div class="row">
            <div class="col-sm">
            <h5>Wie nützlich findest du das Produkt?</h5>
            <div style="color:red;">{{ $errors->first('usefulness') }}</div>

            </div>
        </div>
        <li class="list-group-item">
        <div class="row">
                    <div class="col-sm">
                    <div id="checkboxes">
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id1">Gar nicht</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id1"  value="1"/>
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id2">2</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id2" value="2" />
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id3">3</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id3" value="3" />
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id3">4</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id3" value="4" />
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id3">5</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id3" value="5" />
                    </div>
                    ---
                    <div class="checkboxgroup">
                        <label for="my_radio_button_id3">Sehr</label>
                        <input type="radio" name="usefulness" id="my_radio_button_id3" value="6" />
                    </div>
                    </div>
            </div>
            </li>


            </ul>
            <input type="hidden" name="product" value="grill"> 
            <!-- controls -->
            <div class="row justify-content-sm-end" style="padding: 20px;">
            <button type="submit" class="btn btn-primary">Nächstes Produkt</button>
            </div>
            </div>


   


        </div>


  
        </div>
</form>
        <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function() {
        output.innerHTML = this.value;
        } 
        
        </script>
@endsection