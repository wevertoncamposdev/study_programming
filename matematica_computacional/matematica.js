class Funcao{
    
    constructor(x, y){
        this.x = x;
        this.y = y;
    }

    funcao_primeiro_grau(){
        return this.y = (-2 * this.x) + 1
    }
}


i = -2;
while(i <= 2){
    let a = new Funcao(i,0).funcao_primeiro_grau();
    console.log(`${i} :  ${a}`)
    i++
}
