<?php 
//Template Name: Presentes
?>
<?php get_header(); ?>

<main>
  <section class="banner-principal__presentes">
    <div class="banner-principal__presentes-img-texto">
      <h2>Embalagens <br> Para Presentes</h2>
    </div>
  </section>

  <section class="presentes">
    <div class="menu-presentes">
      <div class="menu-presentes-form">
        <form role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <label for="buscaPalavra" class="">Busque por palavra</label>
          <input type="search" class="form-control-busca" id="buscaPalavra" placeholder="ex. metalizado" value="<?php echo get_search_query(); ?>" name="s">

          <label for="linhaProdutos">Linha</label>
          <select name="tipo" class="form-control-select" id="linhaProdutos">
            <option value="" selected>Selecione a linha</option>
            <?php
            // Get the taxonomy's terms
            $terms_tipos = get_terms(
              array(
                  'taxonomy'   => 'tipos',
                  'hide_empty' => true,
              )
            );


            // Check if any term exists
            if ( ! empty( $terms_tipos ) && is_array( $terms_tipos ) ) {
              // add links for each category
              foreach ( $terms_tipos as $term_tipo ) { ?>
            <option value="<?php echo $term_tipo->term_id; ?>"><?php echo $term_tipo->name; ?></option>
            <?php
              }
            }
            ?>

          </select>

          <label for="codigoProduto">Código</label>
          <input name="codigo" type="number" class="form-control" id="codigoProduto" placeholder="">

          <label for="medidas">Medidas</label>
          <select name="medida" class="form-control-select" id="medidas">
            <option value="" selected>selecione a medida</option>

            <?php
            // Get the taxonomy's terms
            $terms_medidas = get_terms(
              array(
                  'taxonomy'   => 'medidas',
                  'hide_empty' => true,
              )
            );

            // Check if any term exists
            if ( ! empty( $terms_medidas ) && is_array( $terms_medidas ) ) {
              // add links for each category
              foreach ( $terms_medidas as $term_medida ) { ?>

            <option value="<?php echo $term_medida->term_id; ?>"><?php echo $term_medida->name; ?></option>
            <?php
              }
            }
            ?>

          </select>


          <label for="cores">Tipo</label>
          <select name="cor" class="form-control" id="cores">
            <option value="" selected>Selecione o tipo</option>

            <?php 
            
            $cores_embalagens = array();
            $posts = get_posts(array(
              'numberposts'	=> -1,
              'post_type'		=> 'embalagens',
              'meta_key'		=> 'cor_embalagem',
            ));

            if( $posts ): ?>


            <?php foreach( $posts as $post ): 
                setup_postdata( $post );
                $cores_embalagens[] = get_field('cor_embalagem');
                ?>

            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

            <?php
            foreach(array_unique($cores_embalagens) as $cor_embalagem) { 
            if ($cor_embalagem === "") { ?>
            <option style="display: none" value="<?php echo $cor_embalagem ?>"><?php echo $cor_embalagem ?></option>
            <?php  } else { ?>
            <option value="<?php echo $cor_embalagem ?>"><?php echo $cor_embalagem ?></option>
            <?php }
            ?>

            <?php }
            ?>

            <?php endif; ?>

          </select>
          <button type="submit" class="form-control__buscar" value="<?php echo esc_attr_x( 'Search', 'submit button', 'chic-embalagens' ); ?>">Buscar</button>
        </form>
      </div>
    </div>
    <div class="presentes-secao-menu">

      <div class="container">
        <div class="presentes-secao-menu__caixa">


          <div class="presentes-secao-menu__caixa2">
            <div class="presentes-secao-menu__conteudo">
              <div class="presentes-secao-menu__conteudo-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/ChicEmbalagens_catalogoEBOOK-min.jpg" alt="Embalagens de presente"></div>
              <div class="presentes-secao-menu__conteudo-texto">
                <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><span>home ></span></a><a href="<?php echo esc_url( home_url( '/embalagens-para-presentes' ) ) ?>"><span> embalagens para presentes > </span></a><span class="colorido">Todas as Linhas</span></span></div>
                <p class="colorido-2">EMBALAGENS </p>
                <h3>PARA PRESENTES</h3>
                <p>Contamos com uma extensa linha de etiquetas, laços para presentes e embalagens com estampas modernas e opções variadas de formatos.</p>
                <span class="linha" style="background-color: #DF191E">TODAS AS LINHAS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="presentes-secao">
      <div class="container">
        <ul class="presentes-secao__produtos">

          <?php 

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $busca_palavra = $_GET['s'];
                      
            $query = new WP_Query( array(
            'post_type' => 'embalagens', // name of post type.
            'posts_per_page' => 8,
            'order'=>'ASC',
            'meta_query' => $metaquery,
            'tax_query' => $taxyquery,
            'paged' => $paged,
            's'    =>  $busca_palavra,
            ) );

            while ( $query->have_posts() ) : $query->the_post();
            // do stuff here....

            ?>

          <li class="presentes-secao__produtos-item">
            <div>
              <div class="presentes-secao__produtos-item__img">
                <a class="test-popup-link" href="<?php the_field('imagem_embalagem'); ?>">
                  <img src="<?php the_field('imagem_embalagem'); ?>" alt="foto produto">
                </a>

                <span class="presentes-secao__produtos-item__codigo">Código: <?php the_field('codigo_embalagem'); ?></span>
              </div>

              <h3><?php the_title(); ?></h3>
              <?php 
                      $terms = get_the_terms( $post->ID, 'medidas' ); 
                      if ($terms != '') { ?>
              <p class="color2">Disponvel nas medidas:</p>
              <div class="presentes-secao__produtos-medidas">
                <?php
                        foreach($terms as $term) {
                          echo '<span>'. $term->name .'</span>';
                        }
                      } else {
                        echo '<div class="presentes-secao__produtos-medidas"><span style="display: none"></span>';
                      }
                  ?>
              </div>



              <?php 
                  $cor_embalagem_unica = get_field('cor_embalagem');
                  if ($cor_embalagem_unica === "") {
                  echo '<p class="color3"></p>';
                  } else {
                  echo '<p class="color3"><i class="fas fa-circle"></i>'. $cor_embalagem_unica .'</p>';
                  }

                ?>

              <?php 
                  $terms = get_the_terms( $post->ID, 'tipos' ); 
                  foreach($terms as $term) { ?>
              <div class="presentes-secao__produtos-item--tipo" style="background-color: <?php  $cognome_nome = get_field('cor_do_tipo', $term->taxonomy.'_'.$term->term_id); echo $cognome_nome ?>"><?php echo $term->name ?></div>

              <?php
                  }
                ?>
              <a class="color4" target="_blank" href="https://api.whatsapp.com/send?phone=5517996015716&text=Ol%C3%A1%2C%20vi%20a%20embalagem%20%E2%80%9C<?php the_field('codigo_embalagem'); ?>%E2%80%9D%20no%20site%20e%20queria%20mais%20informa%C3%A7%C3%B5es."><i class="fab fa-whatsapp"></i>Falar com vendedor</a>
            </div>
      </div>
      </li>


      <?php
            endwhile;


            ?>

      </ul>
      <?php   
            if (function_exists("cpt_pagination")) {

            cpt_pagination($query->max_num_pages); 
                
            } 

                        /**
            * reset the orignal query
            * we should use this to reset wp_query
            */
            wp_reset_query();
            ?>
    </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>