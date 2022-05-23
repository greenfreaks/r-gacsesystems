<!-- Modal Agendar -->
<div class="modal fade" id="modal_agendar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="darkBlueTx modal-title" id="exampleModalLabel">Agendar Cita</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="" class="mb-3">
                        <input type="hidden" id="action" value="agendar">
                        <h5> <i class="fas fa-user-injured"></i> Nombre del paciente</h5>
                        <input type="text" class="form-control" id="agendarForm__nombre" name="nombre">

                        <h5> <i class="fas fa-users-medical"></i> Apellidos</h5>
                        <input type="text" class="form-control"  id="agendarForm__apellidos" name="apellidos">

                        <h5> <i class="fas fa-user-clock"></i> Edad</h5>
                        <input type="number" class="form-control"  id="agendarForm__edad" name="edad">

                        <h5> <i class="fas fa-building"></i> Localidad</h5>
                        <input type="text" class="form-control"  id="agendarForm__localidad" name="localidad">

                        <h5> <i class="fas fa-phone-alt"></i> Teléfono</h5>
                        <input type="text" class="form-control"  id="agendarForm__telefono" name="telefono">

                        <h5> <i class="fas fa-at"></i> E-mail</h5>
                        <input type="email" class="form-control"  id="agendarForm__email" name="mail">

                        <h5> <i class="fas fa-ballot-check"></i> Medio de contacto en que solicitó la cita</h5>
                        <select id="agendarForm__medioContacto" class="form-select"  name="medio">
                            <option selected>Selecciona una opción</option>
                            <option value="Teléfono">Teléfono</option>
                            <option value="Email">Email</option>
                            <option value="Recepción">Recepción</option>
                        </select>

                        <h5> <i class="fas fa-calendar-day"></i> Día de la cita</h5>
                        <input type="date" class="form-control"  id="agendarForm__fecha">

                        <h5> <i class="fas fa-clock"></i> Hora de la cita</h5>
                        <input type="time" class="form-control"  id="agendarForm__hora">

                        <h5> <i class="fas fa-pen-alt"></i> Observaciones</h5>
                        <textarea name="observaciones" class="form-control"  id="agendarForm__observaciones"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btnAgendar btn btn-primary">Agendar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="darkBlueTx modal-title" id="exampleModalLabel">Editar Cita</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="" class="mb-3">
                        <input type="hidden" id="action" value="editarCita">
                        <h5> <i class="fas fa-user-injured"></i> Nombre del paciente</h5>
                        <input type="text" class="form-control" id="editarCita__nombre" name="nombre">

                        <h5> <i class="fas fa-users-medical"></i> Apellidos</h5>
                        <input type="text" class="form-control"  id="editarCita__apellidos" name="apellidos">

                        <h5> <i class="fas fa-user-clock"></i> Edad</h5>
                        <input type="number" class="form-control"  id="editarCita__edad" name="edad">

                        <h5> <i class="fas fa-building"></i> Localidad</h5>
                        <input type="text" class="form-control"  id="editarCita__localidad" name="localidad">

                        <h5> <i class="fas fa-phone-alt"></i> Teléfono</h5>
                        <input type="text" class="form-control"  id="editarCita__telefono" name="telefono">

                        <h5> <i class="fas fa-at"></i> E-mail</h5>
                        <input type="email" class="form-control"  id="editarCita__email" name="mail">

                        <h5> <i class="fas fa-ballot-check"></i> Medio de contacto en que solicitó la cita</h5>
                        <select id="editarCita__medioContacto" class="form-select"  name="medio">
                            <option selected>Selecciona una opción</option>
                            <option value="Teléfono">Teléfono</option>
                            <option value="Email">Email</option>
                            <option value="Recepción">Recepción</option>
                        </select>

                        <h5> <i class="fas fa-calendar-day"></i> Día de la cita</h5>
                        <input type="date" class="form-control"  id="editarCita__fecha">

                        <h5> <i class="fas fa-clock"></i> Hora de la cita</h5>
                        <input type="time" class="form-control"  id="editarCita__hora">

                        <h5> <i class="fas fa-pen-alt"></i> Observaciones</h5>
                        <textarea name="observaciones" class="form-control"  id="editarCita__observaciones"></textarea>

                        <select id="editarCita__citaEstatus" class="form-select"  name="medio">
                            <option value="1">Agendada</option>
                            <option value="2">En sala de espera</option>
                            <option value="3">En curso</option>
                            <option value="4">Finalizada</option>
                            <option value="5">Cancelada</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btnEditarCita btn btn-primary">Agendar</button>
                </div>
            </div>
        </div>
    </div>