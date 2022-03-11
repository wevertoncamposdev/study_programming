export class Funcao{
    
    constructor(x, y, z){
        this.x = x;
        this.y = y;
        this.z = z;
    }

    funcao_primeiro_grau(){
        return this.y = (this.z * this.x) + 1
    }

    calc_funcao() {
    
        var arr = new Array();
    
        while (this.x < this.y) {
            let a = this.funcao_primeiro_grau();
            arr.push([this.x, a]);
            x++
        }
    
        return arr;
    
    }
}

/* export {Funcao}; */
