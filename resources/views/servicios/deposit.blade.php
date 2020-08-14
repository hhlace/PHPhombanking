@extends('layouts.app')

@section('content')
<div>
	<img src="/img/deposit.jpg" width="100%" height="230px" style="padding-top: 0px">	
</div>


<div class="container">
	<form style="padding-top: 30px" action="/servicios/d" method="post">

		@csrf

		<div class="row">
			<div class="col-6 offset-3 ">
				
				<div class="row">
					<h1>Dpositar dinero</h1>
				</div>

				<div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Descripción</label>

                        <input id="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        value="{{ old('description') }}"
                        required 
                        autocomplete="description" autofocus>

                        @error('description')
                                        <strong>{{ $message }}</strong>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="credit" class="col-md-4 col-form-label">Monto</label>

                    <div class="input-group">
	                    <div class="input-group-prepend">
				          <div class="input-group-text">$</div>
				        </div>

	                    <input id="credit"
	                    type="number"
	                    class="form-control @error('credit') is-invalid @enderror"
	                    name="credit"
	                    value="{{ old('credit') }}" 
	                    required 
	                    autocomplete="credit" autofocus>
	                </div>

                    @error('credit')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                	<button class="btn btn-danger">Pagar</button>
                </div>
			</div>
		</div>
	</form>
  
</div>
@endsection