<table class="table table-responsive" id="lots-table">
    <thead>
        <th>Farm Id</th>
        <th>Title</th>
        <th>Post Date</th>
        <th>Body</th>
        <th>Lot Type</th>
        <th>Post Visits</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lots as $lot)
        <tr>
            <td>{!! $lot->farm_id !!}</td>
            <td>{!! $lot->title !!}</td>
            <td>{!! $lot->post_date !!}</td>
            <td>{!! $lot->body !!}</td>
            <td>{!! $lot->lot_type !!}</td>
            <td>{!! $lot->post_visits !!}</td>
            <td>
                {!! Form::open(['route' => ['lots.destroy', $lot->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lots.show', [$lot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lots.edit', [$lot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>