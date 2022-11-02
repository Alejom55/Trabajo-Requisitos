lista = [["tos", "fiebre", "escalofrios", "dolor de cabeza", "fatiga", "congestion"],["dolor de oido","fiebre","nerviosismo","dificultad para dormir"]]

lista2 = ["tos","dolor de oido","nerviosismo","fatiga"]




def f():
    contMax = 0
    maxPor = 0
    for i in range(len(lista)):
        
        cont = 0
        lenlista = len(lista[i])
        #print("len",lenlista)
        for j in range(lenlista):
            for k in range(len(lista2)):
                if lista[i][j] == lista2[k]:
                    cont += 1
                    porRelacion = (cont / lenlista) * 100
                    if porRelacion >= maxPor:
                        maxPor = porRelacion
                    #print("contenedor",contMax)
                    #print("cont",cont)
                    #print("porRelacion",porRelacion)
                    #print("maxPor",maxPor)
                    #operacion = lenlista - lenlstMax
                    #print("operacion",operacion)
                    if cont >= contMax and porRelacion >= maxPor:
                        lstMax = lista[i]
                        contMax = cont
                        #if cont >= lenlista:
                        #    
                        #    lstMax = lista[i]
                        #    contMax = cont
                        #elif cont >= operacion:
                        #    print(lista[i])
                        #    lstMax = lista[i]
                        #    contMax = cont
                        
                        #print("%",porRelacion)
                        
    return lstMax
print(f())