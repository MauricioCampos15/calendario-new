@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="agenda">Calendario</div>
    </div>

    <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Agenda</h1>
                </div>
                <div class="modal-body">

                    <form >

                      {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Escribe el título del evento">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start">Inicio:</label>
                            <input type="date" class="form-control" name="start" id="start" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="end">Fin:</label>
                            <input type="date" class="form-control" name="end" id="end" placeholder="">
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


@endsection
