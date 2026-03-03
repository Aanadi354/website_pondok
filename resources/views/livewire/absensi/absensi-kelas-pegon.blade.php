<main id="main" class="main">

    <div class="pagetitle">
        <h1>Absensi Kelas Pegon</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <!-- Input Tanggal -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>Tanggal</label>
                        <input type="date" wire:model="tanggal" class="form-control">
                    </div>
                </div>

                <form wire:submit.prevent="save">

                    @if($santris->count() > 0)

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($santris as $index => $santri)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $santri->nomor_induk }}</td>
                                    <td>{{ $santri->nama }}</td>
                                    <td>
                                        <select wire:model="status.{{ $santri->id }}" class="form-control">
                                            <option value="hadir">Hadir</option>
                                            <option value="izin">Izin</option>
                                            <option value="sakit">Sakit</option>
                                            <option value="alpha">Alpha</option>
                                        </select>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button type="submit" class="btn btn-primary">
                            Simpan Absensi
                        </button>

                    @else

                        <div class="alert alert-warning text-center">
                            Tidak ada santri di kelas Pegon.
                        </div>

                    @endif

                </form>

            </div>
        </div>
    </section>

</main>