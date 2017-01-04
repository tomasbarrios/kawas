<table class="table table-responsive" id="farms-table">
    <thead>
        <th>Coffee Origin Id</th>
        <th>Title</th>
        <th>Post Date</th>
        <th>Body</th>
        <th>Post Type</th>
        <th>Post Visits</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($farms as $farm)
        <tr>
            <td>{!! $farm->coffee_origin_id !!}</td>
            <td>{!! $farm->title !!}</td>
            <td>{!! $farm->post_date !!}</td>
            <td>{!! $farm->body !!}</td>
            <td>{!! $farm->post_type !!}</td>
            <td>{!! $farm->post_visits !!}</td>
            <td>
                {!! Form::open(['route' => ['farms.destroy', $farm->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farms.show', [$farm->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farms.edit', [$farm->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>