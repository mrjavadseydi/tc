<script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('asset/js/plugins.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<!-- Counterup Js -->
<script src="{{asset('asset/js/select2.min.js')}}"></script>
<!-- Date Picker Js -->
<script src="{{asset('asset/js/datepicker.min.js')}}"></script>
<!-- Scroll Up Js -->
<script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('asset/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('asset/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.3/sweetalert2.min.js" integrity="sha512-vU//bDmQBZyvfOmsBHrOUc9+iMs32JjycRIyZQMOPQ9kDF9+NhnDAMTVsH/vDoRmqbfB/EO2YYj73MZ3C17yBw==" crossorigin="anonymous"></script>
@toastr_js
@toastr_render
<script>
@if ($errors->any())

    @foreach ($errors->all() as $error)
        toastr.error('{{ $error }}', '', []);
        @endforeach

        @endif
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        $(".confirmed").on("click", function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'مطمئن هستید؟',
                text: "قادر به بازگردانی اطلاعات نخواهید بود.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#858585',
                confirmButtonText: 'بله، مطمئن هستم',
                cancelButtonText: 'خیر',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = $(this).attr("href");
                }
            })
        })
    })
</script>
