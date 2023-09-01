<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verified Registrant Table</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/registrant-table.css') }}"> --}}
    <style>
        body {
            /* background-color: #d6d3d1; */
            font-family: Arial, Helvetica, sans-serif;
        }

        .main {
            /* background-color: #f87171; */
            width: 100%;
        }

        .container {
            /* background-color: #fbbf24; */
            max-width: 85rem;
            margin: 0 auto;
        }

        nav h1 {
            font-size: xx-large;
            font-weight: bold;
            padding: 0;
            margin: 0;
            line-height: 1.5;
            text-align: center;
        }

        .export-link {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            text-transform: uppercase;
            background-image: linear-gradient(to bottom left, black, #166534, black);
            transition: all;
            transition-duration: 300ms;
            transition-timing-function: ease-in-out;
        }

        .link-cover {
            display: flex;
            justify-content: center;
            column-gap: 2rem;
            margin: 10px 0;
        }

        .export-link:hover {
            transform: scale(1.1);
            transition: all;
            transition-duration: 300ms;
            transition-timing-function: ease-in-out;
        }

        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        table tr th {
            border: 1px solid #64748b;
            text-align: center;
            padding: 20px 0;
        }

        table tr .num {
            width: 3%;
        }

        table tr .picture {
            width: 12%;
        }

        table tr .name {
            width: 15%;
        }

        table tr .whatsapp {
            width: 12%;
        }

        table tr .gender {
            width: 10%;
        }

        table tr .father,
        .mother {
            width: 12%;
        }

        table tr td {
            text-align: center;
            border: 1px solid #64748b;
        }

        table tr .goals-body {
            text-align: left;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="container">
            <nav>
                <h1>Tabel Pendaftar </h1>
                <h1>Study Club Informatika</h1>
            </nav>
            <main>
                <table>
                    <tr>
                        <th class="num">#</th>
                        <th class="picture">Foto</th>
                        <th class="name">Nama</th>
                        <th class="whatsapp">Whatsapp</th>
                        <th class="gender">Jenis Kelamin</th>
                        <th class="father">No. Telepon Ayah</th>
                        <th class="mother">No. Telepon Ibu</th>
                        <th class="goals">Tujuan</th>
                    </tr>
                    @foreach ($registrants as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->picture) }}" alt="{{ $item->username }}"
                                    style="width: 130px;">
                            </td>
                            <td>{{ $item->biodata->fullname }}</td>
                            <td>{{ $item->biodata->whatsapp }}</td>
                            <td>{{ $item->biodata->sex }}</td>
                            <td>{{ $item->biodata->fatherWhatsapp }}</td>
                            <td>{{ $item->biodata->motherWhatsapp }}</td>
                            <td class="goals-body">{{ $item->biodata->goals }}</td>
                        </tr>
                    @endforeach
                </table>
            </main>
        </div>
    </div>
</body>

</html>
