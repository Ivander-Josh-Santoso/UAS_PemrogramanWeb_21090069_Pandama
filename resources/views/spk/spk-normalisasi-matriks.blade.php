@extends('layouts.main')

@section('container')
    <section id="premium">
        <div class="container-fluid py-5 mt-3 px-5">
            <h2 class="text-center fw-bolder">Decision Support Systems</h2>
            <p class="text-center">Pandama will Help you choose the best guesthous for you, Master!</p>
            <h4 class="fw-bolder">Normalisasi Matriks Bobot</h4>
            <form action="" method="POST">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Harga</th>
                            <th>Luas Parkir m2</th>
                            <th>Luas Kamar m2</th>
                            <th>Jumlah Kasur</th>
                            <th>Kamar Mandi</th>
                            <th>Daya Tampung Tamu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($normalisasi as $matriks)
                        <tr>
							<td><input type="number" name="k1" value="{{ $matriks->harga }}" style="width: 200px" class="text-center" readonly></td>
							<td><input type="number" name="k2" value="{{ $matriks->luas_parkir }}" style="width: 200px" class="text-center" readonly></td>
							<td><input type="number" name="k3" value="{{ $matriks->luas_kamar }}" style="width: 200px" class="text-center" readonly></td>
							<td><input type="number" name="k4" value="{{ $matriks->Jumlah_kasur }}" style="width: 200px" class="text-center" readonly></td>
							<td><input type="number" name="k5" value="{{ $matriks->kamar_mandi }}" style="width: 200px" class="text-center" readonly></td>
                            <td><input type="number" name="k6" value="{{ $matriks->daya_tampung_tamu }}" style="width: 200px" class="text-center" readonly></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
            <div class="d-flex justify-content-between">
                <a href="/spk" class="btn btn-danger col-lg-3 rounded-0 fw-bold">CANCEL</a>
                <a href="/spk/konsistensi" class="btn btn-dark col-lg-3 rounded-0 fw-bold" style="background-color: rgb(34, 139, 34)">CEK KONSISTENSI</a>
            </div>
        </div>
    </section>
@endsection