	USE ToDoApp
	
	CREATE TABLE Completed (
		taskId INTEGER NOT NULL AUTO_INCREMENT,
		taskName VARCHAR (30),
		taskDescription VARCHAR (60),
		status VARCHAR (10),
		dueDate DATE,
		totalTasks INTEGER,
		pendingTasksCount INTEGER,
		startedTasksCount INTEGER,
		completedTasksCount INTEGER,
		lateTasksCount INTEGER,
		PRIMARY KEY (taskId),
		FOREIGN KEY (taskId) REFERENCES ToDo (taskId)/*WRONG - needs to change think about this*/
		};