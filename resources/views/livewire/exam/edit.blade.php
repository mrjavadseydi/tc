<div>

    <div>
        <div class="card message-box-wrap height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>ساخت آزمون</h3>
                    </div>
                </div>
                @if (session()->has('message'))

                    <div class="alert alert-{{session('message')['type']}}">
                        {{session('message')['message'] }}
                    </div>
                @endif
                <form wire:submit.prevent="submit">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>نام آزمون*</label>
                            <input type="text" placeholder="" wire:model.lazy="title" class="form-control">
                            @error('title')
                            <span style="color: red">
                        {{$message}}
                    </span>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>وضعیت*</label>
                            <select dir="rtl" wire:model.debounce.700ms="active"
                                    class="select w-100  @error('active') is-invalid @enderror">

                                <option value="1">
                                    فعال
                                </option>
                                <option value="0">
                                    غیرفعال
                                </option>

                            </select>

                            @error('active')
                            <span style="color: red">
                            {{$message}}
                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12" wire:ignore>
                        <label>توضیحات آزمون*</label>
                        <br>

                        <textarea name="alerts" dir="rtl" class="cke_rtl w-100">{!! $description !!}</textarea>
                    </div>

                    <input class="btn-fill-md text-light bg-dark-pastel-green" type="submit" value="ثبت!">

                </form>
            </div>

        </div>
    </div>
        @section('script')
            <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('alerts', {
                    contentsLangDirection: 'rtl'
                }).on('change', function (e) {
                @this.set('description', e.editor.getData())
                });
                Livewire.on('initializeCkEditor', function () {
                    CKEDITOR.replace('alerts', {
                        contentsLangDirection: 'rtl'
                    }).on('change', function (e) {
                    @this.set('description', e.editor.getData())
                    });
                });
            </script>

        @endsection
</div>
