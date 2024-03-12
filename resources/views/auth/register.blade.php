@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3 d-flex justify-content-between">
                            <div style="width: 48%;">
                                <label for="nama_lengkap" class="form-label">{{ __('Nama Lengkap') }}</label>
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div style="width: 48%;">
                                <label for="no_hp" class="form-label">{{ __('No Handphone') }}</label>
                                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div style="width: 48%;">
                                <label for="jenjang_id" class="form-label">{{ __('Jenjang') }}</label>
                                <select id="jenjang_id" class="form-select @error('jenjang_id') is-invalid @enderror" name="jenjang_id" required>
                                    <option value="" selected disabled>Pilih Jenjang :</option>
                                    @foreach($jenjangs as $jenjang)
                                        <option value="{{ $jenjang->id }}" data-jenjang-id="{{ $jenjang->id }}">{{ $jenjang->nama_jenjang }}</option>
                                    @endforeach
                                </select>

                                @error('jenjang_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div style="width: 48%;">
                                <label for="kelas_id" class="form-label">{{ __('Kelas') }}</label>
                                <select id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror" name="kelas_id" required>
                                    <option value="" selected disabled>Pilih Kelas :</option>
                                </select>

                                @error('kelas_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email ') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div style="width: 48%;">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div style="width: 48%;">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var jenjangSelect = document.getElementById('jenjang_id');
        var kelasSelect = document.getElementById('kelas_id');
        var kelasOptions = {!! json_encode($kelas->groupBy('jenjang_id')->toArray()) !!};

        jenjangSelect.addEventListener('change', function () {
            var selectedJenjangId = parseInt(this.options[this.selectedIndex].getAttribute('data-jenjang-id'));
            kelasSelect.innerHTML = ' <option value="" selected disabled>Pilih Kelas :</option>';

            if (kelasOptions[selectedJenjangId]) {
                kelasOptions[selectedJenjangId].forEach(function (kelas) {
                    var option = document.createElement('option');
                    option.value = kelas.id;
                    option.text = kelas.nama_kelas;
                    kelasSelect.appendChild(option);
                });
            }
        });
    });
</script>
@endsection
