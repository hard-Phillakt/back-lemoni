
var mainCard = new GlogalOptionsCard();

// удаление опций: class - optDesabled

// Колличество гостей:
// mainCard.optGuests(0, 'optGuests', [0, 1, 2, 3, 4, 5]);

// Колличество шт
mainCard.optPieces(0, 'optPieces', [0, 1, 2]);

// Выберите цвет глазури:
mainCard.optGlaze(1, 'optDesabled', ['C76445', 'F5ECDF', 'C75A5A', '8CA5E3', '8CE3A5', 'E38CCB']);

// декор
mainCard.optDecore(2, 'optDesabled', arrOptDecore2, 'radio', false, null);

// Добавьте поздравительную надпись
mainCard.optString(3, 'optDesabled', [0]);

// Формат поздравительной надписи
mainCard.optDecore(4, 'optDesabled', arrOptDecore4, 'radio', false, miniTitle);

// Выберите упаковку
mainCard.optDecore(5, 'optDesabled', arrOptDecore5, 'radio', false, null);


// дизейблид секцию по порядковому номеру
// mainCard.optGuests(0, 'optDesabled', [0, 1, 2]);




















































