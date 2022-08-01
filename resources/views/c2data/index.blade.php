@extends('welcome')

@section('content')

<html>
<head>

</head>

<table>
<body class="wrapper">
<form action="/sender">
<div class="wrapper2">
<div class="header">
    <p3> III. CIVIL SERVICE ELIGIBILITY</p3><br>
</div>
<div class="header2">
    <a href='/index2'>Link</a><br>
    <p>CAREER SERVICE/RA 1080 (BOARD/BAR)UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY/ DRIVER'S LICENSE</p>
</div>

<div class="form1">
    {{Form::label('')}}
    {{Form::text('eligibility', null, array('class' => 'form-control', 'id' => 'eligibility'))}}
</div>

<div class="form2">
    <p><br>Rating (if applicable)</p>
    {{Form::label('')}}<br>
    {{Form::text('rating', null, array('class' => 'form-control', 'id' => 'rating'))}}
</div>
<div class="form3">
    <p><br>Date of Examination/Conferment</p>
    {{Form::label('')}}<br>
    {{Form::date('dateofexam', null, array('class' => 'form-control', 'id' => 'dateofexam'))}}
</div>
<div class="form4">
    <p><br>Place of Examination/Conferment</p>
    {{Form::label('')}}<br>
    {{Form::text('placeofexam', null, array('class' => 'form-control', 'id' => 'placeofexam'))}}
</div>
<div class="form5">
    <p><br>License (if applicable)</p>
    {{Form::label('')}}<br>
    {{Form::text('license', null, array('class' => 'form-control', 'id' => 'license'))}}<br>
    <p>NUMBER:
    {{Form::label('', '')}}<br>
    {{Form::text('licenseno', null, array('class' => 'form-control', 'id' => 'licenseno'))}}<br>
    Date of Validity:</p>
    {{Form::label('','')}}<br>
    {{Form::date('validity', null, array('class' => 'form-control', 'id' => 'validity'))}}
</div><br><br>
<div class="header2">
    <p2>IV. WORK EXPERIENCE</p2><br><br>
</div>
<div class="form7">
    <p class="dateheader">Inclusive Dates</p><br>
    <p class="datefrom">From</p>
    <p class="dateto">------------------------To</p><br>
    {{Form::date('datefrom')}}
    {{Form::date('dateto')}}<br>
</div>

<div class="form8">
    <p><br>Position/Title (Do Not Abbreviate)</p>
    {{Form::label('','')}}<br>
    {{Form::text('position', null, array('class' => 'form-control', 'id' => 'position'))}}
</div>

<div class="form9">
    <p><br>Department/Agency/Office/Company(Do Not Abbreviate)</p>
    {{Form::label('', '')}}<br>
    {{Form::text('department', null, array('class' => 'form-control', 'id' => 'department'))}}
</div>

<div class="form10">
    <p><br>Monthly Salary</p>
    {{Form::label('', '')}}<br>
    {{Form::text('salary', null, array('class' => 'form-control', 'id' => 'salary'))}}
</div>

<div class="form11">
    <p><br>Salary/Job/Pay Grade(if applicable)& STEP (Format"00-0")/INCREMENT</p>
    {{Form::label('')}}<br>
    {{Form::text('paygrade', null, array('class' => 'form-control', 'id' => 'paygrade'))}}
</div>

<div class="form12">
    <p><br>Status of Appointment</p>
    {{Form::label('', '')}}<br>
    {{Form::text('appointment', null, array('class' => 'form-control', 'id' => 'appointment'))}}
</div>

<div class="form13">
    <p><br>Date of Validity</p>
    {{Form::label('','')}}<br>
    {{Form::date('datevalid', null, array('class' => 'form-control', 'id' => 'dateofvalidity'))}}
</div>
<br>
<div class="button">
<button href='/sender'>button</button>
{{Form::close()}}
</div>
</form>
</body>
</table>
</html>