
var mainCard = new GlobalOptionsCard();

// удаление опций: class - optDesabled

// Колличество гостей:
mainCard.optGuests(0, 'optDesabled', [0, 1, 2, 3, 4, 5]);

// Выберите цвет глазури:
mainCard.optGlaze(1, 'optDesabled', ['C76445', 'F5ECDF', 'C75A5A', '8CA5E3', '8CE3A5', 'E38CCB']);

// декор
mainCard.optDecore(2, 'optDesabled', arrOptDecore2, 'radio', false, null);

// Добавьте поздравительную надпись
mainCard.optString(3, 'optString', [0]);

// Формат поздравительной надписи
mainCard.optDecore(4, 'optDecore', arrOptDecore4, 'radio', false, miniTitle);

// Выберите упаковку
mainCard.optDecore(5, 'optDesabled', arrOptDecore5, 'radio', false, null);


// дизейблид секцию по порядковому номеру
// mainCard.optGuests(0, 'optDesabled', [0, 1, 2]);