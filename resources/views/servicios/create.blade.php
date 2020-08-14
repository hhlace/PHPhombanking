@extends('layouts.app')

@section('content')
<div>
	<img src="/img/pagoServ.jpg" width="100%" height="230px" style="padding-top: 0px">	
</div>


<div class="container">
	<form style="padding-top: 30px" action="/servicios/p" method="post">

		@csrf

		<div class="row">
			<div class="col-6 offset-3 ">
				
				<div class="row">
					<h1>Pagar servicio</h1>
				</div>

				<div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Servicio</label>

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
                    <label for="amount" class="col-md-4 col-form-label">Monto</label>

                    <div class="input-group">
	                    <div class="input-group-prepend">
				          <div class="input-group-text">$</div>
				        </div>

	                    <input id="debit"
	                    type="number"
	                    class="form-control @error('debit') is-invalid @enderror"
	                    name="debit"
	                    value="{{ old('debit') }}" 
	                    required 
	                    autocomplete="debit" autofocus>
	                </div>

                    @error('debit')
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