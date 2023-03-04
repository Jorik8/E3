<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заказ билета</title>
</head>
<body>
    <h1>Анкета для заказа билета</h1>
    <form action="http://e3:81/%d0%93%d0%be%d1%82%d0%be%d0%b2%d0%b0%d1%8f%20%d0%b0%d0%bd%d0%ba%d0%b5%d1%82%d0%b0.php" method="post">
  <fieldset>
  <legend>Контактная информация</legend>  
  <p><label for="text">Имя</label>    
  <input type="text"></p>
  <p><label for="phone number">Телефон</label>     
  <input type="phone number"></p>
  </p>
  <p><label for="E-mail">Email</label>        
  <input type="E-mail">
  </p>
  <p><label for="date">Дата посещения</label>    
  <input type="date"></p>
   </fieldset>
   <fieldset>
       <legend>Персональная информация</legend>
      <p><label for="age">Возраст</label>
       <input type="number" min="1" max="100"></p>
    <p><bel for="favorite cuisine">Выберите билет</label>
       <imput type="favorite cuisine"></p>
       <select>
        <option>A</option>
        <option>B</option>
        <option>C</option>
       </select>
   </fieldset>
   <fieldset>
       <legend>Оценка нашего заведения</legend>
       <h3>Почему Вы выбрали нашу выставку?</h3>
       <p><input type="radio" name="E3" value="sovet">Посоветовали друзья</p>
       <p><input type="radio" name="E3" value="ads">Увидел рекламу</p>
       <p><input type="radio" name="E3" value="price">Хорошая цена</p>
       <p><input type="radio" name="E3" value="other">Другое</p>
       <textarea></textarea>
       <h3>Вы будете рекомендовать наше завидение знакомым?</h3>
       <p><input type="radio">Да</p>
       <p><input type="radio">Нет</p>
   </fieldset>
   <p><input type="reset"> <input type="submit" value="Отправить ответ"></p>
   <h3><a href=http://e3:81/%d0%93%d0%bb%d0%b0%d0%b2%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0.php>На главную страницу</a></h3>
</body>
</html>