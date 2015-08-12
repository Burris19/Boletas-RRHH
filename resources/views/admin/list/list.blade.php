<div class="block full">
    <!-- Get Started Title -->
    <div class="block-title">
        <h2 id="list-description">@section('list-title')Listado @show </h2>
    </div>
    <!-- END Get Started Title -->
    @section('list-content')
        <div id="list" class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        @section('buttons')
                            <a href="#modal-create" class="btn btn-next btn-fill btn-info btn-wd btn-sm" data-toggle="modal">@yield('button-create-text','Nuevo')</a>
                        @show
                    </div>
                </div>

                <br/>

                <div class="table-responsive">
                    <table id="tbl-data" class="table table-striped table-bordered table-vcenter">
                        <thead>
                            <tr>
                                @yield('list-content-columns')
                            </tr>
                        </thead>
                        <tbody>
                            @yield('list-content-values')
                        </tbody>
                        <tfoot>
                            @yield('list-content-footer')
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    @show
</div>
