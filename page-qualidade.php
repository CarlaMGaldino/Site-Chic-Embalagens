<?php 
//Template Name: Qualidade
?>
<?php get_header(); ?>


<main>
  <section class="banner-principal__empresa">
    <div class="banner-principal__empresa-img-texto">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!--fim do banner principal-->

  <section class="page-empresa qualidade-empresa">
    <div class="container">
      <div class="area-comercial__conteudo">

        <div class="page-empresa-conteudo-box1">
          <div class="page-empresa-conteudo">
            <span class="estilo-span-2">GARANTIA DE</span>
            <h3>QUALIDADE</h3>
            <p>Um rígido controle de procedimentos, tratativas de não conformidades, busca de melhoria contínua e manutenção de certificações e documentações estatutárias, são de extrema importância para o processo produtivo.
              Falhas de processo, caso existam, são investigadas a fundo buscando a causa raiz, para que a efetividade das ações tomadas seja de alto impacto. Nossa equipe de qualidade está plenamente estruturada para assegurar nossos processos e produtos, desde a entrada da matéria-prima, com rígido controle de recebimento e avaliação de fornecedores, até a utilização das embalagens pelos nossos clientes, acompanhada de perto pelas equipes comerciais e de assistência técnica.
              Alem disso, treinamentos constantes e ações de conscientização com as equipes reforçam e concretizam a cada dia os conceitos expressos em nossa Política de Qualidade.</p>
          </div>
          <div class="page-empresa-foto">
            <div class="page-empresa-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/qualidade-embalagem-min.jpg" alt="Área qualidade Chic embalages">
            </div>

          </div>
        </div>



        <div class="qualidade-empresa__lista">
          <span>Politica de</span>
          <h3>Qualidade</h3>
          <p>A Chic Embalagens Ltda. tem o compromisso de produzir e comercializar embalagens flexíveis com alto padrão de qualidade e segurança prezando por:</p>
          <ul>
            <li class="qualidade-empresa__lista-conteudo">
              - Satisfazer os clientes atendendo seus requisitos e superando suas expectativas;
            </li>
            <li class="qualidade-empresa__lista-conteudo">- Melhorar continuamente os seus processos e produtos;</li>
            <li class="qualidade-empresa__lista-conteudo">- Cumprir os regulamentos aplicáveis e requisitos de todas as partes interessadas;</li>
            <li class="qualidade-empresa__lista-conteudo">- Envolver e capacitar todos os colaboradores em suas atividades e processos, garantido assim melhor desempenho e um resultado eficiente.</li>
          </ul>
        </div>

        <div class="page-empresa-conteudo-box2">
          <div class="page-empresa-foto2">
            <div class="page-empresa-img2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/Laboratorio 2-min.jpg" alt="Laboratório chic embalagens">
            </div>
          </div>

          <div class="page-empresa-conteudo2">
            <span class="estilo-span-2">NOSSO</span>
            <h3>LABORATório</h3>
            <p>Produzir embalagens flexíveis requer atenção a inúmeras variáveis técnicas e rigorosas especificações do cliente.
              Através de moderno laboratório e equipe altamente qualificada, realizamos testes, análises estruturais, além de ter o processo produtivo inteiramente monitorado e a qualidade do produto assegurada. </p>
          </div>
        </div>
      </div>
    </div>



  </section>
</main>


<?php get_footer(); ?>