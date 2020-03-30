
var mainCard = new GlobalOptionsCard();

// удаление опций: class - optDesabled

// Колличество гостей:
mainCard.optPieces(0, 'optPieces', [0, 1, 2]);

// для тортов с гостями
// mainCard.optGuests(0, 'optDesabled', [0, 1, 2, 3, 4, 5]);

// Выберите цвет глазури:
mainCard.optGlaze(1, 'optDesabled', ['C76445', 'F5ECDF', 'C75A5A', '8CA5E3', '8CE3A5', 'E38CCB']);

// декор
mainCard.optDecore(2, 'optDesabled', arrOptDecore2, 'radio', false, null);

var optDecorePrice3 = [10];
// Добавьте поздравительную надпись
mainCard.optString(3, 'optDesabled', [0], 'string' , optDecorePrice3);

var optDecorePrice4 = [10, 20, 30, 40];
// Формат поздравительной надписи
mainCard.optDecore(4, 'optDesabled', arrOptDecore4, 'radio', false, miniTitle, optDecorePrice4, 'inscription');

// Выберите упаковку
mainCard.optDecore(5, 'optDesabled', arrOptDecore5, 'radio', false, null);


// дизейблид секцию по порядковому номеру
// mainCard.optGuests(0, 'optDesabled', [0, 1, 2]);






























