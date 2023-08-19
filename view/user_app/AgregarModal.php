<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card-body">
                        <form method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="dates">Fecha</label>
                                        <input name="dates" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <label for="hour">Hora</label>
                                        <input name="hour" type="time" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="continentes">Especialidad</label>
                                        <select class="form-control" id="continentes" required name="codespe"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="paises">Médico</label>
                                        <select class="form-control" id="paises" required name="coddoc"></select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary">Guardar Registro</button>
            </div>
        </div>
    </div>
</div>
