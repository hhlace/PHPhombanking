@extends('layouts.app')

@section('content')
<div>
	<img src="/img/monedas.jpg" width="100%" height="200px">	
</div>



  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row py-4">
      <div class="col-lg-4">

        <img src="/img/deposito.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Depositar</h2>
        <p>Depositar dinero es muy facil.</p>
        <p><a class="btn btn-primary" href="/servicios/deposit" role="button">Depositar</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="/img/balance.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Movimientos</h2>
        <p>Puede revisar todos sus movimientos de cuenta desde aquí</p>
        <p><a class="btn btn-info" href="/movimientos/{{ Auth::user()->id }}" role="button">Movimientos</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="/img/pagoServ2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Pago de servicios</h2>
        <p>Ahora pagar tus servicios es muy facil, desde tu homebanking</p>
        <p><a class="btn btn-danger" href="/servicios/create" role="button">Pago de servicios</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>


@endsection
