<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbarian Barbearia</title>
    <link rel="stylesheet" href="./assets/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/viking.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- ===================== INÍCIO: HEADER ===================== -->
    <header class="cabecalho">
        <div class="container cabecalhoContainer">
            <a href="#" class="logomarca">
                <img
                    class="marcaImg"
                    src="./assets/imgs/logo.png"
                    alt="Logo Barbarian Barbearia" />
            </a>

            <nav class="navegacao">
                <div class="listaLinks">
                    <a href="#portfolio">Portfólio</a>
                    <a href="#barbeiros">Barbeiros</a>
                    <a href="#planos">Planos</a>
                    <a href="#depoimentos">Depoimentos</a>
                    <a href="#contato">Contato</a>
                </div>

                <a
                    class="botaoCtaHeader"
                    href="https://wa.me/5599999999999"
                    target="_blank">
                    <svg class="ctaIcone" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M20.52 3.48A11.94 11.94 0 0 0 12.06 0C5.5 0 .2 5.3.2 11.85c0 2.09.55 4.06 1.6 5.83L0 24l6.48-1.7a11.7 11.7 0 0 0 5.58 1.42h.01c6.56 0 11.86-5.3 11.86-11.85 0-3.17-1.24-6.15-3.41-8.39ZM12.07 21.2a9.36 9.36 0 0 1-4.77-1.31l-.34-.2-3.84 1 1.03-3.74-.22-.35a9.28 9.28 0 0 1-1.43-4.95c0-5.17 4.21-9.37 9.39-9.37 2.51 0 4.86.98 6.63 2.76a9.27 9.27 0 0 1 2.75 6.61c0 5.17-4.22 9.35-9.4 9.35Zm5.47-7.01c-.3-.15-1.77-.87-2.05-.97-.27-.1-.46-.15-.66.15-.19.3-.76.97-.94 1.17-.17.2-.35.22-.65.08-.3-.15-1.26-.46-2.4-1.46-.89-.79-1.5-1.77-1.68-2.07-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.66-1.6-.91-2.2-.24-.58-.48-.5-.66-.51h-.56c-.18 0-.46.07-.7.35-.24.3-.92.9-.92 2.2 0 1.3.94 2.56 1.08 2.74.15.2 1.85 2.82 4.49 3.96.63.27 1.12.43 1.5.55.63.2 1.2.17 1.65.1.5-.07 1.77-.73 2.02-1.45.25-.7.25-1.29.18-1.45-.07-.15-.27-.24-.56-.38Z" />
                    </svg>
                    <span>Agendar</span>
                </a>
            </nav>
        </div>
    </header>
    <!-- ===================== FIM: HEADER ===================== -->

    <!-- ===================== INÍCIO: HERO ===================== -->
    <section id="hero" class="hero">
        <div class="container heroContainer">
            <div class="heroConteudo">
                <span class="heroSelo">Desde 2015 • 4,9★</span>

                <h1 id="titulo-hero" class="heroTitulo">A Ordem da Navalha</h1>

                <p id="sub-hero" class="subtitulo">
                    Barbearia viking de luxo, onde tradição e técnica se encontram:
                    corte clássico ou moderno, barba alinhada na navalha e ritual
                    completo com toalha quente e aromas premium.
                </p>

                <div class="heroAcoes">
                    <!-- CTA primário do HERO: identidade própria -->
                    <a
                        class="botaoCta"
                        href="https://wa.me/5599999999999"
                        target="_blank"
                        rel="noopener">
                        Agendar agora
                    </a>

                    <!-- CTA secundário -->
                    <a class="botaoSecundario" href="#planos"> Ver planos </a>
                </div>

                <div class="heroPontos">
                    <div>Acabamento preciso</div>
                    <div>Toalha quente</div>
                    <div>Barba na navalha</div>
                    <div>Produtos premium</div>
                </div>
            </div>

            <div class="heroImagem">
                <img
                    src="./assets/imgs/banner.png"
                    alt="Salão da Barbarian Barbearia em ambiente grafite e prata, com poltronas e espelhos iluminados" />
                <figcaption class="heroLegenda">
                    Barbarian Barbearia — salão frontal
                </figcaption>
            </div>
        </div>
    </section>

    <!-- ===================== FIM: HERO ===================== -->
    <!-- ===================== INÍCIO: PORTFÓLIO ===================== -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <header class="portfolioIntro">
                <h2 id="titulo-portfolio" class="titulo">
                    Portfólio — Antes &amp; Depois
                </h2>
                <p class="portfolioTexto">
                    Resultados reais: cortes e barbas com acabamento de precisão.
                </p>
            </header>

            <div class="portfolioGrid">
                <!-- Item 1 -->
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-1.jpg"
                                alt="Antes: corte masculino antes do fade médio." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-1.jpg"
                                alt="Depois: corte masculino com fade médio finalizado." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Fade médio — laterais limpas e topo texturizado.
                    </figcaption>
                </div>

                <!-- Item 2 -->
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-2.jpg"
                                alt="Antes: barba por fazer, contornos irregulares." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-2.jpg"
                                alt="Depois: barba alinhada na navalha e hidratação." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Barba na navalha — contorno limpo e hidratação.
                    </figcaption>
                </div>

                <!-- Item 3 -->
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-3.jpg"
                                alt="Antes: cabelo volumoso sem definição." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-3.jpg"
                                alt="Depois: corte clássico com acabamento em tesoura." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Clássico — caimento natural e acabamento em tesoura.
                    </figcaption>
                </div>

                <!-- Item 4 -->
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-4.jpg"
                                alt="Antes: barba longa sem definição." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-4.jpg"
                                alt="Depois: barba aparada com desenho definido." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Desenho de barba — simetria e volume equilibrado.
                    </figcaption>
                </div>
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-5.jpg"
                                alt="Antes: barba longa sem definição." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-5.jpg"
                                alt="Depois: barba aparada com desenho definido." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Desenho de barba — simetria e volume equilibrado.
                    </figcaption>
                </div>
                <div class="portfolioItem">
                    <div class="comparador">
                        <div class="imgWrap antes">
                            <img
                                src="./assets/imgs/cortes/antes-6.png"
                                alt="Antes: barba longa sem definição." />
                            <span class="etiqueta">Antes</span>
                        </div>
                        <div class="imgWrap depois">
                            <img
                                src="./assets/imgs/cortes/depois-6.jpg"
                                alt="Depois: barba aparada com desenho definido." />
                            <span class="etiqueta">Depois</span>
                        </div>
                    </div>
                    <figcaption class="portfolioLegenda">
                        Desenho de barba — simetria e volume equilibrado.
                    </figcaption>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== FIM: PORTFÓLIO ===================== -->
    <!-- ===================== INÍCIO: BARBEIROS ===================== -->
    <section id="barbeiros" class="barbeiros">
        <div class="container">
            <header class="barbeirosIntro">
                <h2 id="titulo-barbeiros" class="titulo">A Guilda de Barbeiros</h2>
                <p class="barbeirosTexto">
                    Mestres do aço e do detalhe — escolha quem combina com seu estilo.
                </p>
            </header>

            <div class="listaBarbeiros">
                <!-- Card 1 -->
                <div class="cardBarbeiro barber--joao">
                    <img
                        class="fotoBarbeiro"
                        src="./assets/imgs/barbeiros/barbeiro1.png"
                        alt="Barbeiro João Silva — Mestre da Navalha" />
                    <div class="cardConteudo">
                        <h3 class="nomeBarbeiro">João Silva</h3>
                        <p class="subtitulo">Mestre da Navalha</p>
                        <a
                            class="botaoCta"
                            href="https://wa.me/5599999999999?text=Quero%20agendar%20com%20Jo%C3%A3o"
                            target="_blank">Agendar com João</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="cardBarbeiro barber--lucas">
                    <img
                        class="fotoBarbeiro"
                        src="./assets/imgs/barbeiros/barbeiro2.png"
                        alt="Barbeiro Lucas Almeida — Especialista em cortes clássicos" />
                    <div class="cardConteudo">
                        <h3 class="nomeBarbeiro">Lucas Almeida</h3>
                        <p class="subtitulo">Clássico & Tesoura</p>

                        <a
                            class="botaoCta"
                            href="https://wa.me/5599999999999?text=Quero%20agendar%20com%20Lucas"
                            target="_blank"
                            rel="noopener">Agendar com Lucas</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="cardBarbeiro barber--carlos">
                    <img
                        class="fotoBarbeiro"
                        src="./assets/imgs/barbeiros/barbeiro3.png"
                        alt="Barbeiro Carlos Ramos — Design de barba e pele sensível" />
                    <div class="cardConteudo">
                        <h3 class="nomeBarbeiro">Carlos Ramos</h3>
                        <p class="subtitulo">Design & Pele Sensível</p>
                        <a
                            class="botaoCta"
                            href="https://wa.me/5599999999999?text=Quero%20agendar%20com%20Carlos"
                            target="_blank"
                            rel="noopener">Agendar com Carlos</a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="cardBarbeiro barber--renato">
                    <img
                        class="fotoBarbeiro"
                        src="./assets/imgs/barbeiros/barbeiro4.png"
                        alt="Barbeiro Renato Souza — Ritual completo e barba viking" />
                    <div class="cardConteudo">
                        <h3 class="nomeBarbeiro">Renato Souza</h3>
                        <p class="subtitulo">Rituais & Viking</p>
                        <a
                            class="botaoCta"
                            href="https://wa.me/5599999999999?text=Quero%20agendar%20com%20Renato"
                            target="_blank"
                            rel="noopener">Agendar com Renato</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== FIM: BARBEIROS ===================== -->

    <!-- ===================== INÍCIO: PLANOS & PREÇOS ===================== -->
    <section id="planos" class="planos">
        <div class="container">
            <header class="planosIntro">
                <h2 id="titulo-planos" class="titulo">Planos & Preços</h2>
                <p class="planosTexto">
                    Escolha seu ritual e economize mantendo o visual sempre afiado.
                </p>
            </header>

            <div class="gridPlanos">
                <!-- Bronze -->
                <div class="cardPlano plano--bronze">
                    <header class="planoHeader">
                        <h3 class="planoNome">Bronze</h3>
                        <p class="planoSub">1 corte por mês</p>
                    </header>

                    <p class="preco">
                        <span class="moeda">R$</span><span class="valor">69</span><span class="periodo">/mês</span>
                    </p>

                    <div class="beneficios">
                        <div>Acabamento de nuca incluso</div>
                        <div>Lembrete de agendamento</div>
                        <div>10% off na loja</div>
                    </div>

                    <a class="btnPlano" href="#">Assinar Bronze</a>
                </div>

                <!-- Ferro (Mais popular) -->
                <div class="cardPlano plano--prata is-popular">
                    <div class="badgePopular">Mais popular</div>
                    <header class="planoHeader">
                        <h3 class="planoNome">prata</h3>
                        <p class="planoSub">1 corte + 1 barba/mês</p>
                    </header>

                    <p class="preco">
                        <span class="moeda">R$</span><span class="valor">109</span><span class="periodo">/mês</span>
                    </p>

                    <div class="beneficios">
                        <div>Toalha quente & navalha</div>
                        <div>Prioridade no agendamento</div>
                        <div>15% off na loja</div>
                    </div>

                    <a class="btnPlano" href="#">Assinar Prata</a>
                </div>

                <!-- Ouro -->
                <div class="cardPlano plano--ouro">
                    <header class="planoHeader">
                        <h3 class="planoNome">Ouro</h3>
                        <p class="planoSub">3 cortes + 3 barbas</p>
                    </header>

                    <p class="preco">
                        <span class="moeda">R$</span><span class="valor">299</span><span class="periodo">/trimestre</span>
                    </p>

                    <div class="beneficios">
                        <div>Ritual completo (óleo incluso)</div>
                        <div>Brinde de boas-vindas</div>
                        <div>20% off na loja</div>
                    </div>

                    <a class="btnPlano" href="#">Assinar Ouro</a>
                </div>
            </div>

            <p class="disclaimer">
                Sem fidelidade. Você pode cancelar quando quiser.
            </p>
        </div>
    </section>
    <!-- ===================== FIM: PLANOS & PREÇOS ===================== -->

    <!-- ===================== INÍCIO: DEPOIMENTOS ===================== -->
    <section id="depoimentos" class="depo">
        <div class="container">
            <header class="depoIntro">
                <h2 id="titulo-depo" class="titulo">Depoimentos</h2>
                <p class="depoTexto">
                    Prova social de quem já passou pela nossa cadeira.
                </p>
            </header>

            <div class="depoGrid">
                <!-- Card 1 -->
                <div class="depoCard">
                    <div class="depoAutor">
                        <img class="depoAvatar" src="./assets/imgs/avaliacoes/1.png" alt="" />
                        <div class="depoAssinatura">
                            <strong>Marcos T.</strong>
                            <span>Google Reviews</span>
                        </div>
                    </div>
                    <div class="depoEstrelas" role="img">★★★★★</div>
                    <p class="depoFrase">
                        “Ritual Viking surreal. Toalha quente e navalha impecáveis. Saí
                        novo!”
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="depoCard">
                    <div class="depoAutor">
                        <img class="depoAvatar" src="./assets/imgs/avaliacoes/2.png" alt="" />
                        <div class="depoAssinatura">
                            <strong>Leonardo S.</strong>
                            <span>Google Reviews</span>
                        </div>
                    </div>
                    <div class="depoEstrelas" role="img">★★★★★</div>
                    <p class="depoFrase">
                        “Detalhe no fade que poucos têm. Pontualidade e cuidado extremo.”
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="depoCard">
                    <div class="depoAutor">
                        <img class="depoAvatar" src="./assets/imgs/avaliacoes/3.png" alt="" />
                        <div class="depoAssinatura">
                            <strong>Daniel R.</strong>
                            <span>Instagram</span>
                        </div>
                    </div>
                    <div class="depoEstrelas" role="img">★★★★★</div>
                    <p class="depoFrase">
                        “Barba do Alquimista salvou minha pele sensível. Recomendo sem
                        pensar.”
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="depoCard">
                    <div class="depoAutor">
                        <img class="depoAvatar" src="./assets/imgs/avaliacoes/4.png" alt="" />
                        <div class="depoAssinatura">
                            <strong>Bruno C.</strong>
                            <span>Google Reviews</span>
                        </div>
                    </div>
                    <div class="depoEstrelas" role="img">★★★★★</div>
                    <p class="depoFrase">
                        “Ambiente escuro e elegante, vibe medieval premium. Experiência
                        top.”
                    </p>
                </div>
            </div>

            <p class="depoRodape">
                <a class="depoLink" href="#" target="_blank" rel="noopener">Ver todas as avaliações</a>
                ou
                <a
                    class="depoLink"
                    href="https://wa.me/5599999999999"
                    target="_blank"
                    rel="noopener">agendar agora</a>.
            </p>
        </div>
    </section>
    <!-- ===================== FIM: DEPOIMENTOS ===================== -->
    <!-- ===================== INÍCIO: CONTATO & LOCALIZAÇÃO ===================== -->
    <section id="contato" class="contato">
        <div class="container">
            <header class="contatoIntro">
                <h2 id="titulo-contato" class="titulo">Contato &amp; Localização</h2>
                <p class="contatoTexto">
                    Agende seu horário ou venha nos visitar no coração da cidade.
                </p>
            </header>

            <div class="contatoGrid">
                <!-- INÍCIO: Bloco de informações -->
                <div class="contatoInfo">
                    <h3 class="titulo">Fale com a gente</h3>

                    <div class="contatoLista">
                        <div>
                            <strong>WhatsApp:</strong>
                            <a
                                href="https://wa.me/5599999999999"
                                target="_blank"
                                rel="noopener">+55&nbsp;99&nbsp;9999-9999</a>
                        </div>
                        <div>
                            <strong>Telefone:</strong>
                            <a href="tel:+5599999999999">+55&nbsp;99&nbsp;9999-9999</a>
                        </div>
                        <div>
                            <strong>E-mail:</strong>
                            <a href="mailto:contato@barbarian.com.br">
                                contato@barbarian.com.br
                            </a>
                        </div>
                        <div>
                            <strong>Endereço:</strong> Rua dos Ferreiros, 123 — Centro,
                            Jaboticabal-SP
                        </div>
                    </div>

                    <h3 class="titulo">Horários</h3>
                    <div class="horarios">
                        <div><strong>Seg a Sex: </strong>10h às 20h</div>
                        <div><strong>Sábado: </strong>9h às 18h</div>
                        <div><strong>Domingo: </strong>fechado</div>
                    </div>

                    <div class="contatoAcoes">
                        <a
                            class="botaoCta"
                            href="https://wa.me/5599999999999"
                            target="_blank"
                            rel="noopener">Agendar no WhatsApp</a>
                    </div>
                </div>
                <!-- FIM: Bloco de informações -->

                <!-- INÍCIO: Mapa -->
                <div class="contatoMapa">
                    <!-- Se quiser embed real do Google Maps, troque o src pelo seu endereço -->
                    <iframe
                        title="Mapa — Barbarian Barbearia"
                        class="mapaFrame"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0000000000005!2d-46.6333099!3d-23.5505199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3ABarbarian!2sRua%20dos%20Ferreiros%2C%20123!5e0!3m2!1spt-BR!2sBR!4v0000000000000">
                    </iframe>
                </div>
                <!-- FIM: Mapa -->
            </div>
        </div>
    </section>
    <!-- ===================== FIM: CONTATO & LOCALIZAÇÃO ===================== -->

    <!-- ===================== INÍCIO: RODAPÉ ===================== -->
    <footer class="rodape" role="contentinfo">
        <div class="container rodapeContainer">
            <!-- Bloco: Marca -->
            <div class="rodapeBloco">
                <div class="rodapeMarca">
                    <img
                        class="rodapeLogo"
                        src="./assets/imgs/logo.png"
                        alt="Logo Barbarian Barbearia"
                        width="36"
                        height="36" />
                </div>
                <p class="rodapeDesc">
                    Estilo de cavaleiro, precisão de artesão. Grafite &amp; prata, do
                    jeito certo.
                </p>
            </div>
            <div class="rodapeDuplo">
                <!-- Bloco: Links -->
                <nav class="rodapeBloco">
                    <h3 class="rodapeTitulo">Mapa do site</h3>
                    <nav class="rodapeListaRow">
                        <a href="#portfolio">Portfólio</a>
                        <a href="#barbeiros">Barbeiros</a>
                        <a href="#planos">Planos</a>
                        <a href="#depoimentos">Depoimentos</a>
                        <a href="#contato">Contato</a>
                    </nav>
                </nav>
                <!-- Bloco: Social -->
                <div class="rodapeBloco">
                    <h3 class="rodapeTitulo">Siga</h3>
                    <nav class="rodapeListaRow">
                        <a href="#" target="_blank" rel="noopener">Instagram</a>
                        <a href="#" target="_blank" rel="noopener">Facebook</a>
                        <a href="#" target="_blank" rel="noopener">TikTok</a>
                    </nav>
                </div>
            </div>
            <!-- Bloco: Contato -->
            <div class="rodapeBloco">
                <h3 class="rodapeTitulo">Contato</h3>
                <div class="rodapeLista">
                    <a href="https://wa.me/5599999999999" target="_blank" rel="noopener">WhatsApp: +55&nbsp;99&nbsp;9999-9999</a>
                    <a href="tel:+5599999999999">Telefone: +55&nbsp;99&nbsp;9999-9999</a>
                    <a href="mailto:contato@barbarian.com.br">contato@barbarian.com.br</a>
                    <a href="#">Rua dos Ferreiros, 123 — Centro</a>
                </div>
            </div>
        </div>

        <div class="container rodapeLegalContainer">
            <small>© 2025 Barbarian Barbearia — CNPJ 00.000.000/0000-00 • </small>
            <a
                class="rodapeTopo"
                href="#topo"
                onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">Voltar ao topo ↑</a>
        </div>
    </footer>
    <!-- ===================== FIM: RODAPÉ ===================== -->
</body>

</html>