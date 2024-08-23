<x-main>
    <x-slot:title>
        <h1>Update Data</h1>
    </x-slot:title>

    <section class="content">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($casts as $cast)
            <form action="{{ route('cast.update', $cast->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name"
                                name="name" value="{{ old('name', $cast->name) }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" placeholder="Masukan Umur"
                                name="umur" value="{{ old('umur', $cast->umur) }}">
                        </div>
                        @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea type="number" class="form-control" id="bio" placeholder="Masukan Bio" name="bio">{{ old('bio', $cast->bio) }}</textarea>
                        </div>
                        @error('bio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>

</x-main>
