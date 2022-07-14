@extends('layouts.app')

@section('content')
<style>
    
.donate-amount-group {
    display: flex;
    margin-bottom: 10px;
}

form fieldset {
    margin-bottom: 1.5em;
    padding: 0;
    border: none;
}
fieldset {
    padding: 0.35em 0.75em 0.625em;
}
.donate-amount-label:first-child {
    margin-left: 0;
}
.donate-amount-label {
    flex-basis: 100%;
    flex-shrink: 1;
    margin-left: 10px;
    padding-top: 21px;
    padding-bottom: 21px;
    text-align: center;
    font-size: 1.375rem;
}
.radio-label {
    position: relative;
    padding: 24px 16px;
    font-weight: 700;
    font-size: 1.125rem;
    border: 2px solid #ccc;
    cursor: pointer;
    transition: .2s;
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
.radio-label:hover{
    border: 2px solid #905e31;
}
>>>>>>> feature/aboutusPageFrontend
=======
.radio-label:hover{
    border: 2px solid #905e31;
}
>>>>>>> 5722559b1617e3a40f05caaedba8b8792835afd1
form label {
    display: block;
    margin: 0 0 10px;
    line-height: 1.2;
}
.radio-label:before {
    content: '';
    position: absolute;
    left: -1px;
    top: -1px;
    right: -1px;
    bottom: -1px;
    border: 3px solid #cc2126;
    opacity: 0;
    transition: .2s;
}
.radio-input {
    position: absolute;
    left: -9999em;
    top: 0;
    border-radius: 0;
}

button, input{
    overflow: visible;
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}
.amount {
    position: relative;
}
.amount:before {
    content: '';
    position: absolute;
    left: 15px;
    top: 12px;
    font-size: 1.375rem;
    font-weight: 700;
}
.amount-label {
    position: absolute;
    margin: -1px;
    padding: 0;
    width: 1px;
    height: 1px;
    overflow: hidden;
    border: 0;
    clip: rect(1px,1px,1px,1px);
    clip-path: inset(50%);
    word-wrap: normal!important;
}
label .amount-label {
    padding-left: 5px;
}
.amount-input {
    padding-left: 35px;
    height: 70px;
    font-size: 1.0625rem;
}

form input[type=text]{
    display: block;
    padding: 0 30px;
    width: 100%;
    height: 50px;
    line-height: 1.2;
    border: 1px solid #cecfce;
    background: #fff;
    box-shadow: none;
    border-radius: 0!important;
    -webkit-appearance: none;
    box-sizing: border-box;
    transition: .2s;
}

.form-submit {
    display: block;
    padding-top: 25px;
    padding-bottom: 25px;
    width: 100%;
}

.form-submit{
    position: relative;
    z-index: 1;
    display: inline-block;
    padding: 15px 40px;
    max-width: 100%;
    line-height: 1;
    font-size: 1rem;
    font-family: Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 700;
    letter-spacing: 2px;
    text-align: center;
    text-decoration: none!important;
    text-transform: uppercase;
    color: #fff;
    background: #ea7605;
    border: 3px solid #905e31;
    border-radius: 0;
    box-shadow: none;
    -webkit-appearance: none;
    cursor: pointer;
    vertical-align: middle;
    overflow: hidden;
    transition: .2s;
}
.form-submit:hover{
    background: #905e31;
}

.frequency-group {
    display: flex;
}
.frequency-label:first-child {
    margin-left: 0;
}
.frequency-label {
    flex-basis: 100%;
    flex-shrink: 1;
    margin-left: 10px;
    padding-top: 21px;
    padding-bottom: 21px;
    text-align: center;
    font-size: 1.375rem;
}

form{
    margin-top: 2rem;
}
section .container:hover {
    box-shadow: none;
}
#desktop-footer {
    margin-top: 15rem;
}

h1 { 
    font-size: 4rem;
    font-weight: 700;
    margin-top: 2rem;
    
}
h2{
    font-size: 24px;
}
h3{ 
    margin-top: 10px;
    text-align: initial;
    font-weight: 400;
}
.contact{
    margin-top: 1rem;
}
h4{
    font-size: 18px;
    font-weight: 500;
}
</style>
<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                
            
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <section>
                            <h1>Donate Us</h1>
                            <h2>Thank you for considering generous donations to the Global Bhutanese Hindu Organization.</h2>
                            <h3>Your donation today strengthens our mission to preserve and promote our Hindu religion, philosophy, culture, language and heritage without discrimination based on caste, sex, age, and sampradaya.</h3>
                            <h3>With your support, GBHO can advance programs and carry forward our goal to provide resources and services in every home in our community. </h3>
                            <h3>To lift the courage and expand the organization’s faithful presence, make a donation today by clicking on the DONATE button.</h3>
                            <div class="contact">
                            <h2>You can also donate by mail:</h2>
                            <h4>Check: Pay to The Order of GBHO <br>
                                Mr. Toya Acharya <br>
                                199 Monarch Dr. <br>
                                Pataskala, OH 43062</h4>
                            </div>
                            <h3>If you have witnessed and appreciated the work of GBHO and ongoing programs, we welcome your partnership and sponsorship of our programs as well. Contact GBHO for more information.</h3>
                            <h3>Please be assured that the donation made to GBHO using any method is very safe and confidential. </h3>
                        </section>



                    </div>
                </div>
                </section>

                
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <form class="donate-form-choose">
			<fieldset class="radio-group">
								<label for="block_5fa57a381d883-form-1" class="radio-label donate-form-choose-label">
					<input id="block_5fa57a381d883-form-1" type="radio" name="givegroup" class="radio-input donate-form-choose-option" value="giveNeeded">
					Give where the need is greatest
				</label>
								<label for="block_5fa57a381d883-form-2" class="radio-label donate-form-choose-label">
					<input id="block_5fa57a381d883-form-2" type="radio" name="givegroup" class="radio-input donate-form-choose-option" value="giveUSA">
					Give to empower young leaders in the U.S.
				</label>
								<label for="block_5fa57a381d883-form-3" class="radio-label donate-form-choose-label active-radio">
					<input id="block_5fa57a381d883-form-3" type="radio" name="givegroup" class="radio-input donate-form-choose-option" value="giveIntl">
					Give to build schools in developing countries
				</label>
							</fieldset>
		</form>




                    <form action="" class="donate-form visible" id="">

<input type="hidden" id="stayclassyId" name="eid" value="34534">

<h3 class="form-header">Select Your Donation Amount:</h3>

<fieldset class="radio-group donate-amount-group">
                    <label for="giveNeeded-amount-1" class="radio-label donate-amount-label active-radio">
        <input id="giveNeeded-amount-1" type="radio" name="donate-amount" class="radio-input donate-amount-choose" value="66">$66
    </label>
                    <label for="giveNeeded-amount-2" class="radio-label donate-amount-label">
        <input id="giveNeeded-amount-2" type="radio" name="donate-amount" class="radio-input donate-amount-choose" value="81">$81
    </label>
                    <label for="giveNeeded-amount-3" class="radio-label donate-amount-label">
        <input id="giveNeeded-amount-3" type="radio" name="donate-amount" class="radio-input donate-amount-choose" value="550">$550
    </label>
                    <label for="giveNeeded-amount-4" class="radio-label donate-amount-label">
        <input id="giveNeeded-amount-4" type="radio" name="donate-amount" class="radio-input donate-amount-choose" value="812">$812
    </label>
                </fieldset>

<fieldset class="amount">
    <label for="giveNeeded-amount" class="amount-label"></label>
    <input id="giveNeeded-amount" class="amount-input" type="text" name="amount" placeholder="$ Enter Other Amount">
</fieldset>

<h3 class="form-header">Frequency:</h3>

<fieldset class="radio-group frequency-group">
				<label for="giveNeeded-recurring-1" class="radio-label frequency-label">
					<input id="giveNeeded-recurring-1" class="radio-input frequency-input" type="radio" name="recurring" value="0">One time
				</label>
				<label for="giveNeeded-recurring-2" class="radio-label frequency-label active-radio">
					<input id="giveNeeded-recurring-2" class="radio-input frequency-input" type="radio" name="recurring" value="1">Monthly
				</label>
			</fieldset>


<button type="submit" class="form-submit">Continue To Payment ▶︎
</button>

</form>
                    </div>
                </div>
                </section>

                               
            </div>
        </div>
    </section>
</div>



<div class="container">

</div>





@endsection