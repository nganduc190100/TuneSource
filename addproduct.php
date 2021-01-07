<?php
<!DOCTYPE html>
<html lang="vi">
 <head>
<div class="container">
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Panel heading</h3> 
</div> 
<div class="panel-body">
  
<form action="designer-finish.html" class="form-horizontal" role="form">

<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Order type</label>
	<div class="col-sm-9">
		<label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> External order
	</label>
	<label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Internal order
	</label>
	</div>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Buyurtmachi</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Исм ёки корхона номи">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">The product's name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Название">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea class="form-control"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="qty" class="col-sm-3 control-label">number</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" name="qty" id="qty" placeholder="шт.">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Timing</label>
    <div class="col-sm-3"> 
	  <label class="control-label small" for="date_start"> Start:</label>
	  <input type="text" class="form-control" name="date_start" id="date_start" placeholder="Начало">
    </div>
	<div class="col-sm-3">   
	  <label class="control-label small" for="date_finish">The end:</label>
	  <input type="text" class="form-control" name="date_finish" id="date_finish" placeholder="Конец">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Download</label>
    <div class="col-sm-3">
      <label class="control-label small" for="file_img">Picture (jpg/png):</label> <input type="file" name="file_img">
    </div>
	<div class="col-sm-3">
      <label class="control-label small" for="file_img">Files:</label>  <input type="file" name="file_archive">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Technologist</label>
    <div class="col-sm-3">
   <select class="form-control">
	<option value="">Please select</option>
	<option value="texnolog2">Technologist 2</option>
	<option value="texnolog3">Technologist 3</option>
   </select>
    </div>
  </div> <!-- form-group // -->
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Send</button>
    </div>
  </div> <!-- form-group // -->
</form>
</div><!-- panel-body // -->
</section><!-- panel// -->
</div> <!-- container// -->
 <footer class="w3-center w3-padding-16">
 <p>Project nhạc</p>
</footer>
 <!-- JS Bootstrap -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
 <!-- JS Slider -->
 <script type="text/javascript" src="public/js/slider/bxslider.min.js"></script>
 <script type="text/javascript" src="public/js/slider/script.slider.js"></script>
</body>
</html>