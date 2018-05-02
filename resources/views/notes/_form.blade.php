
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" value="{{ isset($note) ? $note->title : ''}}" name="title" placeholder="Escriba el titulo">
        </div>
        <div class="form-group">
            <label for="">Nota</label>
            <textarea type="text" class="form-control" name="body" placeholder="Escriba la nota">{{isset($note) ? $note->body : ''}}</textarea> 
        </div>
        <div class="form-group">
            <div class="checkbox form-check">
                <label>
                    <input type="hidden" name="important" value="0">
                    <input type="checkbox" name="important" value="1" 
                        @if (isset($note))
                        {{ $note->IsImportant() ? 'checked' : '' }}
                        @endif
                     >
                    Es Impotante
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="grupo">Grupo</label>
            <select name="group_id" class="form-control" id="grupo">
            <option value="">--NINGUNO--</option>
            @foreach ($groups as $g)
            <option value="{{$g->id}}">{{ $g->name }}</option>
            @endforeach           
            </select>
        </div>