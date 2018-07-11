<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	<title>Currículo</title>
	<style></style>
</head>
<body>
	<h1> Preencha o formulário com seus dados pessoais</h1>
	<form action="enviar_dados.php" method="POST">
	    <div class="row">
			<div class>
				<div class>
					<label for="name">Nome Completo:</label>
					<input type="text" name="nome id="nome">
				</div>
			</div>
			<p>
			<div class>
				<div class>
					<label for="naci">Nacionalidade:</label>
					<input type="text" name="naci" id="naci" value="Brasileiro">
				</div>
			</div>
			<p>
			<div class>
				<label for="sexo">Sexo:</label>
				<select name="sexo" id="sexo">
					<option value=""></option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>			
			</div>
			<p>
			<div class>
				<label for="idade">Idade:</label>
					<input type="tel" name="idade" id="idade">
						<span class>anos</span>					
			</div>
			<p>
			<div class>
				<label for="estcivil">Estado Civil:</label>
					<select name="estcivil" id="estcivil">
						<option value=""></option>
						<option value="1">Solteiro(a)</option>
						<option value="2">Casado(a)</option>
						<option value="3">União Estável</option>
						<option value="4">Separado(a)</option>
						<option value="5">Divorciado(a)</option>
						<option value="6">Viúvo(a)</option>
					</select>					
			</div>
			<p>
			<div class>
				<label for="filho">Tem Filho(s)?</label>
					<select class name="filho" id="filho">
						<option value=""></option>
						<option value="N">Não</option>
						<option value="S">Sim</option>
					</select>
			</div>
			<p>
			<div class>
				<label for="endereco">Endereço:</label>
					<input type="text" name="endereco" id="endereco">
			</div>
			<p>
			<div class>
				<label for="estado">Estado:</label>					
						<select name="estado" id="estado">
							<option value=""></option>
							<option value="1">Acre</option>
							<option value="2">Alagoas</option>
							<option value="3">Amapá</option>
							<option value="4">Amazonas</option>
							<option value="5">Bahia</option>
							<option value="6">Ceará</option>
							<option value="7">Distrito Federal</option>
							<option value="8">Espírito Santo</option>
							<option value="9">Goiás</option>
							<option value="10">Maranhão</option>
							<option value="11">Mato Grosso</option>
							<option value="12">Mato Grosso do Sul</option>
							<option value="13">Minas Gerais</option>
							<option value="14">Pará</option>
							<option value="15">Paraíba</option>
							<option value="16">Paraná</option>
							<option value="17">Pernambuco</option>
							<option value="18">Piauí</option>
							<option value="19">Rio de Janeiro</option>
							<option value="20">Rio Grande do Norte</option>
							<option value="21">Rio Grande do Sul</option>
							<option value="22">Rondônia</option>
							<option value="23">Roraima</option>
							<option value="24">Santa Catarina</option>
							<option value="25">São Paulo</option>
							<option value="26">Sergipe</option>
							<option value="27">Tocantins</option>
						</select>					
			</div>
			<p>
			<div class>
				<label for="cidade">Cidade:</label>					
						<select name="cidade" id="cidade">
							<option value=""></option>
						</select>					
			</div>
			<p>
			<div class>
				<label for="telefone">Telefone:</label>
					<input type="tel" id="telefone1">
			</div>
			<p>
			<div class>
				<label for="email">E-Mail:</label>
					<input type="text" name=email" id="email">
			</div>
			<div class="row" id="experiencia2" style="display: none; margin-top: 10px">
								<div class="col-12 col-sm-12 col-md-12 col-lg-4">
									<div class="form-group">
										<label for="username">Empresa:</label>
										<input class="form-control form-control-lg" type="text" name="data[Curriculo][experiencia2Empresa]" id="experiencia2Empresa">
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-2" >
									<div class="form-group">
										<label for="first-name">Ano de Entrada:
										</label>
										<input class="form-control form-control-lg ano" type="tel" name="data[Curriculo][experiencia2AnoEntrada]" value="" id="experiencia2AnoEntrada" maxlength="4">
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-2">
									<div class="form-group">
										<label for="last-name">Ano de Saída:</label>
										<input class="form-control form-control-lg" type="text" name="data[Curriculo][experiencia2AnoSaida]" value="" id="experiencia2AnoSaida">
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-4">
									<div class="form-group">
										<label for="last-name">Cargo:</label>
										<div class="input-group input-group-lg">
											<input type="text" class="form-control" placeholder="" aria-label="twitterUsername" name="data[Curriculo][experiencia2Cargo]" id="experiencia2Cargo">
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="username">Principais atividades desempenhadas no cargo:</label>
										<textarea class="form-control" name="data[Curriculo][experiencia2Atividades]" rows="3" id="experiencia2Atividades"></textarea>
									</div>
								</div>
								<div class="col-12"><img src="/icone-mais.png" height="15" width="16" style="vertical-align: middle; margin-right: 5px" alt="Icone Mais"/> <a href="javascript:void(0)" onclick="$('#experiencia3').css('display', 'flex');$(this).parent().remove();">Adicionar outra experiência</a></div>
							</div>
							<div class="row" id="experiencia3" style="display: none; margin-top: 10px">
								<div class="col-12 col-sm-12 col-md-12 col-lg-4">
									<div class="form-group">
										<label for="username">Empresa:</label>
										<input class="form-control form-control-lg" type="text" name="data[Curriculo][experiencia3Empresa]" id="experiencia3Empresa">
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-2" >
									<div class="form-group">
										<label for="first-name">Ano de Entrada:
										</label>
										<input class="form-control form-control-lg ano" type="tel" name="data[Curriculo][experiencia3AnoEntrada]" value="" id="experiencia3AnoEntrada" maxlength="4">
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-2">
									<div class="form-group">
										<label for="last-name">Ano de Saída:</label>
										<input class="form-control form-control-lg" type="text" name="data[Curriculo][experiencia3AnoSaida]" value="" id="experiencia3AnoSaida">
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-4">
									<div class="form-group">
										<label for="last-name">Cargo:</label>
										<div class="input-group input-group-lg">
											<input type="text" class="form-control" placeholder="" aria-label="twitterUsername" name="data[Curriculo][experiencia3Cargo]" id="experiencia3Cargo">
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="username">Principais atividades desempenhadas no cargo:</label>
										<textarea class="form-control" name="data[Curriculo][experiencia3Atividades]" rows="3" id="experiencia3Atividades"></textarea>
									</div>
								</div>
							</div>
							<div><img src="/icone-mais.png" height="15" width="16" style="vertical-align: middle; margin-right: 5px" alt="Icone Mais"/> <a href="javascript:void(0)" onclick="$('#experiencia2').css('display', 'flex');$(this).parent().remove();">Adicionar outra experiência</a></div>
							<hr>

		</div>

	</form>
</body>
</html>
