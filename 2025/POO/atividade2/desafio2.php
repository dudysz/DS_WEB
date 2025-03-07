    <?php
    class Documento{
        def __init__(self, numero):
        self.__numero = numero

    def getNumero(self):
        return self.__numero
    }
  

class CPF(Documento){
    def validar(self):
    cpf = ''.join(filter(str.isdigit, self.getNumero()))
    if len(cpf) != 11 or cpf == cpf[0] * 11:
        return False

    def calcular_digito(cpf, peso):
        soma = sum(int(cpf[i]) * (peso - i) for i in range(peso - 1))
        return (soma * 10 % 11) % 10

    return cpf[-2:] == f"{calcular_digito(cpf, 10)}{calcular_digito(cpf, 11)}"
}


        
?>