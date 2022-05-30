@extends('layout')

@section('content')
    <div class="bg-primary mt-4 px-4 container py-2">
    <form action="" method="post" id="form-contacto">
        <h2 class="text-secondary">Ayudanos a ayudarte ;)</h2>

        <!--Fila-->
        <!--VERIFICAR-->        <div class="row row-cols-xl-3 row-cols-xs-2">
            <!--Nombre-->
            <div class="col-xl-2 col-5">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" id="Nombre" class="form-control mb-2" required>
            </div>

            <!--Correo-->
            <div class="col-xl-5 col-11">
                <label for="Correo" class="form-label">Correo:</label>
                <input type="email" id="Correo" class="form-control mb-2" required>
            </div>

            <!--Ciudad-->
            <div class="col-xl-5 col-7">
                <label for="Ciudad" class="form-label">Ciudad:</label>
                <select name="" id="Ciudad" class="form-select mb-2" required>
                    <option value="" disabled>Escoge</option>
                    <option value="">...</option>
                    <option value="">Pontevedra</option>
                    <option value="">Vigo</option>
                    <option value="">A Coruña</option>
                    <option value="">Santiago de Compostela</option>
                </select>
            </div>

            <!--CP-->
            <div class="col-xl-2 col-4">
                <label for="CP" class="form-label">CP:</label>
                <input type="text" id="CP" class="form-control mb-2" required>
            </div>

            <!--Dirección-->
            <div class="col-xl-6">
                <label for="Direccion" class="form-label">Dirección:</label>
                <input type="text" id="Direccion" class="form-control mb-2">
            </div>

            <!--Motivo-->
            <div class="col-xl-4 col-6">
                <label for="Motivo" class="form-label">Motivo:</label>
                <select name="" id="" class="form-select mb-2" required>
                    <option value="" disabled>Escoge:</option>
                    <option value="">...</option>
                    <option value="">Averia</option>
                    <option value="">Renovación</option>
                    <option value="">Instalación nueva</option>
                </select>
            </div>

            <!--Teléfono-->
            <div class="col-xl-3 col-6">
                <label for="Telefono" class="form-label">Teléfono:</label>
                <input type="tel" id="Telefono" class="form-control mb-2" required>
            </div>
        </div>
        <button type="submit" class="btn-secondary mt-2 rounded-3 border-0">Enviar</button>
    </form>
    </div>
@endsection
