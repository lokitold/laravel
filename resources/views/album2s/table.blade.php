<table class="table table-responsive" id="album2s-table">
    <thead>
        <th>Name</th>
        <th>Route</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($album2s as $album2)
        <tr>
            <td>{!! $album2->name !!}</td>
            <td>{!! $album2->route !!}</td>
            <td>{!! $album2->status !!}</td>
            <td>
                {!! Form::open(['route' => ['album2s.destroy', $album2->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('album2s.show', [$album2->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('album2s.edit', [$album2->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
