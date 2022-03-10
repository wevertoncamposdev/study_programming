
""" FUNÇÃO """
class funcao:

    def __init__(self, x, y):
        self.x = x
        self.y = y

    def funcao_primeiro_grau(self):
        y = (-2 * self.x) + 1
        return y

i = -2
while i <= 2:
    a = funcao(i,0).funcao_primeiro_grau()
    print(f"{i} : {a}")
    i += 1

""" FUNÇÃO """
