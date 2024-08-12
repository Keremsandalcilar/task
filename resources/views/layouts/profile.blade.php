<div class="container">
    <div class="row profile col-md-4">
        <div class="col-md-10">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="https://cdn1.ntv.com.tr/gorsel/e8opKTVsvECYVY5-4m0s-g.jpg?width=1000&mode=crop&scale=both"
                        class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ auth()->user()->title }}
                    </div>
                    <div class="profile-usertitle-job">
                        Developer
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="/task/public/home">
                                <i class="glyphicon glyphicon-home"></i>
                                Ana Sayfa </a>
                        </li>
                        <li>
                            <a href="{{ url('useredit', auth()->user()->id) }}">
                                <i class="glyphicon glyphicon-user"></i>
                                Kullanıcı Ayarı </a>
                        </li>
                    </ul>
                    <div class="right">
                        <a href="{{ url('logout') }}" class="btn btn-sm btn-danger "><span
                                class="glyphicon glyphicon-log-out"></span> Çıkış Yap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
