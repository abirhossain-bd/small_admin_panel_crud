<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



@if (session('success'))
    <script>
        Toastify({
            text: "{{ session('success') }}",
            duration: 5000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            stopOnFocus: true
        }).showToast();
    </script>
@endif



