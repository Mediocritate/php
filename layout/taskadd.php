<div class="mainmenu">
    <form action="">
    <div class="maintaskmenu">
    <h1 class="addtask_title">Добавление задания</h1>
    <div class="city">
      <p class="addtask_city">Город</p>
      <select name="" id="select_city">
        <option value="" hidden> </option>
        <option value="">Новошахтинск</option>
        <option value="">Ростов</option>
        <option value="">Шахты</option>
      </select>
    </div>
    <div class="category">
      <p class="addtask_category">Категория</p>
      <select name="" id="select_category">
        <option value="" hidden> </option>
        <option value="">MsOffice</option>
        <option value="">HTML</option>
        <option value="">Python</option>
      </select>
    </div>
    <div class="title_task">
      <p class="addtask_title_p">Заголовок</p>
      <input type="text" id="addtask_title" placeholder="Опишите кратко суть задания">
    </div>
    <div class="description_task">
      <p class="addtask_description">Описание задания</p>
      <textarea name="" id="addtask_description" cols="30" rows="10" placeholder="Что нужно сделать?"></textarea>
    </div>
    <div class="add_task_budget">
      <p class="addtask_price">Цена в руб.</p>
      <input type="number" placeholder="Сумма" id="addtask_price" min="0">
    </div>
    <div class="addtask_data">
      <p class="addtask_date">Срок выполнения</p>
      <input type="date" id="addtask_date">
    </div>
  </div>
  <button class="taskadd_button">Разместить задание</button>
</form>
</div>