# 🚀 Oricode.tech

Site oficial da Oricode desenvolvido em WordPress com deploy automatizado via GitHub Actions.

## 📋 Sobre o Projeto

Este repositório contém o código-fonte do site **oricode.tech**, uma plataforma desenvolvida em WordPress com foco em soluções tecnológicas e desenvolvimento web.

## 🛠️ Tecnologias Utilizadas

- **WordPress** - CMS principal
- **PHP** - Linguagem de programação
- **GitHub Actions** - CI/CD para deploy automatizado
- **FTPS** - Protocolo de transferência segura de arquivos
- **Portuguese (Brazil)** - Localização pt_BR

## 🔄 Deploy Automatizado

O projeto utiliza GitHub Actions para deploy automatizado sempre que um Pull Request é merged na branch `main`.

### Workflow de Deploy

```yaml
Trigger: Pull Request fechado e merged na branch main
Timeout: 2 minutos
Servidor: ftp.oricode.tech
Protocolo: FTPS (porta 21)
Usuário: tiago@oricode.tech
```

### Como Funciona

1. **Pull Request** é criado com as alterações
2. Após revisão, o PR é **merged** na branch `main`
3. GitHub Actions **automaticamente** inicia o deploy
4. Arquivos são sincronizados via **FTPS** para o servidor
5. Site é **atualizado** automaticamente

## 📁 Estrutura do Projeto

```
oricode.tech/
├── .github/
│   └── workflows/
│       └── main.yml              # Configuração do GitHub Actions
├── wp-admin/                     # Painel administrativo WordPress
├── wp-content/
│   └── languages/
│       ├── admin-pt_BR.l10n.php  # Traduções admin PT-BR
│       ├── admin-network-pt_BR.l10n.php
│       └── pt_BR.l10n.php        # Traduções gerais PT-BR
├── wp-includes/                  # Core do WordPress
└── README.md                     # Este arquivo
```

## 🚀 Como Contribuir

### Pré-requisitos

- Conhecimento em WordPress
- Conhecimento em PHP
- Acesso ao repositório GitHub

### Fluxo de Contribuição

1. **Fork** o repositório
2. Crie uma **branch** para sua feature:
   ```bash
   git checkout -b feature/nova-funcionalidade
   ```
3. Faça suas **alterações** e commits:
   ```bash
   git commit -m "feat: adiciona nova funcionalidade"
   ```
4. **Push** para sua branch:
   ```bash
   git push origin feature/nova-funcionalidade
   ```
5. Abra um **Pull Request** para a branch `main`
6. Aguarde a **revisão** e aprovação
7. Após o merge, o **deploy** será automático! 🎉

## 🔧 Configuração Local

Para desenvolvimento local, você precisará:

1. **Servidor local** (XAMPP, WAMP, MAMP, etc.)
2. **PHP 7.4+**
3. **MySQL/MariaDB**
4. **WordPress** configurado

### Instalação

```bash
# Clone o repositório
git clone https://github.com/TiagOliveiraTI/oricode.tech.git

# Navegue até o diretório
cd oricode.tech

# Configure seu ambiente WordPress local
# Importe o banco de dados (se disponível)
# Configure wp-config.php com suas credenciais locais
```

## 🔐 Variáveis de Ambiente

O projeto utiliza as seguintes secrets no GitHub:

- `ftp_password` - Senha do FTP para deploy

## 📊 Status do Deploy

O deploy é executado automaticamente e você pode acompanhar o status na aba **Actions** do GitHub.

- ✅ **Sucesso**: Site atualizado com sucesso
- ❌ **Falha**: Verifique os logs na aba Actions
- ⏳ **Em andamento**: Deploy em execução (máx. 2 minutos)

## 🌐 Links Úteis

- **Site**: [https://oricode.tech](https://oricode.tech)
- **Repositório**: [https://github.com/TiagOliveiraTI/oricode.tech](https://github.com/TiagOliveiraTI/oricode.tech)

## 👨‍💻 Autor

**Tiago Oliveira**
- Email: tiago@oricode.tech
- GitHub: [@TiagOliveiraTI](https://github.com/TiagOliveiraTI)

## 📝 Licença

Este projeto está sob a licença [MIT](LICENSE) - veja o arquivo LICENSE para detalhes.

---

⭐ **Desenvolvido com ❤️ pela equipe Oricode**