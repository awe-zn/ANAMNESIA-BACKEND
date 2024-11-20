# 🚀 **Anamnésia de Inovação - Backend**

Bem-vindo ao repositório **Anamnésia de Inovação - Backend**, desenvolvido utilizando o **Laravel**. Este backend foi criado para gerenciar turmas, usuários, avaliações, e autoavaliações em um sistema de aprendizagem baseado em habilidades empreendedoras.

---

## 📝 **Sobre o Projeto**

Este é o backend do sistema de gerenciamento de turmas, avaliações e autoavaliações, com foco no desenvolvimento de habilidades empreendedoras dos usuários. O sistema permite o gerenciamento de turmas, participantes, perguntas de autoavaliação, resultados de testes e muito mais.

---

## ⚙️ **Tecnologias Usadas**

O backend foi desenvolvido utilizando as seguintes tecnologias:

- **PHP** 
- **Laravel** 
- **MySQL** 

---

## 💻 **Requisitos**

Para rodar o projeto em seu ambiente local, você precisará de:

- [PHP 8.0+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)

Se você preferir, o projeto pode ser rodado em containers Docker.

---

## 🛠️ **Passos para Instalação**

### 1. **Clone o Repositório**

Primeiro, clone o repositório para sua máquina local:

```bash
git clone https://github.com/awe-zn/ANAMNESIA-BACKEND.git
cd ANAMNESIA-BACKEND

2. Instale as Dependências
Execute o comando abaixo para instalar as dependências do projeto:

bash
Copiar código
composer install
Isso irá instalar todas as dependências PHP necessárias para o funcionamento do backend.

3. Configuração do Ambiente
Duplique o arquivo .env.example para criar o arquivo de configuração .env:

bash
Copiar código
cp .env.example .env
4. Gerar a Key de Aplicação
O Laravel utiliza uma chave de aplicação para criptografia. Gere a chave utilizando o comando:

bash
Copiar código
php artisan key:generate
5. Configuração do Banco de Dados
Configure as credenciais do banco de dados no arquivo .env. Procure pelas variáveis de configuração do banco de dados e defina conforme necessário:

ini
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario_do_banco
DB_PASSWORD=senha_do_banco
6. Executar as Migrações do Banco de Dados
Para criar as tabelas no banco de dados, execute o comando de migração:

bash
Copiar código
php artisan migrate
7. Rodar o Servidor de Desenvolvimento
Agora, para iniciar o servidor de desenvolvimento local, execute:

bash
Copiar código
php artisan serve
Por padrão, o servidor estará disponível em http://127.0.0.1:8000.

👨‍💻 Contribuindo
Se você deseja contribuir para o desenvolvimento deste projeto, siga os seguintes passos:

Faça o fork deste repositório.
Crie uma branch com o nome da sua feature (git checkout -b minha-feature).
Faça as modificações desejadas e crie um commit (git commit -am 'Adiciona nova feature').
Envie a branch para o repositório remoto (git push origin minha-feature).
Abra um pull request explicando suas alterações.

📄 Licença
Este projeto está licenciado sob a MIT License - consulte o arquivo LICENSE para mais detalhes.