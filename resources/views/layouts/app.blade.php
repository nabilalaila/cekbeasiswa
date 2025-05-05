<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CekBeasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
</head>
<body style="margin: 0;">
    @if (empty($noNavbar))
        @include('components.navbar')
    @endif

    <div style="display: flex; height: 100vh; overflow: hidden;">
        @if (empty($noNavbar))
            <div style="width: 250px; background-color: #f8f9fa;">
                @include('components.sidebar', ['user' => $user ?? null])
            </div>
        @endif

        <div style="flex-grow: 1; overflow-y: auto; padding: 0px;">
            @yield('content')
        </div>
    </div>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      @if(session('error'))
        Swal.fire({ icon: 'error', title: 'Error', text: @json(session('error')) });
      @endif
      @if(session('success'))
        Swal.fire({ icon: 'success', title: 'Success', text: @json(session('success')) });
      @endif
    </script>
    </body>
</html>
