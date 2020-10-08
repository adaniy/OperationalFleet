@extends('punet.layout')


@section('content')

    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('punet.updateprogres',$puna) }}">
                @method('put')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Shtoi progres punes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="window.location='/punet';"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Puna</label>
                        <input type="text" class="form-control" readonly value="{{ $puna->lloji }}" required>
                    </div>
                    <div class="form-group">
                        <label>Perqindja e perfunduar</label>
                        <input name="progresi"  type="number" class="form-control" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" value="Anulo" onclick="window.location='/punet';">
                    <input type="submit" class="btn btn-primary" value="Shto" >
                </div>
            </form>
        </div>
    </div>

@endsection

