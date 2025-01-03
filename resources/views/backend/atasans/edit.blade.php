@extends('backend.layouts.app')

@section('title', 'edit')


@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Atasan</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mt-6">
            <div class="card-body">
                <form method="POST" action="{{ route('atasans.update', $atasan->uuid) }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name"><strong>Name:</strong></label>
                                <input type="text" name="name" value="{{ $atasan->name }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_id"><strong>Pilih User:</strong></label>
                                <select class="form-select select-single" name="user_id" required>
                                    <option value="" disabled>Pilih User</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $atasan->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }} ({{ $user->email }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nip"><strong>NIP:</strong></label>
                                <input type="text" name="nip" class="form-control" required value="{{ $atasan->nip }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pangkat_id"><strong>Pangkat:</strong></label>
                                <select class="form-select select-single" name="pangkat_id" required>
                                    <option value="" disabled selected>Pilih Pangkat</option>
                                    @foreach ($pangkats as $pangkat)
                                    <option value="{{ $pangkat->id }}"
                                        {{ $atasan->pangkat_id == $pangkat->id ? 'selected' : '' }}>
                                        {{ $pangkat->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="jabatan"><strong>Jabatan:</strong></label>
                                <input type="text" name="jabatan" value="{{ $atasan->jabatan }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="unitkerja"><strong>Unit Kerja:</strong></label>
                                <input type="text" name="unit_kerja" value="{{ $atasan->unit_kerja }}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-phoenix-secondary me-1 mb-1">
                                <i class="fa-solid fa-floppy-disk"></i> Submit
                            </button>
                            <a class="btn btn-phoenix-danger me-1 mb-1" href="{{ route('atasans.index') }}"><i
                                    class="fa fa-arrow-left"></i>
                                Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('/assets/backend/js/helper.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
@if(session('status'))
// Pastikan session('status') adalah string, bukan array
let statusMessage = @json(session('status'));
if (typeof statusMessage === 'object') {
    statusMessage = statusMessage.message || 'Unknown status';
}
toastSuccess(statusMessage);
@endif
</script>
@endpush