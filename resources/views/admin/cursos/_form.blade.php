<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
  <label>Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  <label>Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  <label>Valor</label>
</div>

<div class="file-field input-field">

  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  
</div>
