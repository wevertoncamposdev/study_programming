class Funcao{
    
    constructor(x, y){
        this.x = x;
        this.y = y;
    }

    get getFuncao(){
        return this.funcao_primeiro_grau()
    }

    funcao_primeiro_grau(){

        return this.y = (2 * this.x) + 1
    }
}

let a = new Funcao(-2,0);
console.log(a.funcao_primeiro_grau());