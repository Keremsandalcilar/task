<style>
    .accordion {
        background-color: #000 !important;
    }

    .accordion-item {
        background-color: #5a2b2bAA;
        color: #ffffff;
    }

    .accordion-body>a {
        color: #ffffff;
    }

    .accordion-item>.accordion-header>button {
        background-color: #5a2b2b;
        color: #ffffff;
    }
</style>

<div class="accordion accordion-flush bg-primary" id="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Kullanıcı Yönetimi
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{ url('userlist') }}">Kullanıcı
                    Listeleme</a>

                <span class="glyphicon glyphicon-file text-success"></span><a href="{{ url('useradd') }}"
                    class="text-success">Kullanıcı Ekleme</a>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Kategori Yönetimi
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{ url('categorylist') }}">Kategori
                    Listeleme</a>
                <span class="glyphicon glyphicon-file text-success"></span><a href="{{ url('categoryadd') }}"
                    class="text-success">Kategori Ekleme</a>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Ürün Yönetimi
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{ url('productlist') }}">Ürün
                    Listeleme</a>
                <span class="glyphicon glyphicon-file text-success"></span><a href="{{ url('productadd') }}"
                    class="text-success">Ürün Ekleme</a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="height"class="panel-group" id="accordion">
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span
                        class="glyphicon glyphicon-user">
                    </span>Kullanıcı Yönetimi</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-tasks text-primary"></span><a
                                href="{{ url('userlist') }}">Kullanıcı Listeleme</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-success"></span><a href="{{ url('useradd') }}"
                                class="text-success">Kullanıcı Ekleme</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span
                        class="glyphicon glyphicon-file">
                    </span>Kategori Yönetimi</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-tasks text-primary"></span><a
                                href="{{ url('categorylist') }}">Kategori Listeleme</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-success"></span><a
                                href="{{ url('categoryadd') }}" class="text-success">Kategori Ekleme</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span
                        class="glyphicon glyphicon-th">
                    </span>Ürün Yönetimi</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-tasks text-primary"></span><a
                                href="{{ url('productlist') }}">Ürün Listeleme</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-success"></span><a href="{{ url('productadd') }}"
                                class="text-success">Ürün Ekleme</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> --}}
