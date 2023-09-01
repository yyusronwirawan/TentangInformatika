<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata {{ auth()->user()->getNickName() }} | Preview</title>
    <link rel="stylesheet" href="{{ asset('css/biodata-report.css') }}">
</head>

<body>
    @php
        $code = mt_rand(9999, 99999);
        \Carbon\Carbon::setlocale('id');
    @endphp
    <div class="main">
        <div class="container">
            <div class="page-1">
                <div class="header">
                    <img src="{{ asset('storage/image/biodata/kop5.png') }}" alt="">
                </div>
                <div class="preview-menu">
                    <p class="message">
                        Sebelum menekan tombol dibawah ini, anda diharap memeriksa kembali kelengkapan biodata anda.
                        jika ada yang kosong atau salah, silahkan kembali ke halaman biodata untuk mengubahnya karena
                        jika pendaftaran telah ditutup anda tidak akan bisa mengakses <span>halaman ini lagi.</span>
                    </p>
                    <p class="note">
                        *tampilan halaman ini di smartphone atau tablet tidak mempengaruhi hasil di pdf.
                    </p>
                    <div class="link-cover">
                        <a class="export-link"
                            href="{{ route('registrant.pdf.manual', ['identifier' => $user, 'code' => $code]) }}">
                            Manual Download
                        </a>
                        <a class="export-link"
                            href="{{ route('registrant.pdf.auto', ['identifier' => $user, 'code' => $code]) }}">
                            Auto Download
                        </a>
                    </div>
                </div>
                <div class="title">
                    <h1>FORMULIR PENDAFTARAN</h1>
                </div>
                <div class="table-1">
                    <table>
                        <tr>
                            <th class="title">Nama Lengkap</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->fullname }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Email</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->email }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">No. Whatsapp</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->whatsapp }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Agama</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->religion }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Jenis Kelamin</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->sex }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Tempat, Tanggal Lahir</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->city . ', ' . \Carbon\Carbon::parse($user->biodata->birthday)->translatedFormat('d F Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Alamat</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->address }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Asal Kampus</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->university }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Fakultas</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->faculty }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Jurusan</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->major }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Semester</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->semester }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Nama Ayah</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->father }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">No. Telepon Ayah</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->fatherWhatsapp }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Nama Ibu</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->mother }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">No. Telepon Ibu</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->motherWhatsapp }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Penyakit yang diderita</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->disease }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Pengalaman Organisasi</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->organizationsExp }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Tujuan Masuk SCI</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->goals }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="table-2">
                    <table>
                        <tr>
                            <th class="image">
                                <img class="profile" src="{{ asset('storage/' . $user->picture) }}"
                                    alt="{{ $user->name }}" style="width: 150px">
                            </th>
                            <td class="sign-mark">
                                <p>Parepare, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                                <p>Calon Peserta,</p>
                                <br><br><br><br>
                                <p class="name">
                                    {{ $user->biodata->fullname }}
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="footer">
                    <h5>Catatan :</h5>
                    <p>1. Pengembalian formulir tidak dapat di wakili</p>
                </div>
            </div>
            <div class="end-page" />
            <div class="page-2">
                <div class="header">
                    <img src="{{ asset('storage/image/biodata/kop5.png') }}" alt="">
                </div>
                <div class="title">
                    <h1>SURAT PERNYATAAN</h1>
                </div>
                <div class="table-3">
                    <table>
                        <tr>
                            <th class="title">Nama Lengkap</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->fullname }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Agama</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->religion }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Jenis Kelamin</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->sex }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Tempat, Tanggal Lahir</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->city . ', ' . \Carbon\Carbon::parse($user->biodata->birthday)->translatedFormat('d F Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Alamat</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->address }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">Asal Kampus</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->university }}
                            </td>
                        </tr>
                        <tr>
                            <th class="title">No. Whatsapp</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                {{ $user->biodata->whatsapp }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="statement">
                    <h3 class="title">Dengan ini menyatakan bahwa :</h3>
                    <ol class="list">
                        <li class="sub-list-1">Bersedia menjunjung tinggi nama baik SCI.</li>
                        <li class="sub-list-2">Bersedia mematuhi anggaran dasar dan anggaran rumah tangga serta aturan
                            SCI
                            lainnya.</li>
                        <li class="sub-list-3">Bersedia berkontribusi dalam segala kegiatan SCI.</li>
                        <li class="sub-list-4">Bersedia aktif dan mengaktifkan kesekretariatan SCI.</li>
                    </ol>
                    <p class="message">
                        Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan tanpa adanya paksaan dari
                        pihak
                        manapun. Apabila kelak saya melanggar salah satu pdari pernyataan diatas, maka saya bersedia
                        menerima
                        sanksi berupa SP (Surat Peringatan), atau dikeluarkan dari keanggotaan SCI.
                    </p>
                </div>
                <div class="table-4">
                    <table>
                        <tr>
                            <td class="sign-mark">
                                <p>Parepare, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                                <p>Calon Peserta,</p>
                                <div class="materai">
                                    <p>Materai</p>
                                    <p>10000</p>
                                </div>
                                <p class="name">
                                    {{ $user->biodata->fullname }}
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="footer">
                    <h5>Catatan :</h5>
                    <p>1. Penandatanganan harus mengenai materai 10000</p>
                </div>
            </div>
            <div class="end-page" />
            <div class="page-3">
                <div class="header">
                    <img src="{{ asset('storage/image/biodata/kop5.png') }}" alt="">
                </div>
                <div class="date">
                    <span>
                        Parepare, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                    </span>
                </div>
                <div class="table-5">
                    <table>
                        <tr>
                            <th class="title">Hal</th>
                            <td class="colon">:</td>
                            <td class="body ">
                                Permohonan Izin
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="table-6">
                    <table>
                        <tr>
                            <td>
                                <p>Yth. Orang Tua / Wali</p>
                                <p>di-</p>
                                <p>Tempat</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="permission">
                    <h3 class="title">Assalamualaikum Wr. Wb</h3>
                    <p class="sub-title">
                        Sehubungan dengan akan dilaksanakan kegiatan pengkaderan anggota baru Study Club Informatika,
                        yang inshallah akan dilaksanakan pada :
                    </p>
                    <div class="table-7">
                        <table>
                            <tr>
                                <th class="title">Hari / Tanggal</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    Jum'at - Minggu / 19 - 21 Mei 2023
                                </td>
                            </tr>
                            <tr>
                                <th class="title">Pukul</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    16.00 WITA
                                </td>
                            </tr>
                            <tr>
                                <th class="title">Tempat</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    Lowita (tempat bisa saja berubah)
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="sub-title">
                        Maka dengan ini kami selaku panitia pelaksana mengharapkan kepada Bapak/Ibu agar memberikan izin
                        mengikuti kegiatan
                        pengkaderan anggota SCI kepada anak Bapak/Ibu :
                    </p>
                    <div class="table-8">
                        <table>
                            <tr>
                                <th class="title">Nama</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    {{ $user->biodata->fullname }}
                                </td>
                            </tr>
                            <tr>
                                <th class="title">Tempat, Tanggal Lahir</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    {{ $user->biodata->city . ', ' . \Carbon\Carbon::parse($user->biodata->birthday)->translatedFormat('d F Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th class="title">Alamat</th>
                                <td class="colon">:</td>
                                <td class="body ">
                                    {{ $user->biodata->address }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="sub-title">
                        Demikian permohonan izin ini kami sampaikan, atas perhatian bapak/ibu kami mengucapkan banyak
                        terima kasih.
                        Wassalamualaikum Wr. Wb.
                    </p>
                </div>
                <div class="table-9">
                    <table>
                        <tr>
                            <td>
                                <p>Orang Tua / Wali</p>
                                <hr class="line">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        window.print();
    </script> --}}
</body>

</html>
