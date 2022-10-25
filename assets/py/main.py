# Missaão 09: Atividade 1
from pdb import RG1, RG2

while True:
    nome = str(input("Digite seu nome:"))
    rg = int(input("Digite seu RG:"))
    while True:
        role = str(input("Digite seu cargo [Adm/Mod]:")).upper().strip()
        if (role == "ADM"):
            hours = int(input("Digite o número de horas extras dedicadas:"))
            Rg2 = RG2(role, nome, rg, hours)
            Rg2.caulculoHora()
        elif (role == "MOD"):
            while True:
                vendidos = int(input("Digite o valor vendido por Você:"))
                Rg1 = RG1(role, nome, rg)
                Rg1.commission(vendidos)
                conf = str(
                    input("Existe mais outro produto vendido? [S/N]")).upper()[0].strip()
                while conf not in "SN":
                    conf = str(
                        input("Existe mais outro produto vendido? [S/N]")).upper()[0].strip()
                if conf == "S":
                    continue
                else:
                    Rg1.Information()
                    break
        else:
            print("ERROR! Digite apenas Adm ou Mod:")
            continue
        ff = str(
            input("Desja realizar outra consulta? [S/N]")).upper()[0].strip()
        while ff not in "SN":
            ff = str(input("RROR!!! Digite apenas S ou N, senhor!")
                     ).upper()[0].strip()
        if ff == "S":
            continue
        elif ff == "N":
            break
print("Foi um prazer fazer negocios com você!")

print("COisa horrorosa, meu!")