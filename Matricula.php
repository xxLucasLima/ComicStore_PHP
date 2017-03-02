<link href="css/Matricula_Style.css" rel="stylesheet">
<?php include 'Cabecalho.php'; ?>
		<form name="Cadastro" action="InserirAluno.php" method="POST">
			<center>
				<h1 style="font-family: 'Montserrat', sans-serif;">Cadastrar Aluno</h1>
			</center><br/><br/>
				<fieldset id="usuario"><legend>Identificação do Usuário</legend>
					<p><label for="cVenc">Vencimento:</label>	
						<select name="vencimento" id="cVenc">
							<optgroup label="Melhor data de Vencimento">				
								<option value="05">05</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
								<option value="25">25</option>
								<option value="30">30</option>
							</optgroup>
						</select><br/>
					</fieldset>
					</p>
					<p><label for="cMatricula">Matricula:</label>
						<input type="int" name="matricula" id="cMatricula" size="8" maxlength="8" placeholder="Matricula"/></p>
					<p><label for="cNome">Nome:</label>
						<input type="text" name="nome" id="cNome" size="20" maxlength="40" placeholder="Nome Completo"/></p>
					<p><label for="cMail">E-mail:</label>
						<input type="email" name="email" id="cMail" size="20"maxlength="50" placeholder="E-mail" /></p>
				  <p><fieldset id="sexo"><legend>Sexo</legend>
						<input type="radio" name="sexo" id="cMasc"/><label for="cMasc">Masculino</label><br/>
						<input type="radio" name="sexo" id="cFem"/><label for="cFem">Feminino</label>
					</fieldset></p>
					<p><label for="cRG">RG:</label>	
						<input type="text" name="rg" id="cRG" size="12" maxlength="7" placeholder="RG"/></p>
					<p><label for="cCPF">CPF:</label>	
						<input type="text" name="cpf" id="cCPF" size="12" maxlength="11" placeholder="CPF"/></p>
					<p><label for="cDataNas">Data de Nasc.:</label>
						<input type="date" name="dataNasc" id="cDataNas" size="12" maxlength="30" placeholder="Data de Nascimento"/></p>
					<p><label for="cCont">Telefone:<input type="text" size="2" maxlength="2" placeholder="DDD"/></label>
						<input type="text" name="telefone" id="cCont" size="9" maxlength="15" placeholder="Número"/></p>
					<fieldset id="endereco"><legend>Endereço do Usuário</legend>
						<p><label for="cRua">Logradouro:</label>
							<input type="text" name="logradouro" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
						<p><label for="cBairro">Bairro:</label>	
							<input type="text" name="bairro" id="cBairro" size="12" maxlength="30" placeholder="Bairro"/></p>
						<p><label for="cCidade">Cidade:</label>	
							<input type="text" name="cidade" id="cCidade" size="12" maxlength="30" placeholder="Cidade"/></p>
						
						<p><label for="cUF">UF:</label>
							<select name="estado" id="cUF">
								<optgroup label="Região Norte">
									<option value="AC">Acre</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="PA">Pará</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="TO">Tocantins</option>
								</optgroup>
								<optgroup label="Região Nordeste">
									<option value="AL">Alagoas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="MA">Maranhão</option>
									<option value="PB">Paraíba</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piaui</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="SE">Sergipe</option>
								</optgroup>
								<optgroup label="Região Centro-Oeste">
									<option value="GO">Goias</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="DF">Distrito Federal</option>
								</optgroup>
									<optgroup label="Região Sudeste">
									<option value="ES">Espírito  Santo</option>
									<option value="MG">Minas Gerais</option>
									<option value="SP">SãoPaulo</option>
									<option value="RJ">Rio de Janeiro</option>
								</optgroup>
								<optgroup label="Região Sul">
									<option value="PR">Paraná</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="SC">Santa Catarina</option>
								</optgroup>
							</select><br/>
						</p>
					</fieldset><br/><br/>
			<input type="submit" value="Cadastrar">
		</form>
<?php include 'Rodape.php'; ?>