[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-2e0aaae1b6195c2367325f4f02e2d04e9abb55f0b24a779b69b11b9e10269abc.svg)](https://classroom.github.com/online_ide?assignment_repo_id=23013896&assignment_repo_type=AssignmentRepo)
# LAB PHP - Kit de Laboratório

<img align="center" height="50" width="60" src="https://raw.githubusercontent.com/devicons/devicon/refs/heads/master/icons/php/php-original.svg">
## 👨‍🏫 Prof. Maristela

Este é um kit de laboratório para aulas de **Programação Web II** com PHP. Ele inclui um servidor PHP embutido que pode ser facilmente iniciado, permitindo que os alunos testem seus códigos PHP sem a necessidade de instalar um ambiente completo como o XAMPP. 

### 📥 Versão utilizada do PHP:

Versão portável em Zip disponível em: https://windows.php.net/download - Extraída na pasta php

<img align="center" src="https://raw.githubusercontent.com/MARISTELAOLIVEIRA/media/main/img/PHP.png" alt="Versão do PHP para download - Thread Safe x64" width="600">

> **Dica:** Escolha a versão **VS16 x64 Thread Safe** em formato ZIP para uso em laboratório.

## 🚀 Uso em Aula (Windows + VSCode)

### Passo a passo para iniciar o servidor:

1. **Abra a pasta no VSCode**
   - Abra o VSCode e carregue esta pasta do projeto

2. **Abra o terminal integrado**
   - Use o atalho `Ctrl + `` ou vá em Terminal → Novo Terminal

3. **Navegue até a pasta do projeto**
   ```bash
   cd projeto
   ```

4. **Inicie o servidor PHP embutido**
   ```bash
   ..\php\php -S localhost:8000
   ```

5. **Acesse no navegador**
   - Abra seu navegador e acesse: [http://localhost:8000](http://localhost:8000)

## 📁 Estrutura do Projeto

```
lab_php/
├── php/                    # PHP portable extraído aqui
│   ├── php.exe
│   ├── php.ini-development
│   └── ...
├── projeto/                # Pasta do seu projeto web
│   ├── index.php          # Arquivo principal
│   ├── css/
│   │   └── style.css      # Estilos
│   └── js/
│       └── script.js      # Scripts JavaScript
└── README.md              # Este arquivo
```

## ✨ Vantagens

- ✅ Não precisa instalar XAMPP ou outros servidores
- ✅ Ambiente portátil e leve
- ✅ Fácil de usar em laboratório
- ✅ Ideal para aprendizado de PHP

## 📝 Notas

- O servidor PHP embutido é perfeito para **desenvolvimento e aprendizado**
- **Não** deve ser usado em produção
- Certifique-se de que a porta 8000 está disponível antes de iniciar o servidor
- Para parar o servidor pressione CTRL + C no terminal

## 🎓 Disciplina

**Programação Web II**

---

Desenvolvido para facilitar o aprendizado de PHP em ambiente de laboratório.



