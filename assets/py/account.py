pessoas = []
while True:
  nome = input('Nome: ')
  nota = int(input('Nota: '))
  sexo = input('Sexo: ')
  pessoa = {
    'nome':nome,
    'nota': nota,
    'sexo': sexo
  }
  pessoas.append(pessoa)
  resp = input('Continuar s/n: ')
  if resp == 'n':
    break

# notas = []
# for p in pessoas:
#   notas.append(p['nota'])

notas = [p['nota'] for p in pessoas]

"""

Other parts in project, after this message.!

"""


media = sum(notas)/len(notas)
print(f'Media: {media}')

for p in pessoas:
  if p['nota'] > media:
    print(f'{p["nome"]} : {p["nota"]}')



print("FINale opus")

while (True):
    print("vhs")