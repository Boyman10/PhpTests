var part1 = ["L'amitié ne produit jamais", "tu ne m'as jamais aimé", "Je vais te faire une confidence"];
var part2 = ["pourtant", "de bons fruits sans la réciprocité", "toi a qui sans cesse je pense"]; 
var part3 = ["tu me manque", "toi a qui je vous une passion immense", "tu es ma providence"];
var aleatoire1, aleatoire2, aleatoire3;

var citation = {
    init: function (aleatoire1, aleatoire2, aleatoire3) {
        this.aleatoire1 = aleatoire1;
        this.aleatoire2 = aleatoire2;
        this.aleatoire3 = aleatoire3;
    },
    modelecitation: function () {
        return (this.aleatoire1 + " " + this.aleatoire2 + " " + this.aleatoire3);
    }
};
function genererCitation () { 
    var citations = Object.create(citation);
    aleatoire1 = part1[(Math.random() * part1.length)];
    aleatoire2 = part2[(Math.random() * part2.length)];
    aleatoire3 = part3[(Math.random() * part3.length)];
    var cit = citations.init(part1[aleatoire1] , part2[aleatoire2], part3[aleatoire3]);
    console.log(" cit : "+cit);
  }  
 
    
console.log("test");

genererCitation();