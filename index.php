<?php require_once("./contador.php");?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>	

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<!-- Site Metas -->
		<title>Iara Nagle 49</title>  
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="aguia">
		<!-- ALL JS FILES -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script type="text/javascript">
					$(function () {
						$('[data-toggle="tooltip"]').tooltip()
						});
							</script>
							<!--<script type="text/javascript">$(document).ready(function(){$('#ExemploModalCentralizado').modal('show');});</script>
						-->
						<script type="text/javascript">
							$(function () {
						$('[data-toggle="tooltip"]').tooltip()
						})
		</script>
		<!-- Site Icons -->
		<link rel="shortcut icon" href="images/modal/Slide1.jpg" type="image/x-icon" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		
		<!-- Site CSS -->
		<link rel="stylesheet" href="style.css">    
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- FontAwesome-->
		<script src="https://kit.fontawesome.com/5b1adee37c.js" crossorigin="anonymous"></script>
		<!-- ALL PLUGINS -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="app_version"  data-spy="scroll" data-target="#navbarApp" data-offset="98">
		<header class="header header_style_01">
			<nav class="fixed-top navbar header-nav navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.html">
						<img src="images/logos/logo-app1.png" alt="image"></a>
					<button class="navbar-toggler" 
					type="button" 
					data-toggle="collapse" 
					data-target="#navbarApp" 
					aria-controls="navbarApp" 
					aria-expanded="true" 
					aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarApp">
						<ul class="navbar-nav">
							<li><a class="nav-link active" href="#home"><b>Home</b></a></li>
							<li><a class="nav-link" href="#perfil"><b>Perfil</b></a></li>						
							<li><a class="nav-link" href="#propostas"><b>Propostas</b></a></li>
							<li><a class="nav-link" href="#apoiadores"><b>Parceiros</b></a></li>
							<li><a class="nav-link" href="#videos"><b>Videos</b></a></li>
							<li><a class="nav-link" href="#contact"><b>Declare Seu Apoio</b></a></li>
							<li>
							<div class=""
								data-toggle="tooltip" 
								data-placement="bottom"
								title="Clique aqui">
								<a
								class="nav-link" 
								id="botaonav"
								data-toggle="modal"
								data-target="#roteiro">Escolha Seu Local de Votação</a>
							</div>		
							</li>
							<li>
								<div class=""
								data-toggle="tooltip" 
								data-placement="bottom"
								title="Clique aqui e coloque Nosso filtro no seu Perfil do Facebook">	
									<a href="https://www.facebook.com/profilepicframes/?selected_overlay_id=201430544615013"
									class="nav-link ml-xl-1 ml-lg-1" 
									id="botaonav"
									target="_blank"
									>Tema no facebook</a>	
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<section id="home" class="section-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 text-left home-selo">
						<img src="images/iara-txt.png" width="100%"><br>
						<a href="#perfil" 
						class="hvr-bounce-to-right cd-hero__btn" >Conheça Iara Nagle</a>	
					</div>
					<div class="col-lg-6 col-md-6">
						<img src="images/iara-top.png" width="100%">
					</div>		
				</div>
			</div>				
			<div id="perfil" class="section wb">
				<div class="container-fluid">
					<div class="text-center">
						<h3 id="titulo" class="py-3 text-center">Perfil</h3>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-4 col-md-6 text-sobre"> 	
							<div class="about-right">
							<p class="text-justify">
								<b>Sou Engenheira Civil</b> (UFJF) e especialista em Engenharia de Produção (UFRJ). Atuo há mais de 37 anos como Perita Judicial e possuo ampla experiência em consultoria patrimonial, ambiental e de negócios. Sou docente desde 1988 e me sinto honrada por ter auxiliado na formação de centenas de profissionais. Sou Conselheira vitalícia (licenciada) do Clube de Engenharia e ex-diretora do IEL-IBAPE-RJ. Atualmente, sou Presidente (licenciada) da ABEA-RJ.
							</p>
							<p class="text-justify">
								Sempre atuante no Sistema CONFEA/CREA e MÚTUA, onde fui Conselheira Regional e Federal e Diretora da Caixa-RJ, em prol do <b>desenvolvimento da Engenharia</b>, estou preparada para ser a <b>primeira Engenheira Presidente do CREA-RJ</b> e contribuir com toda a experiência e conhecimento adquiridos ao longo da minha trajetória profissional.
							</p>
							<p class="text-justify"> O cerne da campanha são as minhas propostas, elaboradas para proporcionar uma <b>Gestão Transparente e Eficaz</b>, promover a <b>Valorização Profissional</b>, ao visar maior empregabilidade, implantar uma <b>Fiscalização Efetiva e Consciente</b>, que proteja o Profissional a Sociedade e a Vida e criar <b>Benefícios</b>, que possam apoiar o profissional. Confira abaixo! </p>
							<h2 class="uni-p title-uni text-center">Na Eleição CREA-RJ 2020 VOTE IARA NAGLE 49</h4>
							<img src="images/SELO ROSA.png" alt="" class="img-fluid img-rounded">
							</div>					
						</div>
						<div class="col-lg-8 col-md-6 col-sm-5 about-bg">
							<div class="about-left">
								<img src="images/bg-2.jpeg" class="img-fluid" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="propostas">
				<div class="container mx-auto" >
					<h1 class="text-center py-5 px-auto propostaTitulo" id="titulo"><b>Propostas</b></h1>
					<div class="row my-auto border">
						<div class="col-4" id="gestao">
							<h1 class="text-center" id="TituloPropostas"><b>Gestão Eficaz</b></h1>
						</div>
						<div class="col-8 py-2 " id="gestaoTexto">
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Receitas/despesas publicadas no portal; ouvidoria que ouve o profissional e resolve.">
								<p>Administração transparente e ouvidoria atuante e independente;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Acesso a todos os serviços, de forma descomplicada; Emissão de certidões e consultas, sem custo, pelo portal com certificação individual.">
								<p>Sistema de informática amigável e intuitivo, com token de certificação digital gratis para todos;</p>
							</div>				
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Aproveitamento das expertises dos funcionários e colaboradores, com treinamento permanente; Combate ao aparelhamento politico-partidário.">
								<p>Valorização do Quadro de Funcionários;</p>
							</div>	
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title='Atendimento prioritário permanente e imediato; implantação do "CREA-RJ VAI ATÉ VOCÊ"'>
								<p>Atendimento presencial sem agendamento prévio, CREA-RJ Itinerante, Aplicativos de Atendimento;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Através de reuniões, WhatsApp e redes sociais (Facebook, Instagram, Twitter e Linkedin).">
								<p>Linha direta e permanente com a Presidente, inclusive por email e redes sociais;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Compromisso de respeito e prioridade ao profissional">
								<p>Emissão de certidões e carteira em até 48 horas.</p>
							</div>
						</div>
					</div>
					<div class="row my-auto border">
						<div class="col-4" id="valorização">
							<h1 class="text-center" id="TituloPropostas"><b>Valorização Profissional</b></h1>
						</div>
						<div class="col-8 py-2" id="valorizaçãoTexto">
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Disponibilização de vagas diretamente através do portal; Escritório compartilhado com total infraestrutura para uso do profissional, com orientação jurídica inclusive.">
								<p>Criação de Banco de Empregos e "Coworking" com infraestrutura completa;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Ex: Assistência técnica para habitações de interesse social (ATHIS), Regularização fundiária, Autovistoria predial, e outros.">
								<p>Convênios para prestação de serviços técnicos pelos profissionais (AMPLIAÇÃO DO MERCADO DE TRABALHO);</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Com ampliação e disponibilização de vagas em cursos subsidiados; Orientação em empreendedorismo, coaching, noções de direito, etiqueta profissional, etc.">
								<p>Estímulo à maior participação do estudante e do recém formado, com preparação para o mercado (Estágio profissional);</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Disponibilização de cursos de extensão, pós-graduação e atualização profissional, subsidiados pelo CREA-RJ, através de convênios com entidades de classe e de ensino, com as novas tecnologias presentes.">
								<p>Implantação de educação continuada, para atualização e qualificação profissional, com uso das novas tecnologias;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Registro profissional provisório, através do portal, e definitivo, após análise das Câmaras Especializadas e Plenários; Novas atribuições através de educação continuada.">
								<p>Defesa pela criação da Engenharia Tronco;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Participação na proposição, discussão e acompanhamento de projetos de lei, municipal, estadual e federal, em defesa da Engenharia, da Sociedade e da VIDA.">
								<p>Criação da "Frente Parlamentar em Defesa da Engenharia", com participação das entidades de classe e profissionais;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Participação efetiva em grupos, fóruns e comissões para discussão das políticas públicas.">
								<p>Participação dos profissionais nas comissões e fóruns da sociedade civil/governos;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Criação de Programa, com acesso direto à Presidência/Plenário/Entidades, para proposições de politicas públicas.">
								<p>Criação do "Programa Mulher" como Órgão Consultivo do CREA-RJ;</p>
							</div>
						</div>
					</div>
					<div class="row my-auto border">
						<div class="col-4" id="fiscalização">
							<h1 class="text-center" id="TituloPropostas"><b>Fiscalização</b></h1>
						</div>
						<div class="col-8 py-2" id="fiscalizaçãoTexto">
							<p>Cartilha "Orienta Crea-RJ" com as principais normas, deveres e direitos do profissional;</p>
							<p>Coibição do exercício ilegal da profissão pelo leigo, em defesa do Profissional e da Vida;</p>
							<p>Fiscalização dos órgãos públicos e dos editais de concurso, exigindo o cumprimento da lei;</p>
							<p>Extinção da aplicação de penalidades compulsórias aos profissionais;</p>
							<p>Concessão de prazo de 10 dias para defesa do profissional junto ao CREA-RJ, antes da penalização;</p>
							<p>Desenvolvimento do aplicativo "Cidadão Fiscal", para denúncias diretas junto ao CREA-RJ.</p>
						</div>
					</div>
					<div class="row my-auto border">
						<div class="col-4" id="beneficios">
							<h1 class="text-center" id="TituloPropostas"><b>Benefícios</b></h1>
						</div>
						<div class="col-8 py-2" id="beneficiosTexto">
							<p>Implantação da ART Social para prestação de serviços especiais e para baixa renda;</p>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Convênios junto ao comércio e serviços para pontuação e retorno aos profissionais.">
							<p>Implantação do programa "Anuidade Zero", através de convênios de fidelização junto às empresas;</p>
							</div>
							<div class="info-box" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Plano de saúde médico e dentário, creches, clubes, cursos, viagens, etc.">
							<p>Realização de convênios com descontos em compras e serviços;</p>
							</div>
							<p>Instalação de biblioteca com consulta gratuita às Normas Técnicas da ABNT;</p>
							<p>Oferta de "degustação" de associatividade a uma entidade de classe, subsidiada;</p>
							<p>Luta pela revisão e redução dos valores de taxas e anuidade com base nas ART's registradas;</p>
							<p>Reinauguração do Centro Cultural <i>"JOSÉ CHACON DE ASSIS"</i>.</p>
						</div>
					</div>
					<div class="row mt-3 border" id="compromisso">
						<div class="col">
						<h1 id="compromissoTitulo" class="mt-3"><b>Compromisso:</b></h1>
						<div id="compromissoTexto">
							<strong class="text-center">O que não for atribuição exclusiva do CREA-RJ será executado em conjunto com as Entidades de Classe e de Ensino.</strong>
						</div>					
						</div>
					</div>
				</div>
			</div>
		</section> <!-- .cd-hero -->
	<div id="apoiadores" class="section wb section-parceiros">
			<div class="">
				<div class="section-title text-center">
				<h3 id="titulo"
				class="text-white title-uni">Parceiros</h3>
				<hr>
				</div><!-- end title -->
				<div id="carouselApoiadores" class="carousel slide" data-ride="carousel" data-interval="10000">
					<ol class="carousel-indicators">
						<li data-target="#carouselApoiadores" data-slide-to="0" class="active"></li>
						<li data-target="#carouselApoiadores" data-slide-to="1"></li>
						<li data-target="#carouselApoiadores" data-slide-to="2"></li>
						<li data-target="#carouselApoiadores" data-slide-to="3"></li>
						<li data-target="#carouselApoiadores" data-slide-to="4"></li>
						<li data-target="#carouselApoiadores" data-slide-to="5"></li>
						<li data-target="#carouselApoiadores" data-slide-to="6"></li>
						<li data-target="#carouselApoiadores" data-slide-to="7"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active text-center">
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/suzanaSattamini.png" class="img-fluid img-rounded">
								</div>
								<div class="card-title">
									<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
									<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2"><b>"Por um conselho que valorize seus profissionais, com gestão informatizada, ágil e descomplicada,</b> eu apoio Iara Nagle para Presidente do CREA-RJ."</p>
								</div> 
								<div class="card-footer">
									<h3 class="text-center">SUZANA SATTAMINI</h3>
									<p class="text-center">Engenheira Civil, Msc</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/AntonioBatista.png">
								</div>
								<div class="card-title">
									<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
									<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center  mx-2">"Eu apoio a IARA para Presidente do CREA-RJ,<b> por conhecer a sua seriedade e competência e acreditar que o Conselho será mais eficiente e útil para todos nós .</b></p>
									<p class="text-center mx-2"><b>Sou candidato a Diretor Geral da MUTUA-RJ, número 62, e a nossa parceria fará a diferença."</b></p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">ANTONIO BATISTA</h3>
									<p class="text-center">Engenheiro Civil</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/EdisonNogueira.png" class="img-fluid img-rounded">
								</div>
								<div class="card-title">
								<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
								<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
							</div>
								<div class="card-text">
									<p class="text-center mx-2">"Apoio a Iara Nagle para Presidente do CREA-RJ <b>pela sua experiência nas entidades de classe e no Sistema Confea/Crea e por acreditar na valorização da Engenharia."</b></p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">EDISON NOGUEIRA</h3>
									<p class="text-center">Engenheiro Civil e de Segurança do Trabalho, Msc</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/AlvaroSenna.png" class="img-fluid img-rounded">
								</div>
								<div class="card-title">
									<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
									<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2"><b>"A plataforma apresentada pela Iara me leva a crer que, sob sua administração, o CREA-RJ será dinâmico, moderno e transparente.</b> Por tudo isso tem meu apoio."</p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">ÁLVARO SENNA</h3>
									<p class="text-center">Engenheiro Civil</p>
								</div>
							</div>
						</div>
						<div class="carousel-item" data>
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/FernandoLima.png" class="img-fluid img-rounded">	
								</div>
								<div class="card-title clearfix">
									<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
									<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2">Apoio a Engenheira Iara Nagle para Presidente do CREA-RJ,<b> porque tem preparo e competência para realizar um excelente trabalho, com grandes mudanças no Conselho Profissional."</b></p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">FERNANDO LIMA FILHO</h3>
									<p class="text-center">Engenheiro Oper. Eletrôn., Elétrico e de Segurança do Trabalho</p>
									<p class="text-center">Presidente da SobesRio</p>
								</div>
							</div>
						</div>
						<div class="carousel-item" data>
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/JoseAraujo.png" class="img-fluid img-rounded">	
								</div>
								<div class="card-title clearfix">
									<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
									<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2">"Apoio IARA NAGLE para a Presidência do CREA-RJ <b>por confiar que fará um mandato voltado para o profissional graças à sua competência e conhecimento do Sistema CONFEA/CREA</b>"</p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">JOSÉ ARAUJO</h3>
									<p class="text-center">Engenheiro Eletricista</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/IsaiasMasetti.png" class="img-fluid img-rounded">
								</div>
								<div class="card-title">
								<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
								<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2"><b>"O CREA é fundamental na atuação de engenheiros, ao considerar as mudanças que urgem implementação, minha recomendação e meu voto é para IARA NAGLE,</b> para a presidência do CREA-RJ."</p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">ISAÍAS MASETTI</h3>
									<p class="text-center">Engenheiro Civil, Naval e de Equipamentos, Msc</p>
								</div>
							</div>
						</div>
						<div class="carousel-item " data>
							<div id="card-apoiadores text-center">
								<div class="card-image text-center">
									<img src="apoiadores/Bruno.png" class="img-fluid img-rounded">	
								</div>
								<div class="card-title clearfix">
								<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
								<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
								</div>
								<div class="card-text">
									<p class="text-center mx-2">"Eu apoio Iara Nagle para a Presidência do CREA-RJ<b> por entender que o Conselho precisa de mudanças e de maior valorização profissional."</b></p>
								</div>
								<div class="card-footer">
									<h3 class="text-center">BRUNO DE BONIS</h3>
									<p class="text-center">Engenheiro Civil</p>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselApoiadores" role="button" data-slide="prev"></a>
					<a class="carousel-control-next" href="#carouselApoiadores" role="button" data-slide="next"></a>
				</div>
			</div>
		</div>
		<div id="videos">
			<div class="container-fluid">
				<div class="text-center">
					<h3 id="titulo"
					class="title-uni py-5">Videos</h3>
				</div>
				<div class="row mx-2">
				<?php 
					require_once("../admin/conexao.php");
					$sql = "SELECT * FROM `parceiros` ORDER BY nome";
					$select = mysqli_query($connect, $sql);
					
					while ($apoiadores = mysqli_fetch_array($select)){
						
						echo '<div class="col-4 px-0">
								<div class="row text-center">
									<a class="col px-0"  href="';
									echo $apoiadores['link'];
									echo '" target="_blank">
											<h5 class="col">';
									echo $apoiadores['nome'];
									echo '</h5>
									</a>
								</div>
							</div>';
					}
				?>
				</div>
			</div>
		</div>
		<div id="contact" class="section lb">
			<div class="container py-5">
			<div class="section-title text-center pt-5">
					<h3 id="tituloDeclare">Porque voto em Iara?</h3>
				</div><!-- end title -->
				<div class="row">
					<div class="col-4">
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Utilize este espaço para declarar seu apoio para Iara Nagle">
							<img src="images/SELO ROSA.png" class="img-fluid img-rounded">
						</div>
					</div>
					<div class="col-8">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php
								#PHP 7
								$query = 'SELECT * FROM `apoiadores` ';
								require_once("../admin/conexao.php");
								$select = mysqli_query($connect, $query);
								$i = 0;
								while($lista = mysqli_fetch_array($select)){
									if(isset($lista['mensagem']) && strlen($lista['mensagem']) < 500 && isset($lista['nome']) && $lista['nome'] !== '' ){
												if($i == 0){
														echo '<div class="carousel-item active">';
														$i++;
													}
													else {
														echo '<div class="carousel-item">';
														$i++;
													}
												echo '<div class="clearfix">
														<span class="carousel-control-prev-icon float-left" aria-hidden="true"></span>
														<span class="carousel-control-next-icon float-right" aria-hidden="true"></span>
														</div>';
												if($lista['mensagem'] !== ''){
													echo '<div class="card-text1">';
													echo '<p class="text-center"><b>',$lista['mensagem'],'</b></p>';
													echo '</div>';
												}
												echo '<div class="card-footer1">';
												echo '<h3 class="text-center">',$lista['nome'],'</h3>';
												echo '<p class="text-center">',$lista['cargo'],'</p></div></div>';
											}
										}       
								mysqli_close($connect);?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"></a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"></a>
						</div>
					</div>
				</div>
				<div class="section-title text-center mt-5 pt-5">
					<h3 id="tituloDeclare">Declare o seu Apoio</h3>
				</div><!-- end title -->
				<div class="row">
					<div class="col-md-12">
						<div class="contact_form">
							<div id="message"></div>
							<form action="./php/apoio.php" method="post">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="nome" class="form-control" placeholder="Nome">
									</div>
									<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
										<input type="text" name="cargo" class="form-control" placeholder="Cargo/Profissão">
									</div>
									<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="email" class="form-control" placeholder="Email">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
										<input type="tel" name="telefone" class="form-control" placeholder="Telefone">
									</div>
									<textarea class="form-control col-lg-12 col-md-12 col-sm-12 col-xs-12" name="mensagem" id="mensagem" rows="6" placeholder="Mensagem:"></textarea>
									<div class="text-center pdi">
									<button class="hvr-bounce-to-right cd-hero__btn" type="submit" value="Enviar" >Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end section -->
		<footer class="footer d-inline-block mt-auto py-3 text-center">
			<h1 class="text-center text-light"> Nossas Redes Sociais</h1>
			<div class="row px-5 mx-5 my-5">
				<a class="col"  href="https://www.facebook.com/iaranagle" target="_blank"><i class="fab fa-facebook"></i></a>
				<a class="col"  href="https://twitter.com/iaranagle" target="_blank"><i class="fab fa-twitter"></i></a>
				<a class="col"  href="https://www.instagram.com/iaranagle1/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a class="col"  href="https://www.linkedin.com/in/iaranagle/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
				<a class="col"  href="https://www.youtube.com/channel/UC5RIyLuDG18H0xhZ7AIffBQ" target="_blank"><i class="fab fa-youtube"></i></a>
			</div>    
		</footer>
		<div class="text-center my-auto py-3" id="copy">
			<p>Copyright © 2020 - Todos os direitos reservados - Águia ©</p>
		</div>
		<div class="modal fade" 
		id="roteiro" 
		tabindex="-1" role="dialog" 
		aria-labelledby="TituloModalCentralizado" 
		aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title text-center" id="TituloModalCentralizado">DATA LIMITE: 15 de Julho de 2020</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container mx-2">
							<h5><b>ROTEIRO PARA ESCOLHA DE LOCAL DE VOTAÇÃO</b></h5>
							<p class="my-0">1 - Entre no site do CREA/RJ: <a style="color:blue"href="https://novoportal.crea-rj.org.br" target="_blank" >https://novoportal.crea-rj.org.br</a></p>
							<p id="marcatexto" class="my-auto"><b>(Utilize o Navegador MOZILLA FIREFOX)</b></p>
							<small style="color:red">link para baixar no rodapé</small>
							<div class="row my-2">
								<div class="col">
									<p class="d-inline">2 - Clique em <b>SERVIÇOS:</b></p>
									<img class="d-inline" src="./images/modal/Slide2.jpg">
								</div>
							</div>
							<div class="row my-2">
								<div class="col">
									<p>3 - Escolha <b>ÁREA RESTRITA DO PROFISSIONAL:</b></p>
								</div>
								<div class="col-lg-6 col-md-12">
									<img src="./images/modal/Slide3.jpg">
								</div>
							</div>
							<div class="row  mt-2 mb-auto">
								<div class="col">
									<p>4 - Na página seguinte, insira seus dados de CPF e senha, assinale que não é um "Robô", e confirme:</p>
								</div>
							</div>
							<div class="row ">
								<div class="col mt-1">
								<img src="./images/modal/Slide4.jpg">
								</div>
								<div class="col pl-auto ml-auto mt-1">
									<img src="./images/modal/Slide5.jpg">
								</div>
							</div>
							<div class="row  my-auto">
								<div class="col">
									<small><b>OBS: Caso não tenha cadastro ou tenha esquecio a sua senha, siga os passos abaixo no (**) e retorne ao ítem 4</b></small>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>5 - Na <b>página do Profissional,</b> clique em <b>"AINDA NÃO TEM LOCAL DE VOTAÇÃO"</b> ou <b>"ALTERAR LOCAL DE VOTAÇÃO"</b>, e <b>escolha</b> seu local de votação</p>
								</div>
								<div class="col align-self-center">
									<img src="./images/modal/Slide7.jpg">
								</div>
								<div class="col-12"style="height:25px;" >
								<p id="marcatexto2">Confirme, faça o print da tela e guarde como garantia.</p>
								</div>
							</div>
							<div class="row">
								<div class="col my-auto">
									<small><b>(**) &nbsp;&nbsp; Caso tenha esquecido a senha, clique em "ESQUECI MINHA SENHA" e siga a orientação para trocá-la</b></small>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<img src="./images/modal/Slide8.jpg">
								</div>
								<div class="col-8 align-self-end">
									<small class="text-right">REGISTRO NO CREA-RJ:verso da carteira, ao lado da asinatura do Presidente.</small>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<small><b>Após o cadastro da nova senha, retorne à área restrita e siga os passos 4 e 5 deste roteiro.</b></small>
								</div>
							</div>
						</div>	
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" 
						class="btn btn-primary">
							<a href="https://novoportal.crea-rj.org.br" style="color: white"  target="_blank">
								Acessar Portal CREA-RJ
								<button type="button" class="btn btn-primary">
								<a href="https://www.mozilla.org/pt-BR/firefox/download/thanks/" style="color: white" target="_blank">Baixar Firefox</a>
								</button>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div> 
	</body>
</html>