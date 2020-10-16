
<livewire:components.fluid-container>

<div class="container py-5">
    <div class="row">

        <div class="col-3">
            <div class="card elegant-color-dark text-white">
                <div class="card-body">
                    @livewire('components.content-editor', ['key' => 'contact_info_para'])
                </div>
            </div>
        </div>
        <div class="col-9 pr-4">
            <div class="card elegant-color-dark">
                <div class="card-body">
                    <livewire:components.contact-form>
                </div>
            </div>
        </div>
    </div>
</div>