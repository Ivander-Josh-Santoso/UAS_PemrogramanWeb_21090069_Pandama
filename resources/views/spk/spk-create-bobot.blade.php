@extends('layouts.main')

@section('container')
    <section id="premium">
        <div class="container-fluid py-5 mt-3 px-5">
            <h2 class="text-center fw-bolder">Decision Support Systems</h2>
            <p class="text-center">Pandama will Help you choose the best guesthous for you, Master!</p>
            <h4 class="fw-bolder">Matriks Bobot</h4>
            <form action="" method="POST">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Variabel</th>
                            <th>Harga</th>
                            <th>Luas Parkir m2</th>
                            <th>Luas Kamar m2</th>
                            <th>Jumlah Kasur</th>
                            <th>Kamar Mandi</th>
                            <th>Daya Tampung Tamu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Harga</td>
							<td><input type="number" name="k1" value="{{ $hh }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $hb }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $ht }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $hk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $hm }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $hd }}" style="width: 200px" class="text-center"></td>
                        </tr>
                        <tr>
                            <td>Luas Parkir m2</td>
							<td><input type="number" name="k1" value="{{ $bh }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $bb }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $bt }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $bk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $bm }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $bd }}" style="width: 200px" class="text-center"></td>
                        </tr>
                        <tr>
                            <td>Luas Kamar m2</td>
							<td><input type="number" name="k1" value="{{ $th }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $tb }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $tt }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $tk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $tm }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $td }}" style="width: 200px" class="text-center"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Kasur</td>
							<td><input type="number" name="k1" value="{{ $kh }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $kb }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $kt }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $kk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $km }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $kd }}" style="width: 200px" class="text-center"></td>
                        </tr>
                        <tr>
                            <td>Kamar Mandi</td>
							<td><input type="number" name="k1" value="{{ $mh }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $mb }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $mt }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $mk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $mm }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $md }}" style="width: 200px" class="text-center"></td>
                        </tr>
                        <tr>
                            <td>Daya Tampung Tamu</td>
							<td><input type="number" name="k1" value="{{ $dh }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k2" value="{{ $db }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k3" value="{{ $dt }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k4" value="{{ $dk }}" style="width: 200px" class="text-center"></td>
							<td><input type="number" name="k5" value="{{ $dm }}" style="width: 200px" class="text-center"></td>
                            <td><input type="number" name="k6" value="{{ $dd }}" style="width: 200px" class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="d-flex justify-content-between">
                <a href="/spk" class="btn btn-danger col-lg-3 rounded-0 fw-bold">CANCEL</a>
                <a href="/spk/normalisasi-matriks" class="btn btn-dark col-lg-3 rounded-0 fw-bold" style="background-color: rgb(34, 139, 34)">NORMALISASI</a>
            </div>
        </div>
    </section>
@endsection