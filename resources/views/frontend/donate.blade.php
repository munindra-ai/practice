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
    border: 1px solid #ccc;
    cursor: pointer;
    transition: .2s;
}
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
    content: '$';
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

.amount-input {
    padding-left: 35px;
    height: 70px;
    font-size: 1.0625rem;
}

form input[type=text]{
    display: block;
    padding: 0 15px;
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
    background: #646fd4;
    border: 2px solid #646fd4;
    border-radius: 0;
    box-shadow: none;
    -webkit-appearance: none;
    cursor: pointer;
    vertical-align: middle;
    overflow: hidden;
    transition: .2s;
}
.form-submit:hover{
    background: #4cacbc;
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
</style>
<div class="container">
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
    <label for="giveNeeded-amount" class="amount-label">Enter Other Amount</label>
    <input id="giveNeeded-amount" class="amount-input" type="text" name="amount" placeholder="Enter Other Amount">
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





@endsection