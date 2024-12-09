<x-admin::layouts>
    @section('page_title')
        {{ __('category::app.categories.index.title') }}
    @stop

    This is custom category page
    @section('content-wrapper')
        <div class="content full-page">

            <table-component data-src="{{ route('admin.category.index') }}">
                <template v-slot:table-header>
                    <h1>
                        {!! view_render_event('admin.products.index.header.before') !!}



                        {{ __('Category') }}

                        {!! view_render_event('admin.products.index.header.after') !!}
                    </h1>

                </template>

                <template v-slot:table-action>
                    <a href="" class="btn btn-md btn-primary">{{ __('Create Category') }}</a>
                </template>
                <table-component>
        </div>
    @stop

</x-admin::layouts>

