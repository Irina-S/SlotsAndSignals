/*скрипт, выводящий категории продуктов*/
categories = [
    "Бобы и Бобовые",
    "Закуски",
    "Макароны, Рис и Лапша",
    "Мясо",
    "Напитки",
    "Овощи",
    "Орехи и Семена",
    "Рыба и Морепродукты",
    "Салаты",
    "Сладости и Десерты",
    "Соусы, Специи и Пасты",
    "Супы",
    "Сыр, Молоко и Молочные продукты",
    "Фастфуд",
    "Фрукты",
    "Хлеб и Злаковые",
    "Яйца",
    "Другие Продукты"]
n = 4;//кол-во столбцов
container = document.getElementById("prodCategories");//куда вставлять
contTable = document.createElement("table");
contTable.className = "categories";
for (var i = 0; i<n; i++){
    contTable.appendChild(document.createElement("col"));
}
for (var i=0; i<categories.length;){
    tmpRow = document.createElement("tr");
    for (var j =0; j<n;j++){
        tmpCell = document.createElement("td");
        tmpCell.className = "category";
        tmpCell.innerHTML= "<a href=\"\">"+categories[i]+"</a>";
        tmpRow.appendChild(tmpCell);
        i++;
        if (i==categories.length) break;
    }
    contTable.appendChild(tmpRow);
}
container.appendChild(contTable);

