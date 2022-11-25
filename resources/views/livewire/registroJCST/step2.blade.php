<div class="container">
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2" style="margin-bottom: 70px; margin-top:40px;">
        <div class="col-2"></div>
        {{--Inicio de campos del Formulario --}}
        <div class="col-9">
                <p class="titulo-naranja">Datos para Iniciar sesión</p>
                <p class="titulo-rojo">Campos (*)</p>
                
                <input class="form-control" type="text" placeholder="* Telefono de contacto" name="telefono_contacto" wire:model="telefono_contacto" name="telefono_contacto">
                @error('telefono') <span class="error">{{ $message }}</span> @enderror
                <input type="text" class="form-control" placeholder="* Correo electrónico" wire:model="email" name="email" accept=".jpg, .jpeg, .png"><br/>
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <input type="password" class="form-control" placeholder="* Contraseña" wire:model="contrasena" name="contrasena" accept=".jpg, .jpeg, .png">
                @error('contrasena') <span class="error">{{ $message }}</span> @enderror
                <br />
                <input type="password" class="form-control" placeholder="* Verificar contraseña" name="password_confirmation" accept=".jpg, .jpeg, .png">
                
                
    
                <br />
            {{--Botones del formulario 2--}}
            <div >
                <a class="btn btn-verde btn-md btn-block"  style="float: left;" wire:click="back(1)">Regresar</a>
                <a  class="btn btn-naranja btn-md btn-block" wire:click="secondStepSubmit" style="float: right;">Continuar</a>
            </div>
    
        </div>
    
        <div class="col-2"></div>
    
    </div>
    
</div>