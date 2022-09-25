<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <!-- Styles 
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>-->
    <title>Laravel</title>

</head>

<body>

    <div class="container">
        <h1>Formulario Empleados</h1>
        <form action="{{ url('Crear_Empleados_web') }}" method="get">
            <input type="hidden" name="id" id="id">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                <input type="text" name="nombre" placeholder="Digite su nombre completo" class="form-control" id="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input onchange="valida()" type="email" name="email" placeholder="Digite su correo" class="form-control" aria-describedby="emailHelp" id="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="M" id="sexoM">
                    <label class="form-check-label" for="M">Masculino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="F" id="sexoF">
                    <label class="form-check-label" for="F">Femenino</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Areas</label>
                <select class="form-select" name="area_id" id="area_id" aria-label="Default select example">
                    @foreach ($areas as $row)
                    <option value="{{@$row->id}}">{{@$row->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <div class="form-floating">
                    <textarea class="form-control" name="descripcion" placeholder="Describa la experiencia del empleado" id="descripcion"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="boletin" id="boletin">
                <label class="form-check-label">Recibir boletin</label>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roles</label>
                <div class="form-check">
                    @foreach ($roles as $row)
                    <input type="checkbox" name="roles[]" id="rol_{{@$row->id}}" value="{{@$row->id}}" />
                    <label class="form-check-label">{{@$row->nombre}}</label>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="btn-enviar">Submit</button>
        </form>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Area</th>
                    <th scope="col">Boletin</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $row)
                <tr>
                    <td>{{@$row->nombre}}</td>
                    <td>{{@$row->email}}</td>
                    <td><?php if ($row->sexo == 'F') {
                            echo 'Femenino';
                        } else {
                            echo 'Masculino';
                        } ?></td>
                    <td>{{@$row->area_nombre}}</td>
                    <td><?php if ($row->boletin == 1) {
                            echo 'Si';
                        } else {
                            echo 'No';
                        } ?></td>
                    <td>
                        <i class="fas fa-user-edit" id="upd" onclick="update('{{@$row->id}}');" value="{{@$row->id}}"></i>
                    </td>
                    <td>
                        <a href="{{ url('/Eliminar_Empleado_web/?id='.@$row->id) }}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script type="text/javascript">
            var msg = "{{Session::get('alert')}}";
            var exist = "{{Session::has('alert ')}}";
            if (exist) {
                alert(msg);
            }



            function valida() {
                var email = $('#email').val();
                var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!expr.test(email)) { //COMPRUEBA MAIL
                    alert("Error: La dirección de correo " + email + " es incorrecta.");
                    return false;
                }
            }

            function update(id) {
                var www = "{{ url('/empleados?id=') }}" + id;
                $.ajax({
                    type: "get",
                    url: www,
                    async: false,
                    success: function(data) {
                        $('#id').val(data[0].id);
                        $('#nombre').val(data[0].nombre);
                        $('#email').val(data[0].email);
                        $('#descripcion').val(data[0].descripcion);
                        $('#area_id').val(data[0].area_id);

                        if (data[0].boletin == 1) {
                            $('#boletin').prop("checked", true);
                        } else {
                            $('#boletin').prop("checked", false);
                        }

                        if (data[0].sexo == "M") {
                            $('#sexoM').prop("checked", true);
                            $('#sexoF').prop("checked", false);
                        } else {
                            $('#sexoM').prop("checked", false);
                            $('#sexoF').prop("checked", true);
                        }


                        $('#rol_1').prop("checked", false);
                        $('#rol_2').prop("checked", false);
                        $('#rol_3').prop("checked", false);
                        $('#rol_4').prop("checked", false);
                        $('#rol_5').prop("checked", false);
                        $('#rol_6').prop("checked", false);
                        $('#rol_7').prop("checked", false);
                        $('#rol_8').prop("checked", false);

                        data[0].roles.forEach(element => {
                            $('#rol_' + element.id).prop("checked", true);
                        });
                    }
                });

            }
        </script>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>


</body>

</html>