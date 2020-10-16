
<div>
    @if(request()->user() && request()->user()->isAdmin())
        <form wire:submit.prevent="updateText" style="width: 100%;">
            <div wire:ignore>
             <textarea
                 class="form-control"
                 id="editable-text-{{$key}}"
                 name="content"
                 wire:model.lazy="content"
             ></textarea>
            </div>

            @error('content')
            <br>
            <span style="" class="error">{{ $message }}</span>
            @enderror

            @if (session()->has('message'))
                <div>
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            <button type="submit" class="btn btn-success btn-sm mt-0" >opslaan</button>
        </form>
    @else
    {!! $content !!}
    @endif
</div>

@push('js')
    <script>

        $(document).ready(function () {
            CKEDITOR.inline( 'editable-text-{{$key}}', {
                extraPlugins: 'sourcedialog,mentions',
                allowedContent  : true,
                filebrowserImageBrowseUrl: '/admin/file_manager',
                filebrowserImageUploadUrl: '/admin/file_manager/upload&_token=@csrf',
                filebrowserBrowseUrl: '/admin/file_manager?type=Files',
                filebrowserUploadUrl: '/admin/file_manager/upload?type=Files&_token=@csrf',
                contentsCss : 'https://use.fontawesome.com/releases/v5.8.2/css/all.css',
                mentions: [
                    {{--{--}}
                    {{--    marker: '@',--}}
                    {{--    feed: CKEDITOR.tools.array.map( dataGlobalSettings{{$key.$randomStr}}, function( obj ) {--}}
                    {{--        return obj.key;--}}
                    {{--    }),--}}
                    {{--    minChars: 0--}}
                    {{--},--}}
                    {{--{--}}
                    {{--    marker: '#',--}}
                    {{--    feed: CKEDITOR.tools.array.map( dataLocal{{$key.$randomStr}}, function( item ) {--}}
                    {{--        return item;--}}
                    {{--    }),--}}
                    {{--    minChars: 0--}}
                    {{--}--}}
                ],
                on: {
                    change: function(e){
                        @this.set('content', e.editor.getData())
                    }
                }
            } );
            CKEDITOR.dtd.$removeEmpty.i = 0;

        });
    </script>
@endpush
