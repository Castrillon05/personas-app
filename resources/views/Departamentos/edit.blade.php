<div class="container">
      
       <h1>Add Departamentos</h1>
       <form method="POST" action="{{ route('departamentos.store') }}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
          disabled="disabled">
          <div id="idHelp" class="form-text">Department Code</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Department</label>
          <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
             name="name" placeholder="Department name.">
        </div>

        <label for="country">Country :</label>
        <select class="form-select"  id="country" name="code" required>
            <option selected disabled value="">Choose one...</option>

            @foreach ($paises as $pais)

            <option value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
            
            @endforeach
        </select>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('departamentos.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>