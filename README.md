# Template de Landing Page - Nutrição (White-label)

Este é o repositório base (template) para a criação de Landing Pages de alta conversão voltadas para profissionais de nutrição. O projeto foi construído com foco em performance, SEO e facilidade de customização para revenda.

## 🚀 Tecnologias Utilizadas

* **Backend:** PHP 8.2+ / Laravel 11
* **Frontend:** Blade, Tailwind CSS
* **Interatividade:** Alpine.js
* **Ícones:** SVG inline

## ⚙️ Como customizar para um novo cliente

A arquitetura do projeto foi pensada para ser *plug-and-play*. Para adaptar o site inteiro para uma nova nutricionista, basta alterar um único arquivo:

1. Abra o arquivo `config/landing.php`.
2. Altere as variáveis principais:
   - Nome, CRN e Biografia
   - Links das Redes Sociais e WhatsApp (já integrado com mensagem padrão)
   - Especialidades, Depoimentos e FAQ
3. Substitua as imagens na pasta `public/images` ou altere as URLs nos placeholders da view principal (`resources/views/landing/index.blade.php`).

## 🛠️ Instalação e Execução (Desenvolvimento)

```bash
# 1. Clone o repositório
git clone [https://github.com/Skowronski-33/site-nutri.git] nome-do-cliente

# 2. Instale as dependências do PHP e do Node
composer install
npm install

# 3. Configure o arquivo de ambiente
cp .env.example .env
php artisan key:generate

# 4. Compile os assets do Tailwind/Alpine
npm run dev

# 5. Inicie o servidor local
php artisan serve