document.addEventListener('alpine:init', () => {
    Alpine.data('calculator', () => ({
        calcul: '',
        result: '0',

        addKey(key) {
            switch(key) {
                case 'C':
                    this.calcul = '';
                    this.result = '0';
                    break;
                case '=':
                    if(this.calcul != '') {
                        this.result = eval(this.calcul.replace('x', '*'));
                        this.calcul = '';
                    }
                    break;
                case '<-':
                    if(this.calcul !=  '') {
                        this.calcul = this.calcul.slice(0, -1);
                    }
                    break;
                case "+/-":
                    if(this.calcul != '') {
                        
                        let regex = /[\d|,|\.]+/g;
                        let matches = this.calcul.match(regex);

                        let lastNumber =  matches[matches.length - 1];
                        let negative = -lastNumber;

                        if(!isNaN(negative)) {
                            this.calcul = this.calcul.replace(lastNumber, "(" + negative + ")");
                        }
                            
                    }
                    break;
                default:
                    if(isOperator(key) && this.calcul == '' || isOperator(key) && verifyLastChar(this.calcul) || this.calcul == '' && key =='.' || verifyLastChar(this.calcul) && key == '.') {
                        return;
                    }
                       
                    this.calcul += key;
                    
            } 

        }
    }));
});

function isOperator(key) {
    let operators = ['+', '-', 'x', '/'];
    return operators.includes(key);
}

function verifyLastChar(calcul) {
    let lastChar = calcul.charAt(calcul.length - 1);
    let operators = ['+', '-', 'x', '/'];

    return operators.includes(lastChar);
}