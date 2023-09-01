<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registrant-table.css') }}">
    <title>Verified Registrant Table</title>
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
    <script>
        window.print();
    </script>
</body>

</html>
