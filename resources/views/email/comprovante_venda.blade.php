<body class="bg-light">
    <div class="container">
      <div class="card p-6 p-lg-10 space-y-4">
        <h1 class="h3 fw-700">
          Comprovante de venda
        </h1>
        <p>
        Produto: {{ $mailData['produtoNome']}} <br>
        Cliente: {{ $mailData['clienteNome']}}
        </p>
        <a class="btn btn-primary p-3 fw-700" href="https://www.ocodigodinamico.com.br/">Visite nossa loja</a>
      </div>
      <div class="text-muted text-center my-6">
        Código Dinâmico <br>
       Rua Acedina Batista da Conceição nº608, Junco<br>
        Jacobina, Bahia <br>
      </div>
    </div>
  </body>