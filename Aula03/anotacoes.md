## SGBD
Instalar e configurar o SGBD PostgreSQL
```bash
sudo apt install -y postreSql
```
```bash
pg_lsclusters
```
confere se ta online o servidor
```bash
sudo -u postgres psql
```

acesso sem senha no sgbd
alter user (user) password (coloca a senha nova); troca senha do usuario no postgres

sudo psql -h 127.0.0.1 -U postgres
acessa de fora da máquina

```mermaid
graph LR
A[Sudo -u postgrespsql]--Autenticação-->B[Só funciona entrando dentro do próprio Linux]
```
```mermaid
graph LR
A[Sudo psql -h 127.0.0.1 -U postgres]--Autenticação-->B[Entra de qualquer máquina mas precisa de senha]
```
---------------------------

## configuração servico
>root@I1D45B-01:/etc/postgresql/18/main#
destino padrão configuração
em listen_addresses determina quem pode acessar (descomenta)
primeira configuração:
```bash
sudo nano postgresql.conf
```
ctrl + w busca o listen
tira o localhost e coloca `*`

passo 2: ir em pg_hba no fim e adiconar a linha:
>host   all all 10.87.38.0/24 scram-sha-256 
pula com tab e n espaço

```sql
CREATE DATABASE (nome banco); 
```
cria o banco de dados
p ver os bancos \l