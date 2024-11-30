@extends('layouts.app')

@section('content')

<main>
    <div class="container-micuenta">
        <aside class="sidebar">
            <h2>Mi Cuenta</h2>
            <ul>
                <li><a href="/usuario/micuenta">Mi cuenta</a></li>
                <li><a href="/usuario/mipedido">Mis pedidos</a></li>
                <li><a href="/usuario/mifavorito">Mis favoritos</a></li>
                <li><a href="/usuario/misdirecciones">Libreta de direcciones</a></li>
                <li><a href="/usuario/informacionCuenta">Información de cuenta</a></li>
                <li><a href="/usuario/micarrito">Mi carrito</a></li>
                <li><a href="/usuario/mispagos">Mis medios de pago</a></li>
                <li><a onclick="document.getElementById('UserLogoutForm').submit();" href="#">Cerrar Sesión</a>
                    <form id="UserLogoutForm" action="{{ route('logout.user') }}" method="POST">
                        @csrf
                    </form></li>
            </ul>
        </aside>

        <div class="content">
            <section class="account-info">
            <h2>Mis pedidos</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#Pedido</th>
                                <th>Fecha</th>
                                <th>Enviar a</th>
                                <th>Zapatilla</th>
                                <th>Direccion</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000110182</td>
                                <td>24/08/24</td>
                                <td>Eda Norma Martinez Lopez	</td>
                                <td>Zapatilla Marca: Adidas<br>Codigo: 123456789<br>Color: Rojo<br>Precio: S/. 100.00<br>Talla: 37 EUR</td>
                                <td>Psj.Cristobal 139<br>Huancayo, Junín, Chilca<br>Perú<br>T: 995140564</td>
                                <td>S/. 100.00</td>
                                <td>Pendiente</td>
                                <td class="actions">
                                    <button class="view-btn"><a href="" class="view-btn">Ver</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</main>

@endsection
