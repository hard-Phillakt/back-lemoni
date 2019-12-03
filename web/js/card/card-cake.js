
var mainCard = new GlobalOptionsCard();

// удаление опций: class - optDesabled

// Колличество гостей:
mainCard.optGuests(0, 'optGuests', [0, 1, 2, 3, 4, 5]);


var optGlazePrice1 = [10, 20, 30, 40, 50, 60];
// Выберите цвет глазури:
mainCard.optGlaze(1, 'optGlaze', ['C76445', 'F5ECDF', 'C75A5A', '8CA5E3', '8CE3A5', 'E38CCB'], optGlazePrice1);


var optDecorePrice2 = [10, 20, 30, 40];
// декор
mainCard.optDecore(2, 'optDecore', arrOptDecore2, 'radio', false, null, optDecorePrice2, 'decor');


var optDecorePrice3 = [10];
// Добавьте поздравительную надпись
mainCard.optString(3, 'optString', [0], 'string' , optDecorePrice3);


var optDecorePrice4 = [10, 20, 30, 40];
// Формат поздравительной надписи
mainCard.optDecore(4, 'optDesabled', arrOptDecore4, 'radio', false, miniTitle, optDecorePrice4, 'inscription');


var optDecorePrice5 = [10, 20, 30, 40];
// Выберите упаковку
mainCard.optDecore(5, 'optDesabled', arrOptDecore5, 'radio', false, null, optDecorePrice5, 'pack');

// дизейблид секцию по порядковому номеру
// mainCard.optGuests(0, 'optDesabled', [0, 1, 2]);




















































