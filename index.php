<?php require_once("./contador.php")
?>
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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<!-- FontAwesome-->
	<script src="https://kit.fontawesome.com/5b1adee37c.js" crossorigin="anonymous"></script>
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="app_version"  data-spy="scroll" data-target="#navbarApp" data-offset="98">
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
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
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#perfil">Perfil</a></li>						
						<li><a class="nav-link" href="#propostas">Propostas</a></li>
						<li><a class="nav-link" href="#apoiadores">Parceiros</a></li>
						<li><a class="nav-link" href="#contact">Declare Seu Apoio</a></li>
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
					<br>		
					<a
					class="hvr-bounce-to-right cd-hero__btn" 
					style="color: black" 
					data-toggle="modal"
					data-target="#ExemploModalCentralizado">Conheça Como Votar</a>			
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/iara-top.png" width="100%">
				</div>		
			</div>

		</div>				
		<div id="perfil" class="section wb">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-6 text-sobre"> <!-- end title -->
						<div class="about-right">
						  <h1 class="title-uni py-3  text-center">Perfil</h1>
						  <p class="text-justify">
							<b>Sou Engenheira Civil</b> (UFJF) e especialista em Engenharia de Produção (UFRJ). Atuo há mais de 37 anos como Perita Judicial e possuo ampla experiência em consultoria patrimonial, ambiental e de negócios. Sou docente desde 1988 e me sinto honrada por ter auxiliado na formação de centenas de profissionais. Sou Conselheira vitalícia (licenciada) do Clube de Engenharia e ex-diretora do IEL-IBAPE-RJ. Atualmente, sou Presidente (licenciada) da ABEA-RJ.
						  </p>
						  <p class="text-justify">
							  Sempre atuante no Sistema CONFEA/CREA e MÚTUA, onde fui Conselheira Regional e Federal e Diretora da Caixa-RJ, em prol do <b>desenvolvimento da Engenharia</b>, estou preparada para ser a <b>primeira Engenheira Presidente do CREA-RJ</b> e contribuir com toda a experiência e conhecimento adquiridos ao longo da minha trajetória profissional.
						  </p>
						  <p class="text-justify"> O cerne da campanha são as minhas propostas, elaboradas para proporcionar uma <b>Gestão Transparente e Eficaz</b>, promover a <b>Valorização Profissional</b>, ao visar maior empregabilidade, implantar uma <b>Fiscalização Efetiva e Consciente</b>, que proteja o profissional e a vida e criar <b>Benefícios</b> Sociais, que possam apoiar o profissional. Confira abaixo! </p>
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
				<h1 class="text-center py-5 px-auto" id="propostaTitulo"><b>Propostas</b></h1>
				<div class="row px-auto border" id="boxCompromisso">
					<h1 class="text-left ml-5 px-auto" id="propostaSubtitulo"><b>Compromisso</b></h1>
					<h4 class="text-center" 
					id="propostatexto">
					Tudo o que não for atribuição exclusiva do CREA-RJ será executado em conjunto com as Entidades de Classe e de Ensino, com assento no plenário. 
					</h4>
				</div>
				<div class="row my-auto border">
					<div class="col-4" id="gestao">
						<h1 class="text-center" id="TituloPropostas">Gestão Eficaz</h1>
					</div>
					<div class="col-8 py-2 " id="gestaoTexto" >
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Receitas/despesas publicadas no portal; ouvidoria que ouve o profissional e resolve.">
							<p>Administração transparente e ouvidoria atuante e independente;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Acesso a todos os serviços, emissão de certidões e consultas, sem custo, pelo portal e certificação individual.">
							<p>Sistema de informática amigável, com certificação digital para todos;</p>
						</div>				
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Aproveitamento das expertises dos funcionários do CREA-RJ e combate ao aparelhamento politico-partidário.">
							<p>Valorização do quadro de funcionários;</p>
						</div>	
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title='"Passou na porta" ou não trabalha com informática, atendimento imediato; e também "o CREA-RJ vai até você'>
							<p>Atendimento presencial SEM HORA MARCADA, CREA Itinerante, Aplicativos Atendimento;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Através de reuniões e das redes sociais (Facebook, Instagram, Twitter e Linkedin).">
							<p>Linha direta e permanente com a Presidente, inclusive por meio de redes sociais;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Compromisso de respeito e priorização do profissional">
							<p>Emissão de certidões e carteiras em, no máximo, 48 horas.</p>
						</div>
					</div>
				</div>
				<div class="row my-auto border">
					<div class="col-4" id="valorização">
						<h1 class="text-center" id="TituloPropostas">Valorização Profissional</h1>
					</div>
					<div class="col-8 py-2" id="valorizaçãoTexto">
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Cadastro de vagas c/ disponibilização direta através do portal; Escritório com total infraestrutura para uso do profissional; Orientação jurídica inclusive.">
							<p>Criação de banco de empregos e "Coworking" com infraestrutura completa;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Assistência técnica a habitações de interesse social, regularização fundiária, autovistoria predial, etc, com as entidades.">
							<p>Convênios para prestação de serviços técnicos pelos profissionais (ampliação do mercado de trabalho);</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Com ampliação e disponibilização de vagas sem custo para osmesmos, empreendedorismo, noções de direito, etc.">
							<p>Estímulo à maior participação do estudante e do recém formado, com preparação para a vida profissional;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Convênios com entidades de classe e de ensino para disponibilização de cursos subsidiados para o profissional, inclusive e principalmente com as novas tecnologias presentes.">
							<p>Implantação da educação continuada, com uso das novas tecnologias, subsidiada pelo CREA-RJ;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Novas atribuições através de educação continuada/ especialização com registro provisório imediato pelo portal, e análise definitiva pelas câmaras/plenário.">
							<p>Defesa pela criação da Engenharia Tronco;</p>
						</div>
						<p>Criação da "Frente Parlamentar em Defesa da Engenharia", com participação das entidades de classe e profissionais;</p>
						<p>Participação dos profissionais nas comissões e fóruns da sociedade civil/governos;</p>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Criação de comissão, com acesso direto ao plenário/entidades, para proposições de politicas publicas.">
							<p>Criação do "Programa Mulher" como Órgão Consultivo no CREA-RJ;</p>
						</div>
		  
					</div>
				</div>
				<div class="row my-auto border">
					<div class="col-4" id="fiscalização">
						<h1 class="text-center" id="TituloPropostas">Fiscalização</h1>
					</div>
					<div class="col-8 py-2" id="fiscalizaçãoTexto">
						<p>Entrega da Cartilha "Orienta Crea-RJ" com resumo das principais normas, deveres e direitos;</p>
						<p>Impedimento do exercício ilegal da profissão pelo leigo, em defesa do profissional, da sociedade e da vida;</p>
						<p>Fiscalização dos órgãos públicos e dos editais de concurso, exigindo o cumprimento da lei;</p>
						<p>Extinção da aplicação de penalidades compulsórias aos profissionais;</p>
						<p>Concessão de prazo de 10 dias para defesa do profissional junto ao CREA, antes da penalização;</p>
						<p>Desenvolvimento do aplicativo "Cidadão Fiscal", para denúncias diretas ao Conselho.</p>
					</div>
				</div>
				<div class="row my-auto border">
					<div class="col-4" id="beneficios">
						<h1 class="text-center" id="TituloPropostas">Benefícios</h1>
					</div>
					<div class="col-8 py-2" id="beneficiosTexto">
						<p>Implantação da ART Social para prestação de serviços especiais para baixa renda;</p>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Convênios junto ao comércio e serviõs para pontuação e retorno aos profissionais.">
						<p>Implantação do programa "Anuidade Zero", através de convênios de fidelização junto às empresas;</p>
						</div>
						<div class="info-box" 
						data-toggle="tooltip" 
						data-placement="bottom" 
						title="Plano de saúde médico e dentário, creches, clubes, cursos, viagens, etc.">
							<p>Realização de convênios com descontos em compras e serviços;</p>
						</div>
						<p>Instalação de biblioteca com consulta gratuita às normas técnicas da ABNT pelos profissionais;</p>
						<p>Oferta de "degustação" por 1 ano de associatividade a uma entidade de classe, subsidiada pelo CREA-RJ;</p>
						<p>Luta pela revisão dos valores de taxas, por escala e da anuidade com base nas ART's registradas;</p>
						<p>Reinaguração do Centro Cultural CREA-RJ.</p>
	
					</div>
				</div>
			</div>
		  </div>
	</section> <!-- .cd-hero -->
	<div id="apoiadores" class="section wb section-parceiros">
        <div class="container">
            <div class="section-title text-center">
              <h3 class="text-white title-uni">Parceiros </h3>
			  <hr>
			</div><!-- end title -->
		
            <div class="owl-screenshots swiper-container">
				<div class="mobilescreen-image"></div>
					<div class="swiper-wrapper">
						<!-- Bloco de apoiadores -->
						<div class="swiper-slide">
							<div class="service-widget">
								<div class="post-media entry wow fadeIn">
									<div id="card-apoiadores">
										<div class="card-image">
											<img src="apoiadores/Bruno.png" class="img-fluid img-rounded">
										</div>
										<div class="card-title">
											<h3 class="text-center">BRUNO DE BONIS</h3>
										</div>
										<div class="card-text">
											<p class="text-justify">Sou Engenheiro e Professor de Materiais de Construção, atuo há anos no Laboratório do DER e como Perito Judicial. Apoio Iara Nagle para Presidente do CREA <b>por entender que o Conselho precisa de mudanças e de maior valorização profissional.</b>
											</p>
										</div>
									</div>
									<div class="magnifier"></div>
								</div>
							</div><!-- end service -->
						</div>
						<div class="swiper-slide">
							<div class="service-widget">
								<div class="post-media entry wow fadeIn">
									<div id="card-apoiadores">
										<div class="card-image">
											<img src="apoiadores/suzanaSattamini.png" class="img-fluid img-rounded">
										</div>
										<div class="card-title">
											<h3 class="text-center">SUZANA SATTAMINI</h3>
										</div>
										<div class="card-text">
											<p class="text-justify">Sou Engenheira Civil, Mestre em Estruturas (COPPE), Perita Judicial, Professora Universitária e possuo mais de 40 anos de experiência profissional</p>
											<p class="text-justify"><b>Por um conselho que valorize seus profissionais, com gestão informatizada, ágil e descomplicada,</b> eu apoio Iara Nagle para Presidente do CREA- RJ. </p>
										</div>
									</div>
									<div class="magnifier"></div>
								</div>
							</div><!-- end service -->
						</div>
						<div class="swiper-slide">
							<div class="service-widget">
								<div class="post-media entry wow fadeIn">
									<div id="card-apoiadores">
										<div class="card-image">
											<img src="apoiadores/AntonioBatista.png" class="img-fluid img-rounded">
										</div>
										<div class="card-title">
											<h3 class="text-center">Antonio Batista</h3>
										</div>
										<div class="card-text">
											<p class="text-justify">Sou Engenheiro Civil com experiência na área ferroviária, trabalho na Riotrilhos há mais de 30 anos. Ex-inspetor e atual Conselheiro do CREA-RJ, <b>por conhecer a sua seriedade e comptência e acreditar que ela tornará o nosso Conselho útil e eficiênte aos profissionais.</b></p>
											<p class="text-justify">Sou candidato a Diretor Geral da MÚTUA e trabalharemos em parceria.</p>
										</div>
									</div>
									<div class="magnifier"></div>
								</div>
							</div>
						</div><!-- end service -->
						<div class="swiper-slide">
							<div class="service-widget">
								<div class="post-media entry wow fadeIn">
									<div id="card-apoiadores">
										<div class="card-image">
											<img src="apoiadores/EdisonNogueira.png" class="img-fluid img-rounded">
										</div>
										<div class="card-title">
											<h3 class="text-center">Edison Nogueira</h3>
										</div>
										<div class="card-text">
											<p class="text-justify">Sou Engenheiro Civil, e de Segurança do Trabalho, há mais de 30 anos. Professor do IFRJ, UFF e Estácio. Ex-presidente da Sobes Rio, Conselheiro no CREA-RJ e Perito na Justiça do Trabalho. Apoio a Iara Nagle para Presidente do CREA-RJ <b>pela sua experiência nas entidades de classe e no Sitema Confea/Crea e por acredtar na valorização da Engenharia.</b></p>
										</div>
									</div>
									<div class="magnifier"></div>
								</div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next">
					</div>
					<div class="swiper-button-prev">		
					</div>
				</div><!-- end row -->			
			</div><!-- end container -->
		</div>
	</div>
    <div id="contact" class="section lb">
        <div class="container py-5">
            <div class="section-title text-center ">
                <h3>Declare Seu Apoio</h3>
				<div class="info-box" 
				data-toggle="tooltip" 
				data-placement="bottom" 
				title="Utilize este espaço para declarar seu apoio para Iara Nagle">
				<img src="images/SELO ROSA.png" alt="" class="img-fluid img-rounded">
				</div>
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
                                   <input type="submit" value="Enviar" id="enviar" name="enviar">
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
		  <a class="col"  href="https://www.facebook.com/iaranagle"><i class="fab fa-facebook"></i></a>
		  <a class="col"  href="https://twitter.com/iaranagle"><i class="fab fa-twitter"></i></a>
		  <a class="col"  href="https://www.instagram.com/iaranagle1/"><i class="fab fa-instagram"></i></a>
		  <a class="col"  href="https://www.linkedin.com/in/iaranagle/"><i class="fab fa-linkedin-in"></i></a>
		  <!--<a class="col"  href="#"><i class="fab fa-youtube"></i></a>-->
		</div>    
	  </footer>

    <div class="text-center my-auto py-3" id="copy">
		<p>Copyright © 2020 - Todos os direitos reservados - Águia ©</p>
	</div>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
	<div class="modal fade" 
	id="ExemploModalCentralizado" 
	tabindex="-1" role="dialog" 
	aria-labelledby="TituloModalCentralizado" 
	aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="TituloModalCentralizado">ROTEIRO PARA ESCOLHA DE LOCAL DE VOTAÇÃO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container mx-2">
						<p>Entre no site do <a href="https://novoportal.crea-rj.org.br" target="_blank" >CREA-RJ</a> utilizando o Navegador MOZILLA FIREFOX</p>
						<div class="row my-2">
							<div class="col">
								<p>Clique em SERVIÇOS, e na Área Restrita, clique em Profissional</p>
								<img src="./images/modal/Slide6.jpg">
							</div>
							<div class="col">
								<img src="./images/modal/Slide4.jpg">
							</div>
						</div>
						<div class="row  my-2">
								<div class="col-12">
									<p>Na página seguinte, insira seus dados de CPF e senha, assinale que não é um "Robô", e confirme</p>
								</div>
								<div class="col align-self-center">
									<img src="./images/modal/Slide3.jpg">
								</div>
						</div>
						<div class="row my-2">
							<div class="col-12">
								<p>Na Página do Profissional, clique em "AINDA NÃO TEM LOCAL DE VOTAÇÃO" ou "ALTERAR LOCAL DE VOTAÇÃO", e escolha seu local de votação</p>
							</div>
							<div class="col align-self-center">
								<img src="./images/modal/Slide5.jpg">
							</div>
							<div class="col-12 my-2">
							<p style="color:red">Confirme, faça o print da tela e guarde como garantia.</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" 
					href="https://novoportal.crea-rj.org.br" 
					target="_blank"
					class="btn btn-primary">Acessar Portal CREA-RJ</button>
					<button href="https://www.mozilla.org/pt-BR/firefox/download/thanks/" 
					target="_blank"
					type="button" class="btn btn-primary">Baixar Firefox</button>
				</div>
			</div>
		</div>
	</div>
    <!-- ALL JS FILES -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/all.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
    $('#ExemploModalCentralizado').modal('show');
});
</script>
    <!-- ALL PLUGINS -->
	<script src="js/main.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/swiper.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			loop: true,
			effect: 'coverflow',
			centeredSlides: true,
			loopFillGroupWithBlank: true,
			slidesPerView: 3,
            initialSlide: 4,
            keyboardControl: true,
            mousewheelControl: false,
            lazyLoading: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                575: {
                    slidesPerView: 1,
                    spaceBetween: 3,
                }
            }
		});
	  </script>

</body>
</html>