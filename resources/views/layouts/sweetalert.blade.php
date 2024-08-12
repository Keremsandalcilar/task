<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('swallMessages'))
    <script>
        swal({
            title: "{{ Session::get('swallMessages.title') }}",
            text: "{{ Session::get('swallMessages.text') }}",
            icon: "{{ Session::get('swallMessages.icon') }}",
            button: "OK",
            timer: 5000,
            dangerMode: false,
        });
    </script>
@endif

<script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
                title: "Silmek istediğinizden emin misiniz ?",
                text: "Bu işlem geri alınamaz!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
    }
</script>
