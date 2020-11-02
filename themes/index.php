<section class="container">
    <div class="content">
        <header class="sectiontitle">
            <h1>Empresa</h1>
            <p>Quem Somos!</p>
        </header>
        <p class="al-center fontsizel">Manutenção Lira é uma empresa de Suporte Técnico em Informática para clientes domésticos e pequenas empresas.<br>
            Nosso Core Bussiness é baseado no relacionamento direto com o cliente ou empresa, propocionando ao mesmo serviços técnicos e acessórios que podemos oferecer dentro da nossa área, procurando na medida do impossível, adaptar serviços existentes para as suas necessidades, promovendo sempre a sua satisfação.</p>

        <div class="main_empresa">
            <article class="box box-full">
                <h1>Missão:</h1>
                <hr>
                <p>Atuar com padrões de excelência no serviços prestados aos clientes, aperfeiçoando processos, habilidades humanas e profissionais.</p>
            </article>
            <article class="box box-full">
                <h1>Visão:</h1>
                <hr>
                <p>Ser reconhecido como uma das melhores fornecedoras de serviços na área de suporte técnico em informática, superando sempre as expectativas de nossos clientes.</p>
            </article>
            <article class="box box-full">
                <h1>Valores:</h1>
                <hr>
                <p>Compromisso com Nossos Clientes.<br>
                    Ética Profissional.<br>
                    Profissionalismo em Nossos Serviços.</p>
            </article>
        </div>

        <div class="clear"></div>
    </div>
</section>

<section class="container bg-yellow">
    <div class="content">
        <header class="sectiontitle">
            <h1>Nossos Serviços</h1>    
        </header>
        <hr>

        <article class="box-full  main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/sistema.png" title="Formatação" alt="[Formatação]"/>
            <h1>Formatação</h1>
            <p>Formatamos o seu equipamento com Sistema Operacionais atualizados.</p>
        </article>

        <article class="box box-full main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/dados.png" title="Backup do seus arquivos" alt="[Backup dos seus arquivos]"/>
            <h1>Sistema de Backup</h1>
            <p>Salvamos seus arquivos com total eficiância e eficacia.</p>
        </article>

        <article class="main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/conserto.png" title="Restauração e Instalação de Hardware" alt="[Restauração e Instalação de Hardware]"/>
            <h1>Restauração</h1>
            <p>Fazemos a restauração das peças danificas.</p>
        </article>

        <article class="main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/protect.png" title="Limpeza Completa" alt="[Limpeza Completa]"/>
            <h1>Limpeza Completa</h1>
            <p>O seu equipamento precisa de uma limpeza periodicamente.</p>
        </article>

        <article class="main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/orcamento.png" title="Diagnóstico do seu equipamento" alt="[Diagnóstico do seu equipamento]"/>
            <h1>Diagnóstico</h1>
            <p>Fazemos diagnóstico do seu equipamentos e passamos com o orçamentos do serviço.</p>
        </article>

        <article class="main_serv_item">
            <img src="<?= INCLUDE_PATH; ?>/img/atend.png" title="Suporte Online" alt="[Suporte Online]"/>
            <h1>Suporte Online</h1>
            <p>Fazemos serviços via acesso remoto e tiramos suas dúvidas.</p>
        </article>

        <div class="al-center">
            <a href="http://localhost/manutencaolira_suporte-tecnico-em-Informatica/servicos" class="btn btn-red">Saiba Mais</a>
        </div>

        <div class="clear"></div>
    </div>
</section>

<article class="container main_cartao">
    <div class="cartao">
        <header class="main_header_cartao al-center">
            <h1>Cartão Fidelidade</h1>
            <p class="tagline">Faça o seu Cadastro aqui e tenha as Nossas Ofertas de Serviços e Promoções!</p>
        </header>
        
        <form class="form_check" name="sendcontent" action="obrigado" method="post">
            <input type="email" title="Email" name="E-mail"  placeholder="Informe Seu E-mail" required/>
            <a href="#" class="btn btn-red">Cadastrar</a>
        </form>
        
        <div class="clear"></div>
    </div>
</article>

<!--Agenda Online-->
<section class="container">
    <h1 class="fontzero">Book Online</h1>
    <div class="main_agenda boxshadow">
        <article class="box box-full al-center book">
            <h1>Book Online</h1>
            <p class="tagline">Agende agora a visita do técnico em sua residência!</p>
            <a href="http://localhost/manutencaolira_suporte-tecnico-em-Informatica/bookonline" class="btn btn-yelow">AGENDAR</a>
        </article>
        <div class="clear"></div>
    </div>
</section>

<section class="container bg-gray">
    <div class="content">
        <header class="sectiontitle">
            <h1>Fale Conosco</h1>
        </header>
        <hr>
        <aside class="contacto_info">
            <h1 class="fontzero">Formas de Contato</h1>
            <ul>
                <li><b>Horário de Atendimento:</b> 08:00 às 18:00 hrs</li>
                <li><b>Telefone:</b> (83) 9 9837-9516 | (83) 9 8748-4619</li>
                <li><b>Facebook:</b> <a title="Manutenção Lira no Facebook" href="#">Cristovão Lira Braga</a></li>
                <li><b>E-mail:</b> <a title="Envie Um E-mail" href="mailto:Ml_servicos@outlook.com?subject=Fale Conosco">ML_servicos@outlook.com</a></li>
            </ul>

            <p>
                Rua Solon de Lucena 187,<br>
                58135000 - Esperança/PB<br>
                Brasil             
            </p>
        </aside>

        <form action="" method="post" class="form_contact">
            <label>
                <input type="text" name="nome" title="Informe seu Nome" placeholder="Informe seu Nome" required/>
            </label>

            <label>
                <input type="email" name="email" title="Informe seu email" placeholder="Informe seu Email" required/>
            </label>

            <label>
                <textarea rows="5" name="mensagem" title="Mensagem" placeholder="Deixe aqui sua mensagem" required></textarea>
            </label>
            <button class="btn btn-red">Enviar</button>
        </form>
        <div class="clear"></div>
    </div>
</section>

<div class="container main_destaque">
    <div class="content al-center">
        <p class="sectiontitle" style="font-size: 1em; font-weight: 300;">Manutenção Lira trazendo para você os melhores serviços com preços acessiveis ao seu bolso!</p>

        <div class="link_facebook box box-full boxshadow">
            <a href="#" style="color: #fff; font-size: 1em;">Compartilhe no Facebook!</a>
        </div>

        <div class="link_goole box box-full boxshadow">
            <a href="#" style="color: #fff; font-size: 1em;">Recomende no Google!</a>
        </div>

        <div class="link_twitter box box-full boxshadow">
            <a href="#" style="color: #fff; font-size: 1em;">Conte isso no Twitter!</a>
        </div>

        <div class="clear"></div>
    </div>
</div>









