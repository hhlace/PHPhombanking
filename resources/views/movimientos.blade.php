@extends('layouts.app')

@section('content')
<div>
	<img src="/img/inversiones.jpg" width="100%" height="170px">	
</div>


<div class="container">

	<h1 style="padding: 20px"> {{ $user->name }},</h1>
   <table class="table table-hover">
		<thead class="table-info">
		    <tr>
			    <th scope="col">Fecha</th>
			    <th scope="col">Descripción</th>
			    <th scope="col">Debito</th>
			    <th scope="col">Credito</th>
			    <th scope="col">Saldo</th>
		    </tr>
		</thead>
		<tbody>
	    	
	    		@foreach ($user->movimientos as $item)
					<tr>
						<td>{{ $item->created_at->format('d M Y') }}</td>
					    <td>{{ $item->description }}</td>

					    @if($item->debit  == 0)
					    	<td>-</td>
					    @else
					    	<td><strong style="color: red">$ {{ number_format($item->debit, 2) }}</strong></td>
					    @endif

					    @if($item->credit ==0)
					    	<td>-</td>
					    @else
					    	<td><strong style="color: green">$ {{ number_format($item->credit, 2) }}</strong></td>
					    @endif
					    <td><strong>$ {{ number_format($item->balance, 2) }}</strong></td>
					</tr>
				@endforeach
					
	    
		</tbody>
	</table>
  
</div>
@endsection