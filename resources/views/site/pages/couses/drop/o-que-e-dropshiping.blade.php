@include('site.components.head')

@include('site.components.header')

{{-- GLEIDISON CLIENTE DE THALLYS
NATA NAEL
EDUARDO

--}}

<section id="ebookDropshiping" class="ts-block " style="">
  <div class="container">

    <div style="margin-top: 20px">
      <div class="col-12 title-main" style="">
        <h2 class="col-9" style="margin: 0;font-weight: 600;">GUIA DEFIINITIVO DO DROPSHIPING</h2>
        <div class="col-3">
          <a href="assets\img\me\curriculo.txt" class="ts-btn-effect mr-2" download="curriculo.pdf"
            style="border-radius: 10px">
            <span class="ts-visible btn btn-outline-light btn-dark">
              <i class="fa fa-download small mr-2"></i>
              Baixar Ebook
            </span>
            <span class="ts-hidden btn btn-light">
              <i class="fa fa-download small mr-2"></i>
              Baixar Ebook
            </span>
          </a>
        </div>
      </div>
      <hr class="title-main-hr" style="height: 1px; width: 100%; color: dimgray">

      <style>
        #ebookDropshiping {
          background-color: rgb(248, 248, 255);
          color: black;
          padding: 80px 0;
          margin-bottom: -80px
        }

        .content {
        display: flex;
        flex-direction: column;
        }

        .resume {
          overflow-x: hidden;
          overflow-y: scroll;
          height: 500px;
          padding: 30px 20px;
        }

        .resume-box {
          margin: 5px 0;
          padding: 30px;
          background: whitesmoke;
        }

        .resume::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
          background-color: #F5F5F5;
        }

        .resume::-webkit-scrollbar {
          width: 6px;
          background-color: #F5F5F5;
        }

        .resume::-webkit-scrollbar-thumb {
          background-color: #000000;
        }


        .content>.imagem {
          order: 1;
        }

        .content>.resume {
          order: 2;
        }

        .title-main {
          display: flex;
          width: 100%;
          flex-direction: row;
          padding: 10px;
          align-items: center;
        }

        .imagem-hr {
          visibility: hidden;
        }

        .imagem img {
          width: 100%;
          padding: 10px;
        }

        .imagem-box {
        width: 100%
        }

        .imagem .content-image {
          visibility: hidden;
          display: none
        }

        @media (max-width: 768px) {
          .content {
            flex-direction: column;
          }

          .title-main,
          .title-main-hr {
            visibility: hidden;
            display: none
          }

          .imagem-wapper {
            display: flex;
            background: whitesmoke;
            box-shadow: 0px 0 11px 1px #e0e0e8;
            border-radius: 20px;
          }

          .imagem-hr {
            visibility: visible;
          }

          .imagem img {
            padding: 0;
            border-radius: 15px;
          }

          .imagem .content-image {
            visibility: visible;
            background: whitesmoke;
            padding: 30px;
          }

          .imagem-box {
            padding: 10px
          }
        }

        @media (max-width: 426px) {
          #ebookDropshiping {
            margin-bottom: -100px
          }

          .imagem-wapper {
            flex-direction: column;
          }

          .imagem .content-image {
            visibility: visible;
            padding: 15px;
          }

          .resume {
            overflow: auto;
            height: fit-content;
            padding: 15px 10px;
          }

          .resume-box {
            padding: 20px 15px;
          }

        }
      </style>
      <div class="col-12 content">
        <div class="col-12 col-md-12 resume">
          <h1>O que é o Dropshiping?</h1>
          <p>Dropshiping é um modelo de negócio, uma modalidade de vendas online que permite aos empreendedores
            iniciarem um negócio digital e venderem produtos sem ter estoque.</p>
          <p>Basicamente a maior vantagem
            do dropshipping é que sua loja nunca vai
            precisar estocar nenhum produto, e a gama de fornecedores de um mesmo produto é gigante, todas as encomendas
            são feitas feitas sob demanda, além de não se
            preocupar com a logística de entrega.
            Neste formato, os fornecedores são os
            responsáveis pela disponibilidade,
            armazenamento, preparo e envio dos
            itens ao consumidor final. Agora entendemos o porque desse mercado fazer tanto sucesso. Mas não se engane
            vender um produto não é fácil, você precisa minerar bem o produto, ter ótimos criativos e um bom
            planejamento de anúncios.</p>
          <p>O dropshiping também é um ótima porta de entrada para quem já possue uma loja virtual, e quer testar um
            novo nicho de produtos e a venda em grande escala, sem a preocupação com estoque e logística, economizando o
            dinheiro que teria que ser investido em um funcionario para esse cargo. você evita de gastar com salários,
            férias, décimo terceiro, adcionais e muito mais, podendo investir esse dinheiro economizado em tráfego pago.
            A principal obrigação de um dono de uma loja virtual de dropshiping é o marketing, criação de criativos,
            pré-venda e pós-venda. Se você quer se aprofundar mais e dominar o universo do dropshiping por definitivo,
            ou apenas tem curiosidade no assunto, continue a leitura.
            <br>
          <div class="resume-box">
            <h3>Esse método fornece:</h3>
            <ul>
              <li>
                <p>Baixo risco de investimento, uma vez que você precisa de apenas, 1 domínio, 1 plano da Shopify e uma
                  boa conexão com a internet</p>
              </li>
              <li>
                <p>Possibilita testar um produto sem a necessidade de pagar um boleto adiantado</p>
              </li>
              <li>
                <p>Redução de custos, pois não necessita ter funcionários, e também não precisa de pagar aluguel em um
                  espaço físico.</p>
              </li>
            </ul>
          </div>
          </p>

          proxima página...
        </div>
        <div class="col-12 col-md-12 imagem">
          <div class="imagem-wapper d-flex">
            <div class="col-12 col-sm-4 col-md-4 imagem-box">
              {{-- banners do curso --}}
              <picture>                
                <source srcset="assets\img\drop\banner-main.png" media="(min-width: 415px)"> 
                <img style="" src="assets/img/drop/capa-guia-definitivo-do-drop_mobile.jpg" alt="">
              </picture>
            </div>
            <div class="col-12 col-sm-8 col-md-8 content-image">
              <h2 class="col-12" style="margin: 0;font-weight: 600; color: #ffac00"><span
                  style="font-weight: 900; color: black">GUIA</span> DEFIINITIVO DO DROPSHIPING</h2>
              <h3>Tudo o que você precisa saber para vender sem estoque!</h3>
              <p style="margin-bottom: 10px">Ebook criado por Samuel Caitano.</p>
              <p style="margin-bottom: 10px">Analista de Sistemas e fundador das Lojas Base</p>

              <a href="assets\img\me\curriculo.txt" class="ts-btn-effect mr-2" download="curriculo.pdf"
                style="border-radius: 10px">
                <span class="ts-visible btn btn-outline-light btn-dark">
                  <i class="fa fa-download small mr-2"></i>
                  Baixar Ebook
                </span>
                <span class="ts-hidden btn btn-light">
                  <i class="fa fa-download small mr-2"></i>
                  Baixar Ebook
                </span>
              </a>
            </div>
          </div>
          <hr class="imagem-hr" style="height: 1px; width: 100%; color: dimgray">
        </div>
      </div>

      <hr style="height: 1px; width: 100%; color: dimgray">

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="/como-o-dropshiping-funciona">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</section>
@include('site.components.footer')

@include('site.components.script')