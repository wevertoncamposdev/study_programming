
""" FUNÇÃO """
class funcao:

    def __init__(self, x, y):
        self.x = x
        self.y = y

    def funcao_primeiro_grau(self):
        y = (2 * self.x) + 1
        return y

""" FUNÇÃO """


a = funcao(-2,0)
print(a.funcao_primeiro_grau())

