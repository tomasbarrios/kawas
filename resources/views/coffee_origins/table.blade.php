<table class="table table-responsive" id="coffeeOrigins-table">
    <thead>
        <th>Title</th>
        <th>Post Date</th>
        <th>Body</th>
        <th>Country</th>
        <th>Post Visits</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($coffeeOrigins as $coffeeOrigin)
        <tr>
            <td>{!! $coffeeOrigin->title !!}</td>
            <td>{!! $coffeeOrigin->post_date !!}</td>
            <td>{!! $coffeeOrigin->body !!}</td>
            <td>{!! $coffeeOrigin->country !!}</td>
            <td>{!! $coffeeOrigin->post_visits !!}</td>
            <td>
                {!! Form::open(['route' => ['coffeeOrigins.destroy', $coffeeOrigin->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coffeeOrigins.show', [$coffeeOrigin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coffeeOrigins.edit', [$coffeeOrigin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>