
""" TRIÂNGULO DE PASCAL """

def pascal_t(m,n):
    if m == 0 and n ==0:
        return 1
    elif n == -1 or m == -1:
        return 0
    else:
        return pascal_t(m-1, n-1) + pascal_t(m-1,n)


print(pascal_t(5,4))

""" TRIÂNGULO DE PASCAL """