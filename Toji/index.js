// Check if the user is authenticated
const isAuthenticated = localStorage.getItem('authenticated');

if (isAuthenticated) {
  // If authenticated, load tasks from localStorage
  loadTasks();
} else {
  // If not authenticated, redirect to login page (in a real app)
  window.location.href = 'login.php';
}

function loadTasks() {
  const taskList = document.getElementById('task-list');
  taskList.innerHTML = '';

  // Retrieve tasks from localStorage
  const savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];

  // Display tasks
  savedTasks.forEach(task => {
    const taskItem = document.createElement('li');
    taskItem.className = task.category.toLowerCase();
    taskItem.innerHTML = `
      <span>${task.name}</span>
      <span>${task.category}</span>
      <span>${task.dueDate}</span>
      <div>
        <button onclick="completeTask(this)">Complete</button>
        <button onclick="deleteTask(this)" class="delete">Delete</button>
      </div>
    `;
    if (task.completed) {
      taskItem.classList.add('completed');
    }
    taskList.appendChild(taskItem);
  });
}

function addTask() {
  const taskInput = document.getElementById('task-input');
  const taskCategory = document.getElementById('task-category');
  const taskDueDate = document.getElementById('task-due-date');

  if (taskInput.value.trim() !== '') {
    // Create a task object
    const newTask = {
      name: taskInput.value,
      category: taskCategory.value,
      dueDate: taskDueDate.value,
      completed: false,
    };

    // Retrieve existing tasks from localStorage
    const savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];

    // Add the new task
    savedTasks.push(newTask);

    // Save updated tasks to localStorage
    localStorage.setItem('tasks', JSON.stringify(savedTasks));

    // Clear input fields
    taskInput.value = '';
    taskDueDate.value = '';

    // Reload tasks
    loadTasks();
  }
}

function completeTask(button) {
  const taskItem = button.parentElement.parentElement;
  taskItem.classList.toggle('completed');

  // Update the completed status in localStorage
  updateLocalStorage();
}

function deleteTask(button) {
  const taskItem = button.parentElement.parentElement;
  taskItem.remove();

  // Update tasks in localStorage
  updateLocalStorage();
}

function updateLocalStorage() {
  const taskItems = document.querySelectorAll('#task-list li');
  const tasks = [];

  taskItems.forEach(taskItem => {
    const task = {
      name: taskItem.querySelector('span:nth-child(1)').textContent,
      category: taskItem.querySelector('span:nth-child(2)').textContent,
      dueDate: taskItem.querySelector('span:nth-child(3)').textContent,
      completed: taskItem.classList.contains('completed'),
    };

    tasks.push(task);
  });

  // Update localStorage with the new tasks array
  localStorage.setItem('tasks', JSON.stringify(tasks));
}

function btn() {
  window.location.href = 'index.php';
}
