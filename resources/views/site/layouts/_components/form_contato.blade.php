
        <form action="{{route('contato')}}" method="post">
            @csrf
            <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="borda-preta">
            @if ($errors->has('nome'))
                {{$errors->first('nome')}}
            @endif

            <br>
            <input name="telefone" type="text" value="{{old('telefone')}}" placeholder="Telefone" class="borda-preta">
            @if ($errors->has('telefone'))
                {{$errors->first('telefone')}}
            @endif
            <br>
            <input name="email" type="email" value="{{old('email')}}" placeholder="E-mail" class="borda-preta">
            @if ($errors->has('email'))
                {{$errors->first('email')}}
            @endif
            <br>
            <select name="motivo_contatos_id" class="borda-preta">
                <option value="">Qual o motivo do contato?</option>

               @foreach($motivo_contatos as $key =>$motivo_contato)
                    <option value="{{$motivo_contato->id}}"  {{old('motivo_contato_id') ==$motivo_contato->id ? 'selected' : '' }}         >{{$motivo_contato->motivo_contato}}</option>
               @endforeach
            </select>
            @if ($errors->has('motivo_contatos_id'))
                {{$errors->first('motivo_contatos_id')}}
            @endif
            <br>
            <textarea name="mensagem" class="borda-preta" value="{{old('mensagem')}}" placeholder="Preencha aqui a sua mensagem"></textarea>
            @if ($errors->has('mensagem'))
                {{$errors->first('mensagem')}}
            @endif
            <br>
            <button type="submit" class="borda-preta">ENVIAR</button>
        </form>
    </div>
    @if($errors->any())

    <div style="position: absolute; top:0px; left:0px; width:100%; background:red ">

    </div>
    @endif
