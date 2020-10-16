
<livewire:components.fluid-container>

<div class="container">
    <div class="row mt-5 py-4">
        <div class="col-6">
            <div class="card elegant-color-dark text-white z-depth-2">
                <div class="card-body p-4 text-center">
                    @livewire('components.content-editor', ['key' => 'home_para_1'])
                 </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card elegant-color-dark text-white z-depth-2">
                <div class="card-body p-4 text-center">
                    @livewire('components.content-editor', ['key' => 'home_para_2'])
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid my-5 py-5 elegant-color-dark z-depth-4">
    <div class="container">
        <div class="row text-white">
            @livewire('components.content-editor', ['key' => 'test'])
        </div>
    </div>
</div>

<br>
<br>
