<x-main>
    <x-slot:title>
        <h1>Show Table</h1>
    </x-slot:title>

    <section class="content">
        <!-- Default box -->
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
                            <th style="">Bio</th>
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
                            <td>{{ $cast->bio }}</td>
                            <td>
                                <a href="/cast" class="btn btn-primary">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
</x-main>
