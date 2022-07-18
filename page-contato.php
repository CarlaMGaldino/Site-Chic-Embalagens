<?php 
//Template Name: Contato
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
        <p class="page-contato-vermelho">Fale</p>
        <h3>Com a chic</h3>
        <p>Possui alguma dúvida, sugestão ou reclamação? Envie-nos através do formulário abaixo e em breve lhe retornaremos.</p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato 1"]'); ?>


    </div>

  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.790804797197!2d-49.35346468492712!3d-20.8401523726359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bc4d24b6650b8f%3A0x16ad1c14040ee444!2sR.%20Ot%C3%A1vio%20Le%C3%A3o%20F%C3%A1cio%2C%20100%20-%20Parque%20Industrial%20Tancredo%20Neves%2C%20S%C3%A3o%20Jos%C3%A9%20do%20Rio%20Preto%20-%20SP%2C%2015076-620!5e0!3m2!1spt-BR!2sbr!4v1638235636894!5m2!1spt-BR!2sbr" width="100%" height="409" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</main>


<?php get_footer(); ?>