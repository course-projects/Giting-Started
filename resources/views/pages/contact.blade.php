@extends('main')

@section('title', '| Contact')

@section('content')

<div class="row">

<div class="col-md-12">
<h1>Contact Me</h1>
<hr>

<form>
    <div class="form-group">
    <label name="email">Email:</label>
    <input class="form-control" id="email" name="email">   
    </div>

    <div class="form-group">
    <label name="subject">Subject:</label>
    <input class="form-control" id="subject" name="subject">  
    </div>

    <div class="form-group">
    <label name="message">Message:</label>
    <textarea id="message" name="message" class="form-control">Type your message here..</textarea>   
    </div>
    <input type="submit" value="Send Message" class="btn btn-success">
</form>
  
</div>
</div>

       
@endsection
