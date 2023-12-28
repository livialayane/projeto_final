<div>
            <form action="#" class="sign-up-form" data-aos="fade-up" data-aos-delay="300">
              <input type="text" wire:model="nome" class="form-control" placeholder="Seu nome">
              <input type="text" wire:model="telefone" class="form-control" placeholder="Seu telefone">
              <input type="text" wire:model="cidade" class="form-control" placeholder="Cidade">
              
              <select wire:model="beneficio" name="beneficios" id="beneficio" >
                <option value="" disabled selected hidden>Selecione seu beneficio</option>

                @foreach ($servico as $texto)
                <option value="{{ $texto['id'] }}">{{ $texto['titulo'] }}</option>
                @endforeach
              </select>
              <textarea wire:model="descricao" name="" id="areatext" cols="30" rows="3" placeholder="Descreva"></textarea>
              <button class="btn btn-primary" wire:click="salvarcliente">Enviar</button>
            </form>
</div>
