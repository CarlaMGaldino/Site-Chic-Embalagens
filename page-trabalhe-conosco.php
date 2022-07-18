<?php 
//Template Name: Trabalhe Conosco
?>
<?php get_header(); ?>


<main>
  <section class="banner-principal__empresa">
    <div class="banner-principal__empresa-img-texto">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!--fim do banner principal-->
  <section class="page-contato">
    <div class="container">
      <div class="page-contato__conteudo">
        <p class="page-contato-vermelho">Trabalhe</p>
        <h3>Com a chic</h3>
        <p>Acreditamos que o conhecimento é a base para toda evolução, seja ela profissional ou pessoal. Pensando nisso, contamos com programa de reciclagem constante de nossos colaboradores através de treinamentos e seminários técnicos. O resultado é o sucesso quando um grupo de pessoas, apaixonadas pelo que fazem, se reunem para um ideal comum. Caso tenha interesse em integrar nossa equipe, envie seu currículo, suas informações ficarão no nosso banco de dados do RH e analisados assim que uma vaga surgir. </p>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="40" title="Formulário de Contato - Página Trabalhe conosco"]'); ?>
    </div>
  </section>
</main>


<?php get_footer(); ?>