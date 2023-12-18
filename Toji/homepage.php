<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Your Task Schedule </h1>
        <div id="user-panel">
          <div id="task-form">
            <input type="text" id="task-input" placeholder="Add a new task">
            <select id="task-category">
              <option value="personal">Personal</option>
              <option value="work">Work</option>
              <option value="study">Study</option>
            </select>
            <input type="date" id="task-due-date">
            <button onclick="addTask()">Add Task</button>
          </div>
          <ul id="task-list"></ul>
    </div>
</body>
</html>
