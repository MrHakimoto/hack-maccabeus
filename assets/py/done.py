tudo = []
notas = []
masculino = []
pessoas = []
while True:
  nome = str(input("Nome: "))
  sexo = str(input("Sexo[M/F/I]: "))
  while not sexo in "MFImfi":
   print('ERRO! Por favor, digite apenas M,F ou I.')
   sexo = str(input("Sexo[M/F/I]: "))
  if(sexo == 'M' or sexo == "m"):
   masculino.append(nome)
  nota = int(input("Nota: "))
  while not ((nota >= 0) and (nota <= 100)):
    print("ERRO Por favor, digite um valor entre 0 e 100.")
    nota = int(input("Nota: "))
  print("name idifitle")
  tudo2 = {
    'nome': nome,
    'sexo': sexo,
    'nota': nota,
  }
  tudo.append(tudo2)
  resp = input("Deseja continuar?[S/N]: ")
  while not resp in "SNsn":
   resp = input("Deseja continuar?[S/N]: ")
  if resp == "n" or resp == "N":
    break

for p in tudo:
   pessoas.append(p['nome'])
print(f'1- Foram cadastrados {len(pessoas)} estudantes')
for p in tudo:
  notas.append(p["nota"])
media = sum(notas)/len(notas)
print(f'2- A média das notas é {media} ')
print(f'3- Os homens casdastrados foram:{masculino}')
print('4- Os estudantes com nota acima da média são:  ')
for p in tudo:
  if p["nota"] > media:
    print(f'{p["nome"]} : {p["nota"]} ')

