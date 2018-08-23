@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')

<div class="titulo">
    <h2 align="center">CELULARES</h2>
</div>

<section class="novedades">
    @foreach($celulares as $celular)
        <article class="product">
        <img src="/storage/images/{{$celular->photo}}">
        <h3>{{$celular->name}}</h3>
        <p>Contado <strong>${{$celular->price}}</strong></p>
        <a class="btn-info" href="/celular/{{$celular->id}}">Info</a>
        <a class="btn-cart" href=""><img style="width: 30px;" src="images/logos/cart-add.png"></a>

        </article>
    @endforeach
    </section>

@include('partials/footer')