<?php 
//Template Name: Empresa
?>
<?php get_header(); ?>

<main>
  <section class="banner-principal__empresa">
    <div class="banner-principal__empresa-img-texto">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>

  <!--fim do banner principal-->

  <section class="page-empresa">
    <div class="container">
      <div class="page-empresa-conteudo-box3">
        <div class="page-empresa-conteudo3">
          <span class="estilo-span-2">EXCELÊNCIA EM</span>
          <h3>QUALIDADE</h3>
          <p>Inaugurada em 2005, a Chic Embalagens se consolidou com o propósito de oferecer, além de embalagens com excelência de qualidade visual e performance de empacotamento, um atendimento diferenciado e técnico ao mercado. Essa postura se traduz em analisar cada projeto em todas as suas variáveis, levando ao cliente a melhor e mais otimizada opção. Localizada em São José do Rio Preto / SP, a empresa está situada em região de logística estratégica, atendendo nacionalmente o mercado de embalagens flexíveis.</p>
        </div>
        <div class="page-empresa-foto3">
          <div class="page-empresa-img3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/images/Fachada-01-min.png" alt="Fachada da empresa Chic embalages">
          </div>
        </div>
      </div>
      <div class="page-empresa-conteudo-box4">
        <div class="page-empresa-foto4">
          <div class="page-empresa-img4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/Administrativo-min.png" alt="Administratito da empresa Chic embalages">
          </div>
        </div>
        <div class="page-empresa-conteudo4">
          <span class="estilo-span-2">ESTRUTURA</span>
          <h3>E CAPACITAÇÃO TÉCNICA</h3>
          <p>Com um parque industrial em constante atualização tecnológica, a empresa investe forte em estrutura e capacitação técnica, pois entende que a perfeita sintonia entre equipes, fornecedores de insumos e de equipamentos são a chave para a produção de embalagens que unem alta qualidade a uma utilização otimizada no momento do empacotamento e envase do produto final. Este mesmo compromisso com a satisfação dos clientes se reflete na área de <span class="span-vermelho">embalagens para presentes</span>, com estampas modernas, dimensionais variados e equipe dedicada de atendimento.</p>
          <br>
          <br>
          <p>Tudo isso tendo como base os conceitos expressos em nossos ideais de Missão, Visão e Valores.</p>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>