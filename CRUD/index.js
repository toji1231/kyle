function addTask() {
    const taskInput = document.getElementById('task-input');
    const taskCategory = document.getElementById('task-category');
    const taskDueDate = document.getElementById('task-due-date');
    const taskList = document.getElementById('task-list');
  
    if (taskInput.value.trim() !== '') {
      const taskItem = document.createElement('li');
      const categoryClass = taskCategory.value.toLowerCase();
      taskItem.className = categoryClass;
  
      taskItem.innerHTML = `
        <span>${taskInput.value}</span>
        <span>${taskCategory.value}</span>
        <span>${taskDueDate.value}</span>
        <div>
          <button onclick="completeTask(this)">Complete</button>
          <button onclick="deleteTask(this)" class="delete">Delete</button>
        </div>
      `;
  
      taskList.appendChild(taskItem);
      taskInput.value = '';
      taskDueDate.value = '';
    }
  }
  
  function completeTask(button) {
    const taskItem = button.parentElement.parentElement;
    taskItem.classList.toggle('completed');
  }
  
  function deleteTask(button) {
    const taskItem = button.parentElement.parentElement;
    taskItem.remove();
  }
  