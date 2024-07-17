<style>
    body{margin-top:50px;}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
    </style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<a href="{{ url('logout') }}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-log-out"></span> Çıkış Yap </a>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion"> 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Kullanıcı Yönetimi</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                       <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{url('userlist')}}">Kullanıcı Listeleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{url('useredit')}}">Kullanıcı Düzenleme</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                      <span class="glyphicon glyphicon-file text-success"></span><a href="{{url('useradd')}}" class="text-success">Kullanıcı Ekleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="{{url('userdelete')}}" class="text-danger">Kullanıcı Silme</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-file">
                            </span>Kategori Yönetimi</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{url('categorylist')}}">Kategori Listeleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{url('categoryedit')}}">Kategori Düzenleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-success"></span><a href="{{url('categoryadd')}}" class="text-success">Kategori Ekleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="{{url('categorydelete')}}" class="text-danger">Kategori Silme</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-th">
                            </span>Ürün Yönetimi</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks text-primary"></span><a href="{{url('productlist')}}">Ürün Listeleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{url('productedit')}}">Ürün Düzenleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-success"></span><a href="{{url('productadd')}}" class="text-success">Ürün Ekleme</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="{{url('productdelete')}}" class="text-danger">Ürün Silme</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>
                   <td>
                    <span class=""><a href="/task/public/home" target="_self"> E-Ticaret Admin Panel Sayfası</a></span>
                    </td>
                </h1>
            </div>
            <div class="col-md-12">
                <div style="font-size: 20px"> Ürün Düzenleme </div>
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"
                    id="bootstrap-css">
                    <TABLE ALIGN=“LEFT” BORDER=“1”> 

                <style>
                    .custab {
                        border: 1px solid #ccc;
                        padding: 5px;
                        margin: 5% 0;
                        box-shadow: 3px 3px 2px #ccc;
                        transition: 0.5s;
                    }

                    .custab:hover {
                        box-shadow: 3px 3px 0px transparent;
                        transition: 0.5s;
                    }
                </style>
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <!------ Include the above in your HEAD tag ---------->

                <div class="container">
                    <div class="row col-md-12 custyle">
                        <table class="table table-striped custab">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ProductTitle</th>
                                    <th>ProductCategoryId</th>
                                    <th>Barcode</th>
                                    <th>ProductStatus</th>
                                    <th class="text-center">Düzenleme</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>kerem34</td>
                                <td>kerems36</td>
                                <td>12345</td>
                                <td>12345</td>
                                <td class="text-center"><a class='btn btn-success btn-xs' href="#"><span
                                            class="glyphicon glyphicon-ok"></span> Düzenle</a> 
                                        </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>kerem53</td>
                                <td>keremss53</td>
                                <td>12345</td>
                                <td>12345</td>
                                <td class="text-center"><a class='btn btn-success btn-xs' href="#"><span
                                    class="glyphicon glyphicon-ok"></span> Düzenle</a> 
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kerem44</td>
                                <td>keremss44</td>
                                <td>12345</td>
                                <td>12345</td>
                                <td class="text-center"><a class='btn btn-success btn-xs' href="#"><span
                                    class="glyphicon glyphicon-ok"></span> Düzenle</a> 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
