<div class="col-md-6 mx-auto mt-5">
    <div class="card shadow-lg mb-5">
        <div class="card-body">
            <h1 class="h1 text-center">Inloggen op je account</h1>

            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>

            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-4 col-sm-4 col-md-3 col-form-label text-left text-sm-right pt-4">E-mail:</label>
                            <div class="col-sm-9 col-lg-8">
                                <input type="text" wire:model="email" class="form-control my-2 py-4">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-4 col-sm-4 col-md-3 col-form-label text-left text-sm-right pt-md-4">Wachtwoord:</label>
                            <div class="col-sm-9 col-lg-8">
                                <input type="password" wire:model="password" class="form-control my-2 py-4">
                                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button class="btn text-white btn-block btn-dark" wire:loading.attr="disabled" wire:click.prevent="login">Inloggen</button>
                        <br>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
