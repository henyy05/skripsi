<div class="table-responsive">
    <table class="table" id="dataShps-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>File</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataShps as $dataShp)
            <tr>
                <td>{{ $dataShp->nama }}</td>
            <td>{{ $dataShp->file }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dataShps.destroy', $dataShp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataShps.show', [$dataShp->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dataShps.edit', [$dataShp->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
