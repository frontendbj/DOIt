@section('css')
    @include('layouts.datatables_css')
@endsection


<table id="dataTable" class="table compact table-striped table-bordered nowrap">
    <thead>
    <tr>
        <th>N°</th>
        <th>Désignation</th>
        <th>Période</th>
        <th>Etat</th>
        <th width="280px">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($programmes as $key => $programme)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $programme->name }}</td>
                <td>{{ date('d-m-Y',strtotime($programme->date_debut)) }} - {{ date('d-m-Y',strtotime($programme->date_fin)) }}</td>
                <td>
                    @if($programme->etat == 1)
                        <label for="" class="badge badge-primary">Actif pour édition</label>
                        @hasanyrole('Admin|Directeur|Moniteur')
                        <a href="{{ route('programmes.etat', [ 'state'=>'close', 'el'=>$programme->id ]) }}" class='btn btn-sm btn-square btn-danger'>Fermer</a> 
                        @endhasanyrole
                    @elseif($programme->etat == 3) 
                       <label for="" class="badge badge-success">Cloturé</label>
                        <a href="{{ route('programmes.consulter', $programme->id ) }}" class='btn btn-sm btn-square btn-info'><li class="fa fa-list"></li> Consulter</a>
                    @else
                        <label for="" class="badge badge-warning">Nouveau</label>
                        @hasanyrole('Admin|Directeur|Moniteur')
                        <a href="{{ route('programmes.etat', [ 'state'=>'start', 'el'=>$programme->id ]) }}" class='btn btn-sm btn-square btn-primary'>Démarrer</a>
                        @endhasanyrole
                    @endif 

                </td>
                <td style="width: 20%; text-align:center;">
                    @hasanyrole('Admin|Directeur|Moniteur')
                        @include('programmes.datatables_actions')
                    @endhasanyrole
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('script')
    @include('layouts.datatables_js')
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable({
        language: {
               url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            },
        searching : false,
        lengthChange : false
    });
    });
</script>
@endpush
