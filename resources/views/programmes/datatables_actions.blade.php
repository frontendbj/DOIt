{!! Form::open(['route' => ['programmes.destroy', $programme->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('programmes.show', $programme->id) }}" class='btn btn-sm btn-square btn-success'>
       <i class="fa fa-eye"></i>
    </a>
</div>
{!! Form::close() !!}
