   <style type="text/css">
		.panel-heading {
			padding: 5px 15px;
		}

		.panel-footer {
			padding: 1px 15px;
			color: #A0A0A0;
		}

		.profile-img {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}
   </style>
   
   <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Entrar no sistema</strong>
					</div>
					<div class="panel-body">
						<form role="form" name="FormPRLogin" ng-submit="logar(user)">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="static/img/logo-prn.gif" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input type="email" ng-model="user.usuario"  class="form-control" placeholder="Preencha seu e-mail" name="usuario" autofocus required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input type="password" ng-model="user.senha" class="form-control" placeholder="Preencha sua senha" name="senha" required>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" ng-disabled="FormPRLogin.$invalid" value="Entrar">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						<a href="#" onClick=""> Esqueci minha senha! </a>
					</div>
                </div>
			</div>
		</div>
	</div>
