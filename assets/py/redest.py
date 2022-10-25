import subprocess
import os

print("1 - Executar todos os testes")
print("2 - Executar apenas o arquivo lab.py")
resp = input("Escolha sua opção: ")

if resp == '2':
	os.system("python lab.py")
else:
  total = 0
  aceitos=0
  recusados=0
  i = 1
  cmd = 'python lab.py'
  infile = f'teste{i:02d}.in'
  teste_recusados = []

  while (os.path.exists(infile)):
    p1 = subprocess.run(
      cmd.split(), 
      capture_output=True, 
      text=True,
      stdin= open(infile, "r")
      )
    if p1.returncode != 0:
      print(p1.stderr)
    else:
      outfile = open(f'teste{i:02d}.out', "r")
      saida = p1.stdout.strip()
      esperada = outfile.read().strip()
      if saida == esperada:
        aceitos += 1
      else:
        recusados += 1
        print('-'*30)
        print(f'teste{i:02d}: resultado incorreto')
        print(f'Sua resposta:    {saida}')
        print(f'Resposta correta: {esperada}')
    i += 1
    total += 1
    infile = f'teste{i:02d}.in'

  print('='*30)
  print(f'Taxa de acerto: {int(aceitos*100/total)}%')