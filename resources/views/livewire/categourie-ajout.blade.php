
@section('categorie-ajout')

    <div class="container">
        <div class="row">
        
          <div class="col-md-6 ">
        
            <form action="add" method="post">
              @csrf
        
        <div class="formgroup">
          <label for=""> name</label>
          <input type="text" clas="form-control" name ="name" value="{{ old('name')}}">
          <span style="color:red"> @error('name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
           <button type ="submit" class="btn btn-primary"> Save</button>
        </div>
            </form>
          </div>
        </div>
        </div>
        <div class="container">
        <div class="row">
        
          <div class="col-md-6 ">
        
            <form action="add" method="post">
              @csrf
        
        <div class="formgroup">
          <label for=""> name</label>
          <input type="text" clas="form-control" name ="name" value="{{ old('name')}}">
          <span style="color:red"> @error('name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
           <button type ="submit" class="btn btn-primary"> Save</button>
        </div>
            </form>
          </div>
        </div>
        </div>

@endsection