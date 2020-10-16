<div class="container text-white">

    <h3 class="h3">Contactformulier</h3>

    @livewire('components.content-editor', ['key' => 'contact_para'])

    <form wire:submit.prevent="submit">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->has('*'))
            <div>
                <div class="alert alert-danger ">
                    Er is iets misgegaan, controleer de velden.
                </div>
            </div>
        @endif

        <div class="md-form">
            <input type="text" id="email" class="form-control" wire:model="email">
            <label for="email">E-mail *</label>
            @error('email') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="md-form">
            <input type="text" id="naam" class="form-control" wire:model="naam">
            <label for="naam">Naam *</label>
            @error('naam') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="md-form">
            <input type="text" id="telefoonnummer" class="form-control" wire:model="telefoonnummer">
            <label for="telefoonnummer">Telefoonnummer</label>
            @error('telefoonnummer') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="md-form">
            <textarea id="bericht" class="form-control md-textarea" wire:model="bericht" rows="3"></textarea>
            <label for="bericht">Bericht *</label>
            @error('bericht') <small class="error">{{ $message }}</small> @enderror
        </div>



        <button class="btn m-0 btn-elegant waves-effect waves-light" type="submit">Versturen</button>

            <small class="float-right">Velden met een * zijn verplicht</small>
    </form>

</div>

@push('js')
@endpush
