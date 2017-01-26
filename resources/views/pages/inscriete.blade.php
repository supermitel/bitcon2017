@extends('/layout')

@section('content')

   <br><Br><Br> <Br><div class="Content" style="padding: 10px">
        <div id = "FormBox"  style="background-color: #eee;">
            <h1> Formular de înscriere: </h1>
            <form>
                <fieldset>
                    <legend>Date de contact</legend>
                    
                    <div class="formInput input">
        				<input class="formControl" id="nume" name="nume" type="text" placeholder="Nume">
        				<label for="nume">Nume</label>
        				<span class="formBar"></span>
    		    	</div>
    			    <div class="check-input check-input-hidden">Introduceți numele.</div>
    			    <br>
    			    <div class="formInput input">
        				<input class="formControl" id="prenume" name="prenume" type="text" placeholder="Prenume">
        				<span class="formBar"></span>
        				<label for="prenume">Prenume</label>
    		    	</div>
    			    <div class="check-input check-input-hidden">Introduceți prenumele.</div>
    			    <br>
                    <div class="formInput">
        				<input class="formControl" id="email" type="email" name="email" placeholder="Email Adress">
        				<span class="formBar"></span>
        				<label for="email">Email Adress</label>
        			</div> <br>
                    <div class="validEmail"></div>
                    <div class="formInput">
                        <input class="formControl" id="judet" type="judet" name="judet" placeholder="Email Adress">
                        <span class="formBar"></span>
                        <label for="judet">Judet</label>
                    </div> <br>
                    <div class="formInput">
                        <input class="formControl" id="scoala" type="scoala" name="scoala" placeholder="Email Adress">
                        <span class="formBar"></span>
                        <label for="scoala">Unitate de invatamant</label>
                    </div> <br>
                    <div class="formInput">
                        <input class="formControl" id="an" type="an" name="an" placeholder="Email Adress">
                        <span class="formBar"></span>
                        <label for="an">Anul de studiu (facultate)</label>
                    </div> <br>

			     
                    Adauga CV : <input type="file" name="img">
                    Adauga fotografie : <input type="file" name="img">
                </fieldset>
                <br>
                <fieldset>
                    
                    <label class = "formInput" > Categorie: 
                        <select >
                            <option> Desktop</option>
                            <option> Mobile</option>
                            <option> Embedded</option>
                            <option> Web</option>
                            <option> Security</option>
                            
                        </select>
                    </label>
                </fieldset>
                
                <button type="submit" id="SubmitButton" class="buttonSubmitUser button button-blue" >Submit </button>
            </form>
        </div>
    
    
    </div>
   @endsection 