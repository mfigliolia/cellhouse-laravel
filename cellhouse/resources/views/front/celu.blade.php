@include('partials/head')
@include('partials/header_login')
​
<body>
	<main class="container">
		<div style="display:flex; align-self: center; border:solid; background: white; width:95%; height: 450px; margin-top: 25px;">
			<div class="img_product" style="display:flex; justify-content: center; width:50%; border: dotted;">
				<img src="/storage/images/{{$celu->photo}}" style="width: 80%;">
			</div>
				<br>
			<div class="card_product" style="display:flex; flex-direction: column; justify-content: space-between; width: 50%; margin: 25px;"> 
​
			<p>{{$celu->categorie->name}}</p>
            <h2>{{$celu->name}}</h2>
            <p>{{$celu->description}}</p>
				<p>Contado <strong>$ {{$celu->price}}</strong></p>
				<div >
					<input style="margin-right: 10px;
                        background: rgb(203,31,7);
                        width: 110px;
                        height: 40px;
                        color: white;" type="button" value="Comprar" style="margin-right: 10px;">
                    
                    <input style="background: rgb(250,250,250); width: 110px; height: 40px; color: rgb(203,31,7);" type="button" value="Agregar a carrito">

				</div>	
			</div>
        </div>
    </main>    
@include('partials/footer')