<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Repository Pattern CRUD</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    
    <div class="container">
      {{-- Task Form --}}

      <H1>Edit Data Guru </H1>

      <div class="row">
        <div class="col-md-6">
          @if(isset($editTask))
            {{ Form::model($editTask, 
              ['route' => ['task.update', $editTask->id],
              'method' => 'patch',
              'class' => 'form-inline']) }}
          @else
            {{ Form::open( 
              ['route' => 'task.store',
              'method' => 'post',
              'class' => 'form-inline']) }}
          @endif

            <div class="form-group">
              {{ Form::text('code', null,
                ['class' => 'form-control',
                'size' => '58px',
                'placeholder' => 'code']) }}
            </div>
            <div class="form-group">
              {{ Form::text('name_id', null,
                ['class' => 'form-control',
                'size' => '58px',
                'placeholder' => 'name_id']) }}
            </div>
            <div class="form-group">
              {{ Form::text('name_ar', null,
                ['class' => 'form-control',
                'size' => '58px',
                'placeholder' => 'name_ar']) }}
            </div>
            <div class="form-group">
              {{ Form::text('nip', null,
                ['class' => 'form-control',
                'size' => '58px',
                'placeholder' => 'nip']) }}
            </div>
            <div class="form-group">
              {{ Form::text('gender', null,
                ['class' => 'form-control',
                'size' => '58px',
                'placeholder' => 'gender']) }}
            </div>
            <br><br>
            
            <div class="form-group">
              {{ Form::submit('Ok', ['class' => 'btn btn-primary form-control']) }}
            </div>
          {{ Form::close() }}

          <br>
          <div class="footer">Copyright@2019 - Created by <a href="http://sigitsmkn1liwa.blogspot.com/"> Pesagi Code.</div></a>

        </div>
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </body>
</html>