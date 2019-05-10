<?/*
###########################################################
#                     --PÁGINA PRINCIPAL--                #
#                                                         #
#                Autor: Murillo André Maleski             #
#                   Diário de Bordo Online                #
###########################################################
*/?>

<?php
	require 'comum.php';
	
	session_start();
	
	c_header();
?>
	<div id="page">
	<div class="aw-layout-page">	
		
		<section class="aw-layout-content  js-content">
			<div class="page-header">
				<div class="container-fluid">
					<h1>
						Cadastro de serviço
					</h1>
				</div>
			</div>
			
			<div class="container-fluid">
			
				<!-- >div class="alert  alert-danger  alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<i class="fa  fa-exclamation-circle"></i> Já existe um serviço com o nome informado.
				</div-->
			
				<form method = "POST" class="form-vertical  js-form-loading">
					
					<div class="form-group">
						<label for="nome">Título</label>
						<input id="nome" type="text" class="form-control"/>
					</div>
			
					<div class="form-group">
						<label for="desc">Descrição</label>
						<textarea id="desc" rows="5" class="form-control"></textarea>
					</div>
					
					<div class="form-group">
						<label for="contato">Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control"> 
							    <option value="estado">Selecione o Estado</option> 
							    <option value="ac">Acre</option> 
							    <option value="al">Alagoas</option> 
							    <option value="am">Amazonas</option> 
							    <option value="ap">Amapá</option> 
							    <option value="ba">Bahia</option> 
							    <option value="ce">Ceará</option> 
							    <option value="df">Distrito Federal</option> 
							    <option value="es">Espírito Santo</option> 
							    <option value="go">Goiás</option> 
							    <option value="ma">Maranhão</option> 
							    <option value="mt">Mato Grosso</option> 
							    <option value="ms">Mato Grosso do Sul</option> 
							    <option value="mg">Minas Gerais</option> 
							    <option value="pa">Pará</option> 
							    <option value="pb">Paraíba</option> 
							    <option value="pr">Paraná</option> 
							    <option value="pe">Pernambuco</option> 
							    <option value="pi">Piauí</option> 
							    <option value="rj">Rio de Janeiro</option> 
							    <option value="rn">Rio Grande do Norte</option> 
							    <option value="ro">Rondônia</option> 
							    <option value="rs">Rio Grande do Sul</option> 
							    <option value="rr">Roraima</option> 
							    <option value="sc">Santa Catarina</option> 
							    <option value="se">Sergipe</option> 
							    <option value="sp">São Paulo</option> 
							    <option value="to">Tocantins</option> 
							</select>
							<input id="cidade" type="text" class="form-control" value="Digite sua Cidade"/>
						</div>
					</div>
					
					<div class="form-group">
						<label for="categorias">Categorias</label>
						<select id='optgroup' multiple='multiple'>
						    <optgroup label='Construção Civil'>
								<option value='1'>Pedreiro</option>
							   	<option value='2'>Eletrecista</option>
							   	<option value='3'>Encanador</option>
							   	<option value='4'>Arquitetura</option>
							   	<option value='5'>Paisagismo</option>
							</optgroup>
							<optgroup label='Prestação de Serviços'>
								<option value='6'>Montador de Móveis</option>
							    <option value='7'>Mudança</option>
							</optgroup>
						</select>
					</div>
					
					<div class="form-group">
						<label for="categorias">Tags</label>
						<input type="text" class="form-control" name="tags"/>
					</div>
					
					<div class="form-group">
						<label for="contato">Contatos</label>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src th:href="@{/sprite/sprite.svg#si-glyph-call}"/></svg></div>
							<textarea id="contato" rows="3" class="form-control"></textarea>
						</div>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src th:href="@{/sprite/sprite.svg#si-glyph-mail}"/></svg></div>
							<input id="email" type="text" class="form-control"/>
						</div>
					</div>
					
					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Cadastrar Serviço</button>
					</div>
			
				</form>
			</div>
		</section>
	
	</div>
	</div>
	
<?php
	//c_footer();
?>