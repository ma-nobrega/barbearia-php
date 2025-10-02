# 📂 Estrutura Base para Componentização em PHP Puro

Este repositório serve como base de uma landing page de barbearia, estruturada para facilitar a componentização em PHP puro, sem uso de frameworks.
A organização das pastas foi pensada para ser simples e clara, permitindo separar os componentes de forma limpa e pronta para evolução do projeto.

---

## ▶️ Como inicializar o projeto

1. **Instale o PHP** no seu computador (se ainda não tiver).  

2. Abra o terminal dentro da **pasta raiz** do projeto.

3. Rode o servidor embutido do PHP apontando para a pasta `public`:

```bash
php -S localhost:3000 -t public
```

4. Abra no navegador:  
   http://localhost:3000

> ⚠️ Importante: sempre rode o servidor na **pasta raiz** do projeto, senão os includes podem não funcionar corretamente.

---

## 📌 Conceitos importantes

- **PHP puro** → todos os includes são feitos manualmente, sem frameworks.  
- **`components/`** → pedaços de código reutilizáveis (ex: `header.php`, `footer.php`, `cardProduto.php`).  
- **`data/`** → dados centralizados (arrays, configs, JSON, etc.).  
- **`public/`** → tudo que o navegador acessa diretamente (CSS, JS, imagens, index).


