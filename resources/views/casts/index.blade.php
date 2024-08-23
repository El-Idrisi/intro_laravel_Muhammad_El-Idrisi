<x-main>
    <x-slot:title>
        <h1>Table Casts</h1>
    </x-slot:title>
    <div class="body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <section class="content">
        <!-- Default box -->
        <a href="{{ route('cast.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"> Tambah Data</i>
        </a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Table</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th class="">Nama</th>
                            <th style="">Umur</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($casts as $cast)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $cast->name }}</td>
                            <td>{{ $cast->umur }}</td>
                            <td>
                                <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('cast.show', $cast->id)  }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
    <!-- /.content -->
</x-main>
