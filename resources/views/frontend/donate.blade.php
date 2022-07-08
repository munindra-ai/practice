@extends('layouts.app')

@section('content')
<style>
    .nmc-block--donate-form .form-header {
    margin: 0 0 0.5em;
    font-size: 1.0625rem;
    font-weight: 400;
}
h3 {
    margin: 24px 0 1rem;
    font-family: Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 700;
    line-height: 1.25;
    color: #202020;
    font-size: 2.875rem;
}
.nmc-block--donate-form .donate-amount-group {
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
.nmc-block--donate-form .donate-amount-label:first-child {
    margin-left: 0;
}
.nmc-block--donate-form .donate-amount-label {
    flex-basis: 100%;
    flex-shrink: 1;
    margin-left: 10px;
    padding-top: 21px;
    padding-bottom: 21px;
    text-align: center;
    font-size: 1.375rem;
}
.nmc-block--donate-form .radio-label {
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
.nmc-block--donate-form .radio-label:before {
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
.nmc-block--donate-form .radio-input {
    position: absolute;
    left: -9999em;
    top: 0;
    border-radius: 0;
}
button, input {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}



</style>
<div class="container">
<form action="" class="donate-form visible" id="giveNeeded">

<input type="hidden" id="stayclassyId" name="eid" value="34534">

<h3 class="form-header">Select Your Donation Amount:</h3>

<fieldset class="radio-group donate-amount-group">
                    <label for="giveNeeded-amount-1" class="radio-label donate-amount-label">
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

<!-- <h3 class="form-header">Frequency:</h3> -->

<!-- <fieldset class="radio-group frequency-group">
    <label for="giveNeeded-recurring-1" class="radio-label frequency-label">
        <input id="giveNeeded-recurring-1" class="radio-input frequency-input" type="radio" name="recurring" value="0">One time
    </label>
    <label for="giveNeeded-recurring-2" class="radio-label frequency-label">
        <input id="giveNeeded-recurring-2" class="radio-input frequency-input" type="radio" name="recurring" value="1">Monthly
    </label>
</fieldset> -->

<button type="submit" class="form-submit">Continue To Payment &#x25b6;&#xFE0E;
</button>

</form>
</div>





@endsection